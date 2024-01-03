<div id="header">			
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="{{ URL::asset('img/brand/logo.png')}}" alt="Bootstrap" width="60" height="30">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ URL('/') }}">{{ __('Home') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('Prices') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('Blogs') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ __('FAQs') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact-us') }}">{{ __('Contact Us') }}</a>
                </li>
            </ul>
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="menu-buttons">
                <li class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <div class="d-flex align-items-center">
                        <a class="btn btn-dark" href="#">{{ __('Dashboard') }}</a>
                        <a class="btn btn-success" href="#">{{ __('Login') }}</a>
                        <a class="btn btn-dark" href="#">{{ __('Sign Up') }}</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="btn-group">

            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate mx-1" viewBox="0 0 16 16">
                    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                  </svg>
                <span class="fs-12" style="vertical-align:middle">{{ Config::get('locale')[App::getLocale()]['code'] }}</span>

            </button>

            <ul class="dropdown-menu">
                @foreach (Config::get('locale') as $lang => $language)
                    @if (!App::isLocale($lang ))
                        <li>                       
                            <a class="dropdown-item" href="{{ route('locale', $lang) }}">
                                <i class="flag flag-{{ $language['flag'] }} mr-3"></i>
                                {{ $language['display'] }}
                            </a>
                        </li>
                    @endif
				@endforeach
            </ul>

        </div>
    </nav>
</div>{{-- END header --}}

