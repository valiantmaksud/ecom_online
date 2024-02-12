<script>
    var firebaseConfig = {
        apiKey: "AIzaSyA-6pgN74JaMVkYDiPXddJf1-5WdnNdXHY",
        authDomain: "nulcodexyz.firebaseapp.com",
        projectId: "nulcodexyz",
        storageBucket: "nulcodexyz.appspot.com",
        messagingSenderId: "454216215257",
        appId: "1:454216215257:web:59a1ac9469a4b0b4052cc8",
        measurementId: "G-88N6G4LLQV"
    };
    firebase.initializeApp(firebaseConfig);
</script>





<script type="text/javascript">
    const mobileNumber = $('input[name="phone_number"]');
    const register = $('#register');
    const sendOtpBtn = $('#send-btn');
    const verificationCode = $('#verification_code');


    $(document).on('keyup', 'input[name=phone_number]', checkInputNumber);
    $(document).on('click', '#send-btn', SendPin);
    $(document).on('keyup', '#verification_code', verify);




    // reCAPTCHA widget    
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
        'size': 'invisible',
        'callback': (response) => {
            // reCAPTCHA solved, allow signInWithPhoneNumber.
            onSignInSubmit();
        }
    });




    function checkInputNumber() {

        
        var mobile = mobileNumber.val();

        if (!mobile.match("^01")) {
            
            mobileNumber.addClass('invalid');
            // register.prop("disabled", false);
        } else {
            mobileNumber.removeClass('invalid');
            // register.prop("disabled", true);
        }
        if (mobile.length != 11) {
            // register.prop("disabled", true);
        }  
            
    }



    function SendPin() {

        if (!mobileNumber.val().match("^01[0-9]{9}$")) {
            showToastr('Please enter a valid mobile number');
            return;
        }

        var number = '+88' + mobileNumber.val();

        firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
                window.confirmationResult = confirmationResult;
                coderesult = confirmationResult;

                showToastr('Verification Code Send.', 'success');

                mobileNumber.prop("readonly", true);
                verificationCode.prop("readonly", false);

                sendOtpBtn.text('Re-Send');
                $('#verify-area').show();

            }).catch(function(error) {

            });

    }

    function verify() {

        var code = verificationCode.val();
        if (code.length < 6) {
            return;
        }
        confirmationResult.confirm(code).then(function(result) {
            var user = result.user;

            showToastr('Verification Successful.', 'success');
            register.prop("disabled", false);
            verificationCode.prop("readonly", true);
            sendOtpBtn.hide();

        }).catch(function(error) {
            console.log(error);
        });

    }

</script>
