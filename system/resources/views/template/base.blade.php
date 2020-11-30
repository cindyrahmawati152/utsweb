<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>CINDY BEAUTY</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="{{url('public')}}/aircv/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="{{url('public')}}/aircv/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="{{url('public')}}/aircv/css/animate.css" rel="stylesheet">

        <!-- THEME STYLES -->
        <link href="{{url('public')}}/aircv/css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        @include('template.section.header')
        <!--========== END HEADER ==========-->

        @yield('content')
            
        <!-- Contact -->
        @include('template.section.contact')
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        @include('template.section.footer')
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="{{url('public')}}/aircv/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="{{url('public')}}/aircv/vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="{{url('public')}}/aircv/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="{{url('public')}}/aircv/vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="{{url('public')}}/aircv/vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="{{url('public')}}/aircv/vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="{{url('public')}}/aircv/vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="{{url('public')}}/aircv/vendor/jquery.parallax.min.js" type="text/javascript"></script>
        <script src="{{url('public')}}/aircv/vendor/jquery.appear.js" type="text/javascript"></script>
        <script src="{{url('public')}}/aircv/vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="{{url('public')}}/aircv/vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="{{url('public')}}/aircv/js/layout.min.js" type="text/javascript"></script>
        <script src="{{url('public')}}/aircv/js/components/progress-bar.min.js" type="text/javascript"></script>
        <script src="{{url('public')}}/aircv/js/components/masonry.min.js" type="text/javascript"></script>
        <script src="{{url('public')}}/aircv/js/components/wow.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>