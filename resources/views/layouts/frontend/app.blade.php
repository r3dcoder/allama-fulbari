<!doctype html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')- {{ config('app.name', 'Laravel') }}</title>

    <link href="{{asset('assetR/frontend/css/bootstrap.css')}}" rel="stylesheet">

	<link href="{{asset('assetR/frontend/css/swiper.css')}}" rel="stylesheet">

	<link href="{{asset('assetR/frontend/css/ionicons.css')}}" rel="stylesheet">


	<link href="front-page-category/css/styles.css" rel="stylesheet">

	<link href="front-page-category/css/responsive.css" rel="stylesheet">
	@stack('css')
	

</head>
<body>

	@include('layouts.frontend.include.header');

	@yield('content')


	@include('layouts.frontend.include.footer');

	<!-- SCIPTS -->

	<script src="{{asset('assetR/frontend/js/jquery-3.1.1.min.js')}}"></script>

	<script src="{{asset('assetR/frontend/js/tether.min.js')}}"></script>

	<script src="{{asset('assetR/frontend/js/bootstrap.js')}}"></script>

	<script src="{{asset('assetR/frontend/js/swiper.js')}}"></script>

	<script src="{{asset('assetR/frontend/js/scripts.js')}}"></script>

	@stack('js')

	
</body>
</html>
