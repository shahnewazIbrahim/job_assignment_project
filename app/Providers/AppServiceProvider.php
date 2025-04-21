<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer('*', function ($view) {
            $cartItems = Cart::with('product')->get(); // Fetch the cart items with related product details
            $subtotal = $cartItems->reduce(function ($carry, $item) {
                return $carry + ($item->quantity * $item->product->price);
            }, 0);

            $view->with([
                'cartItems' => $cartItems,
                'subtotal' => $subtotal
            ]); // Share cartItems with all views
        });
    }
}
