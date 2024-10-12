@extends('layouts.index')
@section('content')
    <div class="page-content">

        <!-- Banner Start -->
        @include('components.banner')
        <!-- Banner End-->

        <!--category section-->
        @include('components.category')
        <!--category section-->


        <!--About Section Start -->
        @include('components.about')
        <!--About Section End -->

        <section class="content-inner position-relative z-1 overflow-hidden" id="Plant_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-sm-12 m-b30">
                        <div class="service-box wow zoomIn" data-wow-delay="1s"
                             style="visibility: hidden; animation-delay: 1s; animation-name: none;">
                            <ul class="nav nav-tabs Plant_row" id="Plant_row" style="--sr-total: 6" role="tablist">
                                <li class="nav-item " style="--sr-item:1" role="presentation">
                                    <button class="nav-link active" id="plant_1" data-bs-toggle="tab"
                                            data-bs-target="#plant_1-pane" type="button" role="tab"
                                            aria-controls="plant_1-pane" aria-selected="true">
                                <span class="plant-bx ">
                                    <span class="dz-media">
                                        <img src="{{ asset('shop/images/pic1.png') }}" alt="">
                                    </span>
                                </span>
                                    </button>
                                </li>
                                <li class="nav-item " style="--sr-item:2" role="presentation">
                                    <button class="nav-link" id="plant_2" data-bs-toggle="tab"
                                            data-bs-target="#plant_2-pane" type="button" role="tab"
                                            aria-controls="plant_2-pane" aria-selected="false" tabindex="-1">
                                <span class="plant-bx ">
                                    <span class="dz-media">
                                        <img src="{{ asset('shop/images/pic2.png') }}" alt="">
                                    </span>
                                </span>
                                    </button>
                                </li>
                                <li class="nav-item " style="--sr-item:3" role="presentation">
                                    <button class="nav-link" id="plant_3" data-bs-toggle="tab"
                                            data-bs-target="#plant_3-pane" type="button" role="tab"
                                            aria-controls="plant_3-pane" aria-selected="false" tabindex="-1">
                                <span class="plant-bx ">
                                    <span class="dz-media">
                                        <img src="{{ asset('shop/images/pic3.png') }}" alt="">
                                    </span>
                                </span>
                                    </button>
                                </li>
                                <li class="nav-item " style="--sr-item:4" role="presentation">
                                    <button class="nav-link" id="plant_4" data-bs-toggle="tab"
                                            data-bs-target="#plant_4-pane" type="button" role="tab"
                                            aria-controls="plant_4-pane" aria-selected="false" tabindex="-1">
                                <span class="plant-bx ">
                                    <span class="dz-media">
                                        <img src="{{ asset('shop/images/pic4.png') }}" alt="">
                                    </span>
                                </span>
                                    </button>
                                </li>
                                <li class="nav-item " style="--sr-item:5" role="presentation">
                                    <button class="nav-link" id="plant_5" data-bs-toggle="tab"
                                            data-bs-target="#plant_5-pane" type="button" role="tab"
                                            aria-controls="plant_5-pane" aria-selected="false" tabindex="-1">
                                <span class="plant-bx ">
                                    <span class="dz-media">
                                        <img src="{{ asset('shop/images/pic5.png') }}" alt="">
                                    </span>
                                </span>
                                    </button>
                                </li>
                                <li class="nav-item " style="--sr-item:6" role="presentation">
                                    <button class="nav-link" id="plant_6" data-bs-toggle="tab"
                                            data-bs-target="#plant_6-pane" type="button" role="tab"
                                            aria-controls="plant_6-pane" aria-selected="false" tabindex="-1">
                                <span class="plant-bx ">
                                    <span class="dz-media">
                                        <img src="{{ asset('shop/images/pic6.png') }}" alt="">
                                    </span>
                                </span>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!-- Repeat content for each tab-pane with updated image paths -->
                                <div class="tab-pane fade show active" id="plant_1-pane" role="tabpanel"
                                     aria-labelledby="plant_1" tabindex="0">
                                    <div class="content">
                                        <div class="shop-card ">
                                            <div class="dz-media">
                                                <img src="{{ asset('shop/images/1(1).png') }}" alt="image">
                                                <div class="shop-meta">
                                                    <div class="btn btn-primary meta-icon dz-wishicon">
                                                        <i class="icon feather icon-heart dz-heart"></i>
                                                        <i class="icon feather icon-heart-on dz-heart-fill"></i>
                                                    </div>
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <i class="flaticon flaticon-basket"></i>
                                                        <i class="flaticon flaticon-basket-on dz-heart-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <h2 class="title"><a
                                                        href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Vineyard
                                                        Reach (m)</a></h2>
                                                <span class="price">
                                            $659
                                            <del>$1099</del>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Other tab-panes updated similarly -->
                                <div class="tab-pane fade show " id="plant_2-pane" role="tabpanel" aria-labelledby="plant_2"
                                     tabindex="0">
                                    <div class="content">
                                        <div class="shop-card ">
                                            <div class="dz-media">
                                                <img src="{{ asset('shop/images/2(1).png') }}" alt="image">
                                                <div class="shop-meta">
                                                    <div class="btn btn-primary meta-icon dz-wishicon">
                                                        <i class="icon feather icon-heart dz-heart"></i>
                                                        <i class="icon feather icon-heart-on dz-heart-fill"></i>
                                                    </div>
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <i class="flaticon flaticon-basket"></i>
                                                        <i class="flaticon flaticon-basket-on dz-heart-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <h2 class="title"><a
                                                        href="https://plantzone.dexignzone.com/xhtml/shop-list.html">TallStalk
                                                        Gardens (m)</a></h2>
                                                <span class="price">
                                            $759
                                            <del>$1199</del>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Other sections follow similar updates -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom plant row content -->
            <div class="plant-row">
                <div class="tag-slider style-1 wow fadeInUp" data-wow-delay="0.2s" id="tagSlider"
                     style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                    <div class="item-wrap">
                        <div class="item"><span class="plant-text">Vườn</span></div>
                        <div class="item"><span class="plant-text">An</span></div>
                        <!-- Repeated items omitted for brevity -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Products  Section Start-->
        <section class="content-inner">
            <div class="container">
                <div class="row text-center m-auto">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-head style-1 m-b30 wow fadeInUp" data-wow-delay="0.2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                            <div class="left-content">
                                <h2 class="title">Most popular products</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="site-filters clearfix align-items-center wow fadeInUp m-b50" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                            <ul class="filters" data-bs-toggle="buttons">
                                <li class="btn active">
                                    <input type="radio">
                                    <a href="javascript:void(0);">Trees</a>
                                </li>
                                <li data-filter=".shrubs" class="btn">
                                    <input type="radio">
                                    <a href="javascript:void(0);">Shrubs</a>
                                </li>
                                <li data-filter=".herbs" class="btn">
                                    <input type="radio">
                                    <a href="javascript:void(0);">Herbs</a>
                                </li>
                                <li data-filter=".vines" class="btn">
                                    <input type="radio">
                                    <a href="javascript:void(0);">Vines</a>
                                </li>
                                <li data-filter=".ferns" class="btn">
                                    <input type="radio">
                                    <a href="javascript:void(0);">Ferns</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <ul id="masonry" class="row g-xl-4 g-3" style="position: relative; height: 907.2px;">
                        <li class="card-container col-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 herbs wow fadeInUp" data-wow-delay="0.6s" style="position: absolute; left: 0px; top: 0px; visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                            <div class="shop-card">
                                <div class="dz-media">
                                    <img src="{{ asset('shop/images/1(1).png') }}" alt="image">
                                    <div class="shop-meta">
                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                            <i class="icon feather icon-heart dz-heart"></i>
                                            <i class="icon feather icon-heart-on dz-heart-fill"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-primary meta-icon dz-wishicon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="flaticon flaticon-eye d-md-none d-block"></i>
                                            <span class="d-md-block d-none"><i class="flaticon flaticon-eye"></i></span>
                                        </a>
                                        <div class="btn btn-primary meta-icon dz-carticon">
                                            <i class="flaticon flaticon-basket"></i>
                                            <i class="flaticon flaticon-basket-on dz-heart-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="dz-content">
                                    <h2 class="title"><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">Vineyard Reach (m)</a></h2>
                                    <span class="price">
                                $1099
                                <del>$659</del>
                            </span>
                                </div>
                            </div>
                        </li>
                        <!-- Tương tự cho các phần tử khác -->
                        <li class="card-container col-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 shrubs wow fadeInUp" data-wow-delay="0.8s" style="position: absolute; left: 330px; top: 0px; visibility: hidden; animation-delay: 0.8s; animation-name: none;">
                            <div class="shop-card">
                                <div class="dz-media">
                                    <img src="{{ asset('shop/images/2(1).png') }}" alt="image">
                                    <div class="shop-meta">
                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                            <i class="icon feather icon-heart dz-heart"></i>
                                            <i class="icon feather icon-heart-on dz-heart-fill"></i>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-primary meta-icon dz-wishicon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="flaticon flaticon-eye d-md-none d-block"></i>
                                            <span class="d-md-block d-none"><i class="flaticon flaticon-eye"></i></span>
                                        </a>
                                        <div class="btn btn-primary meta-icon dz-carticon">
                                            <i class="flaticon flaticon-basket"></i>
                                            <i class="flaticon flaticon-basket-on dz-heart-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="dz-content">
                                    <h2 class="title"><a href="https://plantzone.dexignzone.com/xhtml/shop-list.html">TallStalk Gardens (m)</a></h2>
                                    <span class="price">
                                <del>$659</del>
                                $1099
                            </span>
                                </div>
                            </div>
                        </li>
                        <!-- Tiếp tục cập nhật các phần tử khác với hàm asset() -->
                        <!-- Đối với các phần tử khác, thay đổi đường dẫn hình ảnh để phù hợp -->
                    </ul>
                </div>
            </div>
        </section>

        <!-- Products Section Start-->

        <!-- Blog Start -->
        @include('components.blog')
        <!-- Blog End -->

        <!-- Newsletter Start-->
        <section class="content-inner-1  overflow-hidden position-relative border-top">
            <div class="collection1 style-1 up-down">
                <img src="{{ asset('shop/images/1(4).png') }}" alt="">
            </div>
            <div class="collection3 style-1 up-down">
                <img src="{{ asset('shop/images/2(4).png') }}" alt="">
            </div>
            <div class="container">
                <div class="section-head style-1 d-block wow fadeInUp text-center" data-wow-delay="0.1s"
                     style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                    <div class="max-w900 mx-auto">
                        <h2 class="title mb-4">Subscribe Newsletter &amp; Get Plant News</h2>
                    </div>
                </div>
                <form class="dzSubscribe style-2" action="{{ url('shop/script/mailchamp.php') }}" method="post">
                    <div class="dzSubscribeMsg"></div>
                    <div class="form-group">
                        <div class="input-group mb-0">
                            <input name="dzEmail" required="required" type="email" class="form-control h-70"
                                   placeholder="Your Email Address">
                            <div class="sub-btn">
                                <button name="submit" value="Submit" type="submit" class="btn btn-secondary">Subscribe Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <!-- Newsletter End -->

        <!-- Feature Box -->
        <div class="content-inner py-0 image-wrapper">
            <div class="container-fluid px-0">
                <div class="row gx-0">
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                        <div class="insta-post dz-media box-hover">
                            <img src="{{ asset('shop/images/1(5).png') }}" alt="">
                            <a href="https://www.instagram.com/dexignzone/" class="instagram-link" target="_blank">
                                <div class="follow-link">
                                    <div class="follow-link-icon">
                                        <img src="{{ asset('shop/images/insta-follow.png') }}" alt="">
                                    </div>
                                    <div class="follow-link-content">
                                        <h6>Share with #PlantZone</h6>
                                        <p class="m-0">Follow <span>@PlantZone </span>for inspiration.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                        <div class="insta-post dz-media box-hover">
                            <img src="{{ asset('shop/images/2(5).png') }}" alt="">
                            <a href="https://www.instagram.com/dexignzone/" class="instagram-link" target="_blank">
                                <div class="follow-link">
                                    <div class="follow-link-icon">
                                        <img src="{{ asset('shop/images/insta-follow.png') }}" alt="">
                                    </div>
                                    <div class="follow-link-content">
                                        <h6>Share with #PlantZone</h6>
                                        <p class="m-0">Follow <span>@PlantZone </span>for inspiration.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                        <div class="insta-post dz-media box-hover">
                            <img src="{{ asset('shop/images/3(4).png') }}" alt="">
                            <a href="https://www.instagram.com/dexignzone/" class="instagram-link" target="_blank">
                                <div class="follow-link">
                                    <div class="follow-link-icon">
                                        <img src="{{ asset('shop/images/insta-follow.png') }}" alt="">
                                    </div>
                                    <div class="follow-link-content">
                                        <h6>Share with #PlantZone</h6>
                                        <p class="m-0">Follow <span>@PlantZone </span>for inspiration.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                        <div class="insta-post dz-media box-hover">
                            <img src="{{ asset('shop/images/4(3).png') }}" alt="">
                            <a href="https://www.instagram.com/dexignzone/" class="instagram-link" target="_blank">
                                <div class="follow-link">
                                    <div class="follow-link-icon">
                                        <img src="{{ asset('shop/images/insta-follow.png') }}" alt="">
                                    </div>
                                    <div class="follow-link-content">
                                        <h6>Share with #PlantZone</h6>
                                        <p class="m-0">Follow <span>@PlantZone </span>for inspiration.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                        <div class="insta-post dz-media box-hover">
                            <img src="{{ asset('shop/images/5(2).png') }}" alt="">
                            <a href="https://www.instagram.com/dexignzone/" class="instagram-link" target="_blank">
                                <div class="follow-link">
                                    <div class="follow-link-icon">
                                        <img src="{{ asset('shop/images/insta-follow.png') }}" alt="">
                                    </div>
                                    <div class="follow-link-content">
                                        <h6>Share with #PlantZone</h6>
                                        <p class="m-0">Follow <span>@PlantZone </span>for inspiration.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-4 wow fadeIn" data-wow-delay="0.6s" style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                        <div class="insta-post dz-media box-hover">
                            <img src="{{ asset('shop/images/6(1).png') }}" alt="">
                            <a href="https://www.instagram.com/dexignzone/" class="instagram-link" target="_blank">
                                <div class="follow-link">
                                    <div class="follow-link-icon">
                                        <img src="{{ asset('shop/images/insta-follow.png') }}" alt="">
                                    </div>
                                    <div class="follow-link-content">
                                        <h6>Share with #PlantZone</h6>
                                        <p class="m-0">Follow <span>@PlantZone </span>for inspiration.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature Box End -->

    </div>

@endsection
