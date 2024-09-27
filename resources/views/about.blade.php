@extends('layouts.layout')
@section('content')
    @include('components.hero-section', ['title' => 'About Us'])
    @include('components.services')
    <section id="about-us" class="padding-large pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-holder position-relative mb-4 d-flex align-items-center justify-content-center">
                        <div class="image">
                            <img src="{{asset('shoplite/images/khu vuon.webp')}}" alt="single" class="img-fluid rounded-3 single-image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail ps-md-5 mt-5">
                        <div class="display-header">
                            <h3 class="mb-3">Vườn An - Mang Cả Thiên Nhiên Vào Từng Góc Nhỏ</h3>
                            <p class="pb-1">
                                Vườn An không chỉ là nơi cung cấp cây cảnh, mà còn là người bạn đồng hành mang lại sự bình yên và tươi mới cho không gian sống của bạn. Chúng tôi tự hào là thương hiệu tiên phong trong việc lựa chọn và chăm sóc những loài cây đặc biệt, mang đến cho khách hàng không chỉ là một món trang trí xanh mát, mà còn là nguồn cảm hứng và sự thư giãn tuyệt đối. Từ những loại cây bonsai tinh tế đến những chậu hoa độc đáo, mỗi sản phẩm đều được chăm chút kỹ lưỡng để đảm bảo chất lượng và sự hoàn mỹ.
                            </p>
                            <p>
                                Với sự hiểu biết sâu sắc và niềm đam mê cháy bỏng, Vườn An tin rằng mỗi loài cây đều chứa đựng một câu chuyện, một thông điệp riêng. Chúng tôi không chỉ mang đến cho bạn một chậu cây, mà còn là một phần của thiên nhiên, giúp bạn kết nối sâu sắc hơn với môi trường sống quanh mình. Sự hiện diện của cây xanh sẽ giúp không gian trở nên hài hòa, giảm bớt căng thẳng và mang đến sự thư giãn cho tâm hồn. Hãy để Vườn An cùng bạn tạo nên một góc vườn xanh mát, tràn đầy sức sống và năng lượng tích cực.
                            </p>
                            <a href="shop.html" class="btn mt-3">Khám phá thêm</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
