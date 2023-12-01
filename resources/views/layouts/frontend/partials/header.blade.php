@push('css')

@endpush
<section class="announcement-bar">
    <div class="container">
        <div class="row d-flex">
            <div class="col-xl-4 col-lg-5 col-md-5 ">
                <div class="email">
                    <span><img src="{{Url::asset('frontend/assets/socialmedia/Capa_1.svg')}}" alt=""></span>
                    <p class="email-text">
                        E-mail: <span>info@healthtravel.com</span>
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="phone">
                    <span> <img src="{{Url::asset('frontend/assets/socialmedia/Phone.svg')}}" alt=""></span>
                    <p class="phone-nr">
                        <span> Cel:</span> +355 69 xxx xxxx
                    </p>
                </div>
            </div>
            <div class=" col-xl-4 col-lg-3 col-md-3 text-end">
                <div class="social_media">
                    <img src="{{Url::asset('frontend/assets/socialmedia/Linked_In.svg')}}" alt="">
                    <img src="{{Url::asset('frontend/assets/socialmedia/Instagram.svg')}}" alt="">
                    <img src="{{Url::asset('frontend/assets/socialmedia/Facebook.svg')}}" alt="">
                </div>
                
            </div>
        </div>

    </div>
</section>
<section class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid p-0">
                <a class="navbar-brand" href="{{route('home')}}"><img src="{{Url::asset('frontend/assets/logo/LOGO NEW (1).svg')}}" alt=""></a>
                <button class="navbar-toggler  mobile-nav" type="button" data-bs-toggle="offcanvas" 
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="19" viewBox="0 0 27 19"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M27 1.5C27 2.32843 26.3284 3 25.5 3L1.5 3C0.671576 3 3.8147e-06 2.32843 3.8147e-06 1.5C3.8147e-06 0.671573 0.671576 2.38419e-07 1.5 2.38419e-07L25.5 2.38419e-07C26.3284 2.38419e-07 27 0.671573 27 1.5Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M27 17.5C27 18.3284 26.3284 19 25.5 19L1.5 19C0.671576 19 3.8147e-06 18.3284 3.8147e-06 17.5C3.8147e-06 16.6716 0.671576 16 1.5 16L25.5 16C26.3284 16 27 16.6716 27 17.5Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M27 9.5C27 10.3284 26.3284 11 25.5 11L7.5 11C6.67158 11 6 10.3284 6 9.5C6 8.67157 6.67158 8 7.5 8L25.5 8C26.3284 8 27 8.67157 27 9.5Z"
                            fill="black" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteNamed('home') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteNamed('hair') ? 'active' : '' }}" href="{{route('hair')}}">{{__('home.hair transplant')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteNamed('dental') ? 'active' : '' }}" href="{{route('dental')}}">
                                {{__('home.dental implants')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteNamed('eye') ? 'active' : '' }}" href="{{route('eye')}}">
                                {{__('home.eye surgery')}}
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{__('home.orthopaedic surgery')}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item {{ Route::currentRouteNamed('orthopaetic') ? 'active' : '' }}" href="{{route('orthopaetic')}}">{{__('home.hip surgery')}}</a></li>
                                <li><a class="dropdown-item {{ Route::currentRouteNamed('shoulder') ? 'active' : '' }}" href="{{route('shoulder')}}">{{__('home.shoulder surgery')}}</a></li>
                                <li><a class="dropdown-item {{ Route::currentRouteNamed('knee') ? 'active' : '' }}" href="{{route('knee')}}">{{__('home.knee surgery')}}</a></li>
                                
                            </ul>
                        </li>
                        <ul>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a
                            rel="alternate"
                            hreflang="{{ $localeCode }}"
                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                        >
                            {{ strtoupper($localeCode) }}
                        </a>
                    </li>
                @endforeach
                        </ul>

                        
                        
                        {{-- <li class="nav-item dropdown">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  @if(app()->getLocale() == 'en')
                                 EN <span class="fi fi-gb"></span> 
                                 
                                 @else
                                 IT <span class="fi fi-it"></span>
                                  @endif
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                              @if(app()->getLocale() == 'en')
                              <a href="{{route('setLang')}}" class="dropdown-item notify-item language py-2 selected" data-lang="en" title="English">
                                  <span class="fi fi-gb "></span> 
                                  <span class="align-middle">English</span>
                              </a>
                              <a href="{{route('setLang')}}" class="dropdown-item notify-item language py-2 " data-lang="it" title="Italian">
                                  <span class="fi fi-it "></span> 
                                  <span class="align-middle">Italian</span>
                              </a>
                              
                              @elseif(app()->getLocale() == 'it')
                              <a href="{{route('setLang')}}" class="dropdown-item notify-item language py-2 " data-lang="en" title="English">
                                  <span class="fi fi-gb "></span> 
                                  <span class="align-middle">English</span>
                              </a>
                              <a href="{{route('setLang')}}" class="dropdown-item notify-item language py-2 " data-lang="it" title="Italian">
                                  <span class="fi fi-it "></span> 
                                  <span class="align-middle">Italian</span>
                              </a>
                              @endif
                            </ul>
                        </li> --}}

                        <div class="dropdown ms-1 topbar-head-dropdown header-item">
                          
                        <li class="nav-item pe-0">
                            <button class="whatsapp-btn"> <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                    height="25" viewBox="0 0 25 25" fill="none">
                                    <path
                                        d="M12.5027 0H12.4963C5.60438 0 0 5.60655 0 12.5002C0 15.2347 0.88133 17.7689 2.37984 19.827L0.82225 24.4707L5.62684 22.9345C7.60337 24.2441 9.96123 25 12.5032 25C19.3951 25 25 19.392 25 12.4998C25 5.60753 19.3951 0 12.5027 0ZM19.776 17.6517C19.4742 18.5033 18.2775 19.2094 17.3229 19.4159C16.6696 19.5551 15.8166 19.6659 12.9451 18.4755C9.27179 16.9535 6.90612 13.2205 6.72155 12.9783C6.54479 12.7361 5.2372 11.0017 5.2372 9.2077C5.2372 7.41372 6.14832 6.54066 6.5155 6.16565C6.81725 5.85802 7.31529 5.7174 7.79379 5.7174C7.94858 5.7174 8.08773 5.72521 8.21273 5.73156C8.57991 5.74718 8.76448 5.76916 9.00666 6.34876C9.30841 7.07533 10.0428 8.86931 10.1302 9.0534C10.219 9.23797 10.3084 9.48798 10.1834 9.73017C10.0662 9.98018 9.96318 10.091 9.77862 10.3034C9.59405 10.5158 9.41925 10.6784 9.23468 10.9065C9.06574 11.1047 8.87531 11.3176 9.08771 11.6848C9.30011 12.0442 10.0345 13.2424 11.116 14.2054C12.5115 15.4476 13.6423 15.8445 14.0471 16.013C14.3488 16.138 14.7082 16.1082 14.9284 15.8738C15.2082 15.5721 15.5534 15.0721 15.905 14.5799C16.155 14.2268 16.4704 14.1829 16.8019 14.3079C17.1393 14.4251 18.9254 15.3079 19.2926 15.4905C19.6598 15.6751 19.902 15.7625 19.9908 15.9173C20.0782 16.0721 20.0782 16.7987 19.777 17.6517H19.776Z"
                                        fill="white" />
                                </svg>
                                Whats App</button>
                        </li>
                        </div>
                    </ul>
            </div>
        </div>
     </nav>
     <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <a class="navbar-brand" href="{{route('home',['locale' => app()->getLocale()])}}"><img src="{{Url::asset('frontend/assets/logo/LOGO NEW (1).svg')}}" alt=""></a>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteNamed('home') ? 'active' : '' }}" aria-current="page" href="{{route('home',['locale' => app()->getLocale()])}}">Home</a>
                      </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteNamed('hair') ? 'active' : '' }}" href="{{route('hair',['locale' => app()->getLocale()])}}">Hair Transplant</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link {{ Route::currentRouteNamed('dental') ? 'active' : '' }}" href="{{route('dental',['locale' => app()->getLocale()])}}">
                                Dental Implants
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link {{ Route::currentRouteNamed('eye') ? 'active' : '' }}" href="{{route('eye',['locale' => app()->getLocale()])}}">
                                Eye Surgery
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Orthopaedic  Surgery
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item {{ Route::currentRouteNamed('orthopaetic') ? 'active' : '' }}" href="{{route('orthopaetic',['locale' => app()->getLocale()])}}">Hip replacement surgery</a></li>
                                <li><a class="dropdown-item {{ Route::currentRouteNamed('shoulder') ? 'active' : '' }}" href="{{route('shoulder',['locale' => app()->getLocale()])}}">Shoulder replacement surgery</a></li>
                                <li><a class="dropdown-item {{ Route::currentRouteNamed('knee') ? 'active' : '' }}" href="{{route('knee',['locale' => app()->getLocale()])}}">Knee replacement surgery</a></li>
                                
                            </ul>
                        </li>
                          
                        <li class="nav-item">
                            <button class="whatsapp-btn"> <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                    height="25" viewBox="0 0 25 25" fill="none">
                                    <path
                                        d="M12.5027 0H12.4963C5.60438 0 0 5.60655 0 12.5002C0 15.2347 0.88133 17.7689 2.37984 19.827L0.82225 24.4707L5.62684 22.9345C7.60337 24.2441 9.96123 25 12.5032 25C19.3951 25 25 19.392 25 12.4998C25 5.60753 19.3951 0 12.5027 0ZM19.776 17.6517C19.4742 18.5033 18.2775 19.2094 17.3229 19.4159C16.6696 19.5551 15.8166 19.6659 12.9451 18.4755C9.27179 16.9535 6.90612 13.2205 6.72155 12.9783C6.54479 12.7361 5.2372 11.0017 5.2372 9.2077C5.2372 7.41372 6.14832 6.54066 6.5155 6.16565C6.81725 5.85802 7.31529 5.7174 7.79379 5.7174C7.94858 5.7174 8.08773 5.72521 8.21273 5.73156C8.57991 5.74718 8.76448 5.76916 9.00666 6.34876C9.30841 7.07533 10.0428 8.86931 10.1302 9.0534C10.219 9.23797 10.3084 9.48798 10.1834 9.73017C10.0662 9.98018 9.96318 10.091 9.77862 10.3034C9.59405 10.5158 9.41925 10.6784 9.23468 10.9065C9.06574 11.1047 8.87531 11.3176 9.08771 11.6848C9.30011 12.0442 10.0345 13.2424 11.116 14.2054C12.5115 15.4476 13.6423 15.8445 14.0471 16.013C14.3488 16.138 14.7082 16.1082 14.9284 15.8738C15.2082 15.5721 15.5534 15.0721 15.905 14.5799C16.155 14.2268 16.4704 14.1829 16.8019 14.3079C17.1393 14.4251 18.9254 15.3079 19.2926 15.4905C19.6598 15.6751 19.902 15.7625 19.9908 15.9173C20.0782 16.0721 20.0782 16.7987 19.777 17.6517H19.776Z"
                                        fill="white" />
                                </svg>
                                Whats App</button>
                        </li>
                 </ul>
  </div>
</div>
     </div>
</section>