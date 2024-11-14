<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    

    @vite('resources/css/app.css')
    <title>Signet Ins </title>

    <!-- font awesome kit -->
    <script src="https://kit.fontawesome.com/201614f162.js" crossorigin="anonymous"></script>

    <!-- css link -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <script src="custom-js/wow.min.js"></script>

</head>

<body>
    <!-- ====== Navbar Section Start -->
    @include('frontend.layouts.navbar')
    <!-- ====== Navbar Section Start -->

    @yield('content')


    <!-- ====== Services Section End -->
    @include('frontend.layouts.footer')

    <script src="custom-js/main.js"></script>

</body>

</html>
