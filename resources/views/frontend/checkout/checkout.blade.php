<x-layout>
    <x-slot name="title">Checkout</x-slot>
    <x-slot name="content">

        <!-- checkout section start here -->
        <div class="checkout_section">
            <div class="container">
                <div class="checkout_inner">
                    <form action="{{ route('cart.checkout.store') }}" id="checkout-form" method="POST">
                        @csrf

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="check_left">
                                <div class="check_title">
                                    <h4>QUICK CHECKOUT</h4>
                                    <p>Complete the following fields to place your order.</p>
                                </div>
                                
                                @include('frontend.checkout.includes.delivery-address')

                                @include('frontend.checkout.includes.billing-address')
                                
                                
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="check_right">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="shipping_method">
                                            <div class="shipping-title">
                                                <p><i class="fas fa-truck"></i> Shipping Address</p>
                                            </div>
                                            <div class="shipping_process">
                                                <div class="process">
                                                    <img src="{{ asset('assets/frontend') }}/image/section_img/shippingimg1.jpg"
                                                        alt="image">
                                                    <div class="desc">
                                                        <p>{{ website_setting('site_title') }} Delivery Service (within Dhaka only)</p>
                                                        <span>(BDT 21)</span>
                                                    </div>
                                                </div>
                                                <div class="process">
                                                    <img src="{{ asset('assets/frontend') }}/image/section_img/shippingimg2.png"
                                                        alt="image">
                                                    <div class="desc">
                                                        <p>For Delivery Outside Dhaka</p>
                                                        <span>(BDT 70)</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="payment_method">
                                            <div class="shipping_method">
                                                <div class="shipping-title">
                                                    <p><i class="far fa-credit-card"></i></i> Payment Method </p>
                                                </div>

                                                <div class="payment_process">
                                                    <div class="form-check pay_process">
                                                        <input class="form-check-input" type="radio"
                                                            name="payment_method" id="exampleRadios1" value="cod"
                                                            checked>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            <img src="{{ asset('assets/frontend') }}/image/section_img/cashondelivery.gif"
                                                                alt="image">
                                                            <p>Pay by Cash on Delivery</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                {{-- <div class="payment_process">
                                                    <div class="form-check pay_process">
                                                        <input class="form-check-input" type="radio"
                                                            name="exampleRadios" id="exampleRadios2" value="option2">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            <img src="{{ asset('assets/frontend') }}/image/section_img/visa_card.png"
                                                                alt="image">
                                                            <p>Visa/MasterCard</p>
                                                        </label>
                                                    </div>
                                                </div> --}}
                                                <div class="payment_process">
                                                    <div class="form-check pay_process">
                                                        <input class="form-check-input" type="radio"
                                                            name="payment_method" value="bkash" disabled>
                                                        <label class="form-check-label" for="payment_method">
                                                            <img src="{{ asset('assets/frontend') }}/image/section_img/payment4.png"
                                                                alt="image">
                                                            <p>Pay by Bkash <span class="text-danger">Currently disabled</span></p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order_summary">
                                    <div class="summary_title">
                                        <p> <i class="fas fa-check"></i> ORDER SUMMARY</p>
                                    </div>
                                    <div class="ordered_pdct">
                                        <div class="order-page-cart-items"></div>
                                        <div class="total_count">
                                            <input type="hidden" name="coupon_id" value="" id="coupon_id">
                                            <input type="hidden" name="shipping_id" value="" id="shipping_id">
                                            <input type="hidden" name="shipping_cost" value="70" class="shipping-cost-input">
                                            <ul>
                                                <li><span>Subtotal :</span> <span class="checkout-total-cart-amount">{{ optional(auth()->user()->cart)->total_price ?? 0 }}/=</span></li>
                                                <li><span>Shipping (+):</span> <span class="shipping-cost">70</span>/=</li>
                                                <li><span>Coupon Discount (-):</span> <span class="coupon-cost">0.00</span>/= </li>
                                                <li><span><strong>TOTAL :</strong></span>
                                                    <span><strong class="checkout-total-price">{{ optional(auth()->user()->cart)->total_price + 70 ?? 0 }}</strong>/=</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="coupon_code">
                                    <div class="coupon-code-body">
                                        <input type="text" placeholder="Coupon Code" name="coupon_code" id="coupon_code">
                                        <a href="javascript:void(0)" onclick="checkCoupon(this)">ADD</a>
                                    </div>
                                    <div class="comment">
                                        <p>If you would like to add any notes or comments about your order please enter
                                            them below.</p>

                                            <textarea name="notes" rows="2"></textarea> <br>
                                            <input type="checkbox" id="tos"> 
                                            <label for="tos" class="text-danger">I have read and agree to the terms and
                                                conditions.
                                            </label>

                                            <div class="place_order">
                                                <div class="place_order_btn">
                                                    <button class="btn btn-success" type="button" id="submit-btn"><i class="fas fa-shopping-cart"></i> PLACE
                                                        ORDER
                                                    </button>
                                                </div>

                                                <div class="conditions">
                                                    <ul>
                                                        <li><i class="fad fa-shield-alt"></i> Security policy (Use a
                                                            genuine Email Address to avoid any problem and prevent
                                                            problems while logging in)</li>
                                                        <li><i class="fas fa-truck"></i> Delivery policy (Inside Dhaka
                                                            delivery within 24hrs, Outside Dhaka delivery within 72hrs)
                                                        </li>
                                                        <li><i class="far fa-exchange-alt"></i> Return policy (A user
                                                            may return any unopened or defective item within 24 hours of
                                                            receiving the item.)
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- checkout section end here -->

    </x-slot>

    <x-slot name="scripts">
        @include('frontend.checkout._inc.script')
    </x-slot>
</x-layout>
