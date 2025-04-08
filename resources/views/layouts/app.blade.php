<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Static Blade Template</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{ asset('owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/css/owl.theme.default.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
</head>

<body>
    <!-- LOADER -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                    </button>
                    <div class="row g-0">
                        <div class="col-sm-5">
                            <div class="background_bg h-100" data-img-src="{{ asset('images/popup_img.jpg') }}"></div>
                        </div>
                        <div class="col-sm-7">
                            <div class="popup_content">
                                <div class="popup-text">
                                    <div class="heading_s1">
                                        <h4>Subscribe and Get 25% Discount!</h4>
                                    </div>
                                    <p>Subscribe to the newsletter to receive updates about new products.</p>
                                </div>
                                <form method="post">
                                    <div class="form-group mb-3">
                                        <input name="email" required type="email" class="form-control rounded-0"
                                            placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <button class="btn btn-fill-line btn-block text-uppercase rounded-0"
                                            title="Subscribe" type="submit">Subscribe</button>
                                    </div>
                                </form>
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox3" value="">
                                        <label class="form-check-label" for="exampleCheckbox3"><span>Don't show this
                                                popup again!</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('components.navbar')
    @include('components.banner')

    <main>
        @yield('content')
    </main>

    @include('components.footer')
</body>


<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<!-- popper min js -->
<script src="{{ asset('js/popper.min.js')}}"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- owl-carousel min js  -->
<script src="{{ asset('owlcarousel/js/owl.carousel.min.js')}}"></script>
<!-- magnific-popup min js  -->
<script src="{{ asset('js/magnific-popup.min.js')}}"></script>
<!-- waypoints min js  -->
<script src="{{ asset('js/waypoints.min.js')}}"></script>
<!-- parallax js  -->
<script src="{{ asset('js/parallax.js')}}"></script>
<!-- countdown js  -->
<script src="{{ asset('js/jquery.countdown.min.js')}}"></script>
<!-- imagesloaded js -->
<script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>
<!-- isotope min js -->
<script src="{{ asset('js/isotope.min.js')}}"></script>
<!-- jquery.dd.min js -->
<script src="{{ asset('js/jquery.dd.min.js')}}"></script>
<!-- slick js -->
<script src="{{ asset('js/slick.min.js')}}"></script>
<!-- elevatezoom js -->
<script src="{{ asset('js/jquery.elevatezoom.js')}}"></script>
<!-- scripts js -->
<script src="{{ asset('js/scripts.js')}}"></script>

</html>
