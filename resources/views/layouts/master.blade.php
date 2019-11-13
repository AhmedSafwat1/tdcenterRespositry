<!DOCTYPE html>

@if( Lang::locale() == 'en' )
<html dir="ltr" lang="en">

@elseif( Lang::locale() == 'ar' )
<html dir="rtl" lang="ar">

@endif

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="StudyPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>StudyPress | Education & Courses HTML Template</title>

{{-- <link href="{{ asset('front/css/app.css') }}" rel="stylesheet"> --}}

<!-- Favicon and Touch Icons -->
<link href="{{ asset('front/images/favicon.png') }}" rel="shortcut icon" type="image/png">
<link href="{{ asset('front/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
<link href="{{ asset('front/images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
<link href="{{ asset('front/images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
<link href="{{ asset('front/images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
@if( Lang::locale() == 'en' )

<link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('front/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('front/css/animate.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('front/css/css-plugin-collections.css') }}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset('front/css/menuzord-skins/menuzord-rounded-boxed.css') }}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset('front/css/style-main.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset('front/css/preloader.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset('front/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet" type="text/css">

<!-- CSS | RTL Layout -->
@elseif( Lang::locale() == 'ar' )

<!-- Stylesheet -->

<link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('front/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('front/css/animate.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('front/css/css-plugin-collections.css') }}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{ asset('front/css/menuzord-skins/menuzord-rounded-boxed.css') }}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{ asset('front/css/style-main.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{ asset('front/css/preloader.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{ asset('front/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet" type="text/css">

<!-- CSS | RTL Layout -->
{{-- <link href="css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"> --}}
<link href="{{ asset('front/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('front/css/style-main-rtl.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('front/css/style-main-rtl-extra.css') }}" rel="stylesheet" type="text/css">
{{-- <link href="css/style-main-rtl.css" rel="stylesheet" type="text/css">
<link href="css/style-main-rtl-extra.css" rel="stylesheet" type="text/css"> --}}
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

@endif

<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<link href="{{ asset('front/css/style.css') }}" rel="stylesheet" type="text/css">

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{ asset('front/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('front/js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css"/>
<link  href="{{ asset('front/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{ asset('front/css/colors/theme-skin-color-set-1.css') }}" rel="stylesheet" type="text/css">

{{-- Data Table --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<!-- external javascripts -->
<script src="{{ asset('front/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('front/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{ asset('front/js/jquery-plugin-collection.js') }}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ asset('front/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('front/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>

{{-- Data Table --}}
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">

@include('front.partials.header')


@yield('content')


@include('front.partials.footer')
</div>
<!-- end wrapper -->


{{-- @include('layouts.front.footer') --}}

{{-- src="{{ asset('js/app.js') }}" --}}
<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('front/js/custom.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
{{-- <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> --}}
<script type="text/javascript" src="{{ asset('front/js/revolution-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/revolution-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/revolution-slider/js/extensions/revolution.extension.video.min.js') }}"></script>
@yield('scripto')

</body>
</html>
