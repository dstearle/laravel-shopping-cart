<?php

namespace App\Http\Controllers;

Use App\Cart;
Use App\Product;
use Illuminate\Http\Request;
Use Session;

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
            return view('shop.shopping-cart', ['products' => null]);

        }

        // Previosly selected items in cart
        $oldCart = Session::get('cart');
        // Updated cart with new items
        $cart = new Cart($oldCart);
        // Returns the view for the users shopping cart
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
        
    }

}
