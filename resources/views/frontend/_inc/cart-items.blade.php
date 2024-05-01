@forelse (optional($cart)->details ?? [] as $cart_detail)
    <li class="cart-item my-cart item-card position-relative">
        <button class="cart-sidebar-delete position-absolute" onclick="removeFromCart(`{{ $cart_detail->id }}`)">
            <i class="far fa-times"></i>
        </button>
        <div class="cart-media">
            <a href="{{ route('product.show', optional($cart_detail->product)->slug) }}">
                @if (file_exists(optional($cart_detail->product)->image))
                    <img src="{{ asset(optional($cart_detail->product)->image) }}" alt="{{ optional($cart_detail->product)->name }}">
                @else
                    <img src="{{ asset('assets/frontend') }}/image/section_img/ordered_1.jpg" alt="{{ optional($cart_detail->product)->name }}">
                @endif
            </a>
        </div>
        <div class="cart-info-group">
            <div class="cart-info">
                <h6>
                    <a href="{{ route('product.show', optional($cart_detail->product)->slug) }}">
                        {{ optional($cart_detail->product)->name }}
                        <span style="font-size: 12px"></span>
                    </a>
                </h6>
                <p>
                    Price -
                    <span class="item-sale-price cart-single-item-price">
                        {{ number_format($cart_detail->amount, 2) }} </span>
                    BDT
                </p>
            </div>

            <div class="cart-action-group">
                <div class="quantity">
                    <a href="javascript:void(0)" class="quantity_minus" onclick="updateCart(`{{ $cart_detail->id }}`, -1)">
                        <span><i class="fas fa-minus"></i></span>
                    </a>
                    <input name="quantity" type="text" class="quantity_input" value="{{ $cart_detail->quantity }}">
                    <a href="javascript:void(0)" class="quantity_plus" onclick="updateCart(`{{ $cart_detail->id }}`, 1)">
                        <span><i class="fas fa-plus"></i></span>
                    </a>
                </div>
                <h6>
                    <span class="item-total">
                        {{ number_format($cart->total_price, 2) }}
                    </span>
                    BDT
                </h6>
            </div>
        </div>
    </li>
@empty
    <li class="cart-item my-cart item-card position-relative">
        <div class="cart-info-group">
            <div class="cart-info">
                <h6>
                    <span class="text-danger" style="font-size: 12px">No item in cart</span>
                </h6>
            </div>
        </div>
@endforelse
