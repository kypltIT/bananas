<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <head>
        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Bananas - @yield('title')</title>
    
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
        <!-- Theme Style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/animate.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/animation.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/bootstrap-select.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/styles.css') }}">
    
        <!-- Font -->
        <link rel="stylesheet" href="{{ asset('admin-assets/font/fonts.css') }}">
    
        <!-- Icon -->
        <link rel="stylesheet" href="{{ asset('admin-assets/icon/style.css') }}">
    
        <!-- Favicon and Touch Icons  -->
        <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('admin-assets/images/favicon.png') }}">
    </head>
    

</head>

<body>
    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">

                <!-- section-menu-left -->
                @include('admin.partials.side-bar')
                <!-- /section-menu-left -->
                
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                @include('admin.partials.nav-bar')
                    <!-- /header-dashboard -->

                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                @yield('content')
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->

                        <!-- bottom-page -->
                        <div class="bottom-page">
                            @include('admin.partials.footer')
                        </div>
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->


<!-- Javascript -->
<script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/zoom.js') }}"></script>
<script src="{{ asset('admin-assets/js/morris.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/raphael.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/morris.js') }}"></script>
<script src="{{ asset('admin-assets/js/jvectormap.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/jvectormap-us-lcc.js') }}"></script>
<script src="{{ asset('admin-assets/js/jvectormap-data.js') }}"></script>
<script src="{{ asset('admin-assets/js/jvectormap.js') }}"></script>
<script src="{{ asset('admin-assets/js/apexcharts/apexcharts.js') }}"></script>
<script src="{{ asset('admin-assets/js/apexcharts/line-chart-1.js') }}"></script>
<script src="{{ asset('admin-assets/js/apexcharts/line-chart-2.js') }}"></script>
<script src="{{ asset('admin-assets/js/apexcharts/line-chart-3.js') }}"></script>
<script src="{{ asset('admin-assets/js/apexcharts/line-chart-4.js') }}"></script>
<script src="{{ asset('admin-assets/js/apexcharts/line-chart-5.js') }}"></script>
<script src="{{ asset('admin-assets/js/apexcharts/line-chart-6.js') }}"></script>
<script src="{{ asset('admin-assets/js/apexcharts/line-chart-7.js') }}"></script>
<script src="{{ asset('admin-assets/js/switcher.js') }}"></script>
<script defer src="{{ asset('admin-assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('admin-assets/js/main.js') }}"></script>

</body>
</html>
