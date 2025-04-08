@extends('layouts.app')

@section('content')
    {{-- @include('components.hero')
  @include('components.features') --}}

    <!-- START SECTION BANNER -->
    @include('components.banner')
    <!-- END SECTION BANNER -->
    <div class="main_content">
        <!-- START SECTION BANNER -->
        @include('components.section_banner', compact('banners'))
        <!-- END SECTION BANNER -->

        <!-- START SECTION SHOP -->
        <div class="section small_pt pb_70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s1 text-center">
                            <h2>Exclusive Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-style1">
                            <ul class="nav nav-tabs justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="arrival-tab" data-bs-toggle="tab" href="#arrival"
                                        role="tab" aria-controls="arrival" aria-selected="true">New Arrival</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="sellers-tab" data-bs-toggle="tab" href="#sellers" role="tab"
                                        aria-controls="sellers" aria-selected="false">Best Sellers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="featured-tab" data-bs-toggle="tab" href="#featured"
                                        role="tab" aria-controls="featured" aria-selected="false">Featured</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="special-tab" data-bs-toggle="tab" href="#special" role="tab"
                                        aria-controls="special" aria-selected="false">Special Offer
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="arrival" role="tabpanel"
                                aria-labelledby="arrival-tab">
                                <div class="row shop_container">
                                    @include('components.product_card', [
                                        'products' => $arrival_products
                                    ])
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sellers" role="tabpanel" aria-labelledby="sellers-tab">
                                <div class="row shop_container">
                                    @include('components.product_card', [
                                        'products' => $bestseller_products
                                    ])
                                </div>
                            </div>
                            <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                <div class="row shop_container">
                                    @include('components.product_card', [
                                        'products' => $featured_products
                                    ])
                                </div>
                            </div>
                            <div class="tab-pane fade" id="special" role="tabpanel" aria-labelledby="special-tab">
                                <div class="row shop_container">
                                    @include('components.product_card', [
                                        'products' => $special_products
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION SINGLE BANNER -->
        @include('components.single_banner', compact('single_banner'))
        <!-- END SECTION SINGLE BANNER -->

        <!-- START SECTION SHOP -->
        @include('components.featured_products',compact('featured_products'))
        <!-- END SECTION SHOP -->

        <!-- START SECTION TESTIMONIAL -->
        @include('components.customer_testimonial')
        <!-- END SECTION TESTIMONIAL -->

        <!-- START SECTION SHOP INFO -->
        @include('components.shop_info')
        <!-- END SECTION SHOP INFO -->

        <!-- START SECTION SUBSCRIBE NEWSLETTER -->
        @include('components.subscribe_newsletter')
        <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    </div>
@endsection
