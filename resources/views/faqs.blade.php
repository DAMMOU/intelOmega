@if (true)
    <section id="faq-wrapper">    
        <div class="container pt-4">

            <div class="row text-center mb-8 mt-7">
                <div class="col-md-12 title">
                    <h6>{{ __('Frequently Asked') }} <span>{{ __('Questions') }}</span></h6>
                    <p>{{ __('Got questions? We have you covered.') }}</p>
                </div>
            </div>

            <div class="row justify-content-md-center">
        
                @if ($count_faqs>0)

                    <div class="col-md-10">
        
                        @foreach ( $faqs as $faq )

                            <div id="accordion" data-aos="fade-left">
                                <div class="card">
                                    <div class="card-header" id="heading{{ $faq->id }}">
                                        <h5 class="mb-0">
                                        <span class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapse-faq{{ $faq->id }}" aria-expanded="false" aria-controls="collapse-{{ $faq->id }}">
                                            {{ __($faq->question) }}
                                        </span>
                                        </h5>
                                    </div>
                                        
                                    <div id="collapse-faq{{ $faq->id }}" class="collapse" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            {!! __($faq->answer) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                @else
                    <div class="row text-center">
                        <div class="col-sm-12 mt-6 mb-6">
                            <h6 class="fs-12 font-weight-bold text-center">{{ __('No FAQ answers were published yet') }}</h6>
                        </div>
                    </div>
                @endif
            
            </div>        
        </div>
        
    </section> <!-- END SECTION FAQ -->
@endif