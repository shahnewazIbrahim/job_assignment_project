@extends('layouts.app')

@section('title', 'Your Cart')

@section('content')
<section class="container mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6">Shopping Cart</h1>

    @if(count($cartItems) > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border rounded">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="py-3 px-4">Product</th>
                        <th class="py-3 px-4">Price</th>
                        <th class="py-3 px-4">Quantity</th>
                        <th class="py-3 px-4">Subtotal</th>
                        <th class="py-3 px-4">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach($cartItems as $item)
                        @php $subtotal = $item->product->price * $item->quantity; $total += $subtotal; @endphp
                        <tr class="border-t">
                            <td class="py-3 px-4 flex items-center gap-4">
                                <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->title }}" class="w-16 h-16 object-cover rounded">
                                {{ $item->product->title }}
                            </td>
                            <td class="py-3 px-4">৳{{ number_format($item->product->price, 2) }}</td>
                            <td class="py-3 px-4">
                                <form action="{{ route('cart.update', $item->id) }}" method="POST" class="flex items-center">
                                    @csrf
                                    @method('PUT')
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="w-16 px-2 py-1 border rounded mr-2">
                                    <button type="submit" class="bg-blue-600 text-white px-2 py-1 rounded">Update</button>
                                </form>
                            </td>
                            <td class="py-3 px-4">৳{{ number_format($subtotal, 2) }}</td>
                            <td class="py-3 px-4">
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:underline">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-right mt-6">
            <p class="text-xl font-semibold">Total: ৳{{ number_format($total, 2) }}</p>
            <a href="{{ route('checkout.index') }}" class="inline-block mt-4 bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">Proceed to Checkout</a>
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif
</section>
@endsection
