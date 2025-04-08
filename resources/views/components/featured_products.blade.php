<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="heading_s1 text-center">
                    <h2>Featured Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true"
                    data-dots="false" data-nav="true" data-margin="20"
                    data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                    @foreach ($featured_products as $product)
                        <div class="item">
                            @include('components.product_card', compact('product'))
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
