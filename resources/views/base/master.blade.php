<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="author" content="SebasN">
    <link rel="icon" href="{{ URL::asset('assets/images/ico-sale.png') }}">
    <title>Sistema de ventas</title>

    {!! HTML::style('assets/images/apple-touch-icon.png') !!}
    {!! HTML::style('assets/images/favicon.ico') !!}

    <!-- Stylesheets -->
    {!! HTML::style('assets/css/bootstrap.min.css') !!}
    {!! HTML::style('assets/css/bootstrap-extend.min.css') !!}
    {!! HTML::style('assets/css/site.min.css') !!}

    {!! HTML::style('assets/vendor/animsition/animsition.css') !!}
    {!! HTML::style('assets/vendor/asscrollable/asScrollable.css') !!}
    {!! HTML::style('assets/vendor/switchery/switchery.css') !!}
    {!! HTML::style('assets/vendor/intro-js/introjs.css') !!}
    {!! HTML::style('assets/vendor/slidepanel/slidePanel.css') !!}
    {!! HTML::style('assets/vendor/flag-icon-css/flag-icon.css') !!}

    <!-- Plugin -->
    {!! HTML::style('assets/vendor/chartist-js/chartist.css') !!}
    {!! HTML::style('assets/vendor/jvectormap/jquery-jvectormap.css') !!}

    <!-- Page -->
    {!! HTML::style('assets/css/../fonts/weather-icons/weather-icons.css') !!}
    {!! HTML::style('assets/css/dashboard/v1.css') !!}

    <!-- Fonts -->
    {!! HTML::style('assets/fonts/web-icons/web-icons.min.css') !!}
    {!! HTML::style('assets/fonts/brand-icons/brand-icons.min.css') !!}
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    {!! HTML::style('assets/vendor/html5shiv/html5shiv.min.js') !!}
    <! [endif]-->

    <!--[if lt IE 10]>
    {!! HTML::style('assets/vendor/media-match/media.match.min.js') !!}
    {!! HTML::style('assets/vendor/respond/respond.min.js') !!}
    <![endif]-->
    @yield("css")
    <!-- Custom -->
    {!! HTML::style('assets/css/custom.css') !!}
</head>
<body class="dashboard" ng-app="Comunicapp">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
@include("base.top-menu")
@yield("content")
</body>
<div id="loading-modal" class="loader vertical-align-middle loader-round-circle"><!-- Loading Modal --></div>
<!-- Footer -->
<footer class="site-footer">
    <span class="site-footer-legal">© 2016 SebasN</span>
    <div class="site-footer-right">
        Developed with <i class="red-600 wb wb-heart"></i> by <a href="http://sebastian-navarrete.com">SebasN</a>
    </div>
</footer>
<!-- Scripts -->
{!! HTML::script('assets/vendor/modernizr/modernizr.js') !!}
{!! HTML::script('assets/vendor/breakpoints/breakpoints.js') !!}

        <!-- Core  -->
{!! HTML::script('assets/vendor/jquery/jquery.js') !!}
{!! HTML::script('assets/vendor/bootstrap/bootstrap.js') !!}
{!! HTML::script('assets/vendor/animsition/jquery.animsition.js') !!}
{!! HTML::script('assets/vendor/asscroll/jquery-asScroll.js') !!}
{!! HTML::script('assets/vendor/mousewheel/jquery.mousewheel.js') !!}
{!! HTML::script('assets/vendor/asscrollable/jquery.asScrollable.all.js') !!}
{!! HTML::script('assets/vendor/ashoverscroll/jquery-asHoverScroll.js') !!}

        <!-- Plugins -->
{!! HTML::script('assets/vendor/switchery/switchery.min.js') !!}
{!! HTML::script('assets/vendor/intro-js/intro.js') !!}
{!! HTML::script('assets/vendor/screenfull/screenfull.js') !!}
{!! HTML::script('assets/vendor/slidepanel/jquery-slidePanel.js') !!}

{!! HTML::script('assets/vendor/skycons/skycons.js') !!}
{!! HTML::script('assets/vendor/chartist-js/chartist.min.js') !!}
{!! HTML::script('assets/vendor/aspieprogress/jquery-asPieProgress.min.js') !!}
{!! HTML::script('assets/vendor/jvectormap/jquery-jvectormap.min.js') !!}
{!! HTML::script('assets/vendor/jvectormap/maps/jquery-jvectormap-ca-lcc-en.js') !!}
{!! HTML::script('assets/vendor/matchheight/jquery.matchHeight-min.js') !!}

        <!-- Scripts -->
{!! HTML::script('assets/js/core.js') !!}
{!! HTML::script('assets/js/site.js') !!}

{!! HTML::script('assets/js/sections/menu.js') !!}
{!! HTML::script('assets/js/sections/menubar.js') !!}
{!! HTML::script('assets/js/sections/sidebar.js') !!}

{!! HTML::script('assets/js/configs/config-colors.js') !!}
{!! HTML::script('assets/js/configs/config-tour.js') !!}

{!! HTML::script('assets/js/components/asscrollable.js') !!}
{!! HTML::script('assets/js/components/animsition.js') !!}
{!! HTML::script('assets/js/components/slidepanel.js') !!}
{!! HTML::script('assets/js/components/switchery.js') !!}
{!! HTML::script('assets/js/components/matchheight.js') !!}
{!! HTML::script('assets/js/components/jvectormap.js') !!}
{!! HTML::script('assets/js/custom.js') !!}
<script type="text/javascript">
    var BASE_URL = "{!! $_ENV['APP_BASE'] !!}";
</script>
@yield("script")
        <!-- Angular Tools -->
{!! HTML::script('assets/angular/angular.min.js') !!}
        <!-- Angular App Definition -->
{!! HTML::script('assets/angular/app.js') !!}
        <!-- Angular Controllers -->
{!! HTML::script('assets/angular/DatabaseStorageService.js') !!}
{!! HTML::script('assets/angular/Controllers/messageController.js') !!}
{!! HTML::script('assets/angular/Controllers/dashboardController.js') !!}
{!! HTML::script('assets/angular/Controllers/administracionController.js') !!}
</html>