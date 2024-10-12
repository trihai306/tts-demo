<header class="site-header mo-left header " style="height: 81px;">
    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg is-fixed">
        <div class="main-bar clearfix">
            <div class="container-fluid clearfix d-lg-flex d-block  bg-light">

                <!-- Website Logo -->
                <div class="logo-header logo-dark me-md-5">
                    <a href="{{ url('/') }}"><img src="{{ asset('shop/images/logo.png') }}" alt="logo"></a>
                </div>

                <!-- Nav Toggle Button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- Main Nav -->
                <div class="header-nav w3menu navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                    <div class="logo-header logo-dark">
                        <a href="{{ url('/') }}"><img src="{{ asset('shop/images/logo.png') }}" alt="logo"></a>
                    </div>
                    <ul class=" nav navbar-nav">
                        <li class="has-mega-menu sub-menu-down auto-width menu-left">
                            <a href="https://plantzone.dexignzone.com/xhtml/index.html"><span>Home</span><i class="fas fa-chevron-down tabindex"></i></a>
                        </li>
                        <li class="has-mega-menu sub-menu-down">
                            <a href="javascript:void(0);"><span>Shop</span><i class="fas fa-chevron-down tabindex"></i></a>
                            <div class="mega-menu shop-menu">
                                <ul>
                                    <li class="side-left">
                                        <ul>
                                            <li><span class="menu-title">Shop Structure</span>
                                                <ul>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-standard.html">Shop Standard</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Shop List</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-with-category.html">Shop With Category</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-filters-top-bar.html">Shop Filters Top Bar</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-sidebar.html">Shop Sidebar</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-style-1.html">Shop Style 1</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-style-2.html">Shop Style 2</a></li>
                                                </ul>
                                            </li>
                                            <li><span class="menu-title">Product Structure</span>
                                                <ul>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/product-default.html">Default</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/product-thumbnail.html">Thumbnail</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/product-grid-media.html">Grid Media</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/product-carousel.html">Carousel</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/product-full-width.html">Full Width</a></li>
                                                </ul>
                                            </li>
                                            <li><span class="menu-title">Shop Pages</span>
                                                <ul>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-wishlist.html">Wishlist</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-cart.html">Cart</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-checkout.html">Checkout</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-compare.html">Compare</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-order-tracking.html">Order Tracking</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/login.html">Login</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/registration.html">Registration</a></li>
                                                    <li><a href="https://plantzone.dexignzone.com/xhtml/forget-password.html">Forget Password <div class="badge badge-sm rounded badge-animated">New</div></a></li>
                                                </ul>
                                            </li>
                                            <li class="month-deal">
                                                <div class="clearfix me-3">
                                                    <h3>Deal of the month</h3>
                                                    <p class="mb-0">Yes! Send me exclusive offers, personalised, and unique gift ideas, tips for shopping on PlantZone <a href="https://plantzone.dexignzone.com/xhtml/shop-standard.html" class="dz-link-2">View All Products</a></p>
                                                </div>
                                                <div class="sale-countdown">
                                                    <div class="countdown text-center">
                                                        <div class="date">
                                                            <span class="time days text-primary">31</span>
                                                            <span class="work-time">Days</span>
                                                        </div>
                                                        <div class="date">
                                                            <span class="time hours text-primary">09</span>
                                                            <span class="work-time">Hours</span>
                                                        </div>
                                                        <div class="date">
                                                            <span class="time mins text-primary">26</span>
                                                            <span class="work-time">Minutess</span>
                                                        </div>
                                                        <div class="date">
                                                            <span class="time secs text-primary">05</span>
                                                            <span class="work-time">Second</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="side-right">
                                        <div class="adv-media">
                                            <img src="{{asset('shop/images/adv-1.png')}}" alt="/">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="dz-social-icon">
                        <ul>
                            <li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/dexignzone"></a></li>
                            <li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/dexignzones"></a></li>
                            <li><a class="fab fa-linkedin-in" target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
                            <li><a class="fab fa-instagram" target="_blank" href="https://www.instagram.com/dexignzone/"></a></li>
                        </ul>
                    </div>
                </div>


                <!-- EXTRA NAV -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <ul class="header-right">
                            <li class="nav-item login-link">
                                <a class="nav-link" href="https://plantzone.dexignzone.com/xhtml/login.html">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                                </a>
                            </li>
                            <li class="nav-item search-link">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                                </a>
                            </li>
                            <li class="nav-item wishlist-link">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-heart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                                </a>
                            </li>
                            <li class="nav-item cart-link">
                                <a href="javascript:void(0);" class="nav-link cart-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                                    <span class="badge badge-circle">5</span>
                                </a>
                            </li>
                            <li class="nav-item filte-link">
                                <a href="javascript:void(0);" class="nav-link filte-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 13" fill="none">
                                        <rect y="11" width="30" height="2" fill="black"></rect>
                                        <rect width="30" height="2" fill="black"></rect>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Main Header End -->

    <!-- SearchBar -->
    <div class="dz-search-area dz-offcanvas offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            ×
        </button>
        <div class="container">
            <form class="header-item-search">
                <h2 class="dz-title">Search Our Site</h2>
                <div class="input-group search-input">
                    <input type="search" class="form-control" placeholder="Search Here">
                    <button class="btn" type="button">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                    </button>
                </div>
                <ul class="recent-tag">
                    <li class="pe-0"><span>Quick Search :</span></li>
                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Small Plants</a></li>
                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">House Plants</a></li>
                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Aqua Greens</a></li>
                    <li><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Plant Paradise</a></li>
                </ul>
            </form>


            <div class="row">
                <div class="col-xl-12">
                    <h2 class="mb-3 dz-title">Popular Product</h2>
                    <div class="swiper category-swiper2 swiper-visible swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-813a317253579ed3" aria-live="polite">
                            <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible swiper-slide-active" role="group" aria-label="1 / 8" data-swiper-slide-index="0" style="width: 242px; margin-right: 20px;">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="{{ asset('shop/images/1(1).png') }}" alt="image">
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="title"><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Large Majesty Palm (m)</a></h3>
                                        <span class="price">$79<del>$99</del></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible swiper-slide-next" role="group" aria-label="2 / 8" data-swiper-slide-index="1" style="width: 242px; margin-right: 20px;">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="{{ asset('shop/images/2(1).png') }}" alt="image">
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="title"><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Endless Stems Gardens (m)</a></h3>
                                        <span class="price">$79<del>$199</del></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible" role="group" aria-label="3 / 8" data-swiper-slide-index="2" style="width: 242px; margin-right: 20px;">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="{{ asset('shop/images/3(1).png') }}" alt="image">
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="title"><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Long Strider Pants (m)</a></h3>
                                        <span class="price">$109<del>$149</del></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible" role="group" aria-label="4 / 8" data-swiper-slide-index="3" style="width: 242px; margin-right: 20px;">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="{{ asset('shop/images/4.png') }}" alt="image">
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="title"><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Feather Reed Grass (m)</a></h3>
                                        <span class="price">$299<del>$499</del></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible" role="group" aria-label="5 / 8" data-swiper-slide-index="4" style="width: 242px; margin-right: 20px;">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="{{ asset('shop/images/5.png') }}" alt="image">
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="title"><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Miniature Rose Bush (m)</a></h3>
                                        <span class="price">$199 <del>$299</del></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible" role="group" aria-label="6 / 8" data-swiper-slide-index="5" style="width: 242px; margin-right: 20px;">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="{{ asset('shop/images/6.png') }}" alt="image">
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="title"><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Large Majesty Palm (m)</a></h3>
                                        <span class="price">$79<del>$99</del></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="7 / 8" data-swiper-slide-index="6" style="width: 242px; margin-right: 20px;">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="{{ asset('shop/images/7.png') }}" alt="image">
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="title"><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Giant Elephant Ear(M)</a></h3>
                                        <span class="price">$99<del>$110</del></span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="8 / 8" data-swiper-slide-index="7" style="width: 242px; margin-right: 20px;">
                                <div class="shop-card">
                                    <div class="dz-media">
                                        <img src="{{ asset('shop/images/8.png') }}" alt="image">
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="title"><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Large Majesty Palm (m)</a></h3>
                                        <span class="price">$79<del>$99</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- SearchBar -->

    <!-- Sidebar cart -->
    <div class="offcanvas dz-offcanvas offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            ×
        </button>
        <div class="offcanvas-body">
            <livewire:sidebar-cart></livewire:sidebar-cart>
        </div>
    </div>
    <!-- Sidebar cart -->

    <!-- Sidebar finter -->
    <div class="offcanvas dz-offcanvas offcanvas offcanvas-end " tabindex="-1" id="offcanvasLeft">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            ×
        </button>
        <div class="offcanvas-body">
            <div class="contact-sidebar">
                <div class="contact-box1 deznav-scroll">
                    <div class="logo-header logo-dark me-5">
                        <a href="{{ url('/') }}"><img src="{{ asset('shop/images/logo.png') }}" alt="logo"></a>
                    </div>
                    <p class="text">Với Vườn An, chúng tôi không chỉ cung cấp cây cảnh, mà còn xây dựng một không gian xanh đầy cảm hứng, nơi bạn và chúng tôi cùng nhau vun đắp hạnh phúc và sự bền vững. Hãy biến website của bạn thành một cửa hàng trực tuyến sống động, nơi thiên nhiên hòa quyện cùng cuộc sống, mang đến trải nghiệm mua sắm đầy thú vị và gắn kết mọi người với niềm đam mê cây cối.</p>
                    <h4 class="dz-title">Contact Us</h4>

                    <ul class="contact-address">
                        <li>785 15h Street, Office 478 Berlin, De 81566</li>
                        <li>Demo@gmail.com</li>
                        <li>+1012 3456 789</li>
                    </ul>

                    <h4 class="dz-title">Newsletter</h4>
                    <form class="dzSubscribe dz-subscribe-wrapper1" action="https://plantzone.dexignzone.com/xhtml/script/mailchamp.php" method="post">
                        <div class="dzSubscribeMsg"></div>
                        <div class="form-group">
                            <div class="input-group mb-0">
                                <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-addon">
                                    <button name="submit" value="Submit" type="submit" class="btn">
                                        <i class="icon feather icon-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox d-flex m-b40">
                                <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                <label class="form-check-label">I Agree To The <span><a href="https://plantzone.dexignzone.com/xhtml/privacy-policy.html">Privacy Policy</a></span></label>
                            </div>
                        </div>
                    </form>
                    <h4 class="dz-title">Follow Us</h4>
                    <div class="dz-social-icon dz-hover-move style-2 mb-5">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/dexignzone" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/dexignzones">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/showcase/3686700/admin/">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/dexignzone/">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- filter sidebar -->

</header>
