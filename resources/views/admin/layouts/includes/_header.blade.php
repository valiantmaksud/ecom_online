
<header id="page-topbar">

    <!------------ NAVBAR HEADER ---->
    <div class="navbar-header">

        <div class="d-flex">

            <!---------- LOGO ----------->
            <div class="navbar-brand-box">


                <!-- DARK LOGO -->
                <a href="{{ route('admin.home') }}" class="logo logo-dark">

                    {{ env('APP_NAME') }}
                    <!-- SMALL LOGO -->
                    <span class="logo-sm">
                        <img src="{{ asset('assets/admin') }}/images/dummy-logo.png" alt="" height="22">
                    </span>

                    <!-- LARGE LOGO -->
                    <span class="logo-lg">
                        <img src="{{ asset('assets/admin') }}/images/dummy-logo.png" alt="" height="22">
                    </span>


                </a> <!-- /DARK LOGO -->



                <!-- LIGHT -->
                <a href="{{ route('admin.home') }}" class="logo logo-light">

                    {{ env('APP_NAME') }}
                    <!-- LARGE LOGO -->
                    <span class="logo-lg">
                        <img src="{{ asset('assets/admin') }}/images/dummy-logo.png" alt="" height="22">
                    </span>

                    <!-- SMALL LOGO -->
                    <span class="logo-sm">
                        <img src="{{ asset('assets/admin') }}/images/dummy-logo-light.png" alt="" height="22">
                    </span>
                </a> <!-- /LIGHT LOGO -->


            </div> 
            <!-- /LOGO ----------->

            <!----------- VERTICLE MENU BAR BUTTON ------------>
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

        </div> 
        <!---- /D-FLEX ---->


        <div class="d-flex">

            <!--------------- SEARCH DROPDOWN ---------------->
            <div class="dropdown d-inline-block">


                <!------------------- BUTTON -------------------->
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-feather="search"></i>
                </button>



                <!-------------- DROPDOWN MENU --------------->
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <form class="p-2">
                        <div class="search-box">
                            <div class="position-relative">
                                <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                <i class="mdi mdi-magnify search-icon"></i>
                            </div>
                        </div>
                    </form>
                </div>
                <!------ /DROPDOWN MENU --------------->



            </div> 
            <!------- /SEARCH DROPDOWN ---------------->





            <!--------------- Notification Dropdown ---------------->
            <div class="dropdown d-inline-block">

                <!------------------- BUTTON -------------------->
                <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-feather="bell"></i>
                    <span class=" translate-middle badge border border-light rounded-circle bg-danger p-1">
                       
                    </span>
                </button>

                <!-------------- DROPDOWN MENU --------------->
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">



                    <!------------------ HEADER TITLE ------------>
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15"> Notifications </h5>
                            </div>
                            {{-- <div class="col-auto">
                                <a href="#!" class="small"> Mark all as read</a>
                            </div> --}}
                        </div>
                    </div> <!---------- /HEADER TITLE ------------>




                    <!--------------- SIMPLE BAR ---------->
                    <div data-simplebar style="max-height: 250px;">


                        <h6 class="dropdown-header bg-light">Orders</h6>

                        <!--------------- NOTIFICATION ITEM ----------------->
                        <!--------- /NOTIFICATION ITEM -------->

                    </div> <!------- /SIMPLE BAR ---------->




                    <!--------------- VIEW MORE ----------------->
                    <div class="p-2 border-top d-grid">
                        {{-- <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="{{ route('admin.orders.index') }}">
                            <i class="uil-arrow-circle-right me-1"></i>
                            <span>View More..</span>
                        </a> --}}
                    </div> <!------- /VIEW MORE ---------->



                </div><!------- /DROPDOWN MENU --------------->

            </div> 
            <!------- /Notification Dropdown ---------------->




            <!-------------------- USER PROFILE DROPDOWN ------------>
            <div class="dropdown d-inline-block">


                <!------------------- BUTTON -------------------->
                <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/admin') }}/images/users/avatar-1.jpg" alt="Header Avatar">

                    <span class="ms-2 d-none d-sm-block user-item-desc">
                        <span class="user-name">{{ auth()->user()->name ?? 'Admin' }}</span>
                        <span class="user-sub-title">Administrator</span>
                    </span>

                </button> <!----------- /BUTTON ------------>




                <!-------------- DROPDOWN MENU --------------->
                <div class="dropdown-menu dropdown-menu-end pt-0">

                    <!--------------- NAME ----------------->
                    <div class="p-3 bg-primary border-bottom">
                        <h6 class="mb-0 text-white">{{ auth()->user()->name ?? 'Admin' }}</h6>
                        <p class="mb-0 font-size-11 text-white-50 fw-semibold">{{ auth()->user()->email ?? '' }}</p>
                    </div>


                    <!--------------- SETTING ----------------->
                    <a class="dropdown-item d-flex align-items-center" href="user-settings.html">
                        <i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i>
                        <span class="align-middle">Settings</span>
                    </a>

                    <!--------------- LOGOUT ----------------->
                    <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-head').submit();">
                        <i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i>
                        <span class="align-middle">Logout</span>
                    </a>
                    <form id="logout-form-head" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    

                </div> 
                <!-------------- /DROPDOWN MENU --------------->



            </div> 
            <!------------ /USER PROFILE DROPDOWN ------------>





        </div> <!---- /D-FLEX ---->

    </div> <!---- /NAVBAR HEADER ---->


</header>

