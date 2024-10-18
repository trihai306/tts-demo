<div class="col-12 tab-content shop-" id="pills-tabContent">

    <div class="tab-pane fade " id="tab-list-list" role="tabpanel"
         aria-labelledby="tab-list-list-btn">
        <div class="row">

            @foreach($products as $product)
                <div class="col-md-12 col-sm-12 col-xxxl-6">
                    <div class="dz-shop-card style-2">
                        <div class="dz-media">
                            <!-- Dynamically load the product image -->
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                        </div>
                        <div class="dz-content">
                            <div class="dz-header">
                                <div>
                                    <!-- Display the product name dynamically -->
                                    <h2 class="title mb-0">
                                        <a href="">
                                            {{ $product->name }}
                                        </a>
                                    </h2>
                                    <ul class="dz-tags">
                                        <!-- Assuming you have product categories or tags -->
                                        <li><a href="">{{ $product->category ? $product->category->name : "null" }},</a></li>
                                    </ul>
                                </div>
                                <div class="review-num">
                                    <ul class="dz-rating">
                                        <!-- Assume you have a 'rating' field -->
                                        @for($i = 0; $i < 5; $i++)
                                            <li class="{{ $i < $product->rating ? 'star-fill' : '' }}">
                                                <i class="flaticon-star-1"></i>
                                            </li>
                                        @endfor
                                    </ul>
                                    <span><a href="javascript:void(0);"> {{ $product->reviews_count }} Reviews</a></span>
                                </div>
                            </div>
                            <div class="dz-body">
                                <div class="dz-rating-box">
                                    <div>
                                        <!-- Display the product short description dynamically -->
                                        <p class="dz-para">{{ $product->short_description }}</p>
                                    </div>
                                </div>
                                <div class="rate">
                                    <div class="d-flex align-items-center mb-xl-3 mb-2">
                                        <div class="meta-content m-0">
                                            <span class="price-name">Price</span>
                                            <span class="price">
                                    <!-- Show special price if available, otherwise show regular price -->
                                    @if($product->special_price && $product->special_price_from <= now() && $product->special_price_to >= now())
                                                    ${{ number_format($product->special_price, 2) }}
                                                    <del>${{ number_format($product->price, 2) }}</del>
                                                @else
                                                    ${{ number_format($product->price, 2) }}
                                                @endif
                                </span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <!-- Add to Cart button -->
                                        <a href="" class="btn btn-secondary btn-md btn-icon">
                                            <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                            <span class="d-md-block d-none">Add to cart</span>
                                        </a>
                                        <!-- Favorite button -->
                                        <div class="bookmark-btn style-1">
                                            <input class="form-check-input" type="checkbox" id="favoriteCheck{{ $product->id }}">
                                            <label class="form-check-label" for="favoriteCheck{{ $product->id }}">
                                                <i class="fa-solid fa-heart"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

                <div class="pagination-links">
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>


        </div>
    </div>


    <div class="tab-pane fade" id="tab-list-column" role="tabpanel"
         aria-labelledby="tab-list-column-btn">
        <div class="row gx-xl-4 g-3 mb-xl-0 mb-md-0 mb-3">
            @foreach($products as $product)
                <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                    <div class="shop-card">
                        <div class="dz-media">
                            <!-- Display the product image dynamically -->
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                            <div class="shop-meta">
                                <div class="btn btn-primary meta-icon dz-wishicon">
                                    <i class="icon feather icon-heart dz-heart"></i>
                                    <i class="icon feather icon-heart-on dz-heart-fill"></i>
                                </div>
                                <a href="javascript:void(0);"
                                   class="btn btn-primary meta-icon dz-wishicon"
                                   data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                            <!-- Display the product name dynamically -->
                            <h2 class="title"><a href="">{{ $product->name }}</a></h2>

                            <!-- Display the product price and special price (if available) -->
                            <span class="price">
                                @if($product->special_price && $product->special_price_from <= now() && $product->special_price_to >= now())
                                    ${{ number_format($product->special_price, 2) }}
                                    <del>${{ number_format($product->price, 2) }}</del>
                                @else
                                    ${{ number_format($product->price, 2) }}
                                @endif
                             </span>
                        </div>
                    </div>
                </div>
            @endforeach

                <div class="pagination-links">
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>

        </div>
    </div>


    <div class="tab-pane fade active show" id="tab-list-grid" role="tabpanel"
         aria-labelledby="tab-list-grid-btn">
        <div class="row gx-xl-4 g-3">

            @foreach($products as $product)

                <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-6 m-md-b30 m-b30">
                    <div class="shop-card style-1">
                        <div class="dz-media">
                            <!-- Display the product image dynamically -->
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                        </div>
                        <div class="shop-meta">
                            <a href="javascript:void(0);" class="btn btn-primary btn-md w-100"
                               data-bs-toggle="modal" data-bs-target="#show_product_detail"
                               data-name="{{ $product->name }}"
                               data-price="{{ $product->price }}"
                               data-special-price="{{ $product->special_price }}"
                               data-image="{{ asset($product->image) }}"
                               data-description="{{ $product->description }}"
                            >
                                <i class="fa-solid fa-eye"></i>
                                <span class="d-lg-block d-none">Quick View</span>
                            </a>
                            <div class="btn btn-primary meta-icon dz-refresh">
                                <i class="flaticon flaticon-refresh dz-refresh"></i>
                                <i class="flaticon flaticon-refresh-on dz-refresh-fill"></i>
                            </div>
                            <div class="btn btn-primary meta-icon dz-wishicon">
                                <i class="icon feather icon-heart dz-heart"></i>
                                <i class="icon feather icon-heart-on dz-heart-fill"></i>
                            </div>
                            <button class="btn btn-primary meta-icon dz-carticon add-to-cart"
                                    data-id="{{ $product->id }}"

                            >
                                <i class="flaticon flaticon-shopping-cart-1 dz-cart"></i>
                                <i class="flaticon flaticon-shopping-cart-1-on dz-cart-fill"></i>
                            </button>
                        </div>
                        <div class="dz-content">
                            <h2 class="title"><a href="">{{ $product->name }}</a></h2>

                            <span class="price">
                                @if($product->special_price && $product->special_price_from <= now() && $product->special_price_to >= now())
                                    ${{ number_format($product->special_price, 2) }}
                                    <del>${{ number_format($product->price, 2) }}</del>
                                @else
                                    ${{ number_format($product->price, 2) }}
                                @endif
                            </span>
                        </div>
                    </div>
                </div>

            @endforeach

                <div>
                    @if ($products->total() > 0)
                        <p>Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }} results</p>
                    @else
                        <p>No results found.</p>
                    @endif
                </div>

                <div class="pagination-links">
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>

        </div>
    </div>
</div>


<div class="modal quick-view-modal fade" id="show_product_detail" tabindex="-1" aria-hidden="true">
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
