<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<!-- METADATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="" name="description">
		<meta content="" name="author">
		<meta name="keywords" content=""/>
		
        <!-- CSRF TOKEN -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- TITLE -->
        <title>{{ config('app.name', 'Davinci') }}</title>
        
        @include('layouts.head')

	</head>

	<body class="app sidebar-mini">

		<!-- LOADER -->
		<div id="preloader" >
			<img src="{{URL::asset('img/svgs/preloader.gif')}}" alt="loader">           
		</div>
		<!-- END LOADER -->

		<!-- PAGE -->
        
		<div class="page">
			<div class="page-main">

				@include('layouts.nav-aside')

				<!-- APP CONTENT -->			
				<div class="app-content main-content">

					<div class="side-app">

						@yield('content')						

                    </div>                   
                </div>
                <!-- END APP CONTENT -->

                 

            </div>		
        </div><!-- END PAGE -->
        
                
        <!-- Jquery -->
        <script src="{{URL::asset('plugins/jquery/jquery-3.6.0.min.js')}}"></script>

        <!-- Bootstrap 5 -->
        <script src="{{URL::asset('plugins/bootstrap-5.0.2/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Sidemenu -->
        <script src="{{URL::asset('plugins/sidemenu/sidemenu.js')}}"></script>

        <!-- P-scroll -->
        <script src="{{URL::asset('plugins/p-scrollbar/p-scrollbar.js')}}"></script>
        <script src="{{URL::asset('plugins/p-scrollbar/p-scroll.js')}}"></script>

        @yield('js')

        <!-- Simplebar JS -->
        <script src="{{URL::asset('plugins/simplebar/js/simplebar.min.js')}}"></script>

        <!-- Tippy JS -->
        <script src="{{URL::asset('plugins/tippy/popper.min.js')}}"></script>
        <script src="{{URL::asset('plugins/tippy/tippy-bundle.umd.min.js')}}"></script>

        <!-- Toastr JS -->
        <script src="{{URL::asset('plugins/toastr/toastr.min.js')}}"></script>

        <!-- Awselect JS -->
        <script src="{{URL::asset('plugins/awselect/awselect-custom.js')}}"></script>
        <script src="{{URL::asset('js/awselect.js')}}"></script>

        <!-- Custom js-->
        <script src="{{URL::asset('js/custom.js')}}"></script>  
        <script src="{{URL::asset('plugins/chart/chart.min.js')}}"></script>
  

	</body>
</html>


