<section id="billboard" class="position-relative d-flex align-items-center py-5 bg-light-gray" style="background-image: url({{asset('shoplite/images/banner-image-bg.jpg')}}); background-size: cover; background-repeat: no-repeat; background-position: center;">
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

            <!-- Banner 1: Đa dạng các loại cây -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-5 offset-md-1">
                            <div class="banner-content">
                                <h2>Khám phá thế giới cây cảnh</h2>
                                <p>Từ cây xương rồng đến các loại cây cảnh hiếm, Vườn An cung cấp đa dạng các loại cây giúp không gian của bạn thêm xanh mát. Tìm cây yêu thích ngay hôm nay!</p>
                                <a href="shop.html" class="btn mt-3">Khám phá bộ sưu tập</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="image-holder">
                                <img src="{{asset('shoplite/images/banner-1.png')}}" class="img-fluid" alt="Đa dạng cây cảnh">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner 2: Nhân viên tận tâm -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-5 offset-md-1">
                            <div class="banner-content">
                                <h2>Gặp gỡ đội ngũ tận tâm</h2>
                                <p>Đội ngũ nhân viên giàu kinh nghiệm của chúng tôi sẵn sàng hỗ trợ bạn chọn lựa cây phù hợp cho ngôi nhà hoặc văn phòng. Sự hài lòng của bạn là ưu tiên hàng đầu của chúng tôi!</p>
                                <a href="about-us.html" class="btn mt-3">Tìm hiểu về chúng tôi</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="image-holder">
                                <img src="{{asset('shoplite/images/banner-2.png')}}" class="img-fluid" alt="Nhân viên tận tâm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner 3: Hỗ trợ khách hàng -->
            <div class="swiper-slide">
                <div class="container">
                    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                        <div class="col-md-5 offset-md-1">
                            <div class="banner-content">
                                <h2>Chúng tôi luôn bên bạn</h2>
                                <p>Có thắc mắc? Cần tư vấn? Đội ngũ hỗ trợ khách hàng của chúng tôi sẵn sàng giúp bạn chăm sóc cây hiệu quả, đảm bảo cây luôn xanh tốt!</p>
                                <a href="contact.html" class="btn mt-3">Liên hệ ngay</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="image-holder">
                                <img src="{{asset('shoplite/images/banner-3.png')}}" class="img-fluid" alt="Hỗ trợ khách hàng">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
