<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">



        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">

        <!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">  -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">

        <!-- <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}">

        <!-- <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">

        <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet">  -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">

        <!-- Template Main CSS File -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- =======================================================
  * Template Name: Append
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

        <title>Marriage</title>

    </head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
    <div>
        @yield('content')
    </div>

    <!-- Vendor JS Files -->
    <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- <script src="assets/vendor/glightbox/js/glightbox.min.js"></script> -->
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script> -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> -->
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- <script src="assets/vendor/swiper/swiper-bundle.min.js"></script> -->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- <script src="assets/vendor/aos/aos.js"></script> -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>


    <!-- Template Main JS File -->
    <!-- <script src="assets/js/main.js"></script> -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

    @yield('script')

</body>



</html>
