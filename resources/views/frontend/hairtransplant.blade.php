@include('layouts.frontend.partials.header-assets')

<body>
    <div class="wrapper">
        @include('layouts.frontend.partials.header')
        <section class="hero-hairtransplant">

            <div class="before-img">
                <img src="{{URL::asset('frontend/assets/hero/after-hair-transplantation-surgical-technique-that-2022-10-05-22-49-00-utc 1.png')}}"
                    alt="" class="img-fluid w-100">
                <div class="top-left after hero-hairtransplant-title">{{__('hair.hair transplant')}}
                </div>
            </div>
        </section>
        <section class="fue-hair-transplant">
            <div class="container">
                <div class="fue-hair-transplant-title">
                    <h1>{{__('hair.hair transplant fue')}}</h1>
                </div>
                <div class="row pb-4">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 fue-hair-transplant-alb-col p-0">
                        <div class="fue-hair-transplant-alb">
                            <h1>{{__('hair.hair transplant fue in albania')}}</h1>
                            <p>{{__('hair.fue transplant description first')}}</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6  col-md-12 col-sm-12 col-12 p-0">
                        <img src="{{URL::asset('frontend/assets/hair-transplant/adult-male-getting-hair-loss-treatment 1.png')}}" alt=""
                            class="img-fluid w-100">
                    </div>
                </div>
                <div class="row col-reverse">

                    <div class="col-xl-6 col-lg-6  col-md-12 col-sm-12 col-12 p-0">
                        <img src="{{URL::asset('frontend/assets/hair-transplant/handsome-man-black-suit-with-white-shirt-posing-attractive-guy-with-fashion-hairstyle-confident-man-with-short-beard-adult-boy-with-brown-hair 1.png')}}"
                            alt="" class="img-fluid w-100">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 fue-hair-transplant-alb-col2 p-0">
                        <div class="fue-hair-transplant-alb">
                            <p>{{__('hair.fue transplant description second')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="questions">
            <div class="container p-0">
                <div class="question-heading">
                    <h4>{{__('hair.if you are looking for hair treatment')}}</h4>
                </div>
                <div class="accordion" id="question-part">
                    <div class="question-item">
                        <h2 class="question-header m-0" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{__('hair.does it hurt')}}
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#question-part">
                            <div class="question-body">
                                {{__('hair.does it hurt answer')}}
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <h2 class="question-header m-0 " id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                {{__('hair.how long does it take')}}
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#question-part">
                            <div class="question-body">
                                {{__('hair.how long does answer')}}
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <h2 class="question-header m-0" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                {{__('hair.when i can see result')}}
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#question-part">
                            <div class="question-body">
                                {{__('hair.when i can see result answer')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="direct-hair-transplant">
            <div class="container">
                <h1>{{__('hair.dhi in albania')}}</h1>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 direct-hair-transplant-alb-col2 p-0">
                        <div class="direct-hair-transplant-alb">
                            <p>{{__('hair.dhi description')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 p-0">
                        <img src="{{URL::asset('frontend/assets/hair-transplant/after-hair-transplantation-surgical-technique-that-2023-01-18-04-23-16-utc 1.png')}}"
                            alt="" class="img-fluid w-100">
                    </div>
                </div>
            </div>

        </section>
        <section class="dhi-fue-fut">
            <div class="container">
                <div class="dhi-fue-fut-header">
                    <h1>{{__('hair.dhi vs fue and fut')}}</h1>
                    <p>{{__('hair.dhi fue and fut desc')}}</p>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12 col-12 p-0">
                        <img src="{{URL::asset('frontend/assets/hair-transplant/after-hair-transplantation-surgical-technique-that-2022-10-05-22-49-00-utc 2.png')}}"
                            alt="" class="img-fluid w-100">
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 col-12 dhi-fue-fut-alb-col p-0">
                        <div class="dhi-fue-fut-alb">
                            <h1>{{__('hair.fut hair transplant')}}</h1>
                            <p>{{__('hair.fut description')}}</p>
                        </div>
                    </div>
                </div>
                <div class="paragraph">
                    <p>{{__('hair.both in dhi and fue')}}</p>
                </div>
                <!-- <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="card  ">
                            <img src="{{URL::asset('frontend/assets/hair-transplant/adult-male-getting-hair-loss-treatment 1 (1).png')}}"
                                class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title1">DHI Hair Transplant </h5>

                            </div>
                            <div class="card-body">
                                <p class="card-text">The DHI technique allows surgeons to make these incisions and
                                    implant hair at the same time. DHI and FUE avoid the long scar caused by FUT,
                                    however, these surgeries generally take longer and are more expensive.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="card ">
                            <img src="{{URL::asset('frontend/assets/hair-transplant/cosmetologist-performs-anti-aging-procedures-injec-2022-03-05-19-55-56-utc 1.png')}}"
                                class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title1">FUE Hair Transplant</h5>

                            </div>
                            <div class="card-body">
                                <p class="card-text">FUE is a two step process where a surgeon first manually cuts a
                                    series of canals in your scalp to insert the hair follicles, and second the
                                    insertion takes place., and second the
                                    insertion takes place.</p>

                            </div>
                        </div>

                    </div>
                </div> -->
                <div class="row row-bif-aft">
                    <div class="col-md-6">
                        <div class="item before-img">
                            <img src="{{URL::asset('frontend/assets/hair-transplant/adult-male-getting-hair-loss-treatment 1 (1).png')}}" alt=""
                                class="img-fluid">
                            <div class="top-left after w-100"> <span>DHI Hair Transplant </span></div>
                        </div>
                        <p>{{__('hair.dhi mini desc')}}</p>
                    </div>
                    <div class="col-md-6">
                        <div class="item before-img">
                            <img src="{{URL::asset('frontend/assets/hair-transplant/cosmetologist-performs-anti-aging-procedures-injec-2022-03-05-19-55-56-utc 1.png')}}"
                                alt="" class="img-fluid w-100">
                            <div class="top-left after">FUE Hair Transplant</div>
                        </div>
                        <p>{{__('hair.fue mini desc')}}</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="fue-hair-transplant">
            <div class="container">
                <div class="fue-hair-transplant-title">
                    <h1>{{__('hair.hair transplant for women')}}</h1>
                </div>
                <div class="row pb-4 col-reverse">
                    <div class="col-md-6 col-sm-12 col-xs-12 fue-hair-transplant-alb-col p-0">
                        <div class="fue-hair-transplant-alb">
                            <h1>{{__('hair.best hair for women')}}</h1>
                            <p>{{__('hair.best hair description')}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 p-0">
                        <img src="{{URL::asset('frontend/assets/hair-transplant/hair-mesotherapy-or-hair-transplant.png')}}" alt=""
                            class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </section>
        <section class="questions">
            <div class="container p-0">
                <div class="question-answer">
                    <h4>{{__('hair.question and answer')}}</h4>
                </div>
                <div class="accordion" id="question-part">
                    <div class="question-item">
                        <h2 class="question-header m-0" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{__('hair.what is female hair transplant')}}
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#question-part">
                            <div class="question-body">
                                {{__('hair.what is female hair transplant answer')}}
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <h2 class="question-header m-0 " id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                {{__('hair.why do women make hair transplant')}}
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#question-part">
                            <div class="question-body">
                                {{__('hair.why do women make hair transplant answer')}}
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <h2 class="question-header m-0" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                {{__('hair.how last recovery in women')}}
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#question-part">
                            <div class="question-body">
                                {{__('hair.how last recovery in women answer')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.frontend.partials.footer')
     @include('layouts.frontend.partials.footer-assets')



    </div>

</body>

