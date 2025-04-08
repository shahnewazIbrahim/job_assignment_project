<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{

    public function index()
    {
        $cartItems = Cart::with('product')->get();
        return view('cart', compact('cartItems'));
    }

    // public function add($productId)
    // {
    //     $cart = Cart::firstOrCreate(['product_id' => $productId]);
    //     $cart->increment('quantity');
    //     return redirect()->back()->with('success', 'Product added to cart!');
    // }

    public function add(Request $request)
    {
        $productId = $request->input('product_id');

        // // এখানে তোমার লজিক, session বা DB তে যোগ করার জন্য
        // $cart = session()->get('cart', []);
        // $cart[$productId] = ($cart[$productId] ?? 0) + 1;

        // session()->put('cart', $cart);
        $cart = Cart::firstOrCreate(['product_id' => $productId]);
        $cart->increment('quantity');
        return redirect()->back()->with('success', 'Product added to cart!');

        return response()->json(['message' => 'Product added to cart successfully']);
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->update(['quantity' => $request->quantity]);
        return back()->with('success', 'Cart updated.');
    }

    public function remove($id)
    {
        Cart::destroy($id);
        return back()->with('success', 'Item removed.');
    }
}
