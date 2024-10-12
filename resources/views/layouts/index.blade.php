<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Title -->
    <title>PlantZone Shop &amp; eCommerce HTML Template | DexignZone</title>

    <!-- Meta -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="format-detection" content="telephone=no">

    <meta name="keywords" content="garden shop, flowers, landscape gardener, delivery, ecommerce, greenery, order, shopping, store, portfolio, plant template, plant store, plant showcase, nursery
	technology, ecommerce web, eCommerce website, minimal shop, online shop, online shopping, plantzone, user interface, user experience, trendy, stylish, development, farmer">

    <meta name="description" content="Elevate your online retail presence with PlantZone Shop &amp; eCommerce HTML Template. Meticulously crafted, this responsive and feature-rich template offers a seamless
	and visually stunning shopping experience for plant enthusiasts. Explore a world of possibilities with modern design elements, intuitive navigation, and customizable features. Transform your website into a
	dynamic online storefront with PlantZone, where style seamlessly meets functionality, ensuring a captivating and user-friendly eCommerce journey through the lush world of plants.">

    <meta property="og:title" content="PlantZone Shop &amp; eCommerce HTML Template | DexignZone">
    <meta property="og:description" content="Elevate your online retail presence with PlantZone Shop &amp; eCommerce HTML Template. Meticulously crafted, this responsive and feature-rich template offers a seamless and visually
	stunning shopping experience for plant enthusiasts. Explore a world of possibilities with modern design elements, intuitive navigation, and customizable features. Transform your website into a dynamic online storefront with PlantZone,
	 where style seamlessly meets functionality, ensuring a captivating and user-friendly eCommerce journey through the lush world of plants.">


    <!-- TWITTER META -->
    <meta name="twitter:title" content="PlantZone: Shop &amp; eCommerce Bootstrap HTML Template | DexignZone">
    <meta name="twitter:description" content="Elevate your online retail presence with PlantZone Shop &amp; eCommerce HTML Template. Meticulously crafted, this responsive and feature-rich template offers a seamless and visually stunning shopping
	 experience for plant enthusiasts. Explore a world of possibilities with modern design elements, intuitive navigation, and customizable features. Transform your website into a dynamic online storefront with PlantZone, where style seamlessly meets functionality, ensuring a
	 captivating and user-friendly eCommerce journey through the lush world of plants.">
    <meta name="twitter:card" content="summary_large_image">
    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/x-icon" href="https://plantzone.dexignzone.com/xhtml/images/favicon.png">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/css/index.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/css/nouislider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/css/lightgallery.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/css/lg-thumbnail.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/css/lg-zoom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom Stylesheet -->
    <link class="main-css" rel="stylesheet" type="text/css" href="{{ asset('shop/css/style.css') }}">
    <link class="skin" type="text/css" rel="stylesheet" href="{{ asset('shop/css/skin-1.css') }}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/1.35.0/iconfont/tabler-icons.min.css"
          integrity="sha512-tpsEzNMLQS7w9imFSjbEOHdZav3/aObSESAL1y5jyJDoICFF2YwEdAHOPdOr1t+h8hTzar0flphxR76pd0V1zQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    @livewireStyles
</head>
<body id="bg" class="">

<div id="loading-area" class="loading-page-1 show">
    <div class="text"><span class="text-primary">VƯỜN </span>AN</div>
</div>

<!-- Header Star -->
@include('layouts.header')
<!-- Header End -->
@yield('content')

<!-- Footer -->
<footer class="site-footer style-1">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s"
                     style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                    <div class="widget widget_about me-2">
                        <div class="footer-logo logo-white">
                            <a href="https://plantzone.dexignzone.com/xhtml/index.html"><img
                                    src="{{asset('shop/images/logo.png')}}"
                                    alt=""></a>
                        </div>
                        <ul class="widget-address">
                            <li>
                                <p><span>Address</span> : 451 Wall Street, UK, London</p>
                            </li>
                            <li>
                                <p><span>E-mail</span> : <a href="mailto:example@info.com">example@info.com</a></p>
                            </li>
                            <li>
                                <p><span>Phone</span> : <a href="tel:+9912121211">+919912121211</a></p>
                            </li>
                        </ul>
                        <div class="subscribe_widget">
                            <h2 class="title fw-medium text-capitalize footer-title">subscribe to our newsletter</h2>
                            <form class="dzSubscribe style-1"
                                  action="https://plantzone.dexignzone.com/xhtml/script/mailchamp.php" method="post">
                                <div class="dzSubscribeMsg"></div>
                                <div class="form-group">
                                    <div class="input-group mb-0">
                                        <input name="dzEmail" required="required" type="email" class="form-control"
                                               placeholder="Your Email Address">
                                        <div class="input-group-addon">
                                            <button name="submit" value="Submit" type="submit" class="btn">
                                                <i class="icon feather icon-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s"
                     style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                    <div class="widget widget_post">
                        <h2 class="footer-title">Recent Posts</h2>
                        <ul>
                            <li>
                                <div class="dz-media">
                                    <img src="{{asset('shop/images/1.png')}}"
                                         alt="">
                                </div>
                                <div class="dz-content">
                                    <h6 class="name"><a
                                            href="https://plantzone.dexignzone.com/xhtml/post-standard.html">A Journey
                                            Through Plant </a></h6>
                                    <span class="time">July 23, 2023</span>
                                </div>
                            </li>
                            <li>
                                <div class="dz-media">
                                    <img src="{{asset('shop/images/2.png')}}"
                                         alt="">
                                </div>
                                <div class="dz-content">
                                    <h6 class="name"><a
                                            href="https://plantzone.dexignzone.com/xhtml/post-standard.html">Into Plant
                                            Care Cultivation</a></h6>
                                    <span class="time">Feb 23, 2024</span>
                                </div>
                            </li>
                            <li>
                                <div class="dz-media">
                                    <img src="{{asset('shop/images/3.png')}}"
                                         alt="">
                                </div>
                                <div class="dz-content">
                                    <h6 class="name"><a
                                            href="https://plantzone.dexignzone.com/xhtml/post-standard.html">The Wonders
                                            of Plants</a></h6>
                                    <span class="time">Jun 26, 2024</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.3s"
                     style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <div class="widget widget_services">
                        <h2 class="footer-title">Our Stores</h2>
                        <ul>
                            <li><a href="javascript:void(0);">New York</a></li>
                            <li><a href="javascript:void(0);">London SF</a></li>
                            <li><a href="javascript:void(0);">Edinburgh</a></li>
                            <li><a href="javascript:void(0);">Los Angeles</a></li>
                            <li><a href="javascript:void(0);">Chicago</a></li>
                            <li><a href="javascript:void(0);">Las Vegas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.4s"
                     style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                    <div class="widget widget_services">
                        <h2 class="footer-title">Useful Links</h2>
                        <ul>
                            <li><a href="javascript:void(0);">Privacy Policy</a></li>
                            <li><a href="javascript:void(0);">Returns</a></li>
                            <li><a href="javascript:void(0);">Terms &amp; Conditions</a></li>
                            <li><a href="javascript:void(0);">Contact Us</a></li>
                            <li><a href="javascript:void(0);">Latest News</a></li>
                            <li><a href="javascript:void(0);">Our Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.5s"
                     style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                    <div class="widget widget_services">
                        <h2 class="footer-title">Footer Menu</h2>
                        <ul>
                            <li><a href="javascript:void(0);">Instagram profile</a></li>
                            <li><a href="javascript:void(0);">New Collection</a></li>
                            <li><a href="javascript:void(0);">Popular Plant </a></li>
                            <li><a href="javascript:void(0);">Contact Us</a></li>
                            <li><a href="javascript:void(0);">Latest News</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row fb-inner wow fadeInUp" data-wow-delay="0.1s"
                 style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                <div class="col-lg-6 col-md-12 text-start">
                    <p class="copyright-text">© <span class="current-year">2024</span> <a
                            href="https://www.dexignzone.com/">DexignZone</a> Theme. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 col-md-12 text-end">
                    <div
                        class="d-flex align-items-center justify-content-center justify-content-md-center justify-content-xl-end">
                        <span class="me-3">We Accept: </span>
                        <img src="{{asset('shop/images/footer-img.png')}}"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</footer>
<!-- Footer End -->

<div class="scroltop-progress2"></div>
<button class="scroltop" type="button" style="display: none;"><i class="fas fa-arrow-up"></i></button>

<!-- Quick Modal Start -->
<div class="modal quick-view-modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="icon feather icon-x"></i>
            </button>
            <div class="modal-body">
                <div class="row g-xl-4 g-3">
                    <div class="col-xl-6 col-md-6">
                        <div class="dz-product-detail mb-0">
                            <div class="dz-media">
                                <img src="{{asset('shop/images/adv-3.png')}}"
                                     alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="dz-product-detail style-4 p-t50">
                            <div class="dz-content">
                                <div class="dz-content-footer">
                                    <div class="dz-content-start">
                                        <h4 class="title mb-1"><a
                                                href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Large
                                                Majesty Palm (m)</a></h4>
                                    </div>
                                </div>
                                <p class="para-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,</p>
                                <div class="d-flex align-items-center m-b30">
                                    <label class="form-label m-r10">Size</label>
                                    <div class="btn-group product-size m-0">
                                        <input type="radio" class="btn-check" name="btnradio_1" id="btnradio_1"
                                               checked="">
                                        <label class="btn" for="btnradio_1">Medium</label>

                                        <input type="radio" class="btn-check" name="btnradio_2" id="btnradio_2">
                                        <label class="btn" for="btnradio_2">Tall</label>

                                        <input type="radio" class="btn-check" name="btnradio_3" id="btnradio_3">
                                        <label class="btn" for="btnradio_3">Standard</label>

                                        <input type="radio" class="btn-check" name="btnradio_4" id="btnradio_4">
                                        <label class="btn" for="btnradio_4">Semi</label>

                                        <input type="radio" class="btn-check" name="btnradio_5" id="btnradio_5">
                                        <label class="btn" for="btnradio_5">Mini</label>
                                    </div>
                                </div>

                                <div class="meta-content m-b20 d-flex align-items-end">
                                    <div class="me-5">
                                        <span class="form-label">Price</span>
                                        <span class="price">$45.00 <del>$132.17</del></span>
                                    </div>
                                    <div class="quantity btn-quantity style-1 m-0">
                                        <label class="form-label">Quantity</label>
                                        <div class="input-group bootstrap-touchspin"><span
                                                class="input-group-addon bootstrap-touchspin-prefix"
                                                style="display: none;"></span><input id="demo_vertical5" type="text"
                                                                                     value="1" name="demo_vertical2"
                                                                                     class="form-control"
                                                                                     style="display: block;"><span
                                                class="input-group-addon bootstrap-touchspin-postfix"
                                                style="display: none;"></span><span class="input-group-btn-vertical"><button
                                                    class="btn btn-default bootstrap-touchspin-up" type="button"><i
                                                        class="fa-solid fa-plus"></i></button><button
                                                    class="btn btn-default bootstrap-touchspin-down" type="button"><i
                                                        class="fa-solid fa-minus"></i></button></span></div>
                                    </div>

                                </div>
                                <div class="btn-group cart-btn">
                                    <a href="https://plantzone.dexignzone.com/xhtml/shop-cart.html"
                                       class="btn btn-secondary text-uppercase">Add To Cart</a>
                                    <a href="https://plantzone.dexignzone.com/xhtml/shop-wishlist.html"
                                       class="btn btn-outline-secondary btn-icon">
                                        <svg width="19" height="17" viewBox="0 0 19 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.24805 16.9986C8.99179 16.9986 8.74474 16.9058 8.5522 16.7371C7.82504 16.1013 7.12398 15.5038 6.50545 14.9767L6.50229 14.974C4.68886 13.4286 3.12289 12.094 2.03333 10.7794C0.815353 9.30968 0.248047 7.9162 0.248047 6.39391C0.248047 4.91487 0.755203 3.55037 1.67599 2.55157C2.60777 1.54097 3.88631 0.984375 5.27649 0.984375C6.31552 0.984375 7.26707 1.31287 8.10464 1.96065C8.52734 2.28763 8.91049 2.68781 9.24805 3.15459C9.58574 2.68781 9.96875 2.28763 10.3916 1.96065C11.2292 1.31287 12.1807 0.984375 13.2197 0.984375C14.6098 0.984375 15.8885 1.54097 16.8202 2.55157C17.741 3.55037 18.248 4.91487 18.248 6.39391C18.248 7.9162 17.6809 9.30968 16.4629 10.7792C15.3733 12.094 13.8075 13.4285 11.9944 14.9737C11.3747 15.5016 10.6726 16.1001 9.94376 16.7374C9.75136 16.9058 9.50417 16.9986 9.24805 16.9986ZM5.27649 2.03879C4.18431 2.03879 3.18098 2.47467 2.45108 3.26624C1.71033 4.06975 1.30232 5.18047 1.30232 6.39391C1.30232 7.67422 1.77817 8.81927 2.84508 10.1066C3.87628 11.3509 5.41011 12.658 7.18605 14.1715L7.18935 14.1743C7.81021 14.7034 8.51402 15.3033 9.24654 15.9438C9.98344 15.302 10.6884 14.7012 11.3105 14.1713C13.0863 12.6578 14.6199 11.3509 15.6512 10.1066C16.7179 8.81927 17.1938 7.67422 17.1938 6.39391C17.1938 5.18047 16.7858 4.06975 16.045 3.26624C15.3152 2.47467 14.3118 2.03879 13.2197 2.03879C12.4197 2.03879 11.6851 2.29312 11.0365 2.79465C10.4585 3.24179 10.0558 3.80704 9.81975 4.20255C9.69835 4.40593 9.48466 4.52733 9.24805 4.52733C9.01143 4.52733 8.79774 4.40593 8.67635 4.20255C8.44041 3.80704 8.03777 3.24179 7.45961 2.79465C6.811 2.29312 6.07643 2.03879 5.27649 2.03879Z"
                                                fill="black"></path>
                                        </svg>
                                        Add To Wishlist
                                    </a>
                                </div>
                                <div class="dz-info m-0">
                                    <ul>
                                        <li><strong>SKU:</strong></li>
                                        <li>PRT584E63A</li>
                                    </ul>
                                    <ul>
                                        <li><strong>Category::</strong></li>
                                        <li><a href="https://plantzone.dexignzone.com/xhtml/shop-standard.html">Small
                                                Plants,</a></li>
                                        <li><a href="https://plantzone.dexignzone.com/xhtml/shop-standard.html">Fern
                                                Fantasy,</a></li>
                                        <li><a href="https://plantzone.dexignzone.com/xhtml/shop-standard.html">Blossom
                                                Haven, </a></li>
                                    </ul>
                                    <ul>
                                        <li><strong>Tags:</strong></li>
                                        <li>
                                            <a href="https://plantzone.dexignzone.com/xhtml/shop-standard.html">Plants,</a>
                                        </li>
                                        <li><a href="https://plantzone.dexignzone.com/xhtml/shop-standard.html">Garden
                                                Care,</a></li>
                                        <li><a href="https://plantzone.dexignzone.com/xhtml/shop-standard.html">Aqua
                                                Greens, </a></li>
                                        <li><a href="https://plantzone.dexignzone.com/xhtml/shop-standard.html">House
                                                Plants,</a></li>
                                    </ul>
                                    <ul class="social-icon">
                                        <li><strong>Share:</strong></li>
                                        <li>
                                            <a href="https://www.facebook.com/dexignzone" target="_blank">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/showcase/3686700/admin/" target="_blank">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/dexignzone/" target="_blank">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/dexignzones" target="_blank">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('shop/js/jquery.min.js') }}"></script><!-- JQUERY MIN JS -->
<script src="{{ asset('shop/js/wow.min.js') }}"></script><!-- WOW JS -->
<script src="{{ asset('shop/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP MIN JS -->
<script src="{{ asset('shop/js/bootstrap-select.min.js') }}"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="{{ asset('shop/js/bootstrap-touchspin.js') }}"></script><!-- BOOTSTRAP TOUCHSPIN JS -->
<script src="{{ asset('shop/js/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('shop/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('shop/js/swiper-bundle.min.js') }}"></script><!-- SWIPER JS -->
<script src="{{ asset('shop/js/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('shop/js/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('shop/js/group-loop.js') }}"></script><!-- group JS -->
<script src="{{ asset('shop/js/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('shop/js/masonry-4.2.2.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('shop/js/isotope.pkgd.min.js') }}"></script><!-- ISOTOPE -->
<script src="{{ asset('shop/js/jquery.countdown.js') }}"></script><!-- COUNTDOWN FUNCTIONS -->
<script src="{{ asset('shop/js/wNumb.js') }}"></script><!-- WNUMB -->
<script src="{{ asset('shop/js/nouislider.min.js') }}"></script><!-- NOUSLIDER MIN JS -->
<script src="{{ asset('shop/js/dz.carousel.js') }}"></script><!-- DZ CAROUSEL JS -->
<script src="{{ asset('shop/js/lightgallery.min.js') }}"></script>
<script src="{{ asset('shop/js/lg-thumbnail.min.js') }}"></script>
<script src="{{ asset('shop/js/lg-zoom.min.js') }}"></script>
<script src="{{ asset('shop/js/dz.ajax.js') }}"></script><!-- AJAX -->
<script src="{{ asset('shop/js/custom.js') }}"></script><!-- CUSTOM JS -->
@livewireScripts
<div class="lg-container  " id="lg-container-1" tabindex="-1" aria-modal="true" role="dialog">
    <div id="lg-backdrop-1" class="lg-backdrop" style="transition-duration: 300ms;"></div>

    <div id="lg-outer-1"
         class="lg-outer lg-use-css3 lg-css3 lg-slide lg-grab lg-animate-thumb lg-has-thumb lg-use-transition-for-zoom">

        <div id="lg-content-1" class="lg-content">
            <div id="lg-inner-1" class="lg-inner" style="transition-timing-function: ease; transition-duration: 400ms;">
            </div>
            <button type="button" id="lg-prev-1" aria-label="Previous slide" class="lg-prev lg-icon"></button>
            <button type="button" id="lg-next-1" aria-label="Next slide" class="lg-next lg-icon"></button>
        </div>
        <div id="lg-toolbar-1" class="lg-toolbar lg-group">
            <button type="button" aria-label="Close gallery" id="lg-close-1" class="lg-close lg-icon"></button>
            <a id="lg-download-1" target="_blank" rel="noopener" aria-label="Download" download=""
               class="lg-download lg-icon"></a>
            <div class="lg-counter" role="status" aria-live="polite">
                <span id="lg-counter-current-1" class="lg-counter-current">1 </span> /
                <span id="lg-counter-all-1" class="lg-counter-all">9 </span></div>
            <button id="lg-actual-size-1" type="button" aria-label="View actual size"
                    class="lg-zoom-in lg-icon"></button>
        </div>

        <div id="lg-components-1" class="lg-components">
            <div class="lg-sub-html" role="status" aria-live="polite"></div>
            <div class="lg-thumb-outer lg-thumb-align-middle lg-grab">
                <div class="lg-thumb lg-group" style="transition-duration: 400ms; width: 945px; position: relative;">
                    <div data-lg-item-id="0" class="lg-thumb-item  active" style="width:100px; height: 80px; margin-right: 5px;">
                        <img data-lg-item-id="0" src="{{ asset('shop/images/pic1(1).png') }}">
                    </div>
                    <div data-lg-item-id="1" class="lg-thumb-item " style="width:100px; height: 80px; margin-right: 5px;">
                        <img data-lg-item-id="1" src="{{ asset('shop/images/pic2(1).png') }}">
                    </div>
                    <div data-lg-item-id="2" class="lg-thumb-item " style="width:100px; height: 80px; margin-right: 5px;">
                        <img data-lg-item-id="2" src="{{ asset('shop/images/pic3(1).png') }}">
                    </div>
                    <div data-lg-item-id="3" class="lg-thumb-item " style="width:100px; height: 80px; margin-right: 5px;">
                        <img data-lg-item-id="3" src="{{ asset('shop/images/pic4(1).png') }}">
                    </div>
                    <div data-lg-item-id="4" class="lg-thumb-item " style="width:100px; height: 80px; margin-right: 5px;">
                        <img data-lg-item-id="4" src="{{ asset('shop/images/pic5(1).png') }}">
                    </div>
                    <div data-lg-item-id="5" class="lg-thumb-item " style="width:100px; height: 80px; margin-right: 5px;">
                        <img data-lg-item-id="5" src="{{ asset('shop/images/pic6(1).png') }}">
                    </div>
                    <div data-lg-item-id="6" class="lg-thumb-item " style="width:100px; height: 80px; margin-right: 5px;">
                        <img data-lg-item-id="6" src="{{ asset('shop/images/pic7.png') }}">
                    </div>
                    <div data-lg-item-id="7" class="lg-thumb-item " style="width:100px; height: 80px; margin-right: 5px;">
                        <img data-lg-item-id="7" src="{{ asset('shop/images/pic8.png') }}">
                    </div>
                    <div data-lg-item-id="8" class="lg-thumb-item " style="width:100px; height: 80px; margin-right: 5px;">
                        <img data-lg-item-id="8" src="{{ asset('shop/images/pic9.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
