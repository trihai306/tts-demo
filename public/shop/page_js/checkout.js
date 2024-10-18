$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '#submitFormCheckout', function() {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        var formData = {
            firstname: $('input[name="firstname"]').val(),
            lastname: $('input[name="lastname"]').val(),
            email: $('input[name="email"]').val(),
            phone: $('input[name="phone"]').val(),
            company_name: $('input[name="company_name"]').val(),
            payment_method: $('input[name="payment_method"]').val(),
            country: $('select[name="country"]').val(),
            city: $('select[name="city"]').val(),
            products: cart
        };

        toastr.info('Đang xử lý...');
        $.ajax({
            url: '/checkout',
            method: 'POST',
            data: formData,
            success: function(data) {
                if (data.success) {
                    toastr.success(data.message);
                } else {
                    toastr.error(data.message);
                }
            },
            error: function(xhr, status, error) {
                alert('Có lỗi xảy ra, vui lòng thử lại.');
            }
        });
    });


});
