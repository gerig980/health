@include('layouts.frontend.partials.header-assets')
<style>
  .first-section-shoulder-text{
    padding:70px 0 50px 0;
  }
</style>

<body>
    @include('layouts.frontend.partials.header')
    <section class="first-section-shoulder">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0 header-shoulder">
                    <div class="image-header-wrapper">
                        <img class="img-fluid  img-header-shoulder" src="{{ URL::asset('frontend/assets/orthopaedic/orthopaedic-frame.png') }}" alt="">
                    </div>
                    <div class="img-text-shoulder">
                        <h4>{!!__('shoulder.shoulder replacement surgery')!!}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="first-section-shoulder-text header-texts-shoulder">
        <div class="container">
            <div class="row">
              <h2 class="text-center "> {{__('shoulder.what is shoulder surgery')}}</h2>
                            <p class="desc-shoulder">{{__('shoulder.shoulder surgery description')}}</p>
                        
                
                </div>
                </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-texts-shoulder">
                        <h2>{{__('shoulder.cause of damage')}}</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row images-shoulders">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-2">
                            <div class="card" >
                                <img src="{{ URL::asset('frontend/assets/orthopaedic/sholder.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <p class="card-text">{{__('shoulder.osteoarthrit')}}</p>
                                </div>
                          </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-2">
                            <div class="card" >
                                <img src=" {{ URL::asset('frontend/assets/orthopaedic/sholder2.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <p class="card-text">{{__('shoulder.rotator cuff')}}</p>
                                </div>
                          </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-2  ">
                            <div class="card" >
                                <img src="{{ URL::asset('frontend/assets/orthopaedic/sholder3.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <p class="card-text">{{__('shoulder.fractures')}}</p>
                                </div>
                          </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-2  ">
                            <div class="card" >
                                <img src="{{ URL::asset('frontend/assets/orthopaedic/sholder4.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <p class="card-text">{{__('shoulder.rheumatoid')}}</p>
                                </div>
                          </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-2  ">
                            <div class="card" >
                                <img src="{{ URL::asset('frontend/assets/orthopaedic/sholder5.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <p class="card-text">{{__('shoulder.osteonecrosis')}}</p>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
  

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
                              src="{{ URL::asset('frontend/assets/dental/Dental-Treatments-Icon.png') }}"
                              alt="Dental Treatments"
                            />
                          </div>
                          <span class="swiper-texts">{{__('home.dental treatment')}}</span>
                          <div class="row">
                            <div class="col-lg-8 col-md-8">
                              <span class="price-description">{{__('home.price starts from')}}</span>
                            </div>
                            <div class="col-lg-4 col-md-4">
                              <span class="price-value">150 €</span>
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
                      src="{{ URL::asset('frontend/assets/dental/Dental-Treatments-Icon.png') }}"
                      alt="Dental Treatments"
                    />
                  </div>
                  <span class="swiper-texts">{{__('home.dental treatment')}}</span>
                  <div class="row">
                    <div class="col-lg-8 col-md-8">
                      <span class="price-description">{{__('home.price starts from')}}</span>
                    </div>
                    <div class="col-lg-4 col-md-4">
                      <span class="price-value">150 €</span>
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

  </body>