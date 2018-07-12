<!-- Đây là layout chính (các trang home, product, news, contact đều đc kế thừa từ layout này -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> @yield('title')</title>
    <link href="{{ asset('layouts/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('layouts/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('layouts/css/responsive.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('layouts/images') }}/ico/favicon.ico">
</head><!--/head-->

<body>
	<!--/header-->
	@include("layouts.elements.top")
	
	<!-- /content -->
	@include("layouts.elements.content")
    
    <!--/Footer-->
	@include("layouts.elements.footer")
	
    <script src="{{ asset('layouts/js/jquery.js') }}"></script>
	<script src="{{ asset('layouts/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('layouts/js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('layouts/js/price-range.js') }}"></script>
    <script src="{{ asset('layouts/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('layouts/js/main.js') }}"></script>
</body>
</html>