$(function () {
    window.shop = {
        init: function () {
            shop.getFilterProduct();
            shop.resetFilterProduct();
            shop.getFeaturedProducts();
            shop.showSizesWithProduct();
            shop.showProductDetail();

        },

        getFilterProduct: function () {

            $('#submit-search').on('click', function() {
                shop.loadProducts("/shop-list");
            });

            $('.category-filter').on('change', function() {
                var url = '/shop-list';
                shop.loadProducts(url);
            });

            // filter theo page
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var url = $(this).attr('href');
                shop.loadProducts(url);
            });

            $(document).on('change', '.size-filter', function() {
                shop.loadProducts('/shop-list');
            });


            // filter theo price
            var slider = document.getElementById('slider-tooltips');

            if (slider.noUiSlider) {
                slider.noUiSlider.destroy();
            }

            noUiSlider.create(slider, {
                start: [minPrice, maxPrice],
                connect: true,
                range: {
                    'min': minPrice,
                    'max': maxPrice
                }
            });

            slider.noUiSlider.on('update', function(values, handle) {
                var minPrice = parseFloat(values[0]).toFixed(2);
                var maxPrice = parseFloat(values[1]).toFixed(2);

                $('#slider-margin-value-min').text('Min Price: $' + minPrice);
                $('#slider-margin-value-max').text('Max Price: $' + maxPrice);
            });

            // sự kiện ng dùng thả tay
            slider.noUiSlider.on('set', function(values, handle) {
                var minPrice = parseFloat(values[0]).toFixed(2);
                var maxPrice = parseFloat(values[1]).toFixed(2);

                shop.loadProducts('/shop-list');
            });


        },

        resetFilterProduct: function () {
            $('#reset-filters').on('click', function() {

                var slider = document.getElementById('slider-tooltips');

                slider.noUiSlider.set([minPrice, maxPrice]);

                $('#slider-margin-value-min').text('Min Price: ' + minPrice);
                $('#slider-margin-value-max').text('Max Price: ' + maxPrice);

                $('.category-filter').prop('checked', false); // Bỏ chọn tất cả category

                $('#search').val('');

                shop.loadProducts('/shop-list');
            });
        },

        loadProducts: function (url) {
            console.log(123)
            var search = $('#search').val();
            var min_price = $('#slider-margin-value-min').text().replace('Min Price: $', '');
            var max_price = $('#slider-margin-value-max').text().replace('Max Price: $', '');
            var brand = $('#brand').val();

            var categories = [];

            $('.category-filter:checked').each(function() {
                categories.push($(this).val());
            });

            var attributes = {};
            $('.size-filter:checked').each(function() {
                var attributeName = $(this).data('attribute-name');
                if (!attributes[attributeName]) {
                    attributes[attributeName] = [];
                }
                attributes[attributeName].push($(this).val());
            });


            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    search: search,
                    min_price: min_price,
                    max_price: max_price,
                    brand: brand,
                    categories: categories,
                    attributes_size: attributes,
                },
                beforeSend: function() {
                    $('#overlay').show();
                    $('#loading').show();
                },
                success: function(data) {
                    $('#overlay').hide();
                    $('#loading').hide();
                    $('#product-list').html(data.products);
                    // window.history.pushState("", "", url); // Update the browser URL
                },
                error: function() {
                    $('#overlay').hide();
                    $('#loading').hide();
                    alert('Failed to load products. Please try again.');
                }
            });
        },

        getFeaturedProducts: function () {
            $.ajax({
                url: 'featured-products',
                type: 'GET',
                success: function(response) {
                    var productList = $('#product-featured-list');
                    productList.empty();

                    response.products.forEach(function(product) {
                        var productHtml = `
                        <div class="widget-post clearfix">
                            <div class="dz-media">
                                <a href="post-standard.html"><img src="${product.image}" alt="${product.name}"></a>
                            </div>
                            <div class="dz-info">
                                <h6 class="title"><a href="post-standard.html">${product.name}</a></h6>
                                <span class="price">  ${product.special_price ? '$' + product.special_price : '$' + product.price} <del>${product.special_price ? '$' + product.price : ''}</del></span>
                            </div>
                        </div>
                    `;
                        productList.append(productHtml);
                    });
                },
                error: function() {
                    alert('Failed to fetch products. Please try again.');
                }
            });
        },

        showSizesWithProduct: function () {
            $.ajax({
                url: '/size-product',
                method: 'GET',
                success: function(response) {
                    let sizeList = '';
                    $.each(response, function(index, size) {
                        sizeList += `
                        <li class="cat-item cat-item-${size.size}">
                            <div class="custom-control custom-checkbox d-flex">
                                <input type="checkbox" class="form-check-input square size-filter" id="size_${size.size}" value="${size.size}"
                                       data-attribute-name="Size" id="basic_checkbox_${size.size}">
                                <label class="form-check-label text-start flex-1"
                                       for="basic_checkbox_${size.size}">${size.size}</label>(${size.product_count})
                            </div>
                        </li>`;
                    });

                    $('.widget.product-size ul').html(sizeList);
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });
        },

        showProductDetail: function () {
            $(document).ready(function() {
                $('#show_product_detail').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget);
                    var name = button.data('name');
                    var price = button.data('price');
                    var specialPrice = button.data('special-price');
                    var image = button.data('image');
                    var description = button.data('description');

                    var modal = $(this);
                    modal.find('#show_product_detail .modal-body .title').text(name);
                    modal.find('#show_product_detail .modal-body .price').text('$' + (specialPrice ? specialPrice : price));
                    modal.find('.modal-body img').attr('src', image);
                    modal.find(' .modal-body .para-text').text(description);
                });
            });
        },
    }
});
$(document).ready(function () {
    shop.init();
});
