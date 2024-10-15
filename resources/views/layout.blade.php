<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>GIANTY</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="7JEyYjRG"></script>
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend/images/favicon.jpg')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/price_rangs.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
   </head>
        @include('pages.elements.header')
        @yield('content')
		@include('pages.elements.footer')


       <!-- All JS Custom Plugins Link Here here -->
       <script src="{{asset('public/frontend/js/vendor/modernizr-3.5.0.min.js')}}"></script>
       <!-- Jquery, Popper, Bootstrap -->
       <script src="{{asset('public/frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
       <script src="{{asset('public/frontend/js/popper.min.js')}}"></script>
       <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
       <!-- Jquery Mobile Menu -->
       <script src="{{asset('public/frontend/js/jquery.slicknav.min.js')}}"></script>

       <!-- Jquery Slick , Owl-Carousel Plugins -->
       <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
       <script src="{{asset('public/frontend/js/slick.min.js')}}"></script>
       <script src="{{asset('public/frontend/js/price_rangs.js')}}"></script>
       
       <!-- One Page, Animated-HeadLin -->
       <script src="{{asset('public/frontend/js/wow.min.js')}}"></script>
       <script src="{{asset('public/frontend/js/animated.headline.js')}}"></script>
       <script src="{{asset('public/frontend/js/jquery.magnific-popup.js')}}"></script>

       <!-- Scrollup, nice-select, sticky -->
       <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
       <script src="{{asset('public/frontend/js/jquery.nice-select.min.js')}}"></script>
       <script src="{{asset('public/frontend/js/jquery.sticky.js')}}"></script>
       
       <!-- contact js -->
       <script src="{{asset('public/frontend/js/contact.js')}}"></script>
       <script src="{{asset('public/frontend/js/jquery.form.js')}}"></script>
       <script src="{{asset('public/frontend/js/jquery.validate.min.js')}}"></script>
       <script src="{{asset('public/frontend/js/mail-script.js')}}"></script>
       <script src="{{asset('public/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
       
       <!-- Jquery Plugins, main Jquery -->	
       <script src="{{asset('public/frontend/js/plugins.js')}}"></script>
       <script src="{{asset('public/frontend/js/main.js')}}"></script>
       
   </body>
</html>
