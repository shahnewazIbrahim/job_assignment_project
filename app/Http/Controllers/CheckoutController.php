<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Services\BkashService;
use App\Services\NagadService;
use Illuminate\Support\Str;


class CheckoutController extends Controller
{

    public function index()
    {
        $cartItems = Cart::with('product')->get();
        return view('checkout', compact('cartItems'));
    }

    // public function placeOrder(Request $request)
    // {
    //     $validated = $request->validate([
    //         'name' => 'required',
    //         'phone' => 'required',
    //         'address' => 'required',
    //         'payment_method' => 'required|in:bkash,nagad',
    //     ]);

    //     $cartItems = Cart::with('product')->get();
    //     $total = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);

    //     $order = Order::create([
    //         ...$validated,
    //         'total' => $total,
    //         'payment_status' => 'pending',
    //     ]);

    //     // Optional: Save order items separately (if needed)

    //     // Clear cart
    //     Cart::truncate();

    //     return redirect()->route('shop.index')->with('success', 'Order placed successfully! Proceed to payment.');
    // }


    public function payWithBkash(BkashService $bkash)
    {
        $invoice = Str::uuid();
        $amount = 500; // Get from cart/order

        $response = $bkash->createPayment($amount, $invoice);

        if (isset($response['paymentID'])) {
            session(['payment_id' => $response['paymentID']]);
            return redirect()->away($response['bkashURL']);
        }

        return back()->withErrors(['msg' => 'Bkash init failed']);
    }

    public function bkashCallback(BkashService $bkash)
    {
        $paymentID = session('payment_id');
        $result = $bkash->executePayment($paymentID);

        if ($result['transactionStatus'] === 'Completed') {
            $orderId = session('pending_order_id');
            $order = Order::find($orderId);
            $order->payment_status = 'paid';
            $order->save();

            Cart::truncate();
            return redirect()->route('shop.index')->with('success', 'Payment successful!');
        }

        return redirect()->route('cart.index')->with('error', 'Bkash payment failed.');
    }

    public function payWithNagad(NagadService $nagad)
    {
        $invoice = Str::uuid();
        $amount = 500; // বা order total

        $paymentUrl = $nagad->initiate($invoice, $amount);

        return redirect()->away($paymentUrl);
    }

    public function nagadCallback(Request $request, NagadService $nagad)
    {
        $verified = $nagad->verify($request->all());

        if ($verified) {
            // অর্ডার পেমেন্ট সফল
            return redirect()->route('shop.index')->with('success', 'Nagad payment successful!');
        }

        return redirect()->route('cart.index')->with('error', 'Nagad payment failed.');
    }


    public function placeOrder(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'payment_method' => 'required|in:bkash,nagad',
        ]);

        $cartItems = Cart::with('product')->get();
        $total = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);

        // Create a pending order
        $order = Order::create([
            ...$validated,
            'total' => $total,
            'payment_status' => 'pending',
        ]);

        session(['pending_order_id' => $order->id]);

        if ($validated['payment_method'] === 'bkash') {
            return redirect()->route('pay.bkash');
        } elseif ($validated['payment_method'] === 'nagad') {
            return redirect()->route('pay.nagad');
        }

        return redirect()->route('cart.index')->with('error', 'Invalid payment method selected');
    }
}
