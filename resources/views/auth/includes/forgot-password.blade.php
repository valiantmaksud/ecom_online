
<div id="forgot-box" class="forgot-box widget-box no-border">
    <div class="widget-body">
        <div class="widget-main">
            <h4 class="header bigger text-center">
                <i class="ace-icon fa fa-key"></i>
                Retrieve Password
            </h4>

            <div class="space-6"></div>
            <p style="font-size: 15px">
                Enter your email address to receive instructions
            </p>

            <form action="{{ route('password-reset.send-email') }}" method="post">

                @csrf
                <fieldset>

                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input type="email" class="form-control auth-input" placeholder="Email" required name="email"/>
                            <i class="ace-icon fa fa-envelope"></i>
                        </span>
                    </label>


                    <div class="clearfix">
                        <button type="submit" class="width-35 pull-right btn btn-sm auth-btn" style="margin-bottom: 20px; margin-top: 10px;">
                            <i class="ace-icon fa fa-lightbulb-o"></i>
                            <span class="bigger-110">Send Me!</span>
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>

        <div class="toolbar center">
            <a href="#" data-target="#login-box" class="back-to-login-link">
                Back to login
                <i class="ace-icon fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
