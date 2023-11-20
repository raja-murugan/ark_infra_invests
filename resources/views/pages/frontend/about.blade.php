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

        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "
            data-bs-bg="{{ asset('assets/frontend/img/bg/14.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner">
                            <h1 class="page-title">What We Do</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="{{ route('welcome') }}"><span class="ltn__secondary-color"><i
                                                    class="fas fa-home"></i></span> Home</a></li>
                                    <li>About</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- ABOUT US AREA START -->
        <div class="ltn__about-us-area pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 align-self-center">
                        <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                            <img src="{{ asset('assets/frontend/img/service/11.jpg') }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 align-self-center">
                        <div class="about-us-info-wrap">
                            <div class="section-title-area ltn__section-title-2--- mb-20">
                                <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                                <h1 class="section-title">Your Path to Exceptional Living with Eraivan
                                    Nagar<span>.</span></h1>
                                <p>Our commitment to excellence and unwavering dedication to providing top-notch living
                                    spaces sets us apart. Here's what makes us your ideal choice in the real estate
                                    market.</p>
                            </div>
                            <div class="about-us-info-wrap-inner about-us-info-devide---">
                                <p>Discover the gateway to an extraordinary lifestyle in the heart of Eraivan Nagar.
                                    Nestled in a vibrant community, our homes offer the perfect blend of comfort and
                                    convenience. With abundant green spaces, amenities, and a lively atmosphere, you'll
                                    experience a life like no other. Explore the essence of exceptional living at
                                    Eraivan Nagar and embark on a journey towards your dream lifestyle.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT US AREA END -->

        <!-- SERVICE AREA START (Service 1) -->
        <div class="ltn__service-area section-bg-1 pt-115 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2--- text-center">
                            <h1 class="section-title">Our Core Features</h1>
                        </div>
                    </div>
                </div>
                <div class="row  justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                            <div class="ltn__feature-icon">
                                <span><i class="flaticon-house"></i></span>
                                <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                            </div>
                            <div class="ltn__feature-info">
                                <h3><a href="javascript:void(0)">Gated Community</a></h3>
                                <p>Explore the allure of secure, exclusive living in a tranquil neighborhood with
                                    top-notch amenities, tight-knit community, and privacy in mind.</p>
                                <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                            <div class="ltn__feature-icon">
                                <span><i class="flaticon-mortgage"></i></span>
                                <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                            </div>
                            <div class="ltn__feature-info">
                                <h3><a href="javascript:void(0)">Prime Location</a></h3>
                                <p>Discover the allure of premium addresses, where lifestyle meets convenience. Explore
                                    plots at the heart of it all.</p>
                                <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                            <div class="ltn__feature-icon">
                                <span><i class="flaticon-operator"></i></span>
                                <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                            </div>
                            <div class="ltn__feature-info">
                                <h3><a href="javascript:void(0)">Security</a></h3>
                                <p>Safe investments are essential. Land's reliability as a financial fortress is
                                    unmatched. Protect your future with this timeless asset.</p>
                                <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                            <div class="ltn__feature-icon">
                                <span><i class="flaticon-house-1"></i></span>
                                <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                            </div>
                            <div class="ltn__feature-info">
                                <h3><a href="javascript:void(0)">On-Road Property</a></h3>
                                <p>Conveniently situated along main roads, ensuring easy access and a vibrant lifestyle
                                </p>
                                <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                            <div class="ltn__feature-icon">
                                <span><i class="flaticon-house-3"></i></span>
                                <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                            </div>
                            <div class="ltn__feature-info">
                                <h3><a href="javascript:void(0)">Revalue</a></h3>
                                <p>Discover property investment's power to grow your wealth and secure your future.</p>
                                <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                            <div class="ltn__feature-icon">
                                <span><i class="flaticon-official-documents"></i></span>
                                <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                            </div>
                            <div class="ltn__feature-info">
                                <h3><a href="javascript:void(0)">Clear Document</a></h3>
                                <p>Our properties with Clear DTCP & RERA documents. Enjoy security in your dream home.
                                </p>
                                <!-- <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SERVICE AREA END -->

        <!-- CALL TO ACTION START (call-to-action-6) -->
        <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom"
            data-bs-bg="{{ asset('assets/frontend/img/1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div
                            class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                            <div class="coll-to-info text-color-white">
                                <h1>Looking for a Dream Plots !</h1>
                                <p>We can help you realize your dream of a new plots</p>
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
