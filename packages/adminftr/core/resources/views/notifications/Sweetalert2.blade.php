<script>
    document.addEventListener('livewire:navigated', function () {
        // Handle success notifications
        Livewire.on('successNotification', (message) => {
            Swal.fire({
                title: 'Thành công!',
                text: message,
                icon: 'success',
                confirmButtonText: 'OK',
                timer: 3000,
                timerProgressBar: true
            });
        });

        // Handle error notifications
        Livewire.on('errorNotification', (message) => {
            Swal.fire({
                title: 'Lỗi!',
                text: message,
                icon: 'error',
                confirmButtonText: 'OK',
                timer: 5000
            });
        });

        // Handle confirmation requests
        Livewire.on('confirmRequest', (message, confirmedEvent) => {
            Swal.fire({
                title: 'Xác nhận?',
                text: message,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Đồng ý',
                cancelButtonText: 'Hủy bỏ'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch(confirmedEvent);
                }
            });
        });
    });
</script>
