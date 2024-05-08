<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: {{ website_setting('header_bg_color') }} !important">
    <div class="container-fluid">


        <!------- MOBILE NAVBAR TOGGLE BUTTON ------->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <i class="fas fa-bars"></i>
        </button>


        <!------------------ LOGO ------------------>
        <a href="{{ route('frontend.index') }}" class="site-logo">
            <img src="{{ asset('assets/share') }}/logo/logo.png" alt="{{ website_setting('site_title') }}"
                width="314" height="58">
        </a>

        <!------------- NAVBAR ALL ITEMS ------------>
        <div class="collapse navbar-collapse navbar-items">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav_button active"
                        href="/" aria-current="page">
                        Home
                    </a>
                </li>
                @foreach (category() as $item)
                    @if (count($item->childCategories ?? []) > 0)
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                {{ $item->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                @foreach ($item->childCategories as $child)
                                    <a class="nav-link nav_button active" style="color: #ed5b5b !important;"
                                        href="{{ route('frontend.search', ['category' => $child->slug]) }}"
                                        aria-current="page">
                                        {{ $child->name }}
                                    </a>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link nav_button active"
                                href="{{ route('frontend.search', ['category' => $item->slug]) }}" aria-current="page">
                                {{ $item->name }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>

        <!-------- NAVBAR RIGHT SIDE BUTTONS -------->
        <div class="navbar_buttons">

            <!-- search icon -->
            <a class="search_btn" href="javascript:void(0)" id="search_btn">
                <i class="fal fa-search"></i>
            </a>

            <!-- user profile icon -->
            <div class="user_profile">
                <a href="javascript:void(0)"><i class="fal fa-user"></i></a>
                <div class="user_profile_body">
                    <ul>
                        <li>
                            <a href="javascript:void(0)">
                                <div class="row ps-3 align-items-center text-black">
                                    <div class="col-lg-2 p-0">
                                        <i class="fal fa-truck-moving"></i>
                                    </div>
                                    <div class="col-lg-10 ps-2">
                                        Track Orders
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.profile.account') }}">
                                <div class="row ps-3 align-items-center text-black">
                                    <div class="col-lg-2 p-0">
                                        <i class="fal fa-user"></i>
                                    </div>
                                    <div class="col-lg-10 ps-2">
                                        My Account
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    @auth
                        <ul>
                            <li>
                                <a href="{{ route('frontend.auth.logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <div class="row ps-3 align-items-center text-black">
                                        <div class="col-lg-2 p-0">
                                            <i class="fal fa-sign-out-alt"></i>
                                        </div>
                                        <div class="col-lg-10 ps-2">
                                            Logout
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('frontend.auth.logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        @endauth
                        @guest
                            <ul>
                                <li>
                                    <a href="{{ route('frontend.auth.login') }}">
                                        <div class="row ps-3 align-items-center text-black">
                                            <div class="col-lg-2 p-0">
                                                <i class="fal fa-sign-in-alt"></i>
                                            </div>
                                            <div class="col-lg-10 ps-2">
                                                Login
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.auth.register') }}">
                                        <div class="row ps-3 align-items-center text-black">
                                            <div class="col-lg-2 p-0">
                                                <i class="fal fa-user-plus"></i>
                                            </div>
                                            <div class="col-lg-10 ps-2">
                                                Register
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        @endguest

                </div>
            </div>

            <!-- wish list icon -->
            <a href="javascript:void(0)" class="wishlist-icon">
                <i class="fal fa-heart"></i>
                <span class="wishlist-count">0</span>
            </a>

            <!-- <a href="javascript:void(0)" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="fal fa-shopping-bag"></i>
                <span>1</span>
            </a> -->

        </div>

        <!--------------- FORM SEARCH BOX --------------->
        <div class="search-box" id="search_box" style="display: none">
            <form class="search-box-form d-flex" action="{{ route('frontend.search') }}" method="GET">
                @csrf

                <div class="search-icon">
                    <button type="submit" class="search-button">
                        <i class="fal fa-search"></i>
                    </button>
                </div>
                <input type="search" name="name" id="search-btn" value="{{ request('name') }}" placeholder="Enter Search" aria-label="Search">
                <div class="close-icon" id="close_btn">
                    <i class="fal fa-times"></i>
                </div>

            </form>
        </div>

    </div>

    <!--------------- FLOATING CART BOX BUTTON --------------->
    <div class="cart-button">
        <button class="header-widget head-cart" title="Cartlist" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <div class="main-header d-flex">
                <div class="icon">
                    <i class="fal fa-shopping-bag"></i><sup class="cart-total-quantity">0</sup>
                </div>
                <div class="text">
                    <span>Total price<small id="cartGrandTotal">0.00</small></span>
                </div>
            </div>

        </button>
    </div>


</nav>



<!--------------- MOBILE CATEGORY MENU SIDEBAR --------------->
<div class="offcanvas offcanvas-start category-sidebar" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">

    <div class="offcanvas-header">
        <div class="menu-title">
            Menu
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">

        <ul class="cd-accordion cd-accordion--animated margin-top-lg margin-bottom-lg" id="cd-accordion--animated">
            @foreach (category() as $item)
                <li class="cd-accordion__item cd-accordion__item--has-children">
                    <!-- parent item -->

                    <input class="cd-accordion__input" type="checkbox" id="group1-{{ $item->id }}">
                    <label class="cd-accordion__label cd-accordion__label--icon-folder"
                        for="group1-{{ $item->id }}">
                        <span>
                            <a
                                href="{{ route('frontend.search', ['category' => $item->slug]) }}">{{ $item->name }}</a>
                        </span>
                    </label>

                    <!-- IF DROPDOWN NEEDED THEN USE THIS -->
                    {{-- <ul class="cd-accordion__sub cd-accordion__sub--l1" id="cd-accordion__sub">
                        <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                            <input class="cd-accordion__input" type="checkbox" id="sub-group1-11">
                            <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group1-11" >
                                <span>
                                    <a href="#">child category 1 name</a>
                                </span>
                            </label>

                            <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                                <li class="cd-accordion__item only-text-item inner-only-text-item">
                                    <a class="clean-text" href="#">child child category 1 name</a>
                                </li>
                            </ul>
                        </li>
                    </ul> --}}

                </li>
            @endforeach
        </ul>

    </div>


</div>
