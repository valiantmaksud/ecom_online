
<div class="widget-box no-border visible">
    <div class="widget-body">
        <div class="widget-main">
            <h4 class="header bigger text-center">
                <i class="ace-icon fa fa-key"></i>
                Reset Your Password
            </h4>

            <div class="space-6"></div>


            <form action="{{ route('password-reset.update-password') }}" method="post">
                @csrf


                <input type="hidden" name="email" value="{{ request('email') }}">
                <input type="hidden" name="token" value="{{ request('token') }}">


                <fieldset>


                    <!-- NEW PASSWORD -->
                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input type="password" class="form-control auth-input" placeholder="Password" name="password"/>
                            <i class="ace-icon fa fa-lock"></i>

                            @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </span>
                    </label>




                    <!-- CONFIRM PASSWORD -->
                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input type="password" class="form-control auth-input" placeholder="Repeat password" name="password_confirmation"/>
                            <i class="ace-icon fa fa-retweet"></i>

                            @error('password_confirmation')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </span>
                    </label>

                    <div class="space-10"></div>







                    <!-- ACTION -->
                    <div class="clearfix">
                        <button type="reset" class="width-30 pull-left btn btn-sm auth-reset-btn">
                            <i class="ace-icon fa fa-refresh"></i>
                            <span class="bigger-110">Reset</span>
                        </button>

                        <button type="submit" class="width-65 pull-right btn btn-sm auth-btn">
                            <span class="bigger-110">Submit</span>

                            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                        </button>
                    </div>
                </fieldset>
            </form>

            <div class="space-10"></div>
        </div>
    </div>
</div>
