<div id="login-box" class="login-box visible widget-box no-border">
    <div class="widget-body">
        <div class="widget-main">

            <h4 class="header bigger text-center" style="color: #efefef">
                <i class="ace-icon fa fa-sign-in green"></i>
                Login Information
            </h4>


            <form action=""  method="post">



                @csrf

                <fieldset>


                    <!-- ALERT MESSAGE -->
                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">

                            @if (session()->get('massage'))

                                <div class="alert alert-{{ session()->get('type') }}">
                                    <button type="button" class="close"
                                        data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>

                                    <strong>
                                        @if (session()->get('type') == 'danger')
                                            <i class="ace-icon fa fa-times"></i>
                                            Error !
                                        @else
                                            <i class="ace-icon fa fa-check-circle-o"></i>
                                            Success !
                                        @endif
                                    </strong>

                                    {{ session()->get('massage') }}
                                    <br />
                                </div>
                            @endif
                        </span>
                    </label>





                    <!-- USERNAME -->
                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">

                            <input id="email" type="text" class="form-control input-email auth-input @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="off" placeholder="Username" autofocus required>
                            <i class="ace-icon fa fa-user"></i>

                            @include('partials._error_message', ['error_name' => 'username'])
                        </span>
                    </label>


                    <div class="space-10"></div>


                    <!-- PASSWORD -->
                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input id="password" type="password" class="form-control auth-input @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                            <i class="ace-icon fa fa-lock"></i>

                            @include('partials._error_message', ['error_name' => 'password'])
                        </span>
                    </label>

                    <div class="space-10"></div>




                    <!-- ACTION -->
                    <div class="clearfix">

                        <!-- REMEMBER ME -->
                        {{-- <label class="inline">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"> Remember Me</span>
                        </label> --}}


                        <!-- LOGIN BUTTON -->
                        <button type="submit" class="width-35 pull-right btn btn-sm auth-btn">
                            <i class="ace-icon fa fa-key"></i>
                            <span class="bigger-110">Login</span>
                        </button>
                    </div>

                    <div class="space-20"></div>
                </fieldset>
            </form>

        </div>


        {{-- <div class="toolbar clearfix">
            <div style="width: 100%">
                <a href="#" data-target="#forgot-box" class="forgot-password-link">
                    <i class="ace-icon fa fa-arrow-left"></i>
                    &nbsp;I forgot my password
                </a>
            </div>
        </div> --}}



    </div>
</div>
