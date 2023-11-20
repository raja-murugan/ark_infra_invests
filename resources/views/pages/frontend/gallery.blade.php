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
                            <h1 class="page-title">Our Gallery</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="{{ route('welcome') }}"><span class="ltn__secondary-color"><i
                                                    class="fas fa-home"></i></span> Home</a></li>
                                    <li>Gallery</li>
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
                <!-- Portfolio Wrapper Start -->
                <!-- (ltn__gallery-info-hide) Class for 'ltn__gallery-item-info' not showing -->
                <div class="ltn__gallery-active row ltn__gallery-style-2 ltn__gallery-info-hide---">
                    <div class="ltn__gallery-sizer col-1"></div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a>
                                    <img src="{{ asset('assets/frontend/img/gallery/1.png') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Land Eagle View</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a>
                                    <img src="{{ asset('assets/frontend/img/gallery/2.png') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Add Poster</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a>
                                    <img src="{{ asset('assets/frontend/img/gallery/3.png') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Add Poster</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a>
                                    <img src="{{ asset('assets/frontend/img/gallery/4.png') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Add Poster</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a>
                                    <img src="{{ asset('assets/frontend/img/gallery/5.png') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Land Eagle View </a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a>
                                    <img src="{{ asset('assets/frontend/img/gallery/6.png') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Add Poster</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a>
                                    <img src="{{ asset('assets/frontend/img/gallery/7.png') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Land Eagle View</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a>
                                    <img src="{{ asset('assets/frontend/img/gallery/8.png') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Add Poster</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- gallery-item -->
                    <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                        <div class="ltn__gallery-item-inner">
                            <div class="ltn__gallery-item-img">
                                <a>
                                    <img src="{{ asset('assets/frontend/img/gallery/9.jpg') }}" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__gallery-item-info">
                                <h4><a href="javascript:void(0)">Add Poster</a></h4>
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
