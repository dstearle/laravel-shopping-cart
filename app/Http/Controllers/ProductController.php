<?php

namespace App\Http\Controllers;

Use App\Cart;
Use App\Product;
Use App\Order;
use Illuminate\Http\Request;
Use Session;
use Stripe\Stripe;
Use Stripe\Charge;

class ProductController extends Controller
{
    // Getter for products page
    public function getIndex() {

        $products = Product::all();
        return view('shop.index', ['products' => $products]);

    }

    // Getter for adding a new item to your cart
    public function getAddToCart(Request $request, $id) {

        $product = Product::find($id);
        // Oldcart if it exists, null if not applicable
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        // The new cart with previous oldCarts contents
        $cart = new Cart($oldCart);
        // Adds the new item to the cart
        $cart->add($product, $product->id);

        // The session for your shopping cart
        $request->session()->put('cart', $cart);

        // For testing shows data object
        // dd($request->session()->get('cart'));

        // Redirects back to product index
        return redirect()->route('product.index');

    }

    // Getter for the shopping cart
    public function getCart() {

        // If the user has nothing in their cart
        if(!Session::has('cart')) {

            // Returns the view for an empty shopping cart
            return view('shop.shopping-cart');

        }

        // Previosly selected items in cart
        $oldCart = Session::get('cart');
        // Updated cart with new items
        $cart = new Cart($oldCart);
        // Returns the view for the users shopping cart
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
        
    }

    // Getter for the checkout page
    public function getCheckout() {

        // If the user has nothing in their cart
        if(!Session::has('cart')) {

            // Returns the view for an empty shopping cart
            return view('shop.shopping-cart');

        }

        // Previosly selected items in cart
        $oldCart = Session::get('cart');
        // Updated cart with new items
        $cart = new Cart($oldCart);
        // The total cost
        $total = $cart->totalPrice;

        // Returns view for checkout page and passes on the total coast
        return view('shop.checkout', ['total' => $total]);

    }

    // Post for the checkout page
    public function postCheckout(Request $request) {

        // If the user has nothing in their cart
        if(!Session::has('cart')) {

            // Returns the view shopping cart
            return redirect()->route('shop.shopping-cart');

        }

        // Previosly selected items in cart
        $oldCart = Session::get('cart');
        // Updated cart with new items
        $cart = new Cart($oldCart);

        // Stripe secret key
        Stripe::setApiKey('sk_test_FAdioes0P4qTZiWGjCpaVFNy00MfRtYPYq');

        // Try's to create data object for Stripe to process for a charge
        try {

            // The charge
            $charge = Charge::create(
                
                array(
                    'amount' => $cart->totalPrice * 100,
                    'currency' => 'usd',
                    'source' => $request->input('stripeToken'),
                    'description' => 'Test charge',
                )
            
            );

            // Creates a new order to be stored in the database
            $order = new Order();
            // Serliazes the cart items to be stored in the database
            $order->cart = serialize($cart);

        }

        // If error returns with error message
        catch(\Exception $e) {

            return redirect()->route('checkout')->with('error', $e->getMessage() );

        }

        // Clears the user's cart
        Session::forget('cart');
        // Redirects back to product index with success message
        return redirect()->route('product.index')->with('success', 'Successfuly purchased products!');

    }

}
