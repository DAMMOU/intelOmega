
@extends('layouts.app-frontend')
@section('content')
<section id="contact-wrapper">

    <div class="container pt-9">       
        
        <!-- SECTION TITLE -->
        <div class="row mb-8 mt-4 text-center">

            <div class="title w-100">
                <h6><span>{{ __('Contact') }}</span> {{ __('With Us') }}</h6>
                <p>{{ __('Reach out to us for additional information') }}</p>
            </div>

        </div> <!-- END SECTION TITLE -->

        
        <div class="row">                
            
            <div class="col-md-6 col-sm-12">
                <img class="w-70" src="{{ URL::asset('img/files/about.svg') }}" alt="">
            </div>

            <div class="col-md-6 col-sm-12">
                <form id="" action="{{ route('send-mail') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row justify-content-md-center">
                        <div class="col-md-6 col-sm-12">
                            <div class="input-box mb-4">                             
                                <input id="name" type="name" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" autocomplete="off" placeholder="{{ __('First Name') }}">
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror                            
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="input-box mb-4">                             
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" autocomplete="off" placeholder="{{ __('Last Name') }}">
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off"  placeholder="{{ __('Email Address') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror                            
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="input-box mb-4">                             
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="off"  placeholder="{{ __('Phone Number') }}">
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
                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="10"  placeholder="{{ __('Message') }}"></textarea>
                                @error('message')
                                    <p class="text-danger text-center">{{ $errors->first('message') }}</p>
                                @enderror	
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-2 mb-2 @error('g-recaptcha-response') is-invalid @enderror">
                            {!! htmlFormSnippet() !!}
                            @error('g-recaptcha-response')
                                <p class="text-danger text-center">{{ $errors->first('g-recaptcha-response') }}</p>
                            @enderror
                    </div>
                    
                    <div class="row justify-content-md-center text-center">
                        <!-- ACTION BUTTON -->
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary special-action-button">{{ __('Send Message') }}</button>							
                        </div>
                    </div>
                    
                    <!-- OR -->
                   
                
                </form>

            </div>                   
            
        </div>
    
    </div>

</section>

@endsection
