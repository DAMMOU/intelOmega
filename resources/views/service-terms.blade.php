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
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <!-- SECTION TITLE -->
                                    <div class="text-center mb-9 mt-9 pt-5" id="contact-row">
                
                                        <div class="title">
                                            <h6><span>{{ __('Terms and Conditions') }}</span></h6>
                                        </div>
                
                                    </div> <!-- END SECTION TITLE -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <section id="about-wrapper">

                        <div class="container">
                            <div class="row justify-content-center background-white">
                                <div class="col-md-10 col-sm-12 policy">                
                                    <div class="card-body pt-9 pb-9">            
                
                                        <div class="mb-7">
                                            {!! $pages['terms'] !!}
                                            <div class="container">
                                               
                                            
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p><strong>Last updated: {{ date('Y') }}</strong></p>
                                                        <p>Please read these terms and conditions carefully before using the IntelOmega website.</p>
                                                    </div>
                                                </div>
                                            
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h2>1. Acceptance of Terms</h2>
                                                        <p>By accessing or using the IntelOmega website, you agree to be bound by these terms and conditions...
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut culpa maiores maxime illo nostrum aut totam, porro dolore minima
                                                        </p>
                                                        <p>By accessing or using the IntelOmega website, you agree to be bound by these terms and conditions...
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut culpa maiores maxime illo nostrum aut totam, porro dolore minima
                                                        </p>
                                                    </div>
                                                </div>
                                            
                                                <!-- Add more sections with rows and columns as needed -->
                                            
                                            </div>
                                        </div>
                
                                        <div class="form-group mt-4 mb-4 text-center">                        
                                            <a href="{{ route('register') }}" class="btn btn-primary  mr-2">{{ __('I Agree, Let\'s Sign Up') }}</a> 
                                            <a href="{{ route('login') }}" class="btn btn-primary mr-2">{{ __('I Agree, Let\'s Login') }}</a>                               
                                        </div>
                                        
                                    </div>      
                                </div>
                            </div>
                        </div>
                    </section>
				</div>                   
			</main> <!-- End App-Content -->
			@include('layouts.flash')
			<footer>
				@include('layouts.footer')
			</footer>
		
		@endif

		<script src="{{URL::asset('plugins/jquery/jquery-3.6.0.min.js')}}"></script>
		<!-- Bootstrap 5-->
		<script src="{{URL::asset('plugins/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
		<script src="{{URL::asset('plugins/typed/typed.min.js')}}"></script>
		<script src="{{URL::asset('js/ikhan.js')}}"></script>
		
		
	</body>
</html>

