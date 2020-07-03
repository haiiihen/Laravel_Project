<!DOCTYPE html>
<html lang="en">

<head>
    <title>Camille - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('camille/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('camille/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('camille/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('camille/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('camille/css/magnific-popup.css')}}"> 

    <link rel="stylesheet" href="{{asset('camille/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('camille/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('camille/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('camille/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('camille/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('camille/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('camille/css/style.css')}}">
</head>

<body>
    <!-- Navbar  -->
    @include('layouts.camille.includes._navbar')
    <!-- End Navbar  -->

    <!-- Content  -->
    @yield('content')
    <!-- End Content  -->
    


    <!-- Footer  -->
    @include('layouts.camille.includes._footer')
    <!-- End Footer  -->



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="{{asset('camille/js/jquery.min.js')}}"></script>
    <script src="{{asset('camille/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('camille/js/popper.min.js')}}"></script>
    <script src="{{asset('camille/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('camille/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('camille/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('camille/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('camille/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('camille/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('camille/js/aos.js')}}"></script>
    <script src="{{asset('camille/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('camille/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('camille/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('camille/js/scrollax.min.js')}}"></script>
    <script src="{{asset('camille/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
    <script src="{{asset('camille/js/google-map.js')}}"></script>
    <script src="{{asset('camille/js/main.js')}}"></script>

</body>

</html>