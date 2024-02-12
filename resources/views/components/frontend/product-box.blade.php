<div class="product_box">
    <div class="product_image">
        @if (file_exists($item->image))
            <img class="lazy product-image-height" src="{{ asset($item->image) }}" alt="{{ $item->name }}" style="height: 435px" loading="lazy">
        @else
            <img class="lazy product-image-height" src="{{ asset('assets/frontend') }}/image/bg/product1.jpg" alt="{{ $item->name }}" style="height: 435px" loading="lazy">
        @endif
        <div class="show_once">
            <span>{{ $item->name }}</span>
            <a href="javascript:void(0)" class="quick_view_btn" onclick="loadModal(`{{ $item->id }}`)">QUICK SHOP</a>
        </div>
        {{-- <p>Best Seller</p> --}}
    </div>
    <div class="product_det">
        <div class="review">
            <i class="fas fa-star"></i><i class="fas fa-star">
            </i><i class="fas fa-star"></i><i class="fas fa-star">
            </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
        </div>
        <a href="{{ route('product.show', $item->slug) }}"class="parent">
            {{ Str::limit($item->name, 32, '...') }}
        </a>
        {{-- <a href="{{ route('product.show', $item->slug) }}">{!! Str::words($item->description, 10, '...') !!}</a> --}}
        <P class="child">
            <span>{{ $item->price }}৳</span> {{ $item->offer_price }}৳
        </P>
    </div>
    <x-frontend.size-selection :sizes="$item->product_sizes" :productid="$item->id" />
    <div class="product_cart">
        <button class="btn add-to-cart-btn" type="button" data-product-id="{{ $item->id }}">
            {{-- <button class="btn add-to-cart-btn" type="button" onclick="addToCart(`{{ $item->id }}`)"> --}}
            <i class="fas fa-shopping-bag"></i> ADD TO CART
        </button>
    </div>
    {{-- <div class="best_seller">
        <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
        <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
    </div> --}}
</div>
