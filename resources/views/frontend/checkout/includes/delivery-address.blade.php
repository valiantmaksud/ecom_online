<div class="delevery_addresss">
    <p> <i class="fas fa-truck"></i> Delivery Address</p>
    <div class="chose_address">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <p>Select Your Delivery Address</p>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        {{-- <p><i class="fas fa-plus"></i> ADD NEW ADDRESS</p> --}}
                        <div class="accordion_form country_form" style="display: block">
                            {{-- <form> --}}

                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <div class="form_portion">
                                        <label for="fname">First Name</label> <br>
                                        <input type="text" class="form-control" id="first_name" name="first_name"
                                            value="{{ optional(auth()->user()->delivery_address)->first_name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_portion">
                                        <label for="lname">Last Name</label> <br>
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                            value="{{ optional(auth()->user()->delivery_address)->last_name }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <label for="address">Address</label> <br>
                                    <textarea class="address_portion form-control" id="address" name="address" id="" cols="2"
                                        rows="2">{{ optional(auth()->user()->delivery_address)->address }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <label class="address_portion" for="district">District</label>
                                    <br>
                                    {{-- @dd(optional(auth()->user()->delivery_address)->district_id) --}}
                                    <select class="address_portion form-control select2" id="district_id"
                                        name="district_id" data-placeholder="--District--"
                                        data-selected="{{ optional(auth()->user()->delivery_address)->district_id }}">
                                        @foreach (districts() as $item)
                                            <option value="{{ $item->id }}" data-shipping-cost="{{ $item->id == 58 ? 70 : 120 }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <label class="address_portion" for="district">Thana</label>
                                    <br>
                                    <select class="address_portion form-control select2" id="thana_id" name="thana_id"
                                        data-placeholder="--Thana--"
                                        data-selected="{{ optional(auth()->user()->delivery_address)->thana_id }}">
                                        @foreach (thanas() as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="number">Phone Number</label> <br>
                                    <input class="address_portion form-control" type="text" placeholder="+880"
                                        id="phone" name="phone"
                                        value="{{ optional(auth()->user()->delivery_address)->phone }}">
                                </div>
                            </div>

                            {{-- <div class="form_button">
                                    <a href="#!">ADDRESS LIST</a>
                                    <a href="#!">SUBMIT</a>
                                </div> --}}

                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
