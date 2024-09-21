<section id="categories">
    <div class="container">
        <div class="section-title overflow-hidden mb-4">
            <h3 class="d-flex align-items-center">{{__('Categories')}}</h3>
        </div>
        <div class="row justify-content-center">
            @foreach($categories as $category)
                <div class="col-md-2">
                    <div class="card text-center py-4 mb-3 border rounded-3">
                        <a href="{{$category->slug}}">
                            <img src="{{asset('shoplite/images/cat-item1.png')}}" class="img-fluid" alt="cart item">
                            <h5 class="mt-2"><a href="{{$category->slug}}">{{$category->name}}</a></h5>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
