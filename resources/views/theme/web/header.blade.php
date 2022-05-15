<header id="header" class="full-header header-size-md">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row justify-content-lg-between">

                <!-- Logo
                ============================================= -->
                <div id="logo" class="me-lg-4">
                    <a href="{{route('home')}}" class="standard-logo"><img src="{{asset('assets/shop/images/logo.svg')}}" alt="Canvas Logo"></a>
                    <a href="{{route('home')}}" class="retina-logo"><img src="{{asset('assets/shop/images/logo.svg')}}" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <div class="header-misc">

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-account">
                        <a href="{{route('signin')}}" >Login</a>
                        <a href="{{route('signup')}}" >Register</a>
                    </div><!-- #top-search end -->
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu with-arrows me-lg-auto">

                    <ul class="menu-container">
                        <li class="menu-item"><a class="menu-link {{ request()->is('home') ? 'active' : '' }}" href="{{route('home')}}" href="#"><div>Home</div></a></li>
                        <li class="menu-item"><a class="menu-link {{ request()->is('hotel') ? 'active' : '' }}" href="{{route('hotel')}}" href="#"><div>Hotel</div></a></li>
                        <li class="menu-item"><a class="menu-link {{ request()->is('pesawat') ? 'active' : '' }}" href="{{route('pesawat')}}" href="#"><div>Pesawat</div></a></li>
                        <li class="menu-item"><a class="menu-link {{ request()->is('tiket') ? 'active' : '' }}" href="{{route('tiket')}}" href="#"><div>Tiket</div></a></li>
                    </ul>

                </nav><!-- #primary-menu end -->

                <form class="top-search-form" action="search.html" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>