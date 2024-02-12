    <!-- ADD TO CART POPUP MODAL -->
    <div class="offcanvas offcanvas-end cartlist" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
        id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

        {{-- header --}}
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">
                <i class="fas fa-shopping-basket"></i>
                <span>
                    Total item
                    <span class="cart-total-quantity">0</span>
                </span>
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>


        {{-- body --}}
        <div class="offcanvas-body">
            <ul class="cart-list cart-items scroll">
                
            </ul>
        </div>

        {{-- footer --}}
        <div class="offcanvas-footer">
            <button class="cart-checkout-btn">
                <a href="{{ route('cart.checkout') }}">
                    <span class="checkout-label text-transform-initial">Proceed to checkout</span>
                </a>
                <span class="checkout-price">
                    <span class="cart-total-amount"> {{ number_format($cart->total_price ?? 0, 2) }}</span>BDT
                </span>
            </button>
        </div>
    </div>
