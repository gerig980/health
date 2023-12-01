@include('layouts.frontend.partials.header-assets')
<body>
     @include('layouts.frontend.partials.header')

    <section class="first-section-eye">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0 header-eye">
                    <div class="image-header-wrapper">
                        <img class="img-fluid d-desktop img-header-eye" src="{{ URL::asset('frontend/assets/eye-surgery/eyesurgeryframe-head.png') }}" alt="eye-surgery">
                    </div>
                    <div class="img-text-eye">
                        <h4>{{__('eye.eye surgery')}}</h4>
                        <p><span>{{__('eye.eye surgery span')}}</span>{!!__('eye.eye surgery p')!!}
                        </p>
                    </div>
                    <img class="img-fluid d-mobile w-100" src="{{ URL::asset('frontend/assets/eye-surgery/eye-surgery-measure1.png') }}" alt="eye surgery">
                </div>
                <div class="col-lg-12 first-desc-head">
                    <p>
                        {{__('eye.our clinic use exlusivly lenses')}}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="second-section-eye">
        <div class="container">
            <div class="row row-eye-reverse">
                <div class="col-lg-6 desc-refractive-lens">
                    <h4>{{__('eye.refractive lens')}} <br> {{__('eye.vision correction')}}</h4>
                    <p>{!!__('eye.refractive lens description')!!}</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ URL::asset('frontend/assets/eye-surgery/lights-camera-refraction1.png') }}" alt="consult surgery">
                </div>
            </div>
            <div class="row second-row-eye">
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ URL::asset('frontend/assets/eye-surgery/eye-surgical-operation1.png') }}" alt="eye syrgery">
                </div>
                <div class="col-lg-6 desc-refractive-lens">
                    <div class="desc-wrapper-eye">
                        <h4>{{__('eye.cataract surgery')}}</h4>
                        <p>{{__('eye.cataract surgery description')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="third-section-eye">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 first-desc-head">
                    <p>
                       {{__('eye.both types surgery')}}
                    </p>
                </div>
            </div>
        </div>
    </section>

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
                      <span class="quote-span d-mobile">{{__('home.get a quote')}}</span>
                      <button type="button" class="btn btn-success">{{__('home.get a quote')}}</button>
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
</html>