<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MediPlus</title>
         <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{url('/')}}/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="{{url('/')}}/css/animate.css">

        <link rel="stylesheet" href="{{url('/')}}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{url('/')}}/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{url('/')}}/css/magnific-popup.css">

        <link rel="stylesheet" href="{{url('/')}}/css/aos.css">

        <link rel="stylesheet" href="{{url('/')}}/css/ionicons.min.css">

        <link rel="stylesheet" href="{{url('/')}}/css/flaticon.css">
        <link rel="stylesheet" href="{{url('/')}}/css/icomoon.css">
        <link rel="stylesheet" href="{{url('/')}}/css/style.css">
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        {{-- Content Section --}}
        @yield('content')

        {{-- Footer Section --}}
        @include('footer')

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

        <script src="{{url('/')}}/js/jquery.min.js"></script>
        <script src="{{url('/')}}/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="{{url('/')}}/js/popper.min.js"></script>
        <script src="{{url('/')}}/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/js/jquery.easing.1.3.js"></script>
        <script src="{{url('/')}}/js/jquery.waypoints.min.js"></script>
        <script src="{{url('/')}}/js/jquery.stellar.min.js"></script>
        <script src="{{url('/')}}/js/owl.carousel.min.js"></script>
        <script src="{{url('/')}}/js/jquery.magnific-popup.min.js"></script>
        <script src="{{url('/')}}/js/aos.js"></script>
        <script src="{{url('/')}}/js/jquery.animateNumber.min.js"></script>
        <script src="{{url('/')}}/js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="js/google-map.js"></script>

        <script src="{{url('/')}}/js/main.js"></script>
    </body>
</html>
