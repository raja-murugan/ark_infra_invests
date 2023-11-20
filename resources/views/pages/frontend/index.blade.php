<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('layout.frontend.head')
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58C9WCXS" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-5) -->
        @include('layout.frontend.toolbar')
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- SLIDER AREA START (slider-1) -->
        <div class="ltn__slider-area ltn__slider-6">
            <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
                <!-- ltn__slide-item -->
                <div class="ltn__slide-item--- ltn__slide-item-9 section-bg-1 bg-image"
                    data-bs-bg="{{ asset('assets/frontend/img/slider/1.jpg') }}">
                    <div class="ltn__slide-item-inner">
                        <div class="slide-item-info bg-overlay-white-90 text-center"
                            style='background-image: url("assets/frontend/img/slider/4.webp");'>
                            <div class="slide-item-info-inner slide-item-info-line-no  ltn__slide-animation">

                                <div class="slide-item-car-dealer-form">
                                    <h4 class="text-color-white--- text-center mb-10">Mega
                                        <span class="ltn__secondary-color-3">20%
                                            Discount</span>
                                        on Online Booking!
                                    </h4>
                                    <p>Limited Spots Available in Erivan
                                        Nagar – Act Fast! Hurry, Secure Your
                                        Discount Now!</p>
                                    <div class="ltn__car-dealer-form-tab">
                                        <div class="tab-content pb-10">
                                            <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                                                <div class="car-dealer-form-inner">
                                                    <form class="ltn__car-dealer-form-box row" autocomplete="off" method="POST" action="{{ route('contact.store') }}">
                                                        @csrf
                                                        <div
                                                            class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-meter col-lg-12 col-md-12">
                                                            <input type="text" name="name" required
                                                                placeholder="Enter your name *">
                                                        </div>
                                                        <div
                                                            class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-meter col-lg-12 col-md-12">
                                                            <input type="email" name="email" required
                                                                placeholder="Enter email address">
                                                        </div>
                                                        <div
                                                            class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-meter col-lg-12 col-md-12">
                                                            <input type="text" name="phone" required
                                                                placeholder="Enter phone number *">
                                                        </div>
                                                        <div
                                                            class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-meter col-lg-12 col-md-12">
                                                            <input type="text" name="area" required
                                                                placeholder="Enter your area *">
                                                        </div>
                                                        <div
                                                            class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-12 col-md-12">
                                                            <div class="btn-wrapper text-center mt-0">
                                                                <button type="submit" id="adresponce"
                                                                    style="width: -moz-available; border-radius: 10px;"
                                                                    class="btn theme-btn-1 btn-effect-1 text-uppercase">
                                                                    Book Now</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div>
                                                        <h6 class="text-color-white--- text-center mb-10">Want to reach
                                                            us
                                                            <span class="ltn__secondary-color-3">directly</span> through
                                                            WhatsApp?
                                                        </h6>
                                                        <a href="https://api.whatsapp.com/send/?phone=%2B919159435943&text&type=phone_number&app_absent=0"
                                                            target="_blank">
                                                            <button type="submit"
                                                                style="border-radius: 200px; padding: 10px 40px !important;"
                                                                class="btn theme-btn-1 btn-effect-1 text-uppercase">
                                                                chat on whatsapp</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
        <!-- SLIDER AREA END -->

        <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area pt-115 pb-100 mt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-img-wrap about-img-left">
                            <img src="{{ asset('assets/frontend/img/others/11.jpg') }}" alt="About Us Image">
                            <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3 d-none">

                                <div class="ltn__video-img ltn__animation-pulse1">
                                    <img src="img/others/8.png" alt="video popup bg image">
                                    <a class="ltn__video-icon-2 ltn__video-icon-2-border---"
                                        href="https://www.youtube.com/embed/iuCLRhEjiZQ?si=Xj0ltwDDNIddc8h_"
                                        data-rel="lightcase:myCollection">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2--- mb-30">
                                <h6 class="section-subtitle section-subtitle-2--- ltn__secondary-color">About
                                    Us</h6>
                                <h1 class="section-title">Your Path to
                                    Exceptional Living with Eraivan Nagar</h1>
                                <p>Our commitment to excellence and
                                    unwavering dedication to providing
                                    top-notch living
                                    spaces sets us apart.</p>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-3">
                                <div class="ltn__feature-icon">
                                    <span><i class="flaticon-house-4"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h4><a href="javascript:void(0)">Gated
                                            Community Living</a></h4>
                                    <p>Our plots are situated within a
                                        secure gated community, ensuring
                                        your family's
                                        safety and well-being as a top <br>priority.</p>
                                </div>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-3">
                                <div class="ltn__feature-icon">
                                    <span><i class="flaticon-call-center-agent"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h4><a href="javascript:void(0)">Safety
                                            and Accessibility</a></h4>
                                    <p>Our plots are close to the District
                                        Police Office Ariyalur and the
                                        Ariyalur
                                        District Collector Office, ensuring
                                        both security and convenience.</p>
                                </div>
                            </div>
                            <div class="ltn__feature-item ltn__feature-item-3">
                                <div class="ltn__feature-icon">
                                    <span><i class="flaticon-maps-and-location"></i></span>
                                </div>
                                <div class="ltn__feature-info">
                                    <h4><a href="javascript:void(0)">Prime
                                            Location</a></h4>
                                    <p>Our plots are strategically located
                                        just 50 meters from the
                                        Ariyalur-Sendurai
                                        4-way road and closer to Ramco and
                                        Dalmia cement factories.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area section-bg-1 bg-image-right-before pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2--- mb-20">
                                <h6 class="section-subtitle section-subtitle-2--- ltn__secondary-color">Plot
                                    Benefits
                                </h6>
                                <h1 class="section-title">Endless potential,
                                    yours to explore</h1>
                                <p>With boundless opportunities, these plots
                                    invite you to explore, design, and
                                    create
                                    your perfect vision of home and
                                    lifestyle.</p>
                            </div>
                            <ul class="ltn__list-item-half ltn__list-item-half-2 list-item-margin clearfix">
                                <li>
                                    <i class="icon-done"></i>
                                    Monfort Matric Higher Secondary School
                                </li>
                                <li>
                                    <i class="icon-done"></i>
                                    Concrete Road
                                </li>
                                <li>
                                    <i class="icon-done"></i>
                                    Government Medical College
                                </li>
                                <li>
                                    <i class="icon-done"></i>
                                    Good Ground Water
                                </li>
                                <li>
                                    <i class="icon-done"></i>
                                    Ariyalur New Bus Stand
                                </li>
                                <li>
                                    <i class="icon-done"></i>
                                    CCTV
                                </li>
                            </ul>
                            <div class="  ltn__animation-pulse2 text-center mt-30">
                                <a class="ltn__video-play-btn bg-white--- ltn__secondary-bg"
                                    href="https://www.youtube.com/embed/iuCLRhEjiZQ?si=Xj0ltwDDNIddc8h_"
                                    data-rel="lightcase">
                                    <i class="icon-play  ltn__secondary-color--- white-color"
                                        style="color: white;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="about-us-img-wrap about-img-left">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->
        <br>

        <!-- CALL TO ACTION START (call-to-action-6) -->
        <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div
                            class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                            <div class="coll-to-info text-color-white">
                                <h1>Looking for a Dream Plots !</h1>
                                <p>We can help you realize your dream of a
                                    new plots</p>
                            </div>
                            <div class="btn-wrapper">
                                <a class="btn btn-effect-3 btn-white"
                                    href="https://api.whatsapp.com/send/?phone=%2B919159435943&text&type=phone_number&app_absent=0"
                                    target="_blank">Make An Enquiry <i class="icon-next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CALL TO ACTION END -->

        <!-- FOOTER AREA START -->
        <footer class="ltn__footer-area  ">
            @include('layout.frontend.footer')
        </footer>
        <!-- FOOTER AREA END -->
    </div>
    <!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

</body>

</html>
