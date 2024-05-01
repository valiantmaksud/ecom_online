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
                                <div class="col-lg-12">
                                    <div class="form_portion">
                                        <label for="fname">Name</label> <br>
                                        <input type="text" class="form-control" id="first_name" name="first_name"
                                            value="{{ auth()->user()->name }}">
                                    </div>
                                </div>

                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <label for="address">Address</label> <br>
                                    <textarea class="address_portion form-control" id="address" name="address" id="" cols="2"
                                        rows="2">{{ old('address', optional(auth()->user()->delivery_address)->address) }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <label class="address_portion" for="district">Division</label>
                                    <br>
                                    @php
                                        $divisions = [
                                            [
                                                'id' => '1',
                                                'name' => 'Chattagram',
                                                'bn_name' => 'চট্টগ্রাম',
                                                'url' => 'www.chittagongdiv.gov.bd',
                                            ],
                                            [
                                                'id' => '2',
                                                'name' => 'Rajshahi',
                                                'bn_name' => 'রাজশাহী',
                                                'url' => 'www.rajshahidiv.gov.bd',
                                            ],
                                            [
                                                'id' => '3',
                                                'name' => 'Khulna',
                                                'bn_name' => 'খুলনা',
                                                'url' => 'www.khulnadiv.gov.bd',
                                            ],
                                            [
                                                'id' => '4',
                                                'name' => 'Barisal',
                                                'bn_name' => 'বরিশাল',
                                                'url' => 'www.barisaldiv.gov.bd',
                                            ],
                                            [
                                                'id' => '5',
                                                'name' => 'Sylhet',
                                                'bn_name' => 'সিলেট',
                                                'url' => 'www.sylhetdiv.gov.bd',
                                            ],
                                            [
                                                'id' => '6',
                                                'name' => 'Dhaka',
                                                'bn_name' => 'ঢাকা',
                                                'url' => 'www.dhakadiv.gov.bd',
                                            ],
                                            [
                                                'id' => '7',
                                                'name' => 'Rangpur',
                                                'bn_name' => 'রংপুর',
                                                'url' => 'www.rangpurdiv.gov.bd',
                                            ],
                                            [
                                                'id' => '8',
                                                'name' => 'Mymensingh',
                                                'bn_name' => 'ময়মনসিংহ',
                                                'url' => 'www.mymensinghdiv.gov.bd',
                                            ],
                                        ];
                                    @endphp
                                    <select name="division" class="form-control" id="division">
                                        @foreach ($divisions as $item)
                                            <option value="{{ $item['name'] }}" {{ auth()->user()->delivery_address?->division == $item['name'] ? 'selected' : '' }}>{{ $item['name'] }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <label class="address_portion" for="district">District</label>
                                    <br>
                                    
                                    <input type="text" class="form-control" id="district" name="district"
                                        value="{{ old('district', auth()->user()->delivery_address?->district) }}">

                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <label class="address_portion" for="thana">Thana</label>
                                    <br>
                                    <input type="text" class="form-control" id="thana" name="thana"
                                        value="{{ old('thana', auth()->user()->delivery_address?->thana) }}">

                                </div>
                            </div>



                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="number">Phone Number</label> <br>
                                    <input class="address_portion form-control" type="text" placeholder="+880"
                                        id="phone" name="phone"
                                        value="{{ old('phone', optional(auth()->user()->delivery_address)->phone) }}">
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
