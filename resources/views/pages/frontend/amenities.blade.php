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
                            <h1 class="page-title">What We Have</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="{{ route('welcome') }}"><span class="ltn__secondary-color"><i
                                                    class="fas fa-home"></i></span> Home</a></li>
                                    <li>Amenities</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- BLOG AREA START -->
        <div class="ltn__blog-area ltn__blog-item-3-normal mb-100">
            <div class="container">
                <div class="row">
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img src="{{ asset('assets/frontend/img/blog/1.jpg') }}"
                                        alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">Clear Sign Board</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Discover the convenience of our<br> clear sign boards, guiding you to
                                        your<br>dream home with ease.<br> Clarity at its best!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img src="{{ asset('assets/frontend/img/blog/2.jpg') }}"
                                        alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">Concrete Road</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Experience the convenience of easy access with well-maintained blacktop roads,
                                        enhancing your daily commute and property value.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img src="{{ asset('assets/frontend/img/blog/3.jpg') }}"
                                        alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">Street Lights</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Experience safety and convenience with well-lit streets. Our community features
                                        modern street lighting for a brighter, secure environment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img src="{{ asset('assets/frontend/img/blog/4.jpg') }}"
                                        alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">Park</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Enjoy nature's beauty with our serene park featuring lush greenery and picnic
                                        areas. Your perfect outdoor escape awaits.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img src="{{ asset('assets/frontend/img/blog/5.jpg') }}"
                                        alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">Walking Track(Paver Block)</a>
                                </h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Enjoy a scenic stroll on our paver block walking track. Stay active, breathe
                                        fresh air, and savor the beauty of our community.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img src="{{ asset('assets/frontend/img/blog/6.jpg') }}"
                                        alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">Children Play Area</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Discover a safe and vibrant children's play area, where laughter and fun are just
                                        steps away from your new home.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img src="{{ asset('assets/frontend/img/blog/7.jpg') }}"
                                        alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">EB Facility</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Elevate your living with our state-of-the-art EB Facility, offering uninterrupted
                                        power supply for your convenience and peace of mind.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img src="{{ asset('assets/frontend/img/blog/8.jpg') }}"
                                        alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">Good Ground Water</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Discover abundant, crystal-clear groundwater for a sustainable oasis at our
                                        property. Your future home thrives on nature's purest resource.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img src="{{ asset('assets/frontend/img/blog/9.jpg') }}"
                                        alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">Ready to Construct</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Experience modern living with our prime amenities: clubhouse, pool, gym, and<br>
                                        lush green spaces. Your dream home awaits.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset('assets/frontend/img/blog/10.jpg') }}" alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">24 x 7 Bus Service</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Experience modern living with our prime amenities: clubhouse, pool, gym, and<br>
                                        lush green spaces. Your dream home awaits.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset('assets/frontend/img/blog/11.jpg') }}" alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">CCTV</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Experience modern living with our prime amenities: clubhouse, pool, gym, and<br>
                                        lush green spaces. Your dream home awaits.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset('assets/frontend/img/blog/12.jpg') }}" alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">Compound Wall</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Experience modern living with our prime amenities: clubhouse, pool, gym, and<br>
                                        lush green spaces. Your dream home awaits.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset('assets/frontend/img/blog/13.jpg') }}" alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">Natural Environment</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Discover homes nestled in serene, natural settings. Embrace the beauty of nature
                                        with our real estate properties. Your dream home, surrounded by tranquility.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset('assets/frontend/img/blog/14.jpg') }}" alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">Over Head Tank(60,000L)</a>
                                </h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Sixty Thousand Litres(60000L) Over head tank for Seamless Water Supply for Your
                                        Dream Home.Superior quality, ample capacity.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset('assets/frontend/img/blog/15.jpg') }}" alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <h3 class="ltn__blog-title"><a href="javascript:void(0)">Concrete Drainage</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <p>Enhance Property Value with Durable Concrete Drainage Solutions. Prevent Flooding
                                        and Erosion. Invest in Quality Drainage Today!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BLOG AREA END -->

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
