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
    <div class="wrapper">
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
                            <h1 class="page-title">Our Benefits</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="{{ route('welcome') }}"><span class="ltn__secondary-color"><i
                                                    class="fas fa-home"></i></span> Home</a></li>
                                    <li>Benefits</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- Gallery area start -->
        <div class="ltn__gallery-area mb-120">
            <div class="container">

                <h2><a href="javascript:void(0)">School</a></h2>

                <!--Portfolio Wrapper Start-->
                <div class="ltn__gallery-active row ltn__gallery-style-1">
                    <div class="ltn__gallery-sizer col-1"></div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a href="#">
                                    <img src="{{ asset('assets/frontend/img/benefits/1.jpg') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Monfort Matric Higher Secondary School</a></h4>
                                <p>Just - 1.9 km</p>
                            </div>
                        </div>
                    </div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a href="#">
                                    <img src="{{ asset('assets/frontend/img/benefits/2.jpg') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Ramco Vidya Mandir Senior Secondary School</a></h4>
                                <p>Just - 1.7 km </p>
                            </div>
                        </div>
                    </div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a href="#">
                                    <img src="{{ asset('assets/frontend/img/benefits/3.jpg') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Sabrmathi Vidhalaya Public School(CBSE)</a></h4>
                                <p>Just - 1.0 km</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Second Line-->
            <div class="container">
                <h2><a href="javascript:void(0)">College</a></h2>

                <!--Portfolio Wrapper Start-->
                <div class="ltn__gallery-active row ltn__gallery-style-1">
                    <div class="ltn__gallery-sizer col-1"></div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a href="#">
                                    <img src="{{ asset('assets/frontend/img/benefits/4.jpg') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Government Arts and Science College</a></h4>
                                <p>Just - 2.6 km</p>
                            </div>
                        </div>
                    </div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a href="#">
                                    <img src="{{ asset('assets/frontend/img/benefits/5.jpg') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Government Medical College</a></h4>
                                <br>
                                <p>Just - 1.7 km </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Third Line-->
            <div class="container">
                <h2><a href="javascript:void(0)">Government Offices</a></h2>
                <!--Portfolio Wrapper Start-->
                <div class="ltn__gallery-active row ltn__gallery-style-1">
                    <div class="ltn__gallery-sizer col-1"></div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a href="#">
                                    <img src="{{ asset('assets/frontend/img/benefits/6.jpg') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Collector Office</a></h4>
                                <p>Just - 4 km</p>
                            </div>
                        </div>
                    </div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a href="#">
                                    <img src="{{ asset('assets/frontend/img/benefits/7.jpg') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Register Office</a></h4>
                                <p>Just - 4.4 km </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--Fouth Line-->
            <div class="container">
                <h2><a href="javascript:void(0)">Transport</a></h2>
                <!--Portfolio Wrapper Start-->
                <div class="ltn__gallery-active row ltn__gallery-style-1">
                    <div class="ltn__gallery-sizer col-1"></div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a href="#">
                                    <img src="{{ asset('assets/frontend/img/benefits/8.jpg') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">New Bus Stand</a></h4>
                                <p>Just - 3.8 km</p>
                            </div>
                        </div>
                    </div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a href="#">
                                    <img src="{{ asset('assets/frontend/img/benefits/9.jpg') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Railway Station</a></h4>
                                <p>Just - 3 km </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Gallery area end -->

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
