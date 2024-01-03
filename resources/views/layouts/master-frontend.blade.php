{{--@if (config('frontend.custom_url.status') == 'on')
    <script type="text/javascript">
		window.location.href = "{{ config('frontend.custom_url.link') }}"
	</script>
@else--}}

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
        <title>{{ $information['title'] }}</title>
			<!--Favicon -->
		<link rel="icon" href="{{URL::asset('img/brand/favicon.ico')}}" type="image/x-icon"/>

	
		<!-- Bootstrap 5.2.3 -->
		<link href="{{URL::asset('plugins/bootstrap-5.2.3-dist/css/bootstrap.min.css')}}" rel="stylesheet">
		<script src="{{URL::asset('js/ikhan.js')}}"></script>
		<!-- Icons -->
		<link href="{{URL::asset('css/icons.css')}}" rel="stylesheet" />
	
		<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" />

	</head>

	<body>
		
		@if(config('master-frontend.maintenance') == 'on')

			@include('layouts.maintenance')

		@else
			<header>
					@include('header')
			</header>
			<div classe="body">
					<!--  App-Content -->	
				<main class="main">
					<div class="content-app">
						@yield('content')
					</div>                   
				</main> <!-- End App-Content -->
				@include('layouts.flash')
				<footer>
					@include('layouts.footer')
				</footer>
			</div>
		@endif

		<!-- JQuery-->
		<script src="{{URL::asset('plugins/jquery/jquery-3.6.0.min.js')}}"></script>
		<!-- Bootstrap 5-->
		<script src="{{URL::asset('plugins/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js')}}"></script>

		<script src="{{URL::asset('js/ikhan.js')}}"></script>
		
		
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
		<script src="{{URL::asset('plugins/typed/typed.min.js')}}"></script>

		<script>
			document.addEventListener('DOMContentLoaded', function() {
				var options = {
					strings: [	'<h1><span>{{ __('Article Generator') }}</span></h1>', 
								'<h1><span>{{ __('Content Improver') }}</span></h1>',
								'<h1><span>{{ __('Blog Sections') }}</span></h1>',
								'<h1><span>{{ __('Blog Ideas') }}</span></h1>',
								'<h1><span>{{ __('SEO Meta Descriptions') }}</span></h1>',
								'<h1><span>{{ __('FAQ Answers') }}</span></h1>',
								'<h1><span>{{ __('And Many More!') }}</span></h1>'
							],
					typeSpeed: 40, // Vitesse de frappe en millisecondes
					backSpeed: 40, // Vitesse de suppression en millisecondes
					backDelay: 2000, // Délai avant le début de la suppression
					startDelay: 500, // Délai avant le début de la frappe
					loop: true ,// Répéter l'animation en boucle
					showCursor:true
				};

				var typed = new Typed("#typed", options);
			});
		</script>
	</body>
</html>

