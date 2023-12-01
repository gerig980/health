@include('layouts.frontend.partials.header-assets')
  <body>
    
    @include('layouts.frontend.partials.header')
    <section class="first-section-dental">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 p-0 header-dental">
            <img
              class="img-fluid img-header-dental d-desktop"
              src="{{ URL::asset('frontend/assets/dental/dentalhead.png') }}"
              alt="header image dental"
            />
            <img
              class="img-fluid img-header-dental d-mobile"
              src="{{ URL::asset('frontend/assets/dental/dental-header-mobile.png') }}"
              alt="header image dental"
            />
            <h4 class="img-text-dental">
               {!!__('dental.dental implants')!!}
              
            </h4>
          </div>
        </div>
        <div class="row">
          <h2 class="header-title">{{__('dental.what are dental implants')}}</h2>
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <p class="header-desc">
              {{__('dental.what are dental implants description')}}
            </p>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
    </section>
    <section class="second-section-dental">
      <div class="container-fluid">
        <div class="row second-section-reverse">
          <div class="col-lg-1"></div>
          <div class="col-lg-5 col-description">
            <h4>
              ALL-ON-4 CONCEPT / <br class="br-responsive" />
              ALL-ON-6 CONCEPT
            </h4>
            <p>
              {{__('dental.all on concept description')}}
            </p>
          </div>
          <div class="col-lg-6 p-0">
            <img 
              src="{{ URL::asset('frontend/assets/dental/dentalsc2.png') }}"
              class="img-fluid"
              alt="description image"
            />
          </div>
        </div>
      </div>
    </section>
    <section class="third-section-dental">
      <div class="container">
        <div class="row">
          <h2>{{__('dental.patient benefit')}}</h2>
          <div class="col-lg-6 benefits-list">
            <ol>
              <li>{{__('dental.benefit 1')}}</li>
              <hr />
              <li>{{__('dental.benefit 2')}}</li>
              <hr />
              <li>
                {{__('dental.benefit 3')}}
              </li>
              <hr />
              <li>{{__('dental.benefit 4')}}</li>
              <hr />
              <li>{{__('dental.benefit 5')}}</li>
              <hr />
              <li>
                {{__('dental.benefit 6')}}
              </li>
              <hr />
              <li>{{__('dental.benefit 7')}}</li>
              <hr class="d-mobile" />
            </ol>
          </div>
          <div class="col-lg-6 benefits-list">
            <ol>
              <li>{{__('dental.benefit 8')}}</li>
              <hr />
              <li>
                {{__('dental.benefit 9')}}
              </li>
              <hr />
              <li>{{__('dental.benefit 10')}}</li>
              <hr />
              <li>{{__('dental.benefit 11')}}</li>
              <hr />
              <li>
                {{__('dental.benefit 12')}}
              </li>
              <hr />
              <li>{{__('dental.benefit 13')}}</li>
              <hr />
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="fourth-section-dental">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h4>{{__('dental.general procedure')}}</h4>
            <p>
              {!!__('dental.in addition to the best implantology')!!}
            </p>
            <ul>
              <li>
                {{__('dental.first procedure')}}
              </li>
              <br />
              <li>
                {{__('dental.second procedure')}}
              </li>
              <br />
              <li>
                {{__('dental.third procedure')}}
              </li>
              <br />
              <li>
                {{__('dental.fourth procedure')}}
              </li>
              <br />
              <li>
                {{__('dental.fifth procedure')}}
              </li>
              <br />
              <li>
                {{__('dental.sixth procedure')}}
              </li>
              <br />
              <li>
                {{__('dental.seventh procedure')}}
              </li>
              <br />
            </ul>
          </div>
        </div>
      </div>
    </section>
    <hr style="height: 2px; color: #231f20" />
    <section class="fifth-section-dental">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>{{__('dental.other medical treatments')}}</h2>
            <p>
              {{__('dental.looking for other treatments')}}
            </p>

            <div class="d-mobile">
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="boxes">
                      <div class="outside-box">
                        <div class="first-box">
                          <img 
                            src="{{ URL::asset('frontend/assets/dental/Hair-Transplant-Icon.png') }}"
                            alt="Hair Transplant"
                          />
                        </div>
                        <span class="swiper-texts">{{__('home.hair transplant')}}</span>
                        <div class="row">
                          <div class="col-lg-8 col-md-8">
                            <span class="price-description">{{__('home.price starts from')}}</span>
                          </div>
                          <div class="col-lg-4 col-md-4">
                            <span class="price-value">650 €</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="boxes">
                      <div class="outside-box">
                        <div class="first-box">
                          <img 
                            src="{{ URL::asset('frontend/assets/dental/Cosmetic-Surgery-Icon.png') }}"
                            alt="Cosmetic Surgery"
                          />
                        </div>
                        <span class="swiper-texts">{{__('dental.cosmetic surgery')}}</span>
                        <div class="row">
                          <div class="col-lg-8 col-md-8">
                            <span class="price-description">{{__('home.price starts from')}}</span>
                          </div>
                          <div class="col-lg-4 col-md-4">
                            <span class="price-value">500 €</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="boxes">
                      <div class="outside-box">
                        <div class="first-box">
                          <img 
                            src="{{ URL::asset('frontend/assets/dental/Orthopaedic-Surgery-Icon.png') }}"
                            alt="Orthopaedic Surgery"
                          />
                        </div>
                        <span class="swiper-texts">{{__('home.orthopaedic surgery')}}</span>
                        <div class="row">
                          <div class="col-lg-8 col-md-8">
                            <span class="price-description">{{__('home.price starts from')}}</span>
                          </div>
                          <div class="col-lg-4 col-md-4">
                            <span class="price-value">750 €</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

            <div class="d-desktop">
            <div class="boxes">
              <div class="outside-box">
                <div class="first-box">
                  <img 
                    src="{{ URL::asset('frontend/assets/dental/Hair-Transplant-Icon.png') }}"
                    alt="Hair Transplant"
                  />
                </div>
                <span class="swiper-texts">{{__('home.hair transplant')}}</span>
                <div class="row">
                  <div class="col-lg-8 col-md-8">
                    <span class="price-description">{{__('home.price starts from')}}</span>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <span class="price-value">650 €</span>
                  </div>
                </div>
              </div>
              <div class="outside-box">
                <div class="first-box">
                  <img 
                    src="{{ URL::asset('frontend/assets/dental/Cosmetic-Surgery-Icon.png') }}"
                    alt="Cosmetic Surgery"
                  />
                </div>
                <span class="swiper-texts">{{__('dental.cosmetic surgery')}}</span>
                <div class="row">
                  <div class="col-lg-8 col-md-8">
                    <span class="price-description">{{__('home.price starts from')}}</span>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <span class="price-value">500 €</span>
                  </div>
                </div>
              </div>
              <div class="outside-box">
                <div class="first-box">
                  <img 
                    src="{{ URL::asset('frontend/assets/dental/Orthopaedic-Surgery-Icon.png') }}"
                    alt="Orthopaedic Surgery"
                  />
                </div>
                <span class="swiper-texts">{{__('home.orthopaedic surgery')}}</span>
                <div class="row">
                  <div class="col-lg-8 col-md-8">
                    <span class="price-description">{{__('home.price starts from')}}</span>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <span class="price-value">750 €</span>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 quote-column">
                <a href="{{route('home'). '#quote'}}" class="quote-anchor">
                  <div class="get-quote-wrapper">
                    <span class="quote-span d-mobile">Get a Quote</span>
                    <button type="button" class="btn btn-success">Get a Quote</button>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('layouts.frontend.partials.footer')
    @include('layouts.frontend.partials.footer-assets')
   
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2.5,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 40,
          },
          1441: {
            slidesPerView: 7,
            spaceBetween: 40,
          },
          1920: {
            slidesPerView: 7,
            spaceBetween: 40,
          },
        },
      });
    </script>

    
  </body>

