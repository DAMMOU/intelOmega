<!--------------------- FOOTER --------------------->
<div id="body-footer" >
					
	<div class="container text-center" id="footer">
								
		<div class="row">    
			<!-- FOOTER LOGO -->			
			<div class="col-md-4 col-sm-12" id="footer-logo">
								
				<img src="{{ URL::asset('img/brand/logo.png') }}" alt="intelOmega Logo">

				<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut culpa maiores maxime illo nostrum aut totam, porro dolore minima</p>		

			</div> <!-- FOOTER LOGO -->


			<!-- FOOTER LINKS -->
			<div class="col-md-8 col-sm-12" id="footer-links">
								
                <div class="row w-100">

                   
                    <div class="col-md-3 col-sm-12">
                    
                        <h5>{{ __('Information') }}</h5>

                        <ul class="list-unstyled">
                            <li><a class= ""href="#" target="_blank">{{ __('AI World') }}</a></li>                             
                        </ul>

                    </div> 


                    
                    <div class="col-md-3 col-sm-12">				
                            
                        <h5>{{ __('Site Pages') }}</h5>

                        <ul class="list-unstyled">
                            <li><a href="{{ url('login') }}">{{ __('Login') }}</a></li>							
                            <li><a href="{{ url('register') }}">{{ __('Register') }}</a></li>							
                        </ul>				

                    </div> 


                    
                    <div class="col-md-3 col-sm-12">
                        
                        <h5>{{ __('Company') }}</h5>
                        
                        <ul class="list-unstyled">
                            <li><a href="{{ url('terms') }}">{{ __('Terms & Conditions') }}</a></li>
                            <li><a href="{{ url('privacy') }}">{{ __('Privacy Policy') }}</a></li>							
                        </ul>		         

                    </div> 

                    
   
                    <div class="col-md-3 col-sm-12 pr-0">
                                                
                        <h5>{{ __('Social Media') }}</h5>

                        <h6>{{ __('Follow up on social media to find out the latest updates') }}.</h6>

                        <ul id="footer-icons" class="list-inline">
                            @if (true)
                                <a href="{{ config('frontend.social_linkedin') }}" target="_blank"><li class="list-inline-item"><i class="footer-icon fa-brands fa-linkedin"></i></li></a>
                            @endif
                            @if (true)
                                <a href="{{ config('frontend.social_twitter') }}" target="_blank"><li class="list-inline-item"><i class="footer-icon fa-brands fa-twitter"></i></li></a>
                            @endif
                            @if (true)
                                <a href="{{ config('frontend.social_instagram') }}" target="_blank"><li class="list-inline-item"><i class="footer-icon fa-brands fa-instagram"></i></li></a>
                            @endif
                            @if (true)
                                <a href="{{ config('frontend.social_facebook') }}" target="_blank"><li class="list-inline-item"><i class="footer-icon fa-brands fa-facebook"></i></li></a>
                            @endif											
                        </ul>

                        <h5 class="mt-6 mb-4">{{ __('Get Started Today') }}</h5>

                        <a href="{{ url('register') }}" class="btn btn-primary text-white pl-5 pr-5" id="footer-button">{{ __('Sign Up Now') }}</a>

                    </div> 
                
                </div>


			</div> <!-- END FOOTER LINKS -->
							

		</div> <!-- END ROW -->

        <!-- FOOTER Copyright -->

        <div id="copyright">
            <div class="row align-items-center">
                <div class="col-md-12 col-sm-12 text-center">
                    
                    <span>{{ __('Copyright') }} © {{ date("Y") }} </span>
                        <a class="fs-2 text-info px-2" href="{{ config('app.url') }}">
                            {{ config('app.name') }}.
                        </a> 
                    <span>{{ __('All rights reserved') }}.</span>
                    
                    
                </div>
                <div class="col-md-12 col-sm-12 text-center">
                    <span class="fs-9 font-weight-bold text-info">{{ config('app.version') }}</span>
                </div>
            </div>
        </div>
        <!-- FOOTER Copyright -->

	</div> 
    
    <a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div> 
<!--------------------- END FOOTER --------------------->