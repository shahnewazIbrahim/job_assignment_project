@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
    <section class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold mb-6">Checkout</h1>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        @if (count($cartItems) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Billing Form --}}
                <form action="{{ route('checkout.place') }}" method="POST" class="space-y-5 bg-gray-50 p-6 rounded-lg shadow">
                    @csrf

                    <div>
                        <label for="name" class="block font-medium mb-1">Full Name</label>
                        <input type="text" id="name" name="name" class="w-full border px-4 py-2 rounded"
                            required>
                    </div>

                    <div>
                        <label for="phone" class="block font-medium mb-1">Phone Number</label>
                        <input type="text" id="phone" name="phone" class="w-full border px-4 py-2 rounded"
                            required>
                    </div>

                    <div>
                        <label for="address" class="block font-medium mb-1">Address</label>
                        <textarea id="address" name="address" rows="3" class="w-full border px-4 py-2 rounded" required></textarea>
                    </div>

                    <div>
                        <label class="block font-medium mb-2">Payment Method</label>
                        <label class="inline-flex items-center mr-4">
                            <input type="radio" name="payment_method" value="bkash" class="mr-2" required>
                            Bkash
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="payment_method" value="nagad" class="mr-2">
                            Nagad
                        </label>
                    </div>

                    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                        Place Order
                    </button>
                </form>

                {{-- Order Summary --}}
                <div class="bg-white border rounded-lg p-6 shadow">
                    <h2 class="text-xl font-semibold mb-4">Order Summary</h2>
                    <ul class="divide-y">
                        @php $total = 0; @endphp
                        @foreach ($cartItems as $item)
                            @php
                                $subtotal = $item->product->price * $item->quantity;
                                $total += $subtotal;
                            @endphp
                            <li class="py-2 flex justify-between">
                                <span>{{ $item->product->title }} x {{ $item->quantity }}</span>
                                <span>৳{{ number_format($subtotal, 2) }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <div class="text-right mt-4 font-bold text-lg">
                        Total: ৳{{ number_format($total, 2) }}
                    </div>
                </div>
            </div>
        @else
            <p>Your cart is empty. <a href="{{ route('shop.index') }}" class="text-blue-600 underline">Go back to shop</a>
            </p>
        @endif
    </section>
    @if (request('payment_method') == 'nagad')
        <script>
            window.location.href = "{{ route('pay.nagad') }}";
        </script>
    @endif

@endsection
