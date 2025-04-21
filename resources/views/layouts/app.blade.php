<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="Anil z" name="author" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods." />
    <meta name="keywords"
        content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store" />

    <!-- SITE TITLE -->
    <title>Shopwise - eCommerce Bootstrap 5 HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet" />

    <!-- Toastr CSS -->
    <link defer href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <!-- Toastr JS -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}" />
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{ asset('owlcarousel/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('owlcarousel/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('owlcarousel/css/owl.theme.default.min.css') }}" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
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
    <!-- END LOADER -->

    <!-- Home Popup Section -->
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
                                    <p>
                                        Subscribe to the newsletter to receive updates about new
                                        products.
                                    </p>
                                </div>
                                <form method="post">
                                    <div class="form-group mb-3">
                                        <input name="email" required type="email" class="form-control rounded-0"
                                            placeholder="Enter Your Email" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <button class="btn btn-fill-line btn-block text-uppercase rounded-0"
                                            title="Subscribe" type="submit">
                                            Subscribe
                                        </button>
                                    </div>
                                </form>
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox3" value="" />
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
    <!-- End Screen Load Popup Section -->

    <!-- START HEADER -->
    @include('components.header')
    <!-- END HEADER -->

    <!-- END MAIN CONTENT -->
    @yield('content')
    <!-- END MAIN CONTENT -->

    <!-- START FOOTER -->
    <footer class="footer_dark">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget">
                            <div class="footer_logo">
                                <a href="#"><img src="{{ asset('images/logo_light.png') }}"
                                        alt="logo" /></a>
                            </div>
                            <p>
                                If you are going to use of Lorem Ipsum need to be sure there
                                isn't hidden of text
                            </p>
                        </div>
                        <div class="widget">
                            <ul class="social_icons social_white">
                                <li>
                                    <a href="#"><i class="ion-social-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-googleplus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-youtube-outline"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ion-social-instagram-outline"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Useful Links</h6>
                            <ul class="widget_links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Category</h6>
                            <ul class="widget_links">
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Woman</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Best Saller</a></li>
                                <li><a href="#">New Arrivals</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">My Account</h6>
                            <ul class="widget_links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Orders History</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Contact Info</h6>
                            <ul class="contact_info contact_info_light">
                                <li>
                                    <i class="ti-location-pin"></i>
                                    <p>123 Street, Old Trafford, New South London , UK</p>
                                </li>
                                <li>
                                    <i class="ti-email"></i>
                                    <a href="mailto:info@sitename.com">info@sitename.com</a>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p>+ 457 789 789 65</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer border-top-tran">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-md-0 text-center text-md-start">
                            © 2020 All Rights Reserved by Bestwebcreator
                        </p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer_payment text-center text-lg-end">
                            <li>
                                <a href="#"><img src="{{ asset('images/visa.png') }}" alt="visa" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('images/discover.png') }}"
                                        alt="discover" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('images/master_card.png') }}"
                                        alt="master_card" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('images/paypal.png') }}" alt="paypal" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('images/amarican_express.png') }}"
                                        alt="amarican_express" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <a href="#" class="scrollup" style="display: none"><i class="ion-ios-arrow-up"></i></a>

    <!-- Latest jQuery -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <!-- popper min js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ asset('owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- magnific-popup min js  -->
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <!-- waypoints min js  -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <!-- parallax js  -->
    <script src="{{ asset('js/parallax.js') }}"></script>
    <!-- countdown js  -->
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- isotope min js -->
    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <!-- jquery.dd.min js -->
    <script src="{{ asset('js/jquery.dd.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- elevatezoom js -->
    <script src="{{ asset('js/jquery.elevatezoom.js') }}"></script>
    <!-- scripts js -->
    <script src="{{ asset('js/scripts.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        // toastr.options = {
        //     "closeButton": true,
        //     "progressBar": true,
        //     "positionClass": "toast-top-right",
        //     "timeOut": "5000",
        //     "extendedTimeOut": "1000",
        //     "showMethod": "fadeIn",
        //     "hideMethod": "fadeOut",
        //     "showEasing": "ease-in",
        //     "hideEasing": "ease-out",
        //     "closeHtml": "<button><i class='fa fa-times'></i></button>",
        //     "iconClass": "toast-success",
        //     "preventDuplicates": true,
        //     "newestOnTop": true,
        //     "rtl": false
        // };

        axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute(
            'content');

        function addToCart(productId) {
            axios.post('{{ route('cart.add') }}', {
                    product_id: productId,
                })
                .then(function(response) {
                    // alert(response.data.message);
                    toastr.options.closeButton = true;
                    toastr.options.backgroundColor = "#28a745";
                    toastr.info(response.data.message, 'Success!');
                    document.querySelector('.cart_count').innerText = response.data.cartCount ?? 0;
                    if (response?.data?.items?.length) {
                        let html = ''
                        document.querySelector('.cart_list').innerHTML = ''

                        for (const item of response.data.items) {
                            const url = `{{ route('cart.remove', '__ITEM_ID__') }}`.replace('__ITEM_ID__', item.id);
                            
                            html += `
                            <li>
                            <a href="#" class="item_remove" onclick="event.preventDefault(); document.getElementById('remove-form-${item.id}').submit();">
                                <i class="ion-close"></i>
                            </a>
                            <a href="#"
                              >
                              <img
                                src="${item.productImage}"
                                alt="${item.productName}"
                              />
                              ${item.productName}
                            </a>
                            <span class="cart_quantity">
                              ${item.quantity} x
                              <span class="cart_amount">
                                <span class="price_symbole">৳</span></span
                              >${item.price}</span
                            >
                          </li>
                        <form id="remove-form-${item.id}" action="${url}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                            `
                        }
                        document.querySelector('.cart_list').innerHTML = html

                    }
                })
                .catch(function(error) {
                    console.error(error);
                    // alert('Something went wrong!');
                    toastr.options.closeButton = true;
                    toastr.error('Something went wrong!', 'Error!');
                });
        }
    </script>
</body>

</html>
