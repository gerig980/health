@push('css')
    <style>
        /* First Section Dental */
        .first-section-knee-text{
            text-align:center;
            padding-top:70px;
            padding-bottom: 50px;
        }
        .first-section-knee .header-knee {
            position: relative;
        }

        .first-section-knee .header-knee .img-text-knee {
            position: absolute;
            top: 40%;
            left: 15%;
            font-size: 1.6rem;
            font-weight: 700;
        }

        .first-section-knee .header-title {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 500;
            margin-top: 2.5rem;
        }

        .first-section-knee .header-desc {
            font-size: 1.1rem;
            margin-top: 1rem;
            font-weight: 400;
        }

        /* Second Section Knee*/

        .second-section-knee {
            margin-top: 2rem;
            background-color: #f3f3f3;
        }

        .second-section-knee .col-description {
            margin-top: 3.5rem;
            padding-right: 2.2rem;
        }

        .second-section-knee .col-description h4 {
            font-size: 1.5rem;
            font-weight: 500;
        }

        .second-section-knee .col-description p {
            margin-top: 1.5rem;
            font-size: 1.1rem;
        }

        /* Third Section Knee */

        .third-section-knee {
            background-color: #EEF8F3;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .third-section-knee h2 {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .third-section-knee .benefits-list {
            padding-top: 2rem;
        }

        .third-section-knee ol {
            list-style: none;
        }

        .third-section-knee ol hr {
            height: 2px;
            color: #010101;
        }

        .third-section-knee ol li {
            font-size: 1.4rem;
            font-weight: 500;
            padding-left: 1.5em;
            text-indent: -1.2em;
        }

        /* Fourth Section Knee */
        .fourth-section-knee {
            margin-top: 2rem;
            padding-left: 4rem;
        }

        .fourth-section-knee h4 {
            font-size: 1.4rem;
            font-weight: 700;
            padding-top: 1.5rem;
        }

        .fourth-section-knee p {
            font-size: 1.3rem;
            font-weight: 500;
        }

        .fourth-section-knee ul {
            margin-left: -1rem;
        }

        .fourth-section-knee ul li {
            font-size: 1.2rem;
            font-weight: 400;
        }

        /* Fifth Section Knee */
        .fifth-section-knee {
    margin-top: 2rem;
    margin-bottom: 2rem;
}

.fifth-section-knee h2,
.fifth-section-knee p {
    text-align: center;
}

.fifth-section-knee p {
    font-size: 1.4rem;
    margin-top: 1rem;
}

       .fifth-section-knee .boxes {
    display: flex;
    gap: 40px;
    justify-content: center;
}

.fifth-section-knee .boxes .first-box {
    width: 182px;
    height: 182px;
    border-radius: 9px;
    background-color: #eef8f3;
    position: relative;
}

.fifth-section-knee .boxes .first-box img {
    width: 73px;
    height: 73px;
    object-fit: contain;
    position: absolute;
    top: 30%;
    left: 30%;
}

.boxes .outside-box {
    width: 185px;
}

.boxes .outside-box .price-description {
    font-size: 13px;
    font-family: "Gordita";
}

.boxes .outside-box .price-value {
    font-weight: 500;
    color: #34a86e;
    font-size: 14px;
}
.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-pagination {
    position: static;
}

.swiper-horizontal > .swiper-pagination-bullets,
.swiper-pagination-bullets.swiper-pagination-horizontal,
.swiper-pagination-custom,
.swiper-pagination-fraction {
    bottom: var(--swiper-pagination-bottom, -15px);
}

.fifth-section-knee .swiper-pagination-bullet-active {
    width: 25px;
    border-radius: 4px;
    background: #5bbf8d;
}

.quote-column {
    margin-top: 2rem;
}

.get-quote-wrapper {
    background-color: #ddffef;
    padding: 2rem;
    width: 80%;
    justify-content: center;
    margin: auto;
    text-align: center;
}

.get-quote-wrapper button {
    width: 200px;
    padding: 0.7rem;
    background-color: #34a86e;
    border: none;
    font-weight: 700;
}

.swiper-texts {
    font-size: 1rem;
    font-weight: 500;
    text-align: start;
}
.d-mobile {
    display: none;
}

.br-responsive {
    display: none;
}

        @media (max-width:1441px) {
            .fifth-section-knee .boxes {
                flex-wrap: wrap;
            }
        }

        @media(max-width:1281px) {
            .fifth-section-knee .boxes {
                display: flex;
                gap: 30px;
            }
        }

        @media(max-width:920px) {
            .first-section-knee .header-title {
                font-size: 1.5rem;
            }

            .first-section-knee .header-desc {
                font-size: 1.3rem;
            }

            .second-section-knee .col-description h4 {
                font-size: 1.5rem;
                text-align: start;
            }

            .second-section-knee .col-description p {
                font-size: 1.1rem;
            }

            .third-section-knee h2 {
                font-size: 1.3rem;
            }

            .third-section-knee ol {
                padding-left: 0;
            }

            .third-section-knee ol li {
                font-size: 1.1rem;
            }

            .fourth-section-knee {
                padding-left: 0;
            }

            .fifth-section-knee .boxes {
                justify-content: center;
            }

            .fifth-section-knee .boxes {
                gap: 20px;
            }

            .fifth-section-knee p {
                font-size: 1rem;
            }
        }

        @media(max-width:768px) {
            .fourth-section-knee {
                padding-left: 0;
            }

            .fifth-section-knee .boxes {
                gap: 20px;
            }
        }

        @media(max-width:474px) {
            .d-desktop {
                display: none;
            }

            .br-responsive {
                display: inline;
            }

            .d-mobile {
                display: block;
            }

            .first-section-knee .header-title {
                font-size: 17px;
            }

            .first-section-knee .header-knee .img-text-knee {
                left: 5%;
                font-size: 15px;
            }

            .first-section-knee .header-desc {
                font-size: 15px;
                padding-left: 5px;
            }

            .second-section-knee .col-description {
                padding-right: 0;
            }

            .second-section-knee .col-description h4 {
                font-size: 17px;
                padding-left: 5px;
            }

            .second-section-knee .col-description p {
                font-size: 15px;
                padding-left: 5px;
            }

            .first-section-knee .header-knee img {
                object-fit: contain;
                width: 100%;
            }

            .second-section-knee .second-section-reverse {
                flex-direction: column-reverse;
            }

            /* .third-section-knee ol{
        margin-left: -2rem;
        } */

            .third-section-knee h2 {
                font-size: 18px;
            }

            .third-section-knee ol li {
                font-size: 15px;
            }

            .fourth-section-knee {
                padding-left: 1rem;
            }

            .fourth-section-knee h4 {
                font-size: 17px;
            }

            .fourth-section-knee p {
                font-size: 15px;
            }

            .fourth-section-knee ul li {
                font-size: 14px;
            }

            .fifth-section-knee h2 {
                font-size: 18px;
            }

            .fifth-section-knee p {
                font-size: 15px;
            }

            .fifth-section-knee .boxes {
                justify-content: center;
                gap: 5px;
                margin-left: 3rem;
            }

            .boxes .outside-box {
                margin-right: auto;
                text-align: start;
            }

            .boxes .outside-box .price-value {
                font-size: 17px;
                font-weight: 700;
            }

            .fifth-section-knee .boxes .first-box {
                width: 144px;
                height: 144px;
                border-radius: 9px;
                background-color: #EEF8F3;
                position: relative;
            }

            .fifth-section-knee .boxes .first-box img {
                width: 50px;
                height: 50px;
                object-fit: contain;
                position: absolute;
                top: 30%;
                left: 30%;
            }

            .swiper-texts {
                font-size: 0.936rem;
                font-weight: 500;
                text-align: start;
            }

            .quote-column {
                padding: 0;
            }

            .get-quote-wrapper {
                width: 100%;
                background-color: #34A86E;
            }

            .get-quote-wrapper button {
                display: none;
            }

            .quote-span {
                font-weight: 700;
                color: #fff;
            }

            .quote-anchor {
                text-decoration: none;
            }
        }

        @media(max-width:368px) {
            .fifth-section-knee .boxes {
                justify-content: space-around;
                gap: 10px;
            }
        }
    </style>
@endpush
@include('layouts.frontend.partials.header-assets')
<body>
    @include('layouts.frontend.partials.header')
    <section class="first-section-knee">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0 header-knee">
                    <img class="img-fluid img-header-knee d-desktop"
                        src="{{URL::asset('frontend/assets/hero/Knee replacement surgery.png')}}" alt="header image knee" />
                    <img class="img-fluid img-header-knee d-mobile"
                        src="{{URL::asset('frontend/assets/hero/Knee replacement surgery.png')}}" alt="header image knee" />
                    <h4 class="img-text-knee">
                        {!!__('knee.knee replacement surgery')!!}
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <section class="first-section-knee-text">
        <div class="container">
                        <div class="row">
                <h2 class="header-title">{{__('knee.what is knee replacement')}}</h2>

                <div class="col-lg-12">
                    <p class="header-desc">
                        {{__('knee.what is knee description')}}
                    </p>
                </div>
          
            </div>
        </div>
    </section>
    <section class="second-section-knee">
        <div class="container">
            <div class="row second-section-reverse">
                <div class="col-lg-6 col-description">
                    <h4>
                        {{__('knee.cause of knee damage')}}
                    </h4>
                    <p>
                        {{__('knee.the most common cause')}}<br> <br>
                        <i class="fa-solid fa-caret-right"></i>  {{__('knee.osteoarthritis')}}<br>
                        <i class="fa-solid fa-caret-right"></i>  {{__('knee.rheumatoid arthritis')}}<br>
                        <i class="fa-solid fa-caret-right"></i>  {{__('knee.posttraumatic arthritis')}}
                    </p>
                </div>
                <div class="col-lg-6 p-0">
                    <img src="{{URL::asset('frontend/assets/hero/therapist-showing-knee-joint.png')}}" class="img-fluid"
                        alt="description image" />
                </div>
            </div>
        </div>
    </section>
    <section class="third-section-knee">
        <div class="container">
            <div class="row">
                <h2>{{__('knee.candidates for surgery')}}</h2>
                <p class="text-center">{{__('knee.candidates desc')}}</p>

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

    
</body>

</html>