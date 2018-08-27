<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Academics | Home 1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon.png">

    <link rel="stylesheet" href="asset/css/magnific-popup.css">

    <link rel="stylesheet" href="asset/css/select2.min.css">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="asset/css/normalize.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="asset/css/main.css">

    <!--UiSlider CSS -->
    <link rel="stylesheet" href="asset/vendor/noUiSlider/nouislider.min.css">

    <!--Modal poppup-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- bootstrap CSS -->
   <link rel="stylesheet" href="asset/css/bootstrap.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="asset/css/animate.min.css">

    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">

    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="asset/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/vendor/OwlCarousel/owl.theme.default.min.css">

    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="asset/css/meanmenu.min.css">

    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="asset/vendor/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="asset/vendor/slider/css/preview.css" type="text/css" media="screen" />

    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="asset/css/jquery.datetimepicker.css">

    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="asset/css/magnific-popup.css">

    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="asset/css/hover-min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="asset/css/style.css">

   <!-- Modernizr Js -->
    <script src="asset/js/modernizr-2.8.3.min.js"></script>

    <!--Sweet Alert Js-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- AngularJS Application Scripts Begins-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.3.1/angular-ui-router.min.js"></script>

    <script src="<?= asset('app/angular/angular-cookies.min.js') ?>"></script>

    <script src="<?= asset('app/angular/angular-cookies.js') ?>"></script>

    <!-- Image Upload Script-->
    <script>
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <!-- AngularJS Application Scripts Ends-->


    <!--Login & Register script for angular-->

    <script src="<?= asset('app/angular/app.js') ?>"></script>
    <script src="<?= asset('app/angular/router/router.js') ?>"></script>
    <script src="<?= asset('app/angular/controller/authController.js') ?>"></script>
    <script src="<?= asset('app/angular/controller/script.js') ?>"></script>
    <script src="<?= asset('app/angular/controller/profile.js') ?>"></script>
    <script src="<?= asset('app/angular/factory/authFactory.js') ?>"></script>



</head>

<body ng-app="app">

    <div ui-view>

    </div>

</body>

<!-- jquery-->
<script src="asset/js/jquery-2.2.4.min.js" type="text/javascript"></script>

<!-- Plugins js -->
<script src="asset/js/plugins.js" type="text/javascript"></script>

<!-- bootstrap js -->
<script src="asset/js/bootstrap.min.js" type="text/javascript"></script>

<!-- WOW JS -->
<script src="asset/js/wow.min.js"></script>

<!-- Nivo slider js -->
<script src="asset/vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="asset/vendor/slider/home.js" type="text/javascript"></script>

<!-- Owl Cauosel JS -->
<script src="asset/vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>

<!-- Meanmenu Js -->
<script src="asset/js/jquery.meanmenu.min.js" type="text/javascript"></script>

<!-- Srollup js -->
<script src="asset/js/jquery.scrollUp.min.js" type="text/javascript"></script>

<!-- jquery.counterup js -->
<script src="asset/js/jquery.counterup.min.js"></script>
<script src="asset/js/waypoints.min.js"></script>

<!-- Countdown js -->
<script src="asset/js/jquery.countdown.min.js" type="text/javascript"></script>

<!-- Isotope js -->
<script src="asset/js/isotope.pkgd.min.js" type="text/javascript"></script>

<!--UiSlider CSS -->
<script src="asset/vendor/noUiSlider/nouislider.min.js" type="text/javascript"></script>

<!-- Magic Popup js -->
<script src="asset/js/jquery.magnific-popup.min.js" type="text/javascript"></script>

<!-- Custom Js -->
<script src="asset/js/main.js" type="text/javascript"></script>

<script src="asset/js/select2.min.js" type="text/javascript"></script>

<!-- Ui-Bootstrap Js -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.min.js"></script>

</html>
