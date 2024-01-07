@if (config('frontend.custom_url.status') == 'on')
    <script type="text/javascript">
		window.location.href = "{{ config('frontend.custom_url.link') }}"
	</script>
@else

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

        <!--CSS Files -->
        <link href="{{URL::asset('plugins/slick/slick.css')}}" rel="stylesheet">
        <link href="{{URL::asset('plugins/slick/slick-theme.css')}}" rel="stylesheet">

		@include('layouts.head')

		<!--Custom User CSS File -->
		<link href="{{URL::asset($information['css'])}}" rel="stylesheet">
		<link href="{{URL::asset('css/app11.css')}}" rel="stylesheet">

	</head>

	<body class="app sidebar-mini frontend-body {{ Request::path() != '/' ? 'blue-background' : '' }}">

		@if (config('frontend.maintenance') == 'on')
			
			<div class="container h-100vh">
				<div class="row text-center h-100vh align-items-center">
					<div class="col-md-12">
						<img src="{{ URL::asset('img/files/maintenance.png') }}" alt="Maintenance Image">
						<h2 class="mt-4 font-weight-bold">{{ __('We are just tuning up a few things') }}.</h2>
						<h5>{{ __('We apologize for the inconvenience but') }} <span class="font-weight-bold text-info">{{ config('app.name') }}</span> {{ __('is currently undergoing planned maintenance') }}.</h5>
					</div>
				</div>
			</div>
		@else

			<header>
				@include('header')
			</header>
			<!-- Page -->
			{{--@if (config('frontend.frontend_page') == 'on')--}}
			@if(true)
						
				<div class="page">
					<div class="page-main">

						<section id="main-wrapper">
					
							<div class="relative flex items-top justify-center min-h-screen">
				
								<div class="container-fluid fixed-top" id="navbar-container">
				
									<div class="container">
										<div class="row">
				
											<nav class="navbar navbar-expand-lg navbar-light w-100" id="navbar-responsive">
												<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ URL::asset('img/brand/logo.png') }}" alt=""></a>
												<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
													<span class="navbar-toggler-icon"></span>
												</button>
												<div class="collapse navbar-collapse section-links" id="navbarNav">
													<ul class="navbar-nav">
														<li class="nav-item">
															<a class="nav-link scroll" href="{{ url('/') }}">{{ __('Home') }} <span class="sr-only">(current)</span></a>
														</li>						

														<li class="nav-item text-center frontend-buttons">
															@if (Route::has('login'))
																<div>
																	@auth
																		<a href="{{ route('user.dashboard') }}" class="action-button dashboard-button pl-5 pr-5">{{ __('Dashboard') }}</a>
																	@else
																		<a href="{{ route('login') }}" class="action-button" id="login-button">{{ __('Login') }}</a>
				
																		@if (config('settings.registration') == 'enabled')
																			@if (Route::has('register'))
																				<a href="{{ route('register') }}" class="ml-2 action-button register-button pl-5 pr-5">{{ __('Sign Up') }}</a>
																			@endif
																		@endif
																	@endauth
																</div>
															@endif
														</li>
													</ul>
												</div>
											</nav>
				
										</div>
									</div>
				
									@include('layouts.flash')
				
								</div>
				
							</div>  
						</section>

						<!-- App-Content -->			
						<div class="main-content">
							<div class="side-app">

								@yield('content')

							</div>                   
						</div>
				
				</div><!-- End Page -->
			
				<!-- FOOTER SECTION
				========================================================-->
				@include('layouts.footer')<!-- END FOOTER -->  

				{{--@include('cookie-consent::index')--}}

			@endif
		
		@endif

		@include('layouts.footer-frontend')

		<!-- Custom User JS File -->
		@if ($information['js'])
			<script src="{{URL::asset($information['js'])}}"></script>
		@endif
		
            
	</body>
</html>

@endif