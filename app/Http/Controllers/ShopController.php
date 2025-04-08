<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        // $products = Product::latest()->get();
        // return view('shop.index', compact('products'));
        return view('home');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('shop.product', compact('product'));
    }

}
