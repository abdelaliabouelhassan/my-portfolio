<!DOCTYPE html>
<html lang="en" class="max-width-d">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <meta name="robots" content="index, follow">
    <meta name="description" content="As a full-stack web developer with experience in mobile development, I have a comprehensive understanding of the technical aspects of creating responsive, user-friendly applications. With expertise in multiple programming languages, I am able to develop and deploy custom solutions for web and mobile platforms that meet the needs of my clients. Contact me today to discuss how I can help bring your vision to life." />
    <meta name="author" content="Abdelali Abouelhassan" />
    <!--  FavIcon  -->
    <link rel="shortcut icon" href="{{asset('images/abdelali.jpg')}}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-icons.css')}}">
    <!-- Malihu Jquery Custom ScrollBar Css -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!-- Magnific Popup Css -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <!--  Custom Style Css  -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!--  Color Css  -->
    <link rel="stylesheet" href="{{asset('assets/colors/sky-blue.css')}}">
  </head>
  <body class="ajax-page-visible max-width-d dark-arshia">
    
    @yield('content')

    <!--  JavaScripts  -->
    <!--  Jquery 3.4.1  -->
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <!--  Bootstrap Js  -->
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <!--  Malihu ScrollBar Js  -->
    <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!--  CountTo Js  -->
    <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
    <!--  Swiper Js  -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!--  Isotope Js  -->
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <!--  Magnific Popup Js  -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

    <!-- Map Js -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRemITiP7JRWpZwLhVt-T2x5MeUFE2KWs"></script> -->
    <!--  Arshia Js  -->
    <script src="{{asset('assets/js/arshia.js')}}"></script>
  </body>
</html>