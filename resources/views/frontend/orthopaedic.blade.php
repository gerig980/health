@include('layouts.frontend.partials.header-assets')
  <body>
    @include('layouts.frontend.partials.header')
    <section class="first-section-orthopaedic">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0 header-orthopaedic">
                    <div class="image-header-wrapper"> 
                        <img class="img-fluid  img-header-orthopaedic" src="{{ URL::asset('frontend/assets/orthopaedic/orthopaedic-frame.png') }}" alt="">
                    </div>
                    <div class="img-text-orthopaedic">
                        <h4>{{__('hip.hip replacement surgery')}}</h4>
                        <p>{!!__('hip.hip replacement desc')!!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-texts-orthopaedic">
                        <h4>{{__('hip.when surgery recommended')}}</h4>
                        <p>{!!__('hip.surgery recommended mini desc')!!}</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="card" > 
                                <img src="{{ URL::asset('frontend/assets/orthopaedic/recommend1.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <p class="card-text">{{__('hip.first problem')}}</p>
                                </div>
                          </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="card" >
                                <img src="{{ URL::asset('frontend/assets/orthopaedic/recommend2.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <p class="card-text">{{__('hip.second problem')}}</p>
                                </div>
                          </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3  ">
                            <div class="card" >
                                <img src="{{ URL::asset('frontend/assets/orthopaedic/recommend3.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <p class="card-text">{{__('hip.third problem')}}</p>
                                </div>
                          </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-3  ">
                            <div class="card" >
                                <img src="{{ URL::asset('frontend/assets/orthopaedic/recommend4.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <p class="card-text">{{__('hip.fourth problem')}}</p>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="second-section-orthopaedic">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="candidates-texts">
                        <h4>{{__('hip.candidates for surgery')}}</h4>
                        <p>{{__('hip.candidates for surgery desc')}}</p>
                    </div>

                    <div class="candidates-wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                    <div class="candidates-wrapper-texts">
                                        <h4>{{__('hip.recommendations for surgery')}}</h4>
                                        <p>{{__('hip.recommendation description')}}</p>
                                    </div>
                                </div>
                            <div class="col-lg-6">
                                <img src="{{ URL::asset('frontend/assets/orthopaedic/pain.png') }}" alt="pain" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="third-section-orthopaedic">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="average-texts">
                        <span>{{__('hip.average')}}</span>
                        <h4>Health Travel Albania <br> 
                            {{__('hip.hip replacement package')}}<br>
                            <span>{{__('hip.range from')}}</span>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row average-cards">
                        <div class="col-lg-4 col-sm-12">
                            <div class="card card-orthopaedic1">
                                <div class="card-body">
                                  <h5 class="card-title">{{__('hip.basic package')}}</h5>
                                  <h4 class="card-price">6995€</h4>
                                  <div class="row">
                                    <div class="col-lg-12">
                                        <p class="card-text">
                                            <i class="fa-solid fa-check"></i> {{__('hip.two bed ward')}}
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="card-text">
                                            <i class="fa-solid fa-check"></i> {{__('hip.consulation with doctor')}}
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="card-text">
                                            <i class="fa-solid fa-check"></i> {!!__('hip.consult with anesthesiologist')!!}
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="card-text">
                                            <i class="fa-solid fa-check"></i> {{__('hip.properative tests')}} 
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="card-text transfers-accommodation">
                                            {{__('hip.transfer and accomodation')}}
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="card-text">
                                            <i class="fa-solid fa-check"></i> {{__('hip.transfer airport')}}
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="card-text">
                                            <i class="fa-solid fa-check"></i> {{__('hip.transfer hospital')}}
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="card-text">
                                            <i class="fa-solid fa-check"></i> {{__('hip.5nights')}}
                                        </p>
                                    </div>

                                  </div>
                                  <a href="#" class="btn btn-primary">{{__('hip.choose package')}}</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="card card-orthopaedic2">
                                <div class="card-body">
                                    <h5 class="card-title">{{__('hip.standart package')}}</h5>
                                    <div > <h4 class="card-price">7000€</h4></div>
                                    <h3 class="card-price-discount">6995€</h3>
                                    <div class="row">
                                      <div class="col-lg-12">
                                          <p class="card-text">
                                              <i class="fa-solid fa-check"></i> {{__('hip.two bed ward')}}
                                          </p>
                                      </div>
                                      <div class="col-lg-12">
                                          <p class="card-text">
                                              <i class="fa-solid fa-check"></i> {{__('hip.consulation with doctor')}}
                                          </p>
                                      </div>
                                      <div class="col-lg-12">
                                          <p class="card-text">
                                              <i class="fa-solid fa-check"></i> {!!__('hip.consult with anesthesiologist')!!}
                                          </p>
                                      </div>
                                      <div class="col-lg-12">
                                          <p class="card-text">
                                              <i class="fa-solid fa-check"></i> {{__('hip.properative test')}}
                                          </p>
                                      </div>
                                      <div class="col-lg-12">
                                        <p class="card-text">
                                            <i class="fa-solid fa-check"></i> {{__('hip.medications')}}
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="card-text">
                                            <i class="fa-solid fa-check"></i> {{__('hip.consumable materials')}}
                                        </p>
                                    </div>
                                      <div class="col-lg-12">
                                          <p class="card-text transfers-accommodation">
                                              {{__('hip.transfer and accomodation')}}
                                          </p>
                                      </div>
                                      <div class="col-lg-12">
                                          <p class="card-text standart-transfers">
                                              <i class="fa-solid fa-check"></i> {{__('hip.transfer airport')}}
                                          </p>
                                      </div>
                                      <div class="col-lg-12 tandart-transfers">
                                          <p class="card-text">
                                              <i class="fa-solid fa-check"></i> {{__('hip.transfer hospital')}}
                                          </p>
                                      </div>
                                      <div class="col-lg-12 tandart-transfers">
                                          <p class="card-text">
                                              <i class="fa-solid fa-check"></i> {{__('hip.5nights')}}
                                          </p>
                                      </div>
  
                                    </div>
                                    <a href="#" class="btn btn-primary">{{__('hip.choose package')}}</a>
                                  </div>
                              </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="card card-orthopaedic3">
                                <div class="card-body">
                                    <h5 class="card-title">{{__('hip.premium package')}}</h5>
                                    <h4 class="card-price">7600€</h4>
                                    <div class="row">
                                      <div class="col-lg-12">
                                          <p class="card-text">
                                              <i class="fa-solid fa-check"></i> {{__('hip.two bed ward')}}
                                          </p>
                                      </div>
                                      <div class="col-lg-12">
                                          <p class="card-text">
                                              <i class="fa-solid fa-check"></i> {{__('hip.consulation with doctor')}}
                                          </p>
                                      </div>
                                      <div class="col-lg-12">
                                          <p class="card-text">
                                              <i class="fa-solid fa-check"></i> {{__('hip.consult with anesthesiologist')}}
                                          </p>
                                      </div>
                                      <div class="col-lg-12">
                                          <p class="card-text">
                                              <i class="fa-solid fa-check"></i> {{__('hip.properative tests')}}
                                          </p>
                                      </div>
                                      <div class="col-lg-12">
                                        <p class="card-text">
                                            <i class="fa-solid fa-check"></i> {{__('hip.general anesthesia')}}
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="card-text">
                                            <i class="fa-solid fa-check"></i> {{__('hip.medications')}}
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="card-text">
                                            <i class="fa-solid fa-check"></i> {{__('hip.consumable materials')}}
                                        </p>
                                    </div>
                                      <div class="col-lg-12">
                                          <p class="card-text transfers-accommodation">
                                              {{__('hip.transfer and accomodation')}}
                                          </p>
                                      </div>
                                      <div class="col-lg-12">
                                          <p class="card-text">
                                              <i class="fa-solid fa-check"></i> {{__('hip.transfer airport')}}
                                          </p>
                                      </div>
                                      <div class="col-lg-12">
                                          <p class="card-text">
                                              <i class="fa-solid fa-check"></i> {{__('hip.transfer hospital')}}
                                          </p>
                                      </div>
                                      <div class="col-lg-12">
                                          <p class="card-text">
                                              <i class="fa-solid fa-check"></i> {{__('hip.5nights')}}
                                          </p>
                                      </div>
  
                                    </div>
                                    <a href="#" class="btn btn-primary">{{__('hip.choose package')}}</a>
                                  </div>
                              </div>
                        </div>
                    </div>
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