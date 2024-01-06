<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<!-- Meta data -->
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="{{ $information['author'] }}">
	    <meta name="keywords" content="{{ $information['keywords'] }}">
	    <meta name="description" content="{{ $information['description'] }}">
		
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
        <title>{{ config('app.name') }}</title>

		<!-- Style css -->
		<link href="{{URL::asset('plugins/tippy/scale-extreme.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('plugins/tippy/material.css')}}" rel="stylesheet" />

		<!--Favicon -->
		<link rel="icon" href="{{URL::asset('img/brand/favicon.ico')}}" type="image/x-icon"/>

		<!-- Animate -->
		<link href="{{URL::asset('css/animated.css')}}" rel="stylesheet" />

		<!-- Bootstrap 5 -->
		<link href="{{URL::asset('plugins/bootstrap-5.2.3-dist/css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Icons -->
		<link href="{{URL::asset('css/icons.css')}}" rel="stylesheet" />

		<!-- P-scrollbar -->
		<link href="{{URL::asset('plugins/p-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

		<!-- Simplebar -->
		<link href="{{URL::asset('plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">

		<!-- Tippy -->
		<link href="{{URL::asset('plugins/tippy/scale-extreme.css')}}" rel="stylesheet" />
		<link href="{{URL::asset('plugins/tippy/material.css')}}" rel="stylesheet" />

		<!-- Toastr -->
		<link href="{{URL::asset('plugins/toastr/toastr.min.css')}}" rel="stylesheet" />

		<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />

		<!-- Auth Styles -->
		<link href="{{URL::asset('css/auth.css')}}" rel="stylesheet" />

		{!! htmlScriptTagJsApi() !!}

	</head>

	<body class="app sidebar-mini">
		<!-- Page -->
		<main class="page">

			@yield('content')

		</div><!-- End Page -->

		<!-- JQuery-->
		<script src="{{URL::asset('plugins/jquery/jquery-3.6.0.min.js')}}"></script>

		<!-- Bootstrap 5-->
		<script src="{{URL::asset('plugins/bootstrap-5.0.2/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Tippy JS -->
		<script src="{{URL::asset('plugins/tippy/popper.min.js')}}"></script>
		<script src="{{URL::asset('plugins/tippy/tippy-bundle.umd.min.js')}}"></script>

		<!-- Awselect JS -->
		<script src="{{URL::asset('plugins/awselect/awselect.min.js')}}"></script>
		<script src="{{URL::asset('js/awselect.js')}}"></script>

		<!-- Custom-->
		<script src="{{URL::asset('js/custom.js')}}"></script>

		<script>
			tippy('[data-tippy-content]', {
				animation: 'scale-extreme',
				theme: 'material',
			});
		</script>

	</body>
</html>


