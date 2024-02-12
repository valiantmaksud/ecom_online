
    <!-- ADD TO CART POPUP MODAL -->
    <div class="offcanvas offcanvas-end cartlist" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

        {{-- header --}}
        <div class="offcanvas-header">
          <h5 id="offcanvasRightLabel">
                <i class="fas fa-shopping-basket"></i>
                <span>
                    Total item
                    <span class="cart-total-quantity">1</span>
                </span>
          </h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        {{-- body --}}
        <div class="offcanvas-body">
            <ul class="cart-list cart-items scroll">
                <li class="cart-item my-cart item-card position-relative">

                    <button class="cart-sidebar-delete position-absolute">
                        <i class="far fa-times"></i>
                    </button>

                    <div class="cart-media">
                        <a href="javascript:void(0)">
                            <img src="{{ asset('assets/frontend/image/section_img/product_dets1.jpg') }}" alt="product">
                        </a>
                    </div>

                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6>
                                <a href="product-single.html">
                                    T-shirt for all man
                                    <span style="font-size: 12px"></span>
                                </a>
                            </h6>
                            <p>
                                Price -
                                <span class="item-sale-price cart-single-item-price"> 250.00 </span>
                                BDT
                            </p>
                        </div>

                        <div class="cart-action-group">
                            <div class="quantity">
                                <a href="javascript:void(0)" class="quantity_minus"><span><i class="fas fa-minus"></i></span></a>
                                <input name="quantity" type="text" class="quantity_input" value="1">
                                <a href="javascript:void(0)" class="quantity_plus"><span><i class="fas fa-plus"></i></span></a>
                            </div>
                            <h6>
                                <span class="item-total">
                                    250.00
                                </span>
                                BDT
                            </h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item my-cart item-card position-relative">

                    <button class="cart-sidebar-delete position-absolute">
                        <i class="far fa-times"></i>
                    </button>

                    <div class="cart-media">
                        <a href="javascript:void(0)">
                            <img src="{{ asset('assets/frontend/image/section_img/product_dets1.jpg') }}" alt="product">
                        </a>
                    </div>

                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6>
                                <a href="product-single.html">
                                    T-shirt for all man
                                    <span style="font-size: 12px"></span>
                                </a>
                            </h6>
                            <p>
                                Price -
                                <span class="item-sale-price cart-single-item-price"> 250.00 </span>
                                BDT
                            </p>
                        </div>

                        <div class="cart-action-group">
                            <div class="quantity">
                                <a href="javascript:void(0)" class="quantity_minus"><span><i class="fas fa-minus"></i></span></a>
                                <input name="quantity" type="text" class="quantity_input" value="1">
                                <a href="javascript:void(0)" class="quantity_plus"><span><i class="fas fa-plus"></i></span></a>
                            </div>
                            <h6>
                                <span class="item-total">
                                    250.00
                                </span>
                                BDT
                            </h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item my-cart item-card position-relative">

                    <button class="cart-sidebar-delete position-absolute">
                        <i class="far fa-times"></i>
                    </button>

                    <div class="cart-media">
                        <a href="javascript:void(0)">
                            <img src="{{ asset('assets/frontend/image/section_img/product_dets1.jpg') }}" alt="product">
                        </a>
                    </div>

                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6>
                                <a href="product-single.html">
                                    T-shirt for all man
                                    <span style="font-size: 12px"></span>
                                </a>
                            </h6>
                            <p>
                                Price -
                                <span class="item-sale-price cart-single-item-price"> 250.00 </span>
                                BDT
                            </p>
                        </div>

                        <div class="cart-action-group">
                            <div class="quantity">
                                <a href="javascript:void(0)" class="quantity_minus"><span><i class="fas fa-minus"></i></span></a>
                                <input name="quantity" type="text" class="quantity_input" value="1">
                                <a href="javascript:void(0)" class="quantity_plus"><span><i class="fas fa-plus"></i></span></a>
                            </div>
                            <h6>
                                <span class="item-total">
                                    250.00
                                </span>
                                BDT
                            </h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        {{-- footer --}}
        <div class="offcanvas-footer">
            <button class="cart-checkout-btn" onclick="location.href = '{{ url('/checkout') }}';">
                <span class="checkout-label text-transform-initial">Proceed to checkout</span>
                <span class="checkout-price">
                    <span class="cart-total-amount">250</span>
                    BDT
                </span>
            </button>
        </div>


      </div>




