
<x-layout>
    <x-slot name="content">

        <!-- register section start here -->
        <div class="register_section login_section">
            <div class="container">
                <div class="login_inner">
                    <form action="{{ route('frontend.auth.register') }}" method="POST">
                        @csrf
                        <x-frontend.auth.register-with-phone :phone_number="old('phone_number')" :errors="$errors"/>
                        <x-frontend.auth.register-with-email :phone_number="old('phone_number')" :errors="$errors"/>
                  
                        <div class="login_btn">
                            <button type="submit" class="login_btn btn_log" id="register">SIGN UP</button>
                            <p>Or</p>
                            <a class="btn_log face_log" href="#"> <i class="fab fa-facebook-f"></i> LOGIN WITH FACEBOOK</a>
                            <a class="btn_log g_log" href="#"> <i class="fab fa-google"></i> LOGIN WITH GOOGLE</a>
                            <a class="btn_log mail_log register-with-phone-or-email" href="javascript:void(0)"> <i class="fas fa-envelope"></i> LOGIN WITH E-MAIL</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="recaptcha-container"></div>
        <!-- register section end here -->

    </x-slot>

    <x-slot name="scripts">
        <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-auth.js"></script>
        @include('frontend.auth._inc.firebase-script')

        <script>
            $(document).ready(function () {
                $('.register-with-phone-or-email').click(function () {
                    $('#register-with-phone').toggle();
                    $('#register-with-email').toggle();
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
