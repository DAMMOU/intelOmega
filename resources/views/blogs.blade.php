@if (true)
    <section id="blog-wrapper">

        <div class="container text-center">

            <!-- BLOG TITLE -->
            <div class="row mb-8 mt-5">

                <div class="title w-100">
                    <h6><span>{{ __('Latest') }}</span> {{ __('Blogs') }}</h6>
                        <p>{{ __('Read our unique blog articles about various data archiving solutions and secrets') }}</p>
                    </div>

            </div> <!-- END BLOG TITLE -->

            @if ($count_blogs > 0)
                        
                        <!-- BLOGS -->
                        <div class="row" id="blogs">
                            @foreach ( $blogs as $blog )
                            <div class="blog" data-aos="zoom-in" data-aos-delay="500" data-aos-once="true" data-aos-duration="1000">			
                                <div class="blog-box">
                                    <div class="blog-img">
                                        {{-- <a href="{{ route('blogs.show', $blog->url) }}"><img src="{{ URL::asset($blog->image) }}" alt="Blog Image"></a> --}}
                                        <a href="#"><img src="{{ URL::asset('img/files/01.png') }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="blog-info">
                                        <h6 class="blog-date text-left text-muted mt-3 pt-1 mb-4"><span class="mr-2">{{ $blog->created_by }}</span> | <i class="mdi mdi-alarm mr-2"></i>{{ date('j F Y', strtotime($blog->created_at)) }}</h6>
                                        <h5 class="blog-title fs-16 text-left mb-3">{{ __($blog->title) }}</h5>                                     
                                    </div>
                                </div>                        
                            </div> 
                            @endforeach
                        </div> 
                        

                        <!-- ROTATORS BUTTONS -->
                        <div class="blogs-nav">
                            <a class="blogs-prev"><i class="fa fa-chevron-left"></i></a>
                            <a class="blogs-next"><i class="fa fa-chevron-right"></i></a>                                
                        </div>

                    @else
                        <div class="row text-center">
                            <div class="col-sm-12 mt-6 mb-6">
                                <h6 class="fs-12 font-weight-bold text-center">{{ __('No blog articles were published yet') }}</h6>
                            </div>
                        </div>
                    @endif

                </div> <!-- END CONTAINER -->

                
    </section> <!-- END  BLOGS -->
        @endif