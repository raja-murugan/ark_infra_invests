<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                    src="{{ asset('assets/backend/images/logo/logo.png') }}" alt="" style="height: 50px;"><img
                    class="img-fluid for-dark" src="{{ asset('assets/backend/images/logo/logo_dark.png') }}"
                    alt="" style="height: 50px;"></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                    src="{{ asset('assets/backend/images/logo/logo-icon.png') }}" alt="" style="height: 50px;"></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                src="{{ asset('assets/backend/images/logo/logo-icon.png') }}" alt="" style="height: 50px;"></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    @if (Auth::user()->role == 'Super-Admin')
                        <li class="sidebar-main-title">
                            <div>
                                <h6 class="lan-1">General</h6>
                            </div>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('home') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/backend/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg>
                                <svg class="fill-icon">
                                    <use href="{{ asset('assets/backend/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    @endif

                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="">Ark Infra Invest</h6>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        {{-- <a class="sidebar-link sidebar-title link-nav" href="{{ route('home') }}">
                            <span>{{ $plan }}</span>
                            <br>
                            <h6 style="margin-top: 10px; margin-bottom: 10px;">Plan Benefits</h6>
                            @if ($plan == 'jackpot')
                                <span>Gold Coin - 2 Grams</span><br>
                                <span>Silk Saree</span><br>
                                <span>Dress Coupon</span><br>
                                <span>Diwali Sweets</span><br>
                                <span>Crackers</span><br>
                                <span>Food Coupon</span><br>
                                <span>Donate Kit</span><br>
                            @else
                                <span>Gold Coin - 1.5 Grams</span><br>
                                <span>Silk Saree</span><br>
                                <span>Diwali Sweets</span><br>
                                <span>Crackers</span><br>
                            @endif
                        </a> --}}
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
