@extends('layouts.layout')
@section('content')
    @include('components.billboard')
    @include('components.services')
    <livewire:categories />
    <section id="best-selling-items" class="position-relative padding-large">
        <div class="container">
            <div class="section-title overflow-hidden mb-4">
                <h3 class="d-flex align-items-center">Best selling items</h3>
            </div>
            <div class="position-absolute top-50 end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next product-slider-button-next">
                <svg class="chevron-forward-circle d-flex justify-content-center align-items-center border rounded-3 p-2"
                     width="55" height="55">
                    <use xlink:href="#alt-arrow-right-outline"></use>
                </svg>
            </div>
            <div
                class="position-absolute top-50 start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev product-slider-button-prev">
                <svg class="chevron-back-circle d-flex justify-content-center align-items-center border rounded-3 p-2"
                     width="55" height="55">
                    <use xlink:href="#alt-arrow-left-outline"></use>
                </svg>
            </div>
            <div class="swiper product-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card position-relative text-center py-4 border rounded-3">
                            <img src="{{asset('shoplite/images/product-item1.png')}}" class="img-fluid" alt="product item">
                            <h5 class="mt-2"><a href="single-product.html">IPad (9th Gen)</a></h5>
                            <span class="price text-primary fw-light mb-2">$870</span>
                            <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Tooltip on top">
                                    <svg class="cart">
                                        <use xlink:href="#cart"></use>
                                    </svg>
                                </button>
                                <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card position-relative text-center py-4 border rounded-3">
                            <img src="{{asset('shoplite/images/product-item2.png')}}" class="img-fluid" alt="product item">
                            <h5 class="mt-2"><a href="single-product.html">Drone With Camera</a></h5>
                            <span class="price text-primary fw-light mb-2">$600</span>
                            <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                <a href="#" class="btn btn-dark">
                                    <svg class="cart">
                                        <use xlink:href="#cart"></use>
                                    </svg>
                                </a>
                                <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card position-relative text-center py-4 border rounded-3">
                            <img src="{{asset('shoplite/images/product-item3.png')}}" class="img-fluid" alt="product item">
                            <h5 class="mt-2"><a href="single-product.html">Apple Watch (2nd Gen)</a></h5>
                            <span class="price text-primary fw-light mb-2">$400</span>
                            <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                <a href="#" class="btn btn-dark">
                                    <svg class="cart">
                                        <use xlink:href="#cart"></use>
                                    </svg>
                                </a>
                                <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card position-relative text-center py-4 border rounded-3">
                            <img src="{{asset('shoplite/images/product-item4.png')}}" class="img-fluid" alt="product item">
                            <h5 class="mt-2"><a href="single-product.html">Ultra HD TV</a></h5>
                            <span class="price text-primary fw-light mb-2">$2000</span>
                            <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                <a href="#" class="btn btn-dark">
                                    <svg class="cart">
                                        <use xlink:href="#cart"></use>
                                    </svg>
                                </a>
                                <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card position-relative text-center py-4 border rounded-3">
                            <img src="{{asset('shoplite/images/product-item5.png')}}" class="img-fluid" alt="product item">
                            <h5 class="mt-2"><a href="single-product.html">Bluetooth Speaker</a></h5>
                            <span class="price text-primary fw-light mb-2">$75</span>
                            <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                <a href="#" class="btn btn-dark">
                                    <svg class="cart">
                                        <use xlink:href="#cart"></use>
                                    </svg>
                                </a>
                                <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card position-relative text-center py-4 border rounded-3">
                            <img src="{{asset('shoplite/images/product-item6.png')}}" class="img-fluid" alt="product item">
                            <h5 class="mt-2"><a href="single-product.html">White Headset</a></h5>
                            <span class="price text-primary fw-light mb-2">$99</span>
                            <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                <a href="#" class="btn btn-dark">
                                    <svg class="cart">
                                        <use xlink:href="#cart"></use>
                                    </svg>
                                </a>
                                <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card position-relative text-center py-4 border rounded-3">
                            <img src="{{asset('shoplite/images/product-item7.png')}}" class="img-fluid" alt="product item">
                            <h5 class="mt-2"><a href="single-product.html">Black Bluetooth Speaker</a></h5>
                            <span class="price text-primary fw-light mb-2">$80</span>
                            <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                <a href="#" class="btn btn-dark">
                                    <svg class="cart">
                                        <use xlink:href="#cart"></use>
                                    </svg>
                                </a>
                                <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card position-relative text-center py-4 border rounded-3">
                            <img src="{{asset('shoplite/images/product-item8.png')}}" class="img-fluid" alt="product item">
                            <h5 class="mt-2"><a href="single-product.html">Large Speaker</a></h5>
                            <span class="price text-primary fw-light mb-2">$450</span>
                            <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                <a href="#" class="btn btn-dark">
                                    <svg class="cart">
                                        <use xlink:href="#cart"></use>
                                    </svg>
                                </a>
                                <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card position-relative text-center py-4 border rounded-3">
                            <img src="{{asset('shoplite/images/product-item9.png')}}" class="img-fluid" alt="product item">
                            <h5 class="mt-2"><a href="single-product.html">White EarPods</a></h5>
                            <span class="price text-primary fw-light mb-2">$600</span>
                            <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                <a href="#" class="btn btn-dark">
                                    <svg class="cart">
                                        <use xlink:href="#cart"></use>
                                    </svg>
                                </a>
                                <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card position-relative text-center py-4 border rounded-3">
                            <img src="{{asset('shoplite/images/product-item10.png')}}" class="img-fluid" alt="product item">
                            <h5 class="mt-2"><a href="single-product.html">Laptop</a></h5>
                            <span class="price text-primary fw-light mb-2">$1200</span>
                            <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                                <a href="#" class="btn btn-dark">
                                    <svg class="cart">
                                        <use xlink:href="#cart"></use>
                                    </svg>
                                </a>
                                <a href="#" class="btn btn-dark">
                    <span>
                      <svg class="wishlist">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="limited-offer" class="bg-light padding-large">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 text-center">
                    <div class="image-holder">
                        <img src="{{asset('shoplite/images/banner-image3.png')}}" class="img-fluid" alt="banner">
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <h2>30% Discount on apple collection</h2>
                    <div id="countdown-clock" class="text-dark d-flex align-items-center my-3">
                        <div class="time d-grid pe-3">
                            <span class="days fs-1 fw-normal"></span>
                            <small>Days</small>
                        </div>
                        <span class="fs-1 text-primary">:</span>
                        <div class="time d-grid pe-3 ps-3">
                            <span class="hours fs-1 fw-normal"></span>
                            <small>Hrs</small>
                        </div>
                        <span class="fs-1 text-primary">:</span>
                        <div class="time d-grid pe-3 ps-3">
                            <span class="minutes fs-1 fw-normal"></span>
                            <small>Min</small>
                        </div>
                        <span class="fs-1 text-primary">:</span>
                        <div class="time d-grid ps-3">
                            <span class="seconds fs-1 fw-normal"></span>
                            <small>Sec</small>
                        </div>
                    </div>
                    <a href="shop.html" class="btn mt-3">Shop Collection</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="items-listing" class="padding-large">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="featured border rounded-3 p-4">
                        <div class="section-title overflow-hidden mb-4 mt-2">
                            <h3 class="d-flex flex-column mb-0">Featured</h3>
                        </div>
                        <div class="items-lists">
                            <div class="item d-flex">
                                <img src="{{asset('shoplite/images/item-image1.jpg')}}" class="img-fluid rounded-3"
                                     alt="product item">
                                <div class="item-content ms-3">
                                    <h5 class="mt-2"><a href="single-product.html">Wireless headset</a></h5>
                                    <span class="price text-primary fw-light mb-2">$500</span>
                                </div>
                            </div>
                            <hr class="gray-400">
                            <div class="item d-flex">
                                <img src="{{asset('shoplite/images/item-image2.jpg')}}" class="img-fluid rounded-3"
                                     alt="product item">
                                <div class="item-content ms-3">
                                    <h5 class="mt-2"><a href="single-product.html">Iphone x Pro Max</a></h5>
                                    <span class="price text-primary fw-light mb-2">$820</span>
                                </div>
                            </div>
                            <hr>
                            <div class="item d-flex">
                                <img src="{{asset('shoplite/images/item-image3.jpg')}}" class="img-fluid rounded-3"
                                     alt="product item">
                                <div class="item-content ms-3">
                                    <h5 class="mt-2"><a href="single-product.html">Iphone 11 Pro</a></h5>
                                    <span class="price text-primary fw-light mb-2">$960</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="latest-items border rounded-3 p-4">
                        <div class="section-title overflow-hidden mb-4 mt-2">
                            <h3 class="d-flex flex-column mb-0">Latest items</h3>
                        </div>
                        <div class="items-lists">
                            <div class="item d-flex">
                                <img src="{{asset('shoplite/images/item-image4.jpg')}}" class="img-fluid rounded-3"
                                     alt="product item">
                                <div class="item-content ms-3">
                                    <h5 class="mt-2"><a href="single-product.html">Apple airPod</a></h5>
                                    <span class="price text-primary fw-light mb-2">$450</span>
                                </div>
                            </div>
                            <hr class="gray-400">
                            <div class="item d-flex">
                                <img src="{{asset('shoplite/images/item-image5.jpg')}}" class="img-fluid rounded-3"
                                     alt="product item">
                                <div class="item-content ms-3">
                                    <h5 class="mt-2"><a href="single-product.html">Screen touch watch</a></h5>
                                    <span class="price text-primary fw-light mb-2">$750</span>
                                </div>
                            </div>
                            <hr>
                            <div class="item d-flex">
                                <img src="{{asset('shoplite/images/item-image6.jpg')}}" class="img-fluid rounded-3"
                                     alt="product item">
                                <div class="item-content ms-3">
                                    <h5 class="mt-2"><a href="single-product.html">Digital watch</a></h5>
                                    <span class="price text-primary fw-light mb-2">$660</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="best-reviewed border rounded-3 p-4">
                        <div class="section-title overflow-hidden mb-4 mt-2">
                            <h3 class="d-flex flex-column mb-0">Best reviewed</h3>
                        </div>
                        <div class="items-lists">
                            <div class="item d-flex">
                                <img src="{{asset('shoplite/images/item-image7.jpg')}}" class="img-fluid rounded-3"
                                     alt="product item">
                                <div class="item-content ms-3">
                                    <h5 class="mt-2"><a href="single-product.html">Wireless Joysticks</a></h5>
                                    <span class="price text-primary fw-light mb-2">$350</span>
                                </div>
                            </div>
                            <hr class="gray-400">
                            <div class="item d-flex">
                                <img src="{{asset('shoplite/images/item-image8.jpg')}}" class="img-fluid rounded-3"
                                     alt="product item">
                                <div class="item-content ms-3">
                                    <h5 class="mt-2"><a href="single-product.html">Apple White AirPod</a></h5>
                                    <span class="price text-primary fw-light mb-2">$330</span>
                                </div>
                            </div>
                            <hr>
                            <div class="item d-flex">
                                <img src="{{asset('shoplite/images/item-image9.jpg')}}" class="img-fluid rounded-3"
                                     alt="product item">
                                <div class="item-content ms-3">
                                    <h5 class="mt-2"><a href="single-product.html">Gimbal stabilizer</a></h5>
                                    <span class="price text-primary fw-light mb-2">$920</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="on-sale border rounded-3 p-4">
                        <div class="section-title overflow-hidden mb-4 mt-2">
                            <h3 class="d-flex flex-column mb-0">On sale</h3>
                        </div>
                        <div class="items-lists">
                            <div class="item d-flex">
                                <img src="{{asset('shoplite/images/item-image10.jpg')}}" class="img-fluid rounded-3"
                                     alt="product item">
                                <div class="item-content ms-3">
                                    <h5 class="mt-2"><a href="single-product.html">Iphone 15 pro max</a></h5>
                                    <span class="price text-primary fw-light mb-2"><s class="fs-5 fw-lighter text-muted">$1666</s> $999</span>
                                </div>
                            </div>
                            <hr class="gray-400">
                            <div class="item d-flex">
                                <img src="{{asset('shoplite/images/item-image11.jpg')}}" class="img-fluid rounded-3"
                                     alt="product item">
                                <div class="item-content ms-3">
                                    <h5 class="mt-2"><a href="single-product.html">White AirPods</a></h5>
                                    <span class="price text-primary fw-light mb-2"><s class="fs-5 fw-lighter text-muted">$500</s> $410</span>
                                </div>
                            </div>
                            <hr>
                            <div class="item d-flex">
                                <img src="{{asset('shoplite/images/item-image12.jpg')}}" class="img-fluid rounded-3"
                                     alt="product item">
                                <div class="item-content ms-3">
                                    <h5 class="mt-2"><a href="single-product.html">CCTV camera</a></h5>
                                    <span class="price text-primary fw-light mb-2"><s class="fs-5 fw-lighter text-muted">$600</s> $500</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.customers-reviews')

    <livewire:latest-posts />
{{--    <livewire:brands />--}}
@endsection
