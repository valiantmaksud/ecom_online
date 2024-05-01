<!-- VERTICAL MENU -->
<div class="vertical-menu">


    <!---------- LOGO --->
    <div class="navbar-brand-box">


        <!------- DARK LOGO ----->
        <a href="{{ route('admin.login') }}" class="logo logo-dark">

            <!-- SMALL LOGO -->
            <span class="logo-sm">
                <img src="{{ asset('assets/admin') }}/images/logo-dark.png" alt="" height="60" width="120">
            </span>

            <!-- LARGE LOGO -->
            <span class="logo-lg">
                <img src="{{ asset('assets/admin') }}/images/logo-light.png" alt="" height="60" width="120">
            </span>
        </a>
        <!-- /DARK LOGO ---->

        <!-------- LIGHT LOGO -->
        <a href="{{ route('admin.login') }}" class="logo logo-light">

            <!-- LARGE LOGO -->
            <span class="logo-lg">
                <img src="{{ asset('assets/admin') }}/images/logo-dark.png" alt="" height="22">
            </span>
            <!-- SMALL LOGO -->
            <span class="logo-sm">
                <img src="{{ asset('assets/admin') }}/images/logo-light.png" alt="" height="22">
            </span>
        </a>
        <!-- /LIGHT LOGO -->

    </div>
    <!-- /LOGO --->


    <!------------- TOGGLE MENU BUTTON -->
    <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>
    <!-- /TOGGLE MENU BUTTON -->


    <!---------- SIDEBAR MENU SCROLL -->
    <div data-simplebar class="sidebar-menu-scroll">

        <!---------- SIDEBAR MENU -->
        <div id="sidebar-menu">

            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="{{ route('admin.home') }}">
                        <i class="icon nav-icon fa fa-desktop"></i>
                        <span class="menu-item">Dashboard</span>
                    </a>

                </li>

                <li>
                    <a href="{{ route('admin.orders.index') }}">
                        <i class="icon nav-icon fab fa-product-hunt"></i>
                        <span class="menu-item" data-key="t-multi-level">Orders</span>
                    </a>
    
                </li>

                <!-------------- Product Config Module --------->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon fab fa-product-hunt"></i>
                        <span class="menu-item" data-key="t-multi-level">Products</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('admin.products.index') }}">
                                <span class="menu-item" data-key="t-multi-level">List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.products.create') }}">
                                <span class="menu-item" data-key="t-multi-level">Add New</span>
                            </a>
                        </li>
                        
                    </ul>

                </li>
                <!-------------- Product Module --------->
           
                <!-------------- Product Config Module --------->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon fab fa-product-hunt"></i>
                        <span class="menu-item" data-key="t-multi-level">Product Config</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('admin.categories.index') }}">
                                <span class="menu-item" data-key="t-multi-level">Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.subcategories.index') }}">
                                <span class="menu-item" data-key="t-multi-level">Sub Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.brands.index') }}">
                                <span class="menu-item" data-key="t-multi-level">Brands</span>
                            </a>
                        </li>
                        
                    </ul>

                </li>
                <!-------------- Product Module --------->

             <!-------------- Banner --------->
             <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i class="icon nav-icon fab fa-product-hunt"></i>
                    <span class="menu-item" data-key="t-multi-level">Banners</span>
                </a>

                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="{{ route('admin.banners.index') }}">
                            <span class="menu-item" data-key="t-multi-level">List</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.banners.create') }}">
                            <span class="menu-item" data-key="t-multi-level">Add New</span>
                        </a>
                    </li>
                    
                </ul>

            </li>
            <!-------------- Banner --------->
            <li>
                <a href="{{ route('admin.customers.index') }}">
                    <i class="icon nav-icon fab fa-product-hunt"></i>
                    <span class="menu-item" data-key="t-multi-level">Customers</span>
                </a>

            </li>

            <!-------------- Report --------->
            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i class="icon nav-icon fab fa-product-hunt"></i>
                    <span class="menu-item" data-key="t-multi-level">Reports</span>
                </a>

                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="{{ route('admin.financial-report.index') }}">
                            <span class="menu-item" data-key="t-multi-level">Sell Report</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.financial-report.index') }}">
                            <span class="menu-item" data-key="t-multi-level">Financial Report</span>
                        </a>
                    </li>
                    
                </ul>

            </li>
            <!-------------- Report --------->

                <li>
                    <a href="{{ route('admin.logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="icon nav-icon fas fa-sign-out-alt"></i>
                        <span class="menu-item">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
            <!-- /MENU LIST -->

        </div> <!-- /SIDEBAR MENU -->

    </div> <!-- /SIDEBAR MENU SCROLL -->




</div> <!-- /VERTICAL MENU -->
