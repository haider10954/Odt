<header
    class="br_header vertical-fullscreen-header header-default header-transparent header-bar position-from--top light-logo--version haeder-fixed-width haeder-fixed-150 headroom--sticky headroom headroom--top headroom--bottom header-mega-menu">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="header__wrapper">

                    <!-- Header Left -->

                    <div class="header-left">

                        <div class="d-flex align-items-center">



                            <p class="mb-0 mr-2">odt.</p>



                            <hr class="section-title-border mr-1">



                            <small>2022</small>



                        </div>

                    </div>

                    <!-- Mainmenu Wrap -->

                    <!-- Header Right -->

                    <div class="header-right">

                        <small>{{ __('translation.Menu') }}</small>



                        <!-- Start Hamberger -->

                        <div class="manu-hamber hamberger-trigger light-version d-none d-xl-block">

                            <div>

                                <i></i>

                            </div>

                        </div>

                        <!-- End Hamberger -->



                        <!-- Start Hamberger -->

                        <div class="manu-hamber popup-mobile-click light-version d-block d-xl-none">

                            <div>

                                <i></i>

                            </div>

                        </div>

                        <!-- End Hamberger -->



                    </div>

                </div>

            </div>

        </div>

    </div>

</header>

<div class="popup-mobile-manu popup-mobile-visiable">

    <div class="inner">

        <div class="mobileheader">

            <div class="logo">

                <a href="javascript:void(0)">

                    <h1>odt</h1>

                </a>

            </div>

            <a class="mobile-close" href="#"></a>

        </div>

        <div class="menu-content">

            <ul class="menulist object-custom-menu">

                <li>

                    <a href="{{ route('web_index') }}"><span>odt</span></a>

                </li>

                <li>

                    <a href="{{ route('web_tickets') }}"><span>{{ __('translation.Ticketing') }}</span></a>

                </li>

                <li>

                    <a href="{{ route('web_library') }}"><span>{{ __('translation.Library') }}</span></a>

                </li>

                <li>

                    <a href="{{ route('web_reservations') }}"><span>{{ __('translation.My Page') }}</span></a>

                </li>

                <li>

                    <a href="{{ route('web_login') }}"><span>{{ __('translation.Login') }}/{{ __('translation.Signup') }}</span></a>
                </li>

            </ul>

        </div>

    </div>

</div>

<div class="open-hamberger-wrapper d-none d-lg-block">

    <div class="page-close light-version"></div>



    <div class="header-default light-logo--version poss_relative">

        <div class="mainmenu-wrapper">

            <nav class="page_nav">

                <ul class="mainmenu">

                    <li class="lavel-1"><a href="{{ route('web_index') }}"><span>odt</span></a></li>

                    <li class="lavel-1"><a href="{{ route('web_tickets') }}"><span>{{ __('translation.Ticketing') }}</span></a></li>

                    <li class="lavel-1"><a href="{{ route('web_library') }}"><span>{{ __('translation.Library') }}</span></a></li>

                    <li class="lavel-1"><a href="{{ route('web_reservations') }}"><span>{{ __('translation.My Page') }}</span></a></li>

                    @if (auth()->check())
                        <li class="lavel-1"><a href="{{ route('web_auth_logout') }}"><span>{{ __('translation.Logout') }}</span></a></li>
                    @else
                        <li class="lavel-1"><a href="{{ route('web_login') }}"><span>{{ __('translation.Login') }}/{{ __('translation.Signup') }}</span></a></li>
                    @endif

                </ul>

            </nav>

        </div>

    </div>

</div>
