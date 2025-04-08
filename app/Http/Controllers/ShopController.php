<?php

namespace App\Http\Controllers;

use App\Models\BannerSlider;
use App\Models\Product;
use App\Models\SingleBanner;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $allProducts = Product::whereIn('type', ['arrival', 'bestseller', 'featured', 'special'])
            ->where('status', 1)
            ->latest()
            ->get()
            ->groupBy('type');

        $arrival_products = $allProducts->get('arrival', collect());
        $bestseller_products = $allProducts->get('bestseller', collect());
        $featured_products = $allProducts->get('featured', collect());
        $special_products = $allProducts->get('special', collect());

        $banners = BannerSlider::get();
        $single_banner = SingleBanner::first();
        // return view('shop.index', compact('products'));
        return view('home', compact('banners', 'arrival_products', 'bestseller_products', 'featured_products', 'special_products', 'single_banner'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('shop.product', compact('product'));
    }
}
