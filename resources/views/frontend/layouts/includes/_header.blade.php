    <!-- header section start -->
    <header class="header_section">
        <div class="header_section_body">
            <div class="header_inner">
                <div class="head_left">
                    <a href="{{ route('frontend.index') }}">
                        @if (file_exists(website_setting('site_logo')))
                            <img src="{{ asset(website_setting('site_logo')) }}" alt="{{ website_setting('site_title') }}" width="314" height="58">
                        @else
                            <h3>{{ website_setting('site_title') }}</h3>
                        @endif
                    </a>
                </div>
                <div class="head_main">
                    <ul>
                        @foreach (category() as $item)
                            <li class="mega-menu-item" data-key="{{ $item->id }}">
                                <a href="{{ route('frontend.search', ['category' => $item->slug]) }}">{{ $item->name }}
                                    <i class="far fa-angle-down"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="head_right">
                    <a href="javascript:void(0)" id="search_btn">
                        <i class="fal fa-search"></i>
                    </a>

                    <div class="user_profile">
                        <a href="javascript:void(0)"><i class="fal fa-user"></i></a>
                        <div class="user_profile_body">
                            <ul>
                                <li><a href="javascript:void(0)"><i class="fal fa-truck-moving"></i>Track Orders</a>
                                </li>
                                {{-- <li><a href="javascript:void(0)"><i class="fal fa-history"></i>Perchase History</a></li> --}}
                                <li>
                                    <a href="{{ route('frontend.profile.account') }}">
                                        <i class="fal fa-user"></i>My Account
                                    </a>
                                </li>
                            </ul>
                            @auth
                                <ul>
                                    <li>
                                        <a href="{{ route('frontend.auth.logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fal fa-sign-out-alt"></i>Logout
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
                                                <i class="fal fa-sign-in-alt"></i>Login
                                                </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('frontend.auth.register') }}">
                                                <i class="fal fa-user-plus"></i>Register
                                            </a>
                                        </li>
                                    </ul>
                                @endguest

                        </div>
                    </div>



                    <a href="#"><i class="fal fa-heart"></i> <span>0</span> </a>
                    {{-- <a href="javascript:void(0)" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                            class="fal fa-shopping-bag"></i> <span>1</span> </a> --}}

                </div>


                <div class="search-box" id="search_box" style="display: none">
                    <form class="search-box-form d-flex" action="" method="">
                        @csrf

                        <div class="search-icon">
                            <button type="submit" class="search-button">
                                <i class="fal fa-search"></i>
                            </button>
                        </div>
                        <input type="text" name="name" id="search-btn" placeholder="Enter Search">
                        <div class="close-icon" id="close_btn">
                            <i class="fal fa-times"></i>
                        </div>

                    </form>
                </div>

                <div class="menu_icon">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
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
    </header>
    <!-- header section start -->
