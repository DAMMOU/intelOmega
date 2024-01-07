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

		<!-- JQuery-->
		<script src="{{URL::asset('plugins/jquery/jquery-3.6.0.min.js')}}"></script>
		<!-- Bootstrap 5.2.3 -->
		<link href="{{URL::asset('plugins/bootstrap-5.2.3-dist/css/bootstrap.min.css')}}" rel="stylesheet">
		<script src="{{URL::asset('js/ikhan.js')}}"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
	
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
		
		@endif
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
		<script src="{{URL::asset('plugins/jquery/jquery-3.6.0.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
		<!-- Bootstrap 5-->
		<script src="{{URL::asset('plugins/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
		<script src="{{URL::asset('plugins/typed/typed.min.js')}}"></script>
		<script src="{{URL::asset('js/ikhan.js')}}"></script>
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
		<script>
			$(document).ready(function() {
	
			$('.owl-carousel').owlCarousel({
				mouseDrag:false,
				loop:true,
				margin:2,
				nav:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:3
					}
				}
			}); 
	
			$('.owl-prev').click(function() {
				$active = $('.owl-item .item.show');
				$('.owl-item .item.show').removeClass('show');
				$('.owl-item .item').removeClass('next');
				$('.owl-item .item').removeClass('prev');
				$active.addClass('next');
				if($active.is('.first')) {
					$('.owl-item .last').addClass('show');
					$('.first').addClass('next');
					$('.owl-item .last').parent().prev().children('.item').addClass('prev');
				}
				else {
					$active.parent().prev().children('.item').addClass('show');
					if($active.parent().prev().children('.item').is('.first')) {
						$('.owl-item .last').addClass('prev');
					}
					else {
						$('.owl-item .show').parent().prev().children('.item').addClass('prev');
					}
				}
			});
	
			$('.owl-next').click(function() {
				$active = $('.owl-item .item.show');
				$('.owl-item .item.show').removeClass('show');
				$('.owl-item .item').removeClass('next');
				$('.owl-item .item').removeClass('prev');
				$active.addClass('prev');
				if($active.is('.last')) {
					$('.owl-item .first').addClass('show');
					$('.owl-item .first').parent().next().children('.item').addClass('prev');
				}
				else {
					$active.parent().next().children('.item').addClass('show');
					if($active.parent().next().children('.item').is('.last')) {
						$('.owl-item .first').addClass('next');
					}
					else {
						$('.owl-item .show').parent().next().children('.item').addClass('next');
					}
				}
			});
	
			});
		</script>
		
	</body>
</html>

