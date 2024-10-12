@extends('layouts.index')
@section('content')
    <div class="page-content">
        <div class="dz-bnr-inr">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                            <li class="breadcrumb-item">Shop Standard</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <section class="content-inner-3 pt-3 z-index-unset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-20 col-xl-3">
                        <div class="sticky-xl-top">
                            <a href="javascript:void(0);" class="panel-close-btn">
                                <svg width="35" height="35" viewBox="0 0 51 50" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M37.748 12.5L12.748 37.5" stroke="white" stroke-width="1.25"
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12.748 12.5L37.748 37.5" stroke="white" stroke-width="1.25"
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                            <div class="shop-filter mt-xl-2 mt-0">
                                <aside>
                                    <div class="d-flex align-items-center justify-content-between m-b30">
                                        <h6 class="title mb-0 d-flex">
                                            <i class="flaticon-filter me-2"></i>
                                            Filter
                                        </h6>
                                    </div>
                                    <div class="widget widget_search">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzSearch" required="required" type="search"
                                                       class="form-control" placeholder="Search Here">
                                                <div class="input-group-addon">
                                                    <button name="submit" value="Submit" type="submit" class="btn">
                                                        <i class="icon feather icon-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget widget_categories">
                                        <h3 class="widget-title">Product Category</h3>
                                        <ul>
                                            <li class="cat-item cat-item-26">
                                                <div class="custom-control custom-checkbox d-flex">
                                                    <input type="checkbox" class="form-check-input square"
                                                           id="basic_checkbox_01">
                                                    <label class="form-check-label text-start flex-1"
                                                           for="basic_checkbox_01">Bonsai</label>(10)
                                                </div>
                                            </li>
                                            <li class="cat-item cat-item-26">
                                                <div class="custom-control custom-checkbox d-flex">
                                                    <input type="checkbox" class="form-check-input square"
                                                           id="basic_checkbox_02">
                                                    <label class="form-check-label text-start flex-1"
                                                           for="basic_checkbox_02">House Plants</label>(5)
                                                </div>
                                            </li>
                                            <li class="cat-item cat-item-26">
                                                <div class="custom-control custom-checkbox d-flex">
                                                    <input type="checkbox" class="form-check-input square"
                                                           id="basic_checkbox_03">
                                                    <label class="form-check-label text-start flex-1"
                                                           for="basic_checkbox_03">indoor Living</label>(17)
                                                </div>
                                            </li>
                                            <li class="cat-item cat-item-26">
                                                <div class="custom-control custom-checkbox d-flex">
                                                    <input type="checkbox" class="form-check-input square"
                                                           id="basic_checkbox_04">
                                                    <label class="form-check-label text-start flex-1"
                                                           for="basic_checkbox_04">Perennials</label>(13)
                                                </div>
                                            </li>
                                            <li class="cat-item cat-item-26">
                                                <div class="custom-control custom-checkbox d-flex">
                                                    <input type="checkbox" class="form-check-input square"
                                                           id="basic_checkbox_05">
                                                    <label class="form-check-label text-start flex-1"
                                                           for="basic_checkbox_05">Plant For Gift</label>(06)
                                                </div>
                                            </li>
                                            <li class="cat-item cat-item-26">
                                                <div class="custom-control custom-checkbox d-flex">
                                                    <input type="checkbox" class="form-check-input square"
                                                           id="basic_checkbox_06">
                                                    <label class="form-check-label text-start flex-1"
                                                           for="basic_checkbox_06">garden Tools</label>(17)
                                                </div>
                                            </li>
                                            <li class="cat-item cat-item-26">
                                                <div class="custom-control custom-checkbox d-flex">
                                                    <input type="checkbox" class="form-check-input square"
                                                           id="basic_checkbox_07">
                                                    <label class="form-check-label text-start flex-1"
                                                           for="basic_checkbox_07">Best Sellers</label>(13)
                                                </div>
                                            </li>
                                            <li class="cat-item cat-item-26">
                                                <div class="custom-control custom-checkbox d-flex">
                                                    <input type="checkbox" class="form-check-input square"
                                                           id="basic_checkbox_08">
                                                    <label class="form-check-label text-start flex-1"
                                                           for="basic_checkbox_08">Blossom Haven</label>(06)
                                                </div>
                                            </li>
                                            <li class="cat-item cat-item-26">
                                                <div class="custom-control custom-checkbox d-flex">
                                                    <input type="checkbox" class="form-check-input square"
                                                           id="basic_checkbox_09">
                                                    <label class="form-check-label text-start flex-1"
                                                           for="basic_checkbox_09">Small Plants</label>(22)
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="widget">
                                        <h3 class="widget-title">Price</h3>
                                        <div class="price-slide range-slider">
                                            <div class="price">
                                                <div class="range-slider style-1">
                                                    <div id="slider-tooltips"
                                                         class="mb-3 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                                        <div class="noUi-base">
                                                            <div class="noUi-connects">
                                                                <div class="noUi-connect"
                                                                     style="transform: translate(10%, 0px) scale(0.765, 1);"></div>
                                                            </div>
                                                            <div class="noUi-origin"
                                                                 style="transform: translate(-90%, 0px); z-index: 5;">
                                                                <div class="noUi-handle noUi-handle-lower"
                                                                     data-handle="0" tabindex="0" role="slider"
                                                                     aria-orientation="horizontal" aria-valuemin="0.0"
                                                                     aria-valuemax="346.0" aria-valuenow="40.0"
                                                                     aria-valuetext="40">
                                                                    <div class="noUi-touch-area"></div>
                                                                    <div class="noUi-tooltip">40.0</div>
                                                                </div>
                                                            </div>
                                                            <div class="noUi-origin"
                                                                 style="transform: translate(-13.5%, 0px); z-index: 4;">
                                                                <div class="noUi-handle noUi-handle-upper"
                                                                     data-handle="1" tabindex="0" role="slider"
                                                                     aria-orientation="horizontal" aria-valuemin="40.0"
                                                                     aria-valuemax="400.0" aria-valuenow="346.0"
                                                                     aria-valuetext="346">
                                                                    <div class="noUi-touch-area"></div>
                                                                    <div class="noUi-tooltip">346</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="example-val" id="slider-margin-value-min">Min Price: $40</span>
                                                    <span class="example-val" id="slider-margin-value-max">Max Price: $346</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget product-size">
                                        <h3 class="widget-title">Size</h3>
                                        <ul>
                                            <li class="cat-item cat-item-26">
                                                <div class="custom-control custom-checkbox d-flex">
                                                    <input type="checkbox" class="form-check-input square"
                                                           id="basic_checkbox_Small1">
                                                    <label class="form-check-label text-start flex-1"
                                                           for="basic_checkbox_Small1">Small</label>(10)
                                                </div>
                                            </li>
                                            <li class="cat-item cat-item-26">
                                                <div class="custom-control custom-checkbox d-flex">
                                                    <input type="checkbox" class="form-check-input square"
                                                           id="basic_checkbox_medium1">
                                                    <label class="form-check-label text-start flex-1"
                                                           for="basic_checkbox_medium1">Medium</label>(5)
                                                </div>
                                            </li>
                                            <li class="cat-item cat-item-26">
                                                <div class="custom-control custom-checkbox d-flex">
                                                    <input type="checkbox" class="form-check-input square"
                                                           id="basic_checkbox_large1">
                                                    <label class="form-check-label text-start flex-1"
                                                           for="basic_checkbox_large1">large</label>(17)
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="widget recent-posts-entry">
                                        <h3 class="widget-title">Featured Products</h3>
                                        <div class="widget-post-bx">
                                            <div class="widget-post clearfix">
                                                <div class="dz-media">
                                                    <a href="post-standard.html"><img
                                                            src="images/blog/recent-blog/pic1.jpg" alt="/"></a>
                                                </div>
                                                <div class="dz-info">
                                                    <h6 class="title"><a href="post-standard.html">Bacopa sutera cordata
                                                            (m)</a></h6>
                                                    <span class="price">$659 <del>$1299</del></span>
                                                </div>
                                            </div>
                                            <div class="widget-post clearfix">
                                                <div class="dz-media">
                                                    <a href="post-standard.html"><img
                                                            src="images/blog/recent-blog/pic2.jpg" alt="/"></a>
                                                </div>
                                                <div class="dz-info">
                                                    <h6 class="title"><a href="post-standard.html">Vineyard Reach
                                                            (m)</a></h6>
                                                    <span class="price">$700 <del>$1449</del></span>
                                                </div>
                                            </div>
                                            <div class="widget-post clearfix">
                                                <div class="dz-media">
                                                    <a href="post-standard.html"><img
                                                            src="images/blog/recent-blog/pic3.jpg" alt="/"></a>
                                                </div>
                                                <div class="dz-info">
                                                    <h6 class="title"><a href="post-standard.html">Long Vine Flora
                                                            (m)</a></h6>
                                                    <span class="price">$449 <del>$999</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget widget_tag_cloud">
                                        <h3 class="widget-title">Tags</h3>
                                        <div class="tagcloud">
                                            <a href="blog-tag.html">plants </a>
                                            <a href="blog-tag.html">Green Dreams</a>
                                            <a href="blog-tag.html">Seeds</a>
                                            <a href="blog-tag.html">Photo</a>
                                            <a href="blog-tag.html">capes</a>
                                            <a href="blog-tag.html">Urban Oasis</a>
                                            <a href="blog-tag.html">Fern Fantasy</a>
                                            <a href="blog-tag.html">Plant Paradise</a>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);"
                                       class="btn btn-lg font-14 btn-secondary btn-sharp btn-block text-uppercase">Reset
                                        ALL FILTERS</a>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="col-80 col-xl-9">
                        <div class="filter-wrapper">
                            <div class="filter-left-area">
                                <span>Showing 1–5 Of 50 Results</span>
                            </div>
                            <div class="filter-right-area">
                                <a href="javascript:void(0);" class="panel-btn me-2">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="20"
                                         height="20">
                                        <g id="Layer_28" data-name="Layer 28">
                                            <path
                                                d="M2.54,5H15v.5A1.5,1.5,0,0,0,16.5,7h2A1.5,1.5,0,0,0,20,5.5V5h2.33a.5.5,0,0,0,0-1H20V3.5A1.5,1.5,0,0,0,18.5,2h-2A1.5,1.5,0,0,0,15,3.5V4H2.54a.5.5,0,0,0,0,1ZM16,3.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z"></path>
                                            <path
                                                d="M22.4,20H18v-.5A1.5,1.5,0,0,0,16.5,18h-2A1.5,1.5,0,0,0,13,19.5V20H2.55a.5.5,0,0,0,0,1H13v.5A1.5,1.5,0,0,0,14.5,23h2A1.5,1.5,0,0,0,18,21.5V21h4.4a.5.5,0,0,0,0-1ZM17,21.5a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5v-2a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5Z"></path>
                                            <path
                                                d="M8.5,15h2A1.5,1.5,0,0,0,12,13.5V13H22.45a.5.5,0,1,0,0-1H12v-.5A1.5,1.5,0,0,0,10.5,10h-2A1.5,1.5,0,0,0,7,11.5V12H2.6a.5.5,0,1,0,0,1H7v.5A1.5,1.5,0,0,0,8.5,15ZM8,11.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z"></path>
                                        </g>
                                    </svg>
                                    Filter
                                </a>
                                <div class="form-group">
                                    <div class="dropdown bootstrap-select default-select"><select
                                            class="default-select">
                                            <option>Default sorting</option>
                                            <option>Popularity</option>
                                            <option>Average rating</option>
                                            <option>Latest</option>
                                            <option>Low to high</option>
                                            <option>high to Low</option>
                                        </select>
                                        <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                                data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-1"
                                                aria-haspopup="listbox" aria-expanded="false" title="Default sorting">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">Default sorting</div>
                                                </div>
                                            </div>
                                        </button>
                                        <div class="dropdown-menu ">
                                            <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                                <ul class="dropdown-menu inner show" role="presentation"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group Category">
                                    <div class="dropdown bootstrap-select default-select"><select
                                            class="default-select">
                                            <option>Categories</option>
                                            <option>Popularity</option>
                                            <option>Average rating</option>
                                            <option>Latest</option>
                                            <option>Low to high</option>
                                            <option>high to Low</option>
                                        </select>
                                        <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                                data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-2"
                                                aria-haspopup="listbox" aria-expanded="false" title="Categories">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">Categories</div>
                                                </div>
                                            </div>
                                        </button>
                                        <div class="dropdown-menu ">
                                            <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">
                                                <ul class="dropdown-menu inner show" role="presentation"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-tab">
                                    <ul class="nav" role="tablist" id="dz-shop-tab">
                                        <li class="nav-item" role="presentation">
                                            <a href="#tab-list-list" class="nav-link" id="tab-list-list-btn"
                                               data-bs-toggle="pill" data-bs-target="#tab-list-list" role="tab"
                                               aria-controls="tab-list-list" aria-selected="false" tabindex="-1">
                                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <rect y="0.4375" width="5" height="4" rx="0.5"
                                                          fill="#949494"></rect>
                                                    <rect x="7" y="0.4375" width="13" height="4" rx="0.5"
                                                          fill="#949494"></rect>
                                                    <rect y="7.4375" width="5" height="4" rx="0.5"
                                                          fill="#949494"></rect>
                                                    <rect x="7" y="7.4375" width="13" height="4" rx="0.5"
                                                          fill="#949494"></rect>
                                                    <rect y="14.4375" width="5" height="4" rx="0.5"
                                                          fill="#949494"></rect>
                                                    <rect x="7" y="14.4375" width="13" height="4" rx="0.5"
                                                          fill="#949494"></rect>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#tab-list-column" class="nav-link" id="tab-list-column-btn"
                                               data-bs-toggle="pill" data-bs-target="#tab-list-column" role="tab"
                                               aria-controls="tab-list-column" aria-selected="false" tabindex="-1">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="8" height="8" rx="1" fill="#949494"></rect>
                                                    <rect x="10" width="8" height="8" rx="1" fill="#949494"></rect>
                                                    <rect x="10" y="10" width="8" height="8" rx="1"
                                                          fill="#949494"></rect>
                                                    <rect y="10" width="8" height="8" rx="1" fill="#949494"></rect>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#tab-list-grid" class="nav-link" id="tab-list-grid-btn"
                                               data-bs-toggle="pill" data-bs-target="#tab-list-grid" role="tab"
                                               aria-controls="tab-list-grid" aria-selected="true">
                                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_279_2520)">
                                                        <path
                                                            d="M4.16667 0.5H0.833333C0.373333 0.5 0 0.873333 0 1.33333V4.66667C0 5.12667 0.373333 5.5 0.833333 5.5H4.16667C4.62667 5.5 5 5.12667 5 4.66667V1.33333C5 0.873333 4.62667 0.5 4.16667 0.5Z"
                                                            fill="#949494"></path>
                                                        <path
                                                            d="M4.16667 8H0.833333C0.373333 8 0 8.37333 0 8.83333V12.1667C0 12.6267 0.373333 13 0.833333 13H4.16667C4.62667 13 5 12.6267 5 12.1667V8.83333C5 8.37333 4.62667 8 4.16667 8Z"
                                                            fill="#949494"></path>
                                                        <path
                                                            d="M4.16667 15.5H0.833333C0.373333 15.5 0 15.8733 0 16.3333V19.6667C0 20.1267 0.373333 20.5 0.833333 20.5H4.16667C4.62667 20.5 5 20.1267 5 19.6667V16.3333C5 15.8733 4.62667 15.5 4.16667 15.5Z"
                                                            fill="#949494"></path>
                                                        <path
                                                            d="M11.6667 0.5H8.33333C7.87333 0.5 7.5 0.873333 7.5 1.33333V4.66667C7.5 5.12667 7.87333 5.5 8.33333 5.5H11.6667C12.1267 5.5 12.5 5.12667 12.5 4.66667V1.33333C12.5 0.873333 12.1267 0.5 11.6667 0.5Z"
                                                            fill="#949494"></path>
                                                        <path
                                                            d="M11.6667 8H8.33333C7.87333 8 7.5 8.37333 7.5 8.83333V12.1667C7.5 12.6267 7.87333 13 8.33333 13H11.6667C12.1267 13 12.5 12.6267 12.5 12.1667V8.83333C12.5 8.37333 12.1267 8 11.6667 8Z"
                                                            fill="#949494"></path>
                                                        <path
                                                            d="M11.6667 15.5H8.33333C7.87333 15.5 7.5 15.8733 7.5 16.3333V19.6667C7.5 20.1267 7.87333 20.5 8.33333 20.5H11.6667C12.1267 20.5 12.5 20.1267 12.5 19.6667V16.3333C12.5 15.8733 12.1267 15.5 11.6667 15.5Z"
                                                            fill="#949494"></path>
                                                        <path
                                                            d="M19.1667 0.5H15.8333C15.3733 0.5 15 0.873333 15 1.33333V4.66667C15 5.12667 15.3733 5.5 15.8333 5.5H19.1667C19.6267 5.5 20 5.12667 20 4.66667V1.33333C20 0.873333 19.6267 0.5 19.1667 0.5Z"
                                                            fill="#949494"></path>
                                                        <path
                                                            d="M19.1667 8H15.8333C15.3733 8 15 8.37333 15 8.83333V12.1667C15 12.6267 15.3733 13 15.8333 13H19.1667C19.6267 13 20 12.6267 20 12.1667V8.83333C20 8.37333 19.6267 8 19.1667 8Z"
                                                            fill="#949494"></path>
                                                        <path
                                                            d="M19.1667 15.5H15.8333C15.3733 15.5 15 15.8733 15 16.3333V19.6667C15 20.1267 15.3733 20.5 15.8333 20.5H19.1667C19.6267 20.5 20 20.1267 20 19.6667V16.3333C20 15.8733 19.6267 15.5 19.1667 15.5Z"
                                                            fill="#949494"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_279_2520">
                                                            <rect width="20" height="20" fill="white"
                                                                  transform="translate(0 0.5)"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 tab-content shop-" id="pills-tabContent">
                                <div class="tab-pane fade " id="tab-list-list" role="tabpanel"
                                     aria-labelledby="tab-list-list-btn">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xxxl-6">
                                            <div class="dz-shop-card style-2">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/1.png" alt="image">
                                                </div>
                                                <div class="dz-content">
                                                    <div class="dz-header">
                                                        <div>
                                                            <h2 class="title mb-0"><a href="shop-list.html">Indoor Oasis
                                                                    Lush looking its layout
                                                                </a></h2>
                                                            <ul class="dz-tags">
                                                                <li><a href="shop-with-category.html">Plants,</a></li>
                                                                <li><a href="shop-with-category.html">Accessorie</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="review-num">
                                                            <ul class="dz-rating">
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a href="javascript:void(0);"> 250 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="dz-body">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p class="dz-para">It is a long established fact that a
                                                                    reader will be distracted by the readable content of
                                                                    a page when looking at its layout. The point of
                                                                    using Lorem Ipsum is that it has.</p>
                                                            </div>
                                                        </div>
                                                        <div class="rate">
                                                            <div class="d-flex align-items-center mb-xl-3 mb-2">
                                                                <div class="meta-content m-0">
                                                                    <span class="price-name">Price</span>
                                                                    <span class="price">$40.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="shop-cart.html"
                                                                   class="btn btn-secondary btn-md btn-icon">
                                                                    <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                                    <span class="d-md-block d-none">Add to cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="favoriteCheck1">
                                                                    <label class="form-check-label"
                                                                           for="favoriteCheck1">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xxxl-6">
                                            <div class="dz-shop-card style-2">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/2.png" alt="image">
                                                </div>
                                                <div class="dz-content">
                                                    <div class="dz-header">
                                                        <div>
                                                            <h2 class="title mb-0"><a href="shop-list.html">Towering
                                                                    Twigs Botanicals</a></h2>
                                                            <ul class="dz-tags">
                                                                <li><a href="shop-with-category.html">Plants,</a></li>
                                                                <li><a href="shop-with-category.html">Accessorie</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="review-num">
                                                            <ul class="dz-rating">
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a href="javascript:void(0);"> 650 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="dz-body">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p class="dz-para">It is a long established fact that a
                                                                    reader will be distracted by the readable content of
                                                                    a page when looking at its layout. The point of
                                                                    using Lorem Ipsum is that it has.</p>
                                                            </div>
                                                        </div>
                                                        <div class="rate">
                                                            <div class="d-flex align-items-center mb-xl-3 mb-2">
                                                                <div class="meta-content">
                                                                    <span class="price-name">Price</span>
                                                                    <span class="price">$94.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="shop-cart.html"
                                                                   class="btn btn-secondary btn-md btn-icon">
                                                                    <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                                    <span class="d-md-block d-none">Add to cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="favoriteCheck2">
                                                                    <label class="form-check-label"
                                                                           for="favoriteCheck2">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xxxl-6">
                                            <div class="dz-shop-card style-2">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/3.png" alt="image">
                                                </div>
                                                <div class="dz-content">
                                                    <div class="dz-header">
                                                        <div>
                                                            <h2 class="title mb-0"><a href="shop-list.html">Long Vine
                                                                    Flora plants and convey</a></h2>
                                                            <ul class="dz-tags">
                                                                <li><a href="shop-with-category.html">Plants,</a></li>
                                                                <li><a href="shop-with-category.html">Accessorie</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="review-num">
                                                            <ul class="dz-rating">
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a href="javascript:void(0);"> 458 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="dz-body">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p class="dz-para">It is a long established fact that a
                                                                    reader will be distracted by the readable content of
                                                                    a page when looking at its layout. The point of
                                                                    using Lorem Ipsum is that it has.</p>
                                                            </div>
                                                        </div>
                                                        <div class="rate">
                                                            <div class="d-flex align-items-center mb-xl-3 mb-2">
                                                                <div class="meta-content">
                                                                    <span class="price-name">Price</span>
                                                                    <span class="price">$35.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="shop-cart.html"
                                                                   class="btn btn-secondary btn-md btn-icon">
                                                                    <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                                    <span class="d-md-block d-none">Add to cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="favoriteCheck3">
                                                                    <label class="form-check-label"
                                                                           for="favoriteCheck3">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xxxl-6">
                                            <div class="dz-shop-card style-2">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/4.png" alt="image">
                                                </div>
                                                <div class="dz-content">
                                                    <div class="dz-header">
                                                        <div>
                                                            <h2 class="title mb-0"><a href="shop-list.html">Lengthy Leaf
                                                                    Landscapes layout</a></h2>
                                                            <ul class="dz-tags">
                                                                <li><a href="shop-with-category.html">Plants,</a></li>
                                                                <li><a href="shop-with-category.html">Accessorie</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="review-num">
                                                            <ul class="dz-rating">
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a href="javascript:void(0);"> 630 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="dz-body">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p class="dz-para">It is a long established fact that a
                                                                    reader will be distracted by the readable content of
                                                                    a page when looking at its layout. The point of
                                                                    using Lorem Ipsum is that it has.</p>
                                                            </div>
                                                        </div>
                                                        <div class="rate">
                                                            <div class="d-flex align-items-center mb-xl-3 mb-2">
                                                                <div class="meta-content">
                                                                    <span class="price-name">Price</span>
                                                                    <span class="price">$25.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="shop-cart.html"
                                                                   class="btn btn-secondary btn-md btn-icon">
                                                                    <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                                    <span class="d-md-block d-none">Add to cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="favoriteCheck4">
                                                                    <label class="form-check-label"
                                                                           for="favoriteCheck4">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xxxl-6">
                                            <div class="dz-shop-card style-2">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/5.png" alt="image">
                                                    <div class="product-tag">
                                                        <span class="badge badge-secondary">Sale</span>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <div class="dz-header">
                                                        <div>
                                                            <h2 class="title mb-0"><a href="shop-list.html">Stretching
                                                                    Vine Nursery layout</a></h2>
                                                            <ul class="dz-tags">
                                                                <li><a href="shop-with-category.html">Plants,</a></li>
                                                                <li><a href="shop-with-category.html">Accessorie</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="review-num">
                                                            <ul class="dz-rating">
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a href="javascript:void(0);"> 520 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="dz-body">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p class="dz-para">It is a long established fact that a
                                                                    reader will be distracted by the readable content of
                                                                    a page when looking at its layout. The point of
                                                                    using Lorem Ipsum is that it has.</p>
                                                            </div>
                                                        </div>
                                                        <div class="rate">
                                                            <div class="d-flex align-items-center mb-xl-3 mb-2">
                                                                <div class="meta-content">
                                                                    <span class="price-name">Price</span>
                                                                    <span class="price">$45.00</span>
                                                                </div>

                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="shop-cart.html"
                                                                   class="btn btn-secondary btn-md btn-icon">
                                                                    <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                                    <span class="d-md-block d-none">Add to cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="favoriteCheck5">
                                                                    <label class="form-check-label"
                                                                           for="favoriteCheck5">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xxxl-6">
                                            <div class="dz-shop-card style-2">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/6.png" alt="image">
                                                </div>
                                                <div class="dz-content">
                                                    <div class="dz-header">
                                                        <div>
                                                            <h2 class="title mb-0"><a href="shop-list.html">Stretching
                                                                    Vine Nursery layout</a></h2>
                                                            <ul class="dz-tags">
                                                                <li><a href="shop-with-category.html">Plants,</a></li>
                                                                <li><a href="shop-with-category.html"> Accessorie</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="review-num">
                                                            <ul class="dz-rating">
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a href="javascript:void(0);"> 256 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="dz-body">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p class="dz-para">It is a long established fact that a
                                                                    reader will be distracted by the readable content of
                                                                    a page when looking at its layout. The point of
                                                                    using Lorem Ipsum is that it has.</p>
                                                            </div>
                                                        </div>
                                                        <div class="rate">
                                                            <div class="d-flex align-items-center mb-xl-3 mb-2">
                                                                <div class="meta-content">
                                                                    <span class="price-name">Price</span>
                                                                    <span class="price">$70.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="shop-cart.html"
                                                                   class="btn btn-secondary btn-md btn-icon">
                                                                    <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                                    <span class="d-md-block d-none">Add to cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="favoriteCheck6">
                                                                    <label class="form-check-label"
                                                                           for="favoriteCheck6">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xxxl-6">
                                            <div class="dz-shop-card style-2">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/7.png" alt="image">
                                                    <div class="product-tag">
                                                        <span class="badge badge-secondary">Sale</span>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <div class="dz-header">
                                                        <div>
                                                            <h2 class="title mb-0"><a href="shop-list.html">Indoor Oasis
                                                                    Lush looking its layout</a></h2>
                                                            <ul class="dz-tags">
                                                                <li><a href="shop-with-category.html">Plants,</a></li>
                                                                <li><a href="shop-with-category.html">Accessorie</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="review-num">
                                                            <ul class="dz-rating">
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a href="javascript:void(0);"> 776 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="dz-body">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p class="dz-para">It is a long established fact that a
                                                                    reader will be distracted by the readable content of
                                                                    a page when looking at its layout. The point of
                                                                    using Lorem Ipsum is that it has.</p>
                                                            </div>
                                                        </div>
                                                        <div class="rate">
                                                            <div class="d-flex align-items-center mb-xl-3 mb-2">
                                                                <div class="meta-content">
                                                                    <span class="price-name">Price</span>
                                                                    <span class="price">$75.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="shop-cart.html"
                                                                   class="btn btn-secondary btn-md btn-icon">
                                                                    <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                                    <span class="d-md-block d-none">Add to cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="favoriteCheck7">
                                                                    <label class="form-check-label"
                                                                           for="favoriteCheck7">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xxxl-6">
                                            <div class="dz-shop-card style-2">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/8.png" alt="image">
                                                </div>
                                                <div class="dz-content">
                                                    <div class="dz-header">
                                                        <div>
                                                            <h2 class="title mb-0"><a href="shop-list.html">Towering
                                                                    Twigs Botanicals</a></h2>
                                                            <ul class="dz-tags">
                                                                <li><a href="shop-with-category.html">Plants,</a></li>
                                                                <li><a href="shop-with-category.html">Accessorie</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="review-num">
                                                            <ul class="dz-rating">
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="star-fill">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a href="javascript:void(0);"> 255 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="dz-body">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p class="dz-para">It is a long established fact that a
                                                                    reader will be distracted by the readable content of
                                                                    a page when looking at its layout. The point of
                                                                    using Lorem Ipsum is that it has.</p>
                                                            </div>
                                                        </div>
                                                        <div class="rate">
                                                            <div class="d-flex align-items-center mb-xl-3 mb-2">
                                                                <div class="meta-content">
                                                                    <span class="price-name">Price</span>
                                                                    <span class="price">$36.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="shop-cart.html"
                                                                   class="btn btn-secondary btn-md btn-icon">
                                                                    <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                                    <span class="d-md-block d-none">Add to cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input" type="checkbox"
                                                                           id="favoriteCheck8">
                                                                    <label class="form-check-label"
                                                                           for="favoriteCheck8">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-list-column" role="tabpanel"
                                     aria-labelledby="tab-list-column-btn">
                                    <div class="row gx-xl-4 g-3 mb-xl-0 mb-md-0 mb-3">
                                        <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                            <div class="shop-card ">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/1.png" alt="image">
                                                    <div class="shop-meta">

                                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                                            <i class="icon feather icon-heart dz-heart"></i>
                                                            <i class="icon feather icon-heart-on dz-heart-fill"></i>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-primary meta-icon dz-wishicon"
                                                           data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="flaticon flaticon-eye d-md-none d-block"></i>
                                                            <span class="d-md-block d-none"><i
                                                                    class="flaticon flaticon-eye"></i></span>
                                                        </a>
                                                        <div class="btn btn-primary meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket"></i>
                                                            <i class="flaticon flaticon-basket-on dz-heart-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Vineyard Reach (m)</a>
                                                    </h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                            <div class="shop-card ">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/2.png" alt="image">
                                                    <div class="shop-meta">

                                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                                            <i class="icon feather icon-heart dz-heart"></i>
                                                            <i class="icon feather icon-heart-on dz-heart-fill"></i>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-primary meta-icon dz-wishicon"
                                                           data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="flaticon flaticon-eye d-md-none d-block"></i>
                                                            <span class="d-md-block d-none"><i
                                                                    class="flaticon flaticon-eye"></i></span>
                                                        </a>
                                                        <div class="btn btn-primary meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket"></i>
                                                            <i class="flaticon flaticon-basket-on dz-heart-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">TallS talk Gardens
                                                            (m)</a></h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                            <div class="shop-card ">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/3.png" alt="image">
                                                    <div class="shop-meta">

                                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                                            <i class="icon feather icon-heart dz-heart"></i>
                                                            <i class="icon feather icon-heart-on dz-heart-fill"></i>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-primary meta-icon dz-wishicon"
                                                           data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="flaticon flaticon-eye d-md-none d-block"></i>
                                                            <span class="d-md-block d-none"><i
                                                                    class="flaticon flaticon-eye"></i></span>
                                                        </a>
                                                        <div class="btn btn-primary meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket"></i>
                                                            <i class="flaticon flaticon-basket-on dz-heart-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Endless Stems Gardens
                                                            (m)</a></h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                            <div class="shop-card ">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/4.png" alt="image">
                                                    <div class="shop-meta">

                                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                                            <i class="icon feather icon-heart dz-heart"></i>
                                                            <i class="icon feather icon-heart-on dz-heart-fill"></i>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-primary meta-icon dz-wishicon"
                                                           data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="flaticon flaticon-eye d-md-none d-block"></i>
                                                            <span class="d-md-block d-none"><i
                                                                    class="flaticon flaticon-eye"></i></span>
                                                        </a>
                                                        <div class="btn btn-primary meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket"></i>
                                                            <i class="flaticon flaticon-basket-on dz-heart-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Long Vine Flora (m)</a>
                                                    </h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                            <div class="shop-card ">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/5.png" alt="image">
                                                    <div class="shop-meta">

                                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                                            <i class="icon feather icon-heart dz-heart"></i>
                                                            <i class="icon feather icon-heart-on dz-heart-fill"></i>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-primary meta-icon dz-wishicon"
                                                           data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="flaticon flaticon-eye d-md-none d-block"></i>
                                                            <span class="d-md-block d-none"><i
                                                                    class="flaticon flaticon-eye"></i></span>
                                                        </a>
                                                        <div class="btn btn-primary meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket"></i>
                                                            <i class="flaticon flaticon-basket-on dz-heart-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Long Vine Flora (m)</a>
                                                    </h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                            <div class="shop-card ">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/6.png" alt="image">
                                                    <div class="shop-meta">

                                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                                            <i class="icon feather icon-heart dz-heart"></i>
                                                            <i class="icon feather icon-heart-on dz-heart-fill"></i>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-primary meta-icon dz-wishicon"
                                                           data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="flaticon flaticon-eye d-md-none d-block"></i>
                                                            <span class="d-md-block d-none"><i
                                                                    class="flaticon flaticon-eye"></i></span>
                                                        </a>
                                                        <div class="btn btn-primary meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket"></i>
                                                            <i class="flaticon flaticon-basket-on dz-heart-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Bacopa sutera cordata</a>
                                                    </h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                            <div class="shop-card ">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/7.png" alt="image">
                                                    <div class="shop-meta">

                                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                                            <i class="icon feather icon-heart dz-heart"></i>
                                                            <i class="icon feather icon-heart-on dz-heart-fill"></i>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-primary meta-icon dz-wishicon"
                                                           data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="flaticon flaticon-eye d-md-none d-block"></i>
                                                            <span class="d-md-block d-none"><i
                                                                    class="flaticon flaticon-eye"></i></span>
                                                        </a>
                                                        <div class="btn btn-primary meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket"></i>
                                                            <i class="flaticon flaticon-basket-on dz-heart-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Towering Twigs
                                                            Botanicals </a></h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                            <div class="shop-card ">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/8.png" alt="image">
                                                    <div class="shop-meta">

                                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                                            <i class="icon feather icon-heart dz-heart"></i>
                                                            <i class="icon feather icon-heart-on dz-heart-fill"></i>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-primary meta-icon dz-wishicon"
                                                           data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="flaticon flaticon-eye d-md-none d-block"></i>
                                                            <span class="d-md-block d-none"><i
                                                                    class="flaticon flaticon-eye"></i></span>
                                                        </a>
                                                        <div class="btn btn-primary meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket"></i>
                                                            <i class="flaticon flaticon-basket-on dz-heart-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Vineyard Reach (m)</a>
                                                    </h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                            <div class="shop-card ">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/9.png" alt="image">
                                                    <div class="shop-meta">

                                                        <div class="btn btn-primary meta-icon dz-wishicon">
                                                            <i class="icon feather icon-heart dz-heart"></i>
                                                            <i class="icon feather icon-heart-on dz-heart-fill"></i>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                           class="btn btn-primary meta-icon dz-wishicon"
                                                           data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="flaticon flaticon-eye d-md-none d-block"></i>
                                                            <span class="d-md-block d-none"><i
                                                                    class="flaticon flaticon-eye"></i></span>
                                                        </a>
                                                        <div class="btn btn-primary meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket"></i>
                                                            <i class="flaticon flaticon-basket-on dz-heart-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Long Vine Flora (m)</a>
                                                    </h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" id="tab-list-grid" role="tabpanel"
                                     aria-labelledby="tab-list-grid-btn">
                                    <div class="row gx-xl-4 g-3">
                                        <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-6 m-md-b30 m-b30">
                                            <div class="shop-card style-1">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/1.png" alt="image">
                                                </div>
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-md w-100"
                                                       data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <i class="flaticon flaticon-shopping-cart-1 dz-cart"></i>
                                                        <i class="flaticon flaticon-shopping-cart-1-on dz-cart-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Vineyard Reach (m)</a>
                                                    </h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-6 m-md-b30 m-b30">
                                            <div class="shop-card style-1">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/2.png" alt="image">
                                                </div>
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-md w-100"
                                                       data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <i class="flaticon flaticon-shopping-cart-1 dz-cart"></i>
                                                        <i class="flaticon flaticon-shopping-cart-1-on dz-cart-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">TallS talk Gardens
                                                            (m)</a></h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-6 m-md-b30 m-b30">
                                            <div class="shop-card style-1">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/3.png" alt="image">
                                                </div>
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-md w-100"
                                                       data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <i class="flaticon flaticon-shopping-cart-1 dz-cart"></i>
                                                        <i class="flaticon flaticon-shopping-cart-1-on dz-cart-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Endless Stems Gardens
                                                            (m)</a></h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-6 m-md-b30 m-b30">
                                            <div class="shop-card style-1">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/4.png" alt="image">
                                                </div>
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-md w-100"
                                                       data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <i class="flaticon flaticon-shopping-cart-1 dz-cart"></i>
                                                        <i class="flaticon flaticon-shopping-cart-1-on dz-cart-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Long Vine Flora (m)</a>
                                                    </h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-6 m-md-b30 m-b30">
                                            <div class="shop-card style-1">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/5.png" alt="image">
                                                </div>
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-md w-100"
                                                       data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <i class="flaticon flaticon-shopping-cart-1 dz-cart"></i>
                                                        <i class="flaticon flaticon-shopping-cart-1-on dz-cart-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Long Vine Flora (m)</a>
                                                    </h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-6 m-md-b30 m-b30">
                                            <div class="shop-card style-1">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/6.png" alt="image">
                                                </div>
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-md w-100"
                                                       data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <i class="flaticon flaticon-shopping-cart-1 dz-cart"></i>
                                                        <i class="flaticon flaticon-shopping-cart-1-on dz-cart-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Bacopa sutera cordata
                                                            (m)</a></h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-6 m-md-b30 m-b30">
                                            <div class="shop-card style-1">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/7.png" alt="image">
                                                </div>
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-md w-100"
                                                       data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <i class="flaticon flaticon-shopping-cart-1 dz-cart"></i>
                                                        <i class="flaticon flaticon-shopping-cart-1-on dz-cart-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Towering Twigs Botanicals
                                                            (m)</a></h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-6 m-md-b30 m-b30">
                                            <div class="shop-card style-1">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/8.png" alt="image">
                                                </div>
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-md w-100"
                                                       data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <i class="flaticon flaticon-shopping-cart-1 dz-cart"></i>
                                                        <i class="flaticon flaticon-shopping-cart-1-on dz-cart-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Vineyard Reach (m)</a>
                                                    </h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-6 m-md-b30 m-b30">
                                            <div class="shop-card style-1">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/9.png" alt="image">
                                                </div>
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-md w-100"
                                                       data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <i class="flaticon flaticon-shopping-cart-1 dz-cart"></i>
                                                        <i class="flaticon flaticon-shopping-cart-1-on dz-cart-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Long Vine Flora (m)</a>
                                                    </h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-6 m-md-b30 m-b30">
                                            <div class="shop-card style-1">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/10.png" alt="image">
                                                </div>
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-md w-100"
                                                       data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <i class="flaticon flaticon-shopping-cart-1 dz-cart"></i>
                                                        <i class="flaticon flaticon-shopping-cart-1-on dz-cart-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Creeping Thyme Elfin
                                                            (s)</a></h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-6 m-md-b30 m-b30">
                                            <div class="shop-card style-1">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/11.png" alt="image">
                                                </div>
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-md w-100"
                                                       data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <i class="flaticon flaticon-shopping-cart-1 dz-cart"></i>
                                                        <i class="flaticon flaticon-shopping-cart-1-on dz-cart-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Tall Fescue Grass (m)</a>
                                                    </h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-6 m-md-b30 m-b30">
                                            <div class="shop-card style-1">
                                                <div class="dz-media">
                                                    <img src="images/shop/product/12.png" alt="image">
                                                </div>
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-md w-100"
                                                       data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <i class="flaticon flaticon-shopping-cart-1 dz-cart"></i>
                                                        <i class="flaticon flaticon-shopping-cart-1-on dz-cart-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="dz-content">
                                                    <h2 class="title"><a href="shop-list.html">Compact Hinoki Cypress
                                                            (M)</a></h2>
                                                    <span class="price">
														$1099
														<del>$659</del>
													</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row page ">
                            <div class="col-md-6">
                                <p class="page-text">Showing 1–5 Of 50 Results</p>
                            </div>
                            <div class="col-md-6">
                                <nav aria-label="Blog Pagination">
                                    <ul class="pagination style-1">
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link next"
                                                                 href="javascript:void(0);">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
