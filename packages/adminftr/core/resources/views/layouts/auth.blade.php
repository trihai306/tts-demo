<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Future CMS is an open-source, flexible, and powerful content management system designed to help you create modern, responsive websites with ease. Experience the freedom of open-source software with a highly customizable solution for your web projects.">
    <meta name="keywords" content="CMS, open-source CMS, Future CMS, content management system, responsive CMS, flexible CMS, powerful open-source CMS, website builder, open-source web platform">
    <meta name="author" content="Future CMS Team">
    <title>Future CMS - Open Source Content Management System</title>
    <!-- Favicon icon-->
    <link rel="icon" href="{{ asset('admiro/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admiro/assets/images/favicon.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&display=swap" rel="stylesheet">
    <!-- Flag icon css -->
    <link rel="stylesheet" href="{{ asset('admiro/assets/css/vendors/flag-icon.css') }}">
    <!-- iconly-icon -->
    <link rel="stylesheet" href="{{ asset('admiro/assets/css/iconly-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('admiro/assets/css/bulk-style.css') }}">
    <!-- Themify icon -->
    <link rel="stylesheet" href="{{ asset('admiro/assets/css/themify.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admiro/assets/css/fontawesome-min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admiro/assets/css/app.css') }}"/>
    <!-- Weather Icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admiro/assets/css/vendors/weather-icons/weather-icons.min.css') }}">
    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('admiro/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('admiro/assets/css/color-1.css') }}" media="screen">

</head>
<body>
<!-- tap on top starts-->
<div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
<!-- tap on tap ends-->
<!-- loader-->
<!-- login page start-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-7 login_one_image"><img class="bg-img-cover bg-center" src="{{asset('admiro/assets/images/login/2.jpg')}}" alt="login page"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card login-dark login-bg">
                <div>
                    <div><a class="logo" href="{{route('home')}}"><img class="img-fluid for-light m-auto" src="{{asset('admiro/assets/images/logo/logo1.png')}}" alt="login page">
                            <img class="for-dark" src="{{asset('admiro/assets/images/logo/logo-dark.png')}}" alt="logo"></a></div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
    <!-- jquery-->
    <script data-navigate-once src="{{asset('admiro/assets/js/vendors/jquery/jquery.min.js')}}"></script>
    <!-- bootstrap js-->
    <script data-navigate-once src="{{asset('admiro/assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}" defer=""></script>
    <script data-navigate-once src="{{asset('admiro/assets/js/vendors/bootstrap/dist/js/popper.min.js')}}" defer=""></script>
    <!--fontawesome-->
    <script data-navigate-once src="{{asset('admiro/assets/js/vendors/font-awesome/fontawesome-min.js')}}"></script>
    <!-- password_show-->
    <script data-navigate-once src="{{asset('admiro/assets/js/password.js')}}"></script>
    <!-- custom script -->
    <script data-navigate-once src="{{asset('admiro/assets/js/script.js')}}"></script>
    @livewireScriptConfig
</div>
</body>
</html>
