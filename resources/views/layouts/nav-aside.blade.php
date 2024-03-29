<!-- SIDE MENU BAR -->
<aside class="app-sidebar"> 
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{url('/')}}">
            <img src="{{URL::asset('img/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Admintro logo">
            <img src="{{URL::asset('img/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Admintro logo">
        </a>
    </div>
    <ul class="side-menu app-sidebar3">
        <div class="side-progress-position mt-4">
            <div class="inline-flex w-100 text-center">
                <div class="flex w-100">
                    <span class="fs-12 font-weight-bold" id="side-word-notification"><i class="fa-solid fa-scroll-old text-yellow mr-2"></i><span class="text-primary mr-1" id="available-words">App\Services\HelperService::getTotalWords</span> <span class="text-muted">{{ __('words left') }}</span></span>
                </div> 
                              
                    <a href="{{ url('user.plans') }}" class="btn btn-cancel-upgrade mt-3 fs-12 pl-6 pr-6"><i class="fa-solid fa-circle-bolt mr-3 fs-15 text-yellow vertical-align-middle"></i>{{ __('Upgrade') }}</a>        
                                
            </div>
        </div>
        <li class="side-item side-item-category mt-4 mb-3">{{ __('AI Panel') }}</li>
        <li class="slide">
            <a class="side-menu__item" href="{{ url('user.dashboard') }}">
            <span class="side-menu__icon lead-3 fa-solid fa-chart-tree-map"></span>
            <span class="side-menu__label">{{ __('Dashboard') }}</span></a>
        </li> 
        <li class="slide">
            <a class="side-menu__item" href="{{ url('user.templates') }}">
            <span class="side-menu__icon lead-3 fs-18 fa-solid fa-microchip-ai"></span>
            <span class="side-menu__label">{{ __('Templates') }}</span></a>
        </li> 
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('#')}}">
                <span class="side-menu__icon fa-solid fa-folder-bookmark"></span>
                <span class="side-menu__label">{{ __('Documents') }}</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                    <li><a href="{{ url('user.documents') }}" class="slide-item">{{ __('All Documents') }}</a></li>
                    @role('user|subscriber')
                        @if (config('settings.image_feature_user') == 'allow')
                            <li><a href="{{ url('user.documents.images') }}" class="slide-item">{{ __('All Images') }}</a></li> 
                        @endif 
                    @endrole
                    @role('admin')
                        <li><a href="{{ url('user.documents.images') }}" class="slide-item">{{ __('All Images') }}</a></li>
                    @endrole
                    @role('user|subscriber')
                        @if (config('settings.voiceover_feature_user') == 'allow')
                            <li><a href="{{ url('user.documents.voiceovers') }}" class="slide-item">{{ __('All Voiceovers') }}</a></li> 
                        @endif 
                    @endrole
                    @role('admin')
                        <li><a href="{{ url('user.documents.voiceovers') }}" class="slide-item">{{ __('All Voiceovers') }}</a></li> 
                    @endrole
                    @role('user|subscriber')
                        @if (config('settings.whisper_feature_user') == 'allow')
                            <li><a href="{{ url('user.documents.transcripts') }}" class="slide-item">{{ __('All Transcripts') }}</a></li> 
                        @endif 
                    @endrole
                    @role('admin')
                        <li><a href="{{ url('user.documents.transcripts') }}" class="slide-item">{{ __('All Transcripts') }}</a></li> 
                    @endrole
                    @role('user|subscriber')
                        @if (config('settings.code_feature_user') == 'allow')
                            <li><a href="{{ url('user.documents.codes') }}" class="slide-item">{{ __('All Codes') }}</a></li> 
                        @endif 
                    @endrole
                    @role('admin')
                        <li><a href="{{ url('user.documents.codes') }}" class="slide-item">{{ __('All Codes') }}</a></li> 
                    @endrole
                    
                    <li><a href="{{ url('user.workbooks') }}" class="slide-item">{{ __('Workbooks') }}</a></li>                    
                </ul>
        </li>
        @role('user|subscriber')
            @if (config('settings.voiceover_feature_user') == 'allow')
                <li class="slide">
                    <a class="side-menu__item" href="{{ url('user.voiceover') }}">
                    <span class="side-menu__icon fa-sharp fa-solid fa-waveform-lines"></span>
                    <span class="side-menu__label">{{ __('AI Voiceover') }}</span></a>
                </li> 
            @endif
        @endrole
        @role('admin')
            <li class="slide">
                <a class="side-menu__item" href="{{ url('user.voiceover') }}">
                <span class="side-menu__icon fa-sharp fa-solid fa-waveform-lines"></span>
                <span class="side-menu__label">{{ __('AI Voiceover') }}</span></a>
            </li>
        @endrole 
        @role('user|subscriber')
            @if (config('settings.whisper_feature_user') == 'allow')
                <li class="slide">
                    <a class="side-menu__item" href="{{ url('user.transcribe') }}">
                    <span class="side-menu__icon fa-sharp fa-solid fa-folder-music"></span>
                    <span class="side-menu__label">{{ __('AI Speech to Text') }}</span></a>
                </li> 
            @endif
        @endrole
        @role('admin')
            <li class="slide">
                <a class="side-menu__item" href="{{ url('user.transcribe') }}">
                <span class="side-menu__icon fa-sharp fa-solid fa-folder-music"></span>
                <span class="side-menu__label">{{ __('AI Speech to Text') }}</span></a>
            </li>
        @endrole 
        @role('user|subscriber')
            @if (config('settings.image_feature_user') == 'allow')
                <li class="slide">
                    <a class="side-menu__item" href="{{ url('user.images') }}">
                    <span class="side-menu__icon lead-3 fa-solid fa-camera-viewfinder"></span>
                    <span class="side-menu__label">{{ __('AI Images') }}</span></a>
                </li> 
            @endif
        @endrole
        @role('admin')
            <li class="slide">
                <a class="side-menu__item" href="{{ url('user.images') }}">
                <span class="side-menu__icon lead-3 fa-solid fa-camera-viewfinder"></span>
                <span class="side-menu__label">{{ __('AI Images') }}</span></a>
            </li>
        @endrole 
        @role('user|subscriber')
            @if (config('settings.code_feature_user') == 'allow')
                <li class="slide">
                    <a class="side-menu__item" href="{{ url('user.codex') }}">
                    <span class="side-menu__icon fa-solid fa-square-code"></span>
                    <span class="side-menu__label">{{ __('AI Code') }}</span></a>
                </li> 
            @endif
        @endrole
        @role('admin')
            <li class="slide">
                <a class="side-menu__item" href="{{ url('user.codex') }}">
                <span class="side-menu__icon fa-solid fa-square-code"></span>
                <span class="side-menu__label">{{ __('AI Code') }}</span></a>
            </li>
        @endrole 
        @role('user|subscriber')
            @if (config('settings.chat_feature_user') == 'allow')
                <li class="slide mb-3">
                    <a class="side-menu__item" href="{{ url('user.chat') }}">
                    <span class="side-menu__icon lead-3 fa-solid fa-message-captions"></span>
                    <span class="side-menu__label">{{ __('AI Chat') }}</span></a>
                </li> 
            @endif
        @endrole
        @role('admin')
            <li class="slide mb-3">
                <a class="side-menu__item" href="{{ url('user.chat') }}">
                <span class="side-menu__icon lead-3 fa-solid fa-message-captions"></span>
                <span class="side-menu__label">{{ __('AI Chat') }}</span></a>
            </li>
        @endrole 
        @role('admin')
            <hr class="w-90 text-center m-auto">
            <li class="side-item side-item-category mt-4 mb-3">{{ __('Admin Panel') }}</li>
            <li class="slide">
                <a class="side-menu__item"  href="{{ url('admin.dashboard') }}">
                    <span class="side-menu__icon fa-solid fa-chart-tree-map"></span>
                    <span class="side-menu__label">{{ __('Dashboard') }}</span>
                </a>
            </li>
            <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('#')}}">
                        <span class="side-menu__icon fa-solid fa-microchip-ai fs-18"></span>
                        <span class="side-menu__label">{{ __('Davinci Management') }}</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{ url('admin.davinci.dashboard') }}" class="slide-item">{{ __('Davinci Dashboard') }}</a></li>
                        <li><a href="{{ url('admin.davinci.templates') }}" class="slide-item">{{ __('Davinci Templates') }}</a></li>
                        <li><a href="{{ url('admin.davinci.custom') }}" class="slide-item">{{ __('Custom Templates') }}</a></li>
                        <li><a href="{{ url('admin.davinci.voices') }}" class="slide-item">{{ __('Voices Customization') }}</a></li>
                        <li><a href="{{ url('admin.davinci.configs') }}" class="slide-item">{{ __('Davinci Settings') }}</a></li>
                    </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('#')}}">
                    <span class="side-menu__icon fa-solid fa-id-badge"></span>
                    <span class="side-menu__label">{{ __('User Management') }}</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{ url('admin.user.dashboard') }}" class="slide-item">{{ __('User Dashboard') }}</a></li>
                        <li><a href="{{ url('admin.user.list') }}" class="slide-item">{{ __('User List') }}</a></li>
                        <li><a href="{{ url('admin.user.activity') }}" class="slide-item">{{ __('Activity Monitoring') }}</a></li>
                    </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('#')}}">
                    <span class="side-menu__icon fa-solid fa-sack-dollar"></span>
                    <span class="side-menu__label">{{ __('Finance Management') }}</span>
                    @if (false)
                        <span class="badge badge-warning">..</span>
                    @else
                        <i class="angle fa fa-angle-right"></i>
                    @endif
                </a>
                    <ul class="slide-menu">
                        <li><a href="{{ url('admin.finance.dashboard') }}" class="slide-item">{{ __('Finance Dashboard') }}</a></li>
                        <li><a href="{{ url('admin.finance.transactions') }}" class="slide-item">{{ __('Transactions') }}</a></li>
                        <li><a href="{{ url('admin.finance.plans') }}" class="slide-item">{{ __('Subscription Plans') }}</a></li>
                        <li><a href="{{ url('admin.finance.prepaid') }}" class="slide-item">{{ __('Prepaid Plans') }}</a></li>
                        <li><a href="{{ url('admin.finance.subscriptions') }}" class="slide-item">{{ __('Subscribers') }}</a></li>
                        <li><a href="{{ url('admin.finance.promocodes') }}" class="slide-item">{{ __('Promocodes') }}</a></li>
                        <li><a href="{{ url('admin.referral.settings') }}" class="slide-item">{{ __('Referral System') }}</a></li>
                        <li><a href="{{ url('admin.referral.payouts') }}" class="slide-item">{{ __('Referral Payouts') }}</a>
                        </li>
                        <li><a href="{{ url('admin.settings.invoice') }}" class="slide-item">{{ __('Invoice Settings') }}</a></li>
                        <li><a href="{{ url('admin.finance.settings') }}" class="slide-item">{{ __('Payment Settings') }}</a></li>
                    </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item"  href="{{ url('admin.support') }}">
                    <span class="side-menu__icon fa-solid fa-message-question"></span>
                    <span class="side-menu__label">{{ __('Support Requests') }}</span>
                   
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('#')}}">
                    <span class="side-menu__icon fa-solid fa-message-exclamation"></span>
                    <span class="side-menu__label">{{ __('Notifications') }}</span>
                        
                            <i class="angle fa fa-angle-right"></i>
                        
                    </a>                     
                    <ul class="slide-menu">
                        <li><a href="{{ url('admin.notifications') }}" class="slide-item">{{ __('Mass Notifications') }}</a></li>
                        <li><a href="{{ url('admin.notifications.system') }}" class="slide-item">{{ __('System Notifications') }} 
                                
                            </a>
                        </li>
                    </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('#')}}">
                    <span class="side-menu__icon fa-solid fa-earth-americas"></span>
                    <span class="side-menu__label">{{ __('Frontend Management') }}</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{ url('admin.settings.frontend') }}" class="slide-item">{{ __('Frontend Settings') }}</a></li>
                        <li><a href="{{ url('admin.settings.appearance') }}" class="slide-item">{{ __('SEO & Logos') }}</a></li>                        
                        <li><a href="{{ url('admin.settings.blog') }}" class="slide-item">{{ __('Blogs Manager') }}</a></li>
                        <li><a href="{{ url('admin.settings.faq') }}" class="slide-item">{{ __('FAQs Manager') }}</a></li>
                        <li><a href="{{ url('admin.settings.review') }}" class="slide-item">{{ __('Reviews Manager') }}</a></li>
                        <li><a href="{{ url('admin.settings.terms') }}" class="slide-item">{{ __('T&C Pages Manager') }}</a></li>                           
                        <li><a href="{{ url('admin.settings.adsense') }}" class="slide-item">{{ __('Google Adsense') }}</a></li>                           
                    </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('#')}}">
                    <span class="side-menu__icon fa fa-sliders"></span>
                    <span class="side-menu__label">{{ __('General Settings') }}</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{ url('admin.settings.global') }}" class="slide-item">{{ __('Global Settings') }}</a></li>
                        <li><a href="{{ url('admin.settings.oauth') }}" class="slide-item">{{ __('Auth Settings') }}</a></li>
                        <li><a href="{{ url('admin.settings.registration') }}" class="slide-item">{{ __('Registration Settings') }}</a></li>
                        <li><a href="{{ url('admin.settings.smtp') }}" class="slide-item">{{ __('SMTP Settings') }}</a></li>
                        <li><a href="{{ url('admin.settings.backup') }}" class="slide-item">{{ __('Database Backup') }}</a></li>
                        <li><a href="{{ url('admin.settings.activation') }}" class="slide-item">{{ __('Activation') }}</a></li>     
                        <li><a href="{{ url('admin.settings.upgrade') }}" class="slide-item">{{ __('Upgrade Software') }}</a></li>                 
                        <li><a href="{{ url('admin.settings.clear') }}" class="slide-item">{{ __('Clear Cache') }}</a></li>                 
                    </ul>
            </li>
        @endrole
    </ul>
</aside>
<!-- END SIDE MENU BAR -->