<!-- TOP MENU BAR -->
<div class="app-header header">
    <div class="container-fluid"> 
        <div class="d-flex">
            <a class="header-brand" href="{{ url('/') }}">
                <img src="{{URL::asset('img/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Polly logo">
                <img src="{{URL::asset('img/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Polly logo">
            </a>
            <div class="app-sidebar__toggle nav-link icon" data-toggle="sidebar">
                <a class="open-toggle" href="{{url('#')}}">
                    <span class="fa fa-align-left header-icon"></span>
                </a>
            </div>
            <!-- SEARCH BAR -->
            <div id="search-bar">                
                <div>
                    <a class="nav-link icon">
                        <form id="search-field" action="{{ url('search') }}" method="POST" enctype="multipart/form-data">         
                            @csrf                   
                            <input type="search" name='keyword'>
                        </form>                        
                    </a>
                </div>                
            </div>
            <!-- END SEARCH BAR -->
            <!-- MENU BAR -->
            <div class="d-flex order-lg-2 ml-auto"> 
                <div id="form-group">
                    <select id="template-selection" name="template-selection" data-placeholder="{{ __('Create AI Document') }}" data-callback="changeTemplate">
                        
                            <option data-id="" value="" data-icon="">List Template</option>
                      
                       
                            <option data-id="" value="" data-icon="">  templates name</option>
                       																									
                    </select>
                </div>
                            
                 
                
                
                   
                        <a class="dropdown-item d-flex" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> 
                            <span class="profile-icon fa-solid fa-right-from-bracket"></span>          
                            <div class="fs-12">{{ __('Logout') }}</div>                            
                        </a>
                        <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

            </div>
            <!-- END MENU BAR -->
        </div>
    </div>
</div>
<!-- END TOP MENU BAR -->
