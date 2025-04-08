@extends('layouts.app')

@section('title', $product->title)

@section('content')
<section class="container mx-auto px-4 py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

        {{-- Product Image --}}
        <div>
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="w-full rounded-lg shadow">
        </div>

        {{-- Product Details --}}
        <div>
            <h1 class="text-3xl font-bold mb-3">{{ $product->title }}</h1>
            <p class="text-2xl text-blue-600 font-semibold mb-4">৳{{ number_format($product->price, 2) }}</p>

            <div class="prose max-w-none mb-6">
                {!! nl2br(e($product->description)) !!}
            </div>

            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                    Add to Cart
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
