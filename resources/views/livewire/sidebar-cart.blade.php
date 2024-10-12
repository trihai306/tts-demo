<div class="product-description">
    <div class="dz-tabs">
        <ul class="nav nav-tabs center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="shopping-cart" data-bs-toggle="tab" data-bs-target="#shopping-cart-pane" type="button" role="tab" aria-controls="shopping-cart-pane" aria-selected="true">
                    Shopping Cart
                    <span class="badge badge-light">{{ count($cartItems) }}</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="wishlist" data-bs-toggle="tab" data-bs-target="#wishlist-pane" type="button" role="tab" aria-controls="wishlist-pane" aria-selected="false" tabindex="-1">
                    Wishlist
                    <span class="badge badge-light">{{ count($wishlistItems) }}</span>
                </button>
            </li>
        </ul>
        <div class="tab-content pt-4" id="dz-shopcart-sidebar">
            <!-- Shopping Cart Tab -->
            <div class="tab-pane fade show active" id="shopping-cart-pane" role="tabpanel" aria-labelledby="shopping-cart" tabindex="0">
                <div class="shop-sidebar-cart">
                    <ul class="sidebar-cart-list">
                        @foreach($cartItems as $index => $item)
                            <li>
                                <div class="cart-widget">
                                    <div class="dz-media me-3">
                                        <img src="{{ $item['image'] }}" alt="">
                                    </div>
                                    <div class="cart-content">
                                        <h6 class="title"><a href="{{ $item['url'] }}">{{ $item['name'] }}</a></h6>
                                        <div class="d-flex align-items-center">
                                            <div class="btn-quantity light quantity-sm me-3 ms-0 style-1">
                                                <div class="input-group bootstrap-touchspin">
                                                    <input type="text" value="{{ $item['quantity'] }}" name="quantity_{{ $index }}" class="form-control">
                                                    <span class="input-group-btn-vertical">
                                                    <button wire:click="increaseQuantity({{ $index }})" class="btn btn-default d-block bootstrap-touchspin-up" type="button"><i class="fa-solid fa-plus"></i></button>
                                                    <button wire:click="decreaseQuantity({{ $index }})" class="btn btn-default bootstrap-touchspin-down d-block" type="button"><i class="fa-solid fa-minus"></i></button>
                                                </span>
                                                </div>
                                            </div>
                                            <h6 class="dz-price mb-0">${{ $item['price'] }}</h6>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" wire:click="removeCartItem({{ $index }})" class="dz-close">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="cart-total">
                        <h5 class="mb-0">Subtotal:</h5>
                        <h5 class="mb-0">${{ $totalAmount }}</h5>
                    </div>
                    <div class="mt-auto">
                        <a href="/checkout" class="btn btn-outline-secondary btn-block m-b20">Checkout</a>
                        <a href="/cart" class="btn btn-secondary btn-block">View Cart</a>
                    </div>
                </div>
            </div>
            <!-- Wishlist Tab -->
            <div class="tab-pane fade" id="wishlist-pane" role="tabpanel" aria-labelledby="wishlist" tabindex="0">
                <div class="shop-sidebar-cart">
                    <ul class="sidebar-cart-list">
                        @foreach($wishlistItems as $index => $item)
                            <li>
                                <div class="cart-widget">
                                    <div class="dz-media me-3">
                                        <img src="{{ $item['image'] }}" alt="">
                                    </div>
                                    <div class="cart-content">
                                        <h6 class="title"><a href="{{ $item['url'] }}">{{ $item['name'] }}</a></h6>
                                        <div class="d-flex align-items-center">
                                            <h6 class="dz-price mb-0">${{ $item['price'] }}</h6>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" wire:click="removeWishlistItem({{ $index }})" class="dz-close">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-auto">
                        <a href="/wishlist" class="btn btn-secondary btn-block">Check Your Favourite</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
