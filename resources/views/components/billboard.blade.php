<section id="billboard" class="position-relative d-flex align-items-center py-5 bg-light-gray" style="background-image: url(images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="position-absolute end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next main-slider-button-next">
        <svg class="chevron-forward-circle d-flex justify-content-center align-items-center border rounded-3 p-2" width="55" height="55">
            <use xlink:href="#alt-arrow-right-outline"></use>
        </svg>
    </div>
    <div class="position-absolute start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev main-slider-button-prev">
        <svg class="chevron-back-circle d-flex justify-content-center align-items-center border rounded-3 p-2" width="55" height="55">
            <use xlink:href="#alt-arrow-left-outline"></use>
        </svg>
    </div>
    <div class="swiper main-swiper">
        <div class="swiper-wrapper d-flex align-items-center">
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-5 offset-md-1">
                            <div class="banner-content">
                                <h2>GoPro hero9 Black</h2>
                                <p>Limited stocks available. Grab it now!</p>
                                <a href="shop.html" class="btn mt-3">Shop Collection</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="image-holder">
                                <img src=" {{asset('shoplite/images/banner-image.png')}}" class="img-fluid" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-5 offset-md-1">
                            <div class="banner-content">
                                <h2>Iphone 15 Pro Max</h2>
                                <p>Discount available. Grab it now!</p>
                                <a href="shop.html" class="btn mt-3">Shop Product</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="image-holder">
                                <img src="{{asset('shoplite/images/banner-image1.png')}}" class="img-fluid" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-5 offset-md-1">
                            <div class="banner-content">
                                <h2>Macbook Collection</h2>
                                <p>Limited stocks available. Grab it now!</p>
                                <a href="shop.html" class="btn mt-3">Shop Collection</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="image-holder">
                                <img src="{{asset('shoplite/images/banner-image2.png')}}" class="img-fluid" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
