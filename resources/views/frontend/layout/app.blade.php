<!DOCTYPE html>
<html lang="zxx">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Link of CSS files -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome-pro.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/swiper-min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fancybox.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/jquery-ui-min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>Maha Ayurvedas | The exceptional ayurveda platform for everyone</title>
        <link rel="icon" type="image/png" href="{{asset('assets/img/ayurved/maha-512.png')}}">
    </head>

    <body>

         <!--Preloader starts-->
         <div class="preloader js-preloader">
            <img src="{{asset('assets/img/preloader.gif')}}" alt="Image">
        </div>
        <!--Preloader ends-->

       
        
        <div class="body_overlay"></div>


        @include('frontend.common.header')
        @yield('content')
        @include('frontend.common.footer')

           
        <!-- Back-to-top button End -->

         <!-- Link of JS files -->
         <script src="{{asset('assets/js/jquery.min.js')}}"></script>
         <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
         <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
         {{-- <script src="{{asset('assets/js/contact-form-script.js')}}"></script> --}}
         <script src="{{asset('assets/js/aos.js')}}"></script>
         <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
         <script src="{{asset('assets/js/swiper-min.js')}}"></script>
         <script src="{{asset('assets/js/jquery-ui-min.js')}}"></script>
         <script src="{{asset('assets/js/odometer.min.js')}}"></script>
         <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
         <script src="{{asset('assets/js/fancybox.js')}}"></script>
         <script src="{{asset('assets/js/jquery.appear.js')}}"></script>
         <script src="{{asset('assets/js/tweenmax.min.js')}}"></script>
         <script src="{{asset('assets/js/main.js')}}"></script>
     </body>
 
 </html>