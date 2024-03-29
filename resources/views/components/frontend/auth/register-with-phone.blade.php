<div id="register-with-phone">
    <p>Please Enter Your Phone Number</p>
    <div class="input_group mb-3">
        <div class="input_img">
            <img src="{{ asset('assets/frontend') }}/image/section_img/country.png" alt="image">
            +88
        </div>
        <input type="text" name="phone_number" value="{{ old('phone_number') }}">
        <a href="javascrip:void(0)" class="input-group-text send-otp" id="send-btn">
            Send OTP
          </a>
    </div>
    
    <div class="input_group mb-3" id="verify-area" style="display: none">
        <div class="input_img">
            <span class="input-group-text" style="height: 100%;border:none"><i class="fas fa-check-circle fa-2x"></i></span>
        </div>
        <input type="text" class="rounded-0" name="verification_code"
            value="{{ old('verification_code') }}" id="verification_code" placeholder="Verification Code" autocomplete="off"
            required>
    </div>

    <div class="input_group" id="reg-pass">
        <div class="input_img">
            <span class="input-group-text rounded-0" style="height: 100%;border:none"><i class="fas fa-lock fa-2x"></i></span>
        </div>
        <input type="password" class="rounded-0" name="password"
            value="{{ old('password') }}" id="password" placeholder="Password" autocomplete="off"
            required>
    </div>
</div>
