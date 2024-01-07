@extends('layouts.app-frontend')

@section('content')
    <section id="main-wrapper">
        
        <div class="h-100vh justify-center min-h-screen">

                <div class="row h-100vh vertical-center">
                    <div class="col-sm-12">
                        <div class="text-container text-center">

                            <h3 class="mb-4 font-weight-bold text-white">{{ __('Meet') }}, {{ config('app.name') }}</h3>
                            <h1 class=" text-white" >{{ __('The Future of Writing') }}</h1>
                            
                            <h1 class=" mb-0 text-change" id="typed"></h1>

                            <p class="fs-18 text-white mt-1">{{ __('Let AI create content for blogs, articles, websites, social media and more') }}</p> 

                            <a href="#" class="btn btn-primary mt-2 for-free-button">{{ __('Try Now For Free') }}</a>

                        </div>
                    </div>                                
                </div>           
        </div>
    </section>
    @include('faqs')
    @include('features')
    <section id="reviews-wrapper">
        @include('reviews')
    </section>
 
        
   
    
@endsection


      
        
       
        
       
    

