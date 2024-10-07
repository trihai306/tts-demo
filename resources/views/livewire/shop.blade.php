<div class="container my-5">
    <div class="row">
        <!-- Filter Section -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm border-0" style="border-radius: 7px;">
                <div class="card-body">
                    <h5 class="card-title text-primary fw-bold mb-4" style="border-bottom: 1px solid #c4c4c4; padding-bottom: 10px;">Bộ Lọc</h5>
                    <form wire:submit.prevent="render">
                        <div class="mb-4">
                            <label for="category" class="form-label fw-bold">Danh Mục</label>
                            <select class="form-select" id="category" wire:model="category" style="border-radius: 10px;">
                                <option value="">Tất cả</option>
                                <option value="1">Danh mục 1</option>
                                <option value="2">Danh mục 2</option>
                                <option value="3">Danh mục 3</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="priceRange" class="form-label fw-bold">Khoảng Giá</label>
                            <input type="range" class="form-range" id="priceRange" min="0" max="5000000" wire:model="priceRange">
                            <div class="d-flex justify-content-between">
                                <span>0 VND</span>
                                <span>5,000,000 VND</span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 fw-bold" style="border-radius: 20px;">Áp dụng</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Product List Section -->
        <div class="col-md-9">
            <div class="row g-4">
                @foreach($products as $product)
                    <div class="col-md-6 col-lg-4">
                        <div class="card product-card hover-shadow-lg h-100 border-0">
                            <div class="position-relative">
                                <img src="{{ $product->image_url ?? 'https://via.placeholder.com/300' }}" class="card-img-top product-image" alt="{{ $product->name }}">
                                <div class="position-absolute bottom-0  btn-add-cart">
                                    <button class="me-3 btn">
                                        <!-- Shopping Cart Icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                            <circle cx="9" cy="21" r="1"></circle>
                                            <circle cx="20" cy="21" r="1"></circle>
                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                        </svg>
                                    </button>
                                    <button class="btn">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-heart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                                    </button>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-dark fw-bold">{{ $product->name }}</h5>
                                <p class="card-text text-primary fw-bold">₫{{ number_format($product->price, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>

