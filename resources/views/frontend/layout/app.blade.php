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
        <style>
            .modal{
                border: 4px solid #f00;
            }
            .modal-backdrop
            {
                opacity:0.9 !important;
            }
            .sidebarItem .social a {text-decoration: none;vertical-align: middle;text-align: center;line-height: 3;}.sidebarItem .social a p {color: white;margin: 0px;font-weight: 600;}.sidebarItem {height: auto;width: 0px;position: fixed;text-align: center;top: 35vh;padding: 150px;z-index: 1001;}.sidebarItem p .bi {left: 45px;position: relative;vertical-align: middle;text-align: center;}.sidebarItem p img {left: 40px;position: relative;vertical-align: middle;}.sidebarItem .social {margin-left: -200px;width: 230px;padding: 0;display: inline-table;height: 0px;background-color: rgba(128, 128, 128, 0.73);-moz-transition-property: margin-left;-moz-transition-duration: 0.2s;-moz-transition-delay: 0.2s;-ms-transition-property: margin-left;-ms-transition-duration: 0.2s;-ms-transition-delay: 0.2s;-o-transition-property: margin-left;-o-transition-duration: 0.2s;-o-transition-delay: 0.2s;-webkit-transition-property: margin-left;-webkit-transition-duration: 0.2s;-webkit-transition-delay: 0.2s;box-shadow: 0px 0px 6px 0px #3E3D3D;cursor: pointer;}.sidebarItem .social:hover {margin-left: -10px;width: 230px;}.sidebarItem .social.emergency {background-color: #f00;padding: 15px 0;}.sidebarItem .social.whatsapp {background-color: #26d367;}.sidebarItem .social.call {background-color: #184f34;}
        </style>
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