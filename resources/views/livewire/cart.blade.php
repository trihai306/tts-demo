<li class="cart-dropdown dropdown">
    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">
        <svg class="cart">
            <use xlink:href="#cart"></use>
        </svg>
        <span class="fs-6 fw-bold text-primary ms-1">({{ count($cartItems) }})</span>
    </a>
    <div class="dropdown-menu animate slide dropdown-menu-start dropdown-menu-lg-end p-3 shadow-sm border-0 rounded-3">
        <h4 class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
            <span class="text-dark fw-bold">Your Cart</span>
            <span class="badge bg-primary rounded-pill">{{ count($cartItems) }} Items</span>
        </h4>
        <ul class="list-group mb-3">
            @forelse($cartItems as $item)
                <li class="list-group-item d-flex justify-content-between lh-sm border-0 mb-2 rounded">
                    <div class="d-flex">
                        <img src="{{ $item['image'] ?? 'images/default.jpg' }}" alt="{{ $item['name'] }}" class="img-thumbnail me-3" style="width: 50px; height: 50px;">
                        <div>
                            <h5 class="mb-1">
                                <a href="single-product.html" class="text-decoration-none text-dark">{{ $item['name'] }}</a>
                            </h5>
                            <small class="text-muted">Quantity: {{ $item['quantity'] }}</small>
                        </div>
                    </div>
                    <span class="text-primary fw-bold">${{ $item['price'] * $item['quantity'] }}</span>
                </li>
            @empty
                <div class="d-flex flex-column align-items-center text-center mt-5">
                    <svg class="cart mb-3" style="width: 50px; height: 50px; color: #6c757d;">
                        <use xlink:href="#cart"></use>
                    </svg>
                    <p class="text-muted fs-5">Your cart is empty.</p>
                </div>
            @endforelse
            @if(count($cartItems) > 0)
                <li class="list-group-item bg-transparent d-flex justify-content-between border-top pt-3">
                    <span class="text-uppercase fw-bold">Total (USD)</span>
                    <strong class="text-dark">${{ $totalPrice }}</strong>
                </li>
            @endif
        </ul>
        @if(count($cartItems) > 0)
            <div class="d-flex flex-column gap-2">
                <a href="cart.html" class="btn btn-sm btn-outline-dark w-100" type="button">View Cart</a>
                <a href="checkout.html" class="btn btn-sm btn-primary w-100" type="button">Go to Checkout</a>
            </div>
        @endif
    </div>
</li>
