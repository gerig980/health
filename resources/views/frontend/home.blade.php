@push('css')

<style>
 .before-after .before-after-info{
        text-align:center;
    }
@media only screen and (max-width: 600px){
   .before-after .before-after-info{
        text-align:start;
    }
      
  }

  </style>
@endpush
@include('layouts.frontend.partials.header-assets')
<body>
    <div class="wrapper">
        @include('layouts.frontend.partials.header')
        <section class="hero">
            <div class="before-img">
                <img src="{{Url::asset('frontend/assets/hero/Header Image Home.jpg')}}" alt="" class="img-fluid">
                <div class="top-left after hero-title">
                    <div class="hero-text">
                        <h1>{{__('home.Professional Services For')}}<br><span>{{__('home.Medical Tourism In Albania')}}</span></h1>
                        <p>{{__('home.medical centers in albania have built')}}</p>
                        <button class="learn-more-btn"> {{__('home.learn more')}} <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                height="15" viewBox="0 0 22 15" fill="none">
                                <path
                                    d="M21.7071 8.20711C22.0976 7.81658 22.0976 7.18342 21.7071 6.79289L15.3431 0.428932C14.9526 0.0384078 14.3195 0.0384078 13.9289 0.428932C13.5384 0.819457 13.5384 1.45262 13.9289 1.84315L19.5858 7.5L13.9289 13.1569C13.5384 13.5474 13.5384 14.1805 13.9289 14.5711C14.3195 14.9616 14.9526 14.9616 15.3431 14.5711L21.7071 8.20711ZM0 8.5H21V6.5H0V8.5Z"
                                    fill="black" />
                            </svg></button>
                    </div>
                </div>
            </div>
        </section>
 
        <section class="hero-mobile" style="background: #EEF8F3;">
            <div class="container-fluid p-0">
                <div class="row" style=" display: contents;">
                    <div class="col-md-12 col-sm-12 p-0">
                        <img src="{{Url::asset('frontend/assets/hero/doc.png')}}" class="img-fluid w-100" >
                    </div>
                    <div class="col-md-12 col-sm-12 ps-3">
                        <div class="hero-text">
                            <h1>{{__('home.Professional Services For')}} <br><span>{{__('home.Medical Tourism In Albania')}}</span></h1>
                            <p>{{__('home.medical centers in albania have built')}}</p>
                            <button class="learn-more-btn mb-3"> {{__('home.learn more')}} <svg xmlns="http://www.w3.org/2000/svg"
                                    width="22" height="15" viewBox="0 0 22 15" fill="none">
                                    <path
                                        d="M21.7071 8.20711C22.0976 7.81658 22.0976 7.18342 21.7071 6.79289L15.3431 0.428932C14.9526 0.0384078 14.3195 0.0384078 13.9289 0.428932C13.5384 0.819457 13.5384 1.45262 13.9289 1.84315L19.5858 7.5L13.9289 13.1569C13.5384 13.5474 13.5384 14.1805 13.9289 14.5711C14.3195 14.9616 14.9526 14.9616 15.3431 14.5711L21.7071 8.20711ZM0 8.5H21V6.5H0V8.5Z"
                                        fill="black" />
                                </svg></button>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <section class="professional-clinics">
            <div class="container">
                <div class="professional-clinics-info">
                    <div class=" row">
                        <h1>{{__('home.professional clinics')}}</h1>
                        <p>{{__('home.find some professional clinics')}}</p>
                    </div>
                </div>

                <div class="m-auto d-flex justify-content-between text-center">
                    <img src="{{ URL::asset('frontend/assets/logo/Rectangle14.png') }}" alt="" class="img-fluid icon-img">
                    <img src="{{ URL::asset('frontend/assets/logo/Rectangle14.png') }}" alt="" class="img-fluid icon-img">
                    <img src="{{ URL::asset('frontend/assets/logo/Rectangle14.png') }}" alt="" class="img-fluid icon-img">
                    <img src="{{ URL::asset('frontend/assets/logo/Rectangle14.png') }}"  alt="" class="img-fluid icon-img">
                    <img src="{{ URL::asset('frontend/assets/logo/Rectangle14.png') }}" alt="" class="img-fluid icon-img">
                    <img src="{{ URL::asset('frontend/assets/logo/Rectangle14.png') }}" alt="" class="img-fluid icon-img">
                </div>
            </div>
        </section>
        <section class="medical-treatments">
            <div class="container-fluid container-fluidd">
                <div class="medical-treatments-info">
                    <div class="row">
                        <h1>{{__('home.medical treatments')}}</h1>
                        <p>What makes us different from others? We give lorem ipsum in Dental,
                            Health Insurance and others.</p>
                    </div>
                </div>
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
                  <span class="swiper-texts">{{__('dental.orthopaedic surgery')}}</span>
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
        </section>
        <section class="why-us">
            <div class="container">
                <div class="row">
                    <div class=" col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <img src="{{Url::asset('frontend/assets/us/business-meeting-woman-and-happy-with-laptop-wor-2023-09-01-22-19-36-utc 1.jpg')}}"
                            alt="" class="img-fluid">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="why-us-info">
                            <h1>{{__('home.why us')}}</h1>
                            <p>{{__('home.why us description')}}</p>
                            <button class="learn-more-btn">{{__('home.learn more')}}<svg xmlns="http://www.w3.org/2000/svg"
                                    width="22" height="15" viewBox="0 0 22 15" fill="none">
                                    <path
                                        d="M21.7071 8.20711C22.0976 7.81658 22.0976 7.18342 21.7071 6.79289L15.3431 0.428932C14.9526 0.0384078 14.3195 0.0384078 13.9289 0.428932C13.5384 0.819457 13.5384 1.45262 13.9289 1.84315L19.5858 7.5L13.9289 13.1569C13.5384 13.5474 13.5384 14.1805 13.9289 14.5711C14.3195 14.9616 14.9526 14.9616 15.3431 14.5711L21.7071 8.20711ZM0 8.5H21V6.5H0V8.5Z"
                                        fill="black" />
                                </svg></button>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="before-after">
            <div class="container">
                <div class="before-after-info">
                    <div class=" row">
                        <h1>{{__('home.before and after treatment')}}</h1>
                        <p>{{__('home.find some our clients')}}</p>
                    </div>
                </div>
                <div class="carousel-hair">
                    <h3>{{__('home.hair transplant')}}</h3>
                    <div class="owl-carousel owl-theme">
                        <div class="item before-img">
                            <img src="{{Url::asset('frontend/assets/beforeandafter/before-hair-transplante.png')}}" alt="">
                            <div class="top-left before">{{__('home.before')}}</div>
                        </div>
                        <div class="item before-img">
                            <img src="{{Url::asset('frontend/assets/beforeandafter/after-hair-transplantation.png')}}" alt="">
                            <div class="top-left after">{{__('home.after')}}</div>
                        </div>
                        <div class="item before-img">
                            <img src="{{Url::asset('frontend/assets/beforeandafter/before-hair-transplante.png')}}" alt="">
                            <div class="top-left before">{{__('home.before')}}</div>
                        </div>
                        <div class="item before-img">
                     <img src="{{Url::asset('frontend/assets/beforeandafter/after-hair-transplantation.png')}}" alt="">
                            <div class="top-left after">{{__('home.after')}}</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-dentist">
                    <h3>{{__('home.dental implants')}}</h3>
                    <div class="owl-carousel owl-theme">
                        <div class="item before-img">
                            <img src="{{Url::asset('frontend/assets/beforeandafter/before-hair-transplantation-young-bald-man-with.png')}}"
                                alt="">
                            <div class="top-left before">{{__('home.before')}}</div>
                        </div>
                        <div class="item before-img">
                            <img src="{{Url::asset('frontend/assets/beforeandafter/after-hair-transplantation-surgical-technique-that.png')}}"
                                alt="">
                            <div class="top-left after">{{__('home.after')}}</div>
                        </div>
                        <div class="item before-img">
                            <img src="{{Url::asset('frontend/assets/beforeandafter/before-hair-transplantation-young-bald-man-with.png')}}"
                                alt="">
                            <div class="top-left before">{{__('home.before')}}</div>
                        </div>
                        <div class="item before-img">
                            <img src="{{Url::asset('frontend/assets/beforeandafter/after-hair-transplantation-surgical-technique-that.png')}}"
                                alt="">
                            <div class="top-left after">{{__('home.after')}}</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-Rhinoplasty">
                    <h3>{{__('home.rhinoplasty')}}</h3>
                    <div class="owl-carousel owl-theme">
                        <div class="item before-img">
                            <img src="{{Url::asset('frontend/assets/beforeandafter/Rhinoplasty-Before.png')}}" alt="">
                            <div class="top-left before">{{__('home.before')}}</div>
                        </div>
                        <div class="item before-img">
                            <img src="{{Url::asset('frontend/assets/beforeandafter/Rhinoplasty-After.png')}}" alt="">
                            <div class="top-left after">{{__('home.after')}}</div>
                        </div>
                        <div class="item before-img">
                            <img src="{{Url::asset('frontend/assets/beforeandafter/Rhinoplasty-Before.png')}}" alt="">
                            <div class="top-left before">{{__('home.before')}}</div>
                        </div>
                        <div class="item before-img">
                            <img src="{{Url::asset('frontend/assets/beforeandafter/Rhinoplasty-After.png')}}" alt="">
                            <div class="top-left after">{{__('home.after')}}</div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <section class="contact-us" >
            <div class="container p-0">
                <div class="contact-us-info">
                    <div class="contact-us-form">
                        <div class="text-center row" id="quote">
                            <h1>{{__('home.get a quote')}}</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="contact-form" >
                        <form action="{{route('contact.store')}}" method="POST" class="row g-3">
                            @csrf
                            <div class="col-md-6">
                                <label for="name" class="form-label">{{__('home.name')}}</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="{{__('home.name')}}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="surname" class="form-label">{{__('home.surname')}}</label>
                                <input type="text" class="form-control" name="surname" id="surname" placeholder="{{__('home.surname')}}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="email@gmail.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">{{__('home.phone')}}</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="+355 69 *******" required>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn button-submit">{{__('home.get a quote')}}</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>
    @include('layouts.frontend.partials.footer')
    @include('layouts.frontend.partials.footer-assets')

</body>

</html>