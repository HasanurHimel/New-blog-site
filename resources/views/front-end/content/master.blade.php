
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-end/assets/css/style.css">
    <script src="{{ asset('/') }}front-end/assets/js/html5shiv.min.js"></script>
    <script src="{{ asset('/') }}front-end/assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">

header section

@include('front-end.includes.header')

<!-- header close-->


    <!--main menu bar start-->
@include('front-end.includes.main-menu')
<!--main menu bar close-->


    <!--running news start-->
    @include('front-end.includes.running-news')

    @yield('category_content')

    @include('front-end.includes.footer-section')
    footer section close

</div>
<script src="{{ asset('/') }}front-end/assets/js/jquery.min.js"></script>
<script src="{{ asset('/') }}front-end/assets/js/wow.min.js"></script>
<script src="{{ asset('/') }}front-end/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}front-end/assets/js/slick.min.js"></script>
<script src="{{ asset('/') }}front-end/assets/js/jquery.li-scroller.1.0.js"></script>
<script src="{{ asset('/') }}front-end/assets/js/jquery.newsTicker.min.js"></script>
<script src="{{ asset('/') }}front-end/assets/js/jquery.fancybox.pack.js"></script>
<script src="{{ asset('/') }}front-end/assets/js/custom.js"></script>

<!--footer section close-->

</body>
</html>





