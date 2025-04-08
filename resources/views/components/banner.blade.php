<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($banners as $banner)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }} background_bg" data-img-src="{{ asset($banner->image) }}">
                    <div class="banner_slide_content">
                        <div class="container">
                            <!-- STRART CONTAINER -->
                            <div class="row">
                                <div class="col-lg-7 col-9">
                                    <div class="banner_content overflow-hidden">
                                        <h5 class="mb-3 staggered-animation font-weight-light"
                                            data-animation="slideInLeft" data-animation-delay="0.5s">
                                            {{ $banner->title }}
                                        </h5>
                                        <h2 class="staggered-animation" data-animation="slideInLeft"
                                            data-animation-delay="1s">
                                            {{ $banner->subtitle }}
                                        </h2>
                                        <a class="btn btn-fill-out rounded-0 staggered-animation text-uppercase"
                                            href="{{ url($banner->link) }}" data-animation="slideInLeft"
                                            data-animation-delay="1.5s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTAINER-->
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"><i
                class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"><i
                class="ion-chevron-right"></i></a>
    </div>
</div>
