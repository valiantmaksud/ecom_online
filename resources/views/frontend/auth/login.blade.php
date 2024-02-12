<x-layout>
    <x-slot name="content">

        <!-- login section start here -->
        <div class="login_section">
            <div class="container">
                <div class="login_inner">
                    <form action="{{ route('frontend.auth.login') }}" method="POST">
                        @csrf
                       <x-frontend.auth.login-with-phone :phone_number="old('phone_number')" :errors="$errors"/>
                       {{-- <x-frontend.auth.login-with-email :phone_number="old('phone_number')" :errors="$errors"/> --}}

                        <div class="login_btn">
                            <button type="submit" name="submit" value="login" class="login_btn btn_log">LOGIN</button>
                            <button type="submit" name="submit" value="register" class="login_btn btn_log" style="background-color: #ca27a2">Register</button>
                            {{-- <p class="or-divider">Or</p> --}}
                            {{-- <a class="btn_log face_log" href="#"> <i class="fab fa-facebook-f"></i> LOGIN WITH
                                FACEBOOK
                            </a>
                            <a class="btn_log g_log" href="#"> <i class="fab fa-google"></i> LOGIN WITH GOOGLE</a>
                            <a class="btn_log mail_log login-with-phone-or-email" href="javascript:void(0)">
                                <i class="fas fa-envelope"></i> LOGIN WITH E-MAIL
                            </a> --}}
                            {{-- <div class="reg">
                                <p class="new-member">New Member? <a href="{{ route('frontend.auth.register') }}" class="register-here">Registe here</a> here</p>
                            </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- login section end here -->

    </x-slot>

    <x-slot name="scripts">
        
        <script>
            $(document).ready(function () {
                $('.login-with-phone-or-email').click(function () {
                    $('#login-with-phone').toggle();
                    $('#login-with-email').toggle();
                    if ($(this).text() == 'LOGIN WITH PHONE NUMBER') {
                        $(this).text('LOGIN WITH E-MAIL');
                    } else {
                        $(this).text('LOGIN WITH PHONE NUMBER');
                    }
                });
            });
        </script>
    </x-slot>
</x-layout>
