<div id="login-with-phone">
    <p>Please Enter Your Phone Number</p>
    <div class="input_group mb-3">
        <div class="input_img">
            {{-- <img src="{{ asset('assets/frontend') }}/image/section_img/country.png" alt="image"> --}}
            +88
        </div>
        <input type="text" placeholder="Enter Mobile Number" name="phone_number" value="{{ old('phone_number') }}" required>
    </div>

    <div class="input_group">
        <div class="input_img">
            <span class="input-group-text rounded-0" style="height: 100%;border:none"><i class="fas fa-lock"></i></span>
        </div>
        <input type="password" placeholder="Type Password" class="rounded-0" name="mobile_password" id="password" placeholder="Password" autocomplete="off">
    </div>
</div>