<div class="billing_address">
    <p> <i class="far fa-credit-card"></i> Billing Address</p>
    {{-- <div class="other-country-checkbox">
        <input type="checkbox">
        <label for="checkbox">I am from outside of Bangladesh</label>
    </div> --}}
    <div class="accordion_form">
        {{-- <form> --}}
            <div class="row mb-3">
                <div class="col-lg-6">
                    <div class="form_portion">
                        <label for="fname">First Name</label> <br>
                        <input type="text" name="billing_first_name" value="{{ explode(' ', auth()->user()->name)[0] }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form_portion">
                        <label for="lname">Last Name</label> <br>
                        <input type="text" name="billing_last_name"  value="{{ explode(' ', auth()->user()->name)[1] ?? '' }}">
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12">
                    <label for="address">Email</label> <br>
                    <input class="address_portion" type="email" name="billing_email" value="{{ auth()->user()->email }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12">
                    <label for="number">Phone Number</label> <br>
                    <input class="address_portion" type="text" name="billing_phone" placeholder="+880 " value="{{ auth()->user()->mobile }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12">
                    <label for="address">Address</label> <br>
                    <input class="address_portion" type="text">
                    <textarea class="address_portion" name="billing_address" cols="2" rows="2"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12">
                    <label class="address_portion" for="city">City</label> <br>
                    <select class="address_portion" id="billing_city_id">
                        @foreach (districts() as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        {{-- </form> --}}
    </div>
</div>