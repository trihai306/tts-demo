<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description"
          content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities."/>
    <meta name="keywords"
          content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app"/>
    <meta name="author" content="pixelstrap"/>
    <title>Admiro - Premium Admin Template</title>
    <!-- Favicon icon-->
    <link rel="icon" href="{{ asset('admiro/assets/images/favicon.png') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('admiro/assets/images/favicon.png') }}" type="image/x-icon"/>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap"
        rel="stylesheet"/>
    <!-- Flag icon css -->
    <link rel="stylesheet" href="{{ asset('admiro/assets/css/vendors/flag-icon.css') }}"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="{{ asset('admiro/assets/css/iconly-icon.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admiro/assets/css/bulk-style.css') }}"/>
    <!-- Themify icon -->
    <link rel="stylesheet" href="{{ asset('admiro/assets/css/themify.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admiro/assets/css/vendors/tagify.css') }}"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admiro/assets/css/fontawesome-min.css') }}"/>
    <!-- Weather Icon css -->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admiro/assets/css/vendors/weather-icons/weather-icons.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('admiro/assets/css/vendors/scrollbar.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('admiro/assets/css/vendors/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('admiro/assets/css/vendors/slick-theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('admiro/assets/css/app.css') }}"/>
    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('admiro/assets/css/style.css') }}"/>
    <link id="color" rel="stylesheet" href="{{ asset('admiro/assets/css/color-1.css') }}" media="screen"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/1.35.0/iconfont/tabler-icons.min.css"
          integrity="sha512-tpsEzNMLQS7w9imFSjbEOHdZav3/aObSESAL1y5jyJDoICFF2YwEdAHOPdOr1t+h8hTzar0flphxR76pd0V1zQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
</head>

<body>
<!-- page-wrapper Start-->
<!-- tap on top starts-->
<div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
<!-- tap on tap ends-->
<!-- loader-->
<div class="loader-wrapper">
    <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
</div>
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    @include('future::app.demo.header')
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page sidebar start-->
        @include('future::app.demo.sidebar')
        <!-- Page sidebar end-->
        <div class="page-body">
            @yield('content')
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2024 © FUTURE CMS.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="float-end mb-0">Hand crafted &amp; made with TRIHAI
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <div class="sidebar-pannle-main"><ul><li class="cog-click icon-btn btn-primary" id="cog-click"><i class="fa-solid fa-spin fa-cog"></i></li></ul></div>
        <section class="setting-sidebar">
            <div class="customizer-header">
                <div class="theme-title">
                    <div>
                        <h3>Preview Settings</h3>
                        <p class="mb-0">Try It Real Time<i class="fa-solid fa-thumbs-up fa-fw"></i></p>
                    </div>
                    <div class="flex-grow-1">
                        <a class="icon-btn btn-outline-light button-effect pull-right cog-close" id="cog-close">
                            <i class="fa-solid fa-xmark fa-fw"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="customizer-body">
                <div class="mb-3 p-2 rounded-3 b-t-primary border-3">
                    <div class="color-header mb-2">
                        <h4>Theme color mode:</h4>
                        <p>Choose between 3 different mix layout.</p>
                    </div>
                    <div class="color-body d-flex align-items-center justify-space-between">
                        <div class="color-img">
                            <img class="img-fluid" src="{{ asset('admiro/assets/images/customizer/light.png') }}" alt="">
                            <div class="customizer-overlay"></div>
                            <div class="button color-btn light-setting"><a href="javascript:void(0)">LIGHT</a></div>
                        </div>
                        <div class="color-img mx-1">
                            <img class="img-fluid" src="{{ asset('admiro/assets/images/customizer/dark.png') }}" alt="">
                            <div class="customizer-overlay"></div>
                            <div class="button color-btn dark-setting"><a href="javascript:void(0)">Dark</a></div>
                        </div>
                        <div class="color-img">
                            <img class="img-fluid" src="{{ asset('admiro/assets/images/customizer/mix.png') }}" alt="">
                            <div class="customizer-overlay"></div>
                            <div class="button color-btn mix-setting"><a href="javascript:void(0)">Mix</a></div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 p-2 rounded-3 b-t-primary border-3">
                    <div class="sidebar-icon mb-2">
                        <h4>Sidebar icon:</h4>
                        <p>Choose between 2 different sidebar icon.</p>
                    </div>
                    <div class="sidebar-body form-check radio ps-0">
                        <ul class="radio-wrapper">
                            <li class="default-svg">
                                <input class="form-check-input" id="radio-icon5" type="radio" name="radio2" value="option2" checked="">
                                <label class="form-check-label" for="radio-icon5">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('admiro/assets/svg/icon-sprite.svg#stroke-icons') }}"></use>
                                    </svg>
                                    <span>Stroke</span>
                                </label>
                            </li>
                            <li class="colorfull-svg">
                                <input class="form-check-input" id="radio-icon6" type="radio" name="radio2" value="option2">
                                <label class="form-check-label" for="radio-icon6">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('admiro/assets/svg/icon-sprite.svg#stroke-icons') }}"></use>
                                        <span>Colorfull icon</span>
                                    </svg>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mb-3 p-2 rounded-3 b-t-primary border-3">
                    <div class="theme-layout mb-2">
                        <h4>Layout type:</h4>
                        <p>Choose between 3 different layout types.</p>
                    </div>
                    <div class="radio-form checkbox-checked">
                        <div class="form-check ltr-setting">
                            <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault" checked="">
                            <label class="form-check-label" for="flexRadioDefault1">LTR</label>
                        </div>
                        <div class="form-check rtl-setting">
                            <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault">
                            <label class="form-check-label" for="flexRadioDefault2">RTL</label>
                        </div>
                        <div class="form-check box-setting">
                            <input class="form-check-input" id="flexRadioDefault3" type="radio" name="flexRadioDefault">
                            <label class="form-check-label" for="flexRadioDefault3">Box</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 p-2 rounded-3 b-t-primary border-3">
                    <div class="sidebar-type mb-2">
                        <h4>Sidebar type:</h4>
                        <p>Choose between 2 different sidebar types.</p>
                    </div>
                    <form>
                        <div class="sidebar-body form-check radio ps-0">
                            <ul class="radio-wrapper">
                                <li class="vertical-setting">
                                    <input class="form-check-input" id="radio-icon" type="radio" name="radio2" value="option2" checked="">
                                    <label class="form-check-label" for="radio-icon"><span>Vertical</span></label>
                                </li>
                                <li class="horizontal-setting">
                                    <input class="form-check-input" id="radio-icon4" type="radio" name="radio2" value="option2">
                                    <label class="form-check-label" for="radio-icon4"><span>Horizontal</span></label>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="customizer-color mb-3 p-2 rounded-3 b-t-primary border-3">
                    <div class="color-picker mb-2">
                        <h4>Unlimited color:</h4>
                    </div>
                    <ul class="layout-grid">
                        <li class="color-layout" data-attr="color-1" data-primary="#308e87" data-secondary="#f39159"><div></div></li>
                        <li class="color-layout" data-attr="color-2" data-primary="#57375D" data-secondary="#FF9B82"><div></div></li>
                        <li class="color-layout" data-attr="color-3" data-primary="#0766AD" data-secondary="#29ADB2"><div></div></li>
                        <li class="color-layout" data-attr="color-4" data-primary="#025464" data-secondary="#E57C23"><div></div></li>
                        <li class="color-layout" data-attr="color-5" data-primary="#884A39" data-secondary="#C38154"><div></div></li>
                        <li class="color-layout" data-attr="color-6" data-primary="#0C356A" data-secondary="#FFC436"><div></div></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>

@vite(['resources/js/app.js'])
@vite(['packages/adminftr/core/resources/assets/js/app.js'])
<!-- jquery-->
<script src="{{ asset('admiro/assets/js/vendors/jquery/jquery.min.js') }}"></script>
<!-- bootstrap js-->
<script src="{{ asset('admiro/assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}" defer=""></script>
<script src="{{ asset('admiro/assets/js/vendors/bootstrap/dist/js/popper.min.js') }}" defer=""></script>
<!-- fontawesome -->
<script src="{{ asset('admiro/assets/js/vendors/font-awesome/fontawesome-min.js') }}"></script>
<!-- feather -->
<script src="{{ asset('admiro/assets/js/vendors/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('admiro/assets/js/vendors/feather-icon/custom-script.js') }}"></script>
<!-- sidebar -->
<script src="{{ asset('admiro/assets/js/sidebar.js') }}"></script>
<!-- select2 -->
<script src="{{ asset('admiro/assets/js/vendors/@yaireo/tagify/dist/tagify.js') }}"></script>
<script src="{{ asset('admiro/assets/js/vendors/@yaireo/tagify/dist/tagify.polyfills.min.js') }}"></script>
<script src="{{ asset('admiro/assets/js/vendors/@yaireo/tagify/dist/intlTelInput.min.js') }}"></script>
<!-- height_equal -->
<script src="{{ asset('admiro/assets/js/height-equal.js') }}"></script>
<!-- config -->
<script src="{{ asset('admiro/assets/js/config.js') }}"></script>
<!-- apex -->
<script src="{{ asset('admiro/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
<!-- scrollbar -->
<script src="{{ asset('admiro/assets/js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('admiro/assets/js/scrollbar/custom.js') }}"></script>
<!-- slick -->
<script src="{{ asset('admiro/assets/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('admiro/assets/js/slick/slick.js') }}"></script>
<!-- theme_customizer -->
<script src="{{ asset('admiro/assets/js/theme-customizer/customizer.js') }}"></script>
<!-- tilt -->
<script src="{{ asset('admiro/assets/js/animation/tilt/tilt.jquery.js') }}"></script>
<!-- page_tilt -->
<script src="{{ asset('admiro/assets/js/animation/tilt/tilt-custom.js') }}"></script>
<!-- custom script -->
<script src="{{ asset('admiro/assets/js/script.js') }}"></script>
@livewireScriptConfig

</body>
</html>
