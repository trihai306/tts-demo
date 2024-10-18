$(function () {
    window.home = {
        init: function () {
            home.addProductTocart();

        },
        addProductTocart: function () {
            $('.add-to-cart').on('click', function() {
                const productId = $(this).data('id'); // Product ID
                const cartItem = {
                    id: productId,
                    quantity: 1
                };

                addToCart(cartItem);
            });

            function addToCart(product) {
                let cart = JSON.parse(localStorage.getItem('cart')) || [];

                const existingProductIndex = cart.findIndex(item => item.id === product.id);
                if (existingProductIndex !== -1) {
                    cart[existingProductIndex].quantity++;
                } else {
                    cart.push(product);
                }

                localStorage.setItem('cart', JSON.stringify(cart));

                loadCartProducts();

                alert('Product added to cart!');
            }


            function loadCartProducts(load_cart = false) {
                let cart = JSON.parse(localStorage.getItem('cart')) || [];

                if (cart.length > 0 || load_cart) {
                    $.ajax({
                        url: '/get-cart',
                        type: 'get',
                        dataType: 'json',
                        data: {
                            cart: cart,
                        },
                        success: function (response) {
                            if (response.success) {
                                updateCartHTML(response.products, cart);
                                if ($('.page_checkout_and_summary').length > 0) {
                                    updateOrderSummaryHTML(response.products, cart);
                                }

                            } else {
                                alert('Failed to load cart products.');
                            }
                        },
                        error: function () {
                            alert('Error fetching cart products.');
                        }
                    });
                }
            }

            function updateCartHTML(products, cart) {
                let cartHTML = '';

                let totalPrice = 0;

                if (products.length == 0) {
                    $('.cart-total-price').text(`$0`);
                }

                products.forEach(function (product) {
                    const cartItem = cart.find(item => item.id === product.id);
                    const quantity = cartItem ? cartItem.quantity : 1;

                    const productPrice = product.special_price && product.special_price_from <= Date.now() && product.special_price_to >= Date.now()
                        ? product.special_price
                        : product.price;

                    totalPrice += productPrice * quantity;

                    $('.cart-total-price').text(`$${totalPrice.toFixed(2)}`);

                    cartHTML += `
                <li>
                    <div class="cart-widget">
                        <div class="dz-media me-3">
                            <img src="${product.image}" alt="${product.name}">
                        </div>
                        <div class="cart-content">
                            <h6 class="title">
                                <a href="product-thumbnail.html">${product.name}</a>
                            </h6>
                            <div class="d-flex align-items-center">
                                <div class="btn-quantity light quantity-sm me-3 ms-0 style-1">
                                    <input type="text" value="${quantity}" name="quantity_${product.id}">
                                </div>
                                <h6 class="dz-price mb-0">$${product.special_price || product.price}
                                    ${product.special_price ? `<del>$${product.price}</del>` : ''}
                                </h6>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="dz-close remove_product" data-id="${product.id}">
                            <i class="ti-close"></i>
                        </a>
                    </div>
                </li>
            `;
                });

                $('.sidebar-cart-list').html(cartHTML);

                $('.remove_product').on('click', function () {
                    const productId = $(this).data('id');
                    console.log(productId)
                    removeFromCart(productId);
                });
            }



            function removeFromCart(productId) {
                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                cart = cart.filter(item => item.id !== productId);
                localStorage.setItem('cart', JSON.stringify(cart));

                loadCartProducts(true);
            }

            function updateOrderSummaryHTML(products, cart) {
                let orderSummaryHTML = '';
                let subtotal = 0;
                let shippingCost = 0;
                let discount = 0;
                let totalPrice = 0;

                products.forEach(function (product) {
                    const cartItem = cart.find(item => item.id === product.id);
                    const quantity = cartItem ? cartItem.quantity : 1;
                    const productPrice = product.special_price && product.special_price_from <= Date.now() && product.special_price_to >= Date.now()
                        ? product.special_price
                        : product.price;

                    subtotal += productPrice * quantity;

                    orderSummaryHTML += `
                    <div class="cart-item style-1">
                        <div class="dz-media">
                            <img src="${product.image}" alt="${product.name}">
                        </div>
                        <div class="dz-content">
                            <h6 class="title mb-0">${product.name}</h6>
                            <span class="price">$${(productPrice * quantity).toFixed(2)}</span>
                        </div>
                    </div>
                `;
                });

                let discountAmount = subtotal * discount;
                totalPrice = subtotal - discountAmount + shippingCost;

                $('.side-bar .show-product-cart').html(orderSummaryHTML);
                $('.side-bar .summary-subtotal').text(`$${subtotal.toFixed(2)}`);
                $('.side-bar .summary-shipping-cost').text(`+$${shippingCost.toFixed(2)}`);
                $('.side-bar .summary-discount').text(`-$${discountAmount.toFixed(2)}`);
                $('.side-bar .summary-total').text(`$${totalPrice.toFixed(2)}`);
            }


            loadCartProducts();

        },

    }
});
$(document).ready(function () {
    home.init();
});
