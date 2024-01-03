
@extends('layouts.master-frontend')
@section('content')
    <section id="contact-wrapper">
        <!-- CONTACT CONTAINER  -->
        <div class="container-fluid">       
            
            <!-- CONTACT TITLE -->
            <div class="row mb-8 mt-4 text-center">

                <div class="title w-100">
                    <h6>{{ __('Contact With Us') }}</h6>
                    <p>{{ __('Reach out to us for additional information') }}</p>
                </div>
                
            </div> <!-- END CONTACT TITLE -->
                
            
            <div class="row mt-4">  
                           
                <!-- CONTACT IMAGE -->
                <div class="col-md-6 col-sm-12">
                    <img class="w-70" src="{{ URL::asset('img/files/about.svg') }}" width="100%">
                </div><!-- END CONTACT IMAGE -->

                <!-- CONTACT FORM -->
                <div class="col-md-6 col-sm-12">
                    <form id="" action="{{ route('send-mail') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row justify-content-md-center">
                            <div class="col-md-6 col-sm-12">
                                <div class="input-box mb-4">                             
                                    <input id="firstname" type="name" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" autocomplete="off" placeholder="{{ __('First Name') }}" required>
                                    @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror                            
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="input-box mb-4">                             
                                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" autocomplete="off" placeholder="{{ __('Last Name') }}" required>
                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror                            
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-md-center">
                            <div class="col-md-6 col-sm-12">
                                <div class="input-box mb-4">                             
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off"  placeholder="{{ __('Email Address') }}" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror                            
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="input-box mb-4">                             
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="off"  placeholder="{{ __('Phone Number') }}" required>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror                            
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-md-center">
                            <div class="col-md-12 col-sm-12">
                                <div class="input-box">							
                                    <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="10" required placeholder="{{ __('Message') }}"></textarea>
                                    @error('message')
                                        <p class="text-danger">{{ $errors->first('message') }}</p>
                                    @enderror	
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="recaptcha" id="recaptcha">

                        <!-- SUBMIT BUTTON -->
                        <div class="row justify-content-md-center text-center">
                            
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary special-action-button">{{ __('Send Message') }}</button>							
                            </div>
                        </div><!-- END SUBMIT BUTTON -->
                    
                    </form>
                    
                </div><!-- CONTACT IMAGE -->                   
                
            </div><!-- END ROW -->   
        
        </div><!-- END CONTACT CONTAINER  -->
    </section>

@endsection
