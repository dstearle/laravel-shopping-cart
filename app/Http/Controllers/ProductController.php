<?php

namespace App\Http\Controllers;

Use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getIndex() {

        $products = Product::all();
        return view('shop.index', ['products' => $products]);

    }

    //
    public function getAddToCart(Request $request, $id) {

        $product = Product::find($id);

    }

}
