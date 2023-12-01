

<footer>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="col-1-footer">
                        <div class="logo">
                           <a href="{{route('home')}}">
                           <img src="{{Url::asset('frontend/assets/logo/LOGO NEW (1).jpg')}}" alt="">
                           </a>
                        </div>
                        <p>{{__('home.footer description')}}</p>
                        <h4>+355 6x xxx xxx</h4>
                        <h3>E-mail us: <span>info@healthtravel.com</span></h3>
                    </div>

                </div>
                <div class="colmd2 col-md-2 col-sm-6 col-xs-6 ">
                    <div class="col-3-footer">
                        <h3>
                            COMPANY
                        </h3>
                        <ul>
                            <li>About</li>
                            <li>Blog</li>
                            <li>Services</li>
                            <li>Doctors</li>
                            <li>Appointment</li>
                            <li>Pricing</li>
                        </ul>
                    </div>
                </div>
                <div class="colmd2 col-md-3 col-sm-6 col-xs-6  ">
                    <div class="col-3-footer">
                        <h3>
                            USEFUL LINKS
                        </h3>
                        <ul>
                            <li>Dental Treatments</li>
                            <li>Hair Transplant</li>
                            <li>Cosmetic Surgery</li>
                            <li>Facelift</li>
                            <li>Breast Lift</li>
                        </ul>

                    </div>
                </div>
                <div class="colmd2 col-md-3  col-last-links">
                    <div class="col-3-footer">
                        <h3>
                            USEFUL LINKS
                        </h3>
                        <ul>
                            <li>Breast Treatment</li>
                            <li>Liposuction</li>
                            <li>Rhinoplasty</li>
                            <li>Tummy Tuck</li>
                        </ul>

                    </div>
                </div>

            </div>
            <hr class="footer-hr">
            <div class="footer-text">
                <div class="row row1">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <p> © <span id="year"></span>  Health Travel Albania, All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 text-endd">
                        <div class="row row2">
                            <div class="col-md-7 col-lg-8  col-xl-9 text-endd p-0 ">
                                <h3>Follow us:</h3>
                            </div>
                            <div class="col-md-5 col-lg-4  col-xl-3  p-0">
                                <img src="{{Url::asset('frontend/assets/socialmedia/Layer_1 (1).png')}}" alt="">
                                <img src="{{Url::asset('frontend/assets/socialmedia/Layer_1 (2).png')}}" alt="">
                                <img src="{{Url::asset('frontend/assets/socialmedia/Layer_1 (3).png')}}" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
</footer>
@push('js')
<script>
document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
@endpush


