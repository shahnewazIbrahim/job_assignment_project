@extends('layouts.app')

@section('title', 'Shop')

@section('content')
<section class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Shop Our Products</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($products as $product)
        <div class="border rounded-lg p-4 shadow hover:shadow-lg transition">
            <a href="{{ route('shop.show', $product->id) }}">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="w-full h-48 object-cover mb-4 rounded">
                <h2 class="text-lg font-semibold">{{ $product->title }}</h2>
                <p class="text-gray-600 mt-1">৳{{ number_format($product->price, 2) }}</p>
            </a>
            <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">
                    Add to Cart
                </button>
            </form>
        </div>
        @endforeach
    </div>
</section>
@endsection
