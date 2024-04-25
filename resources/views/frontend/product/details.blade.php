<x-layout>

    <x-slot name="title">{{ $product->name }}</x-slot>
    <x-slot name="content">


        <!-- product details section start herer -->
        <div class="product_details">
            <div class="container">
                <div class="product_dets_inner">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="">
                                <div class="">
                                    <a href="/"><i class="far fa-home"></i></a>
                                    <a href="javascript:void(0)"> /{{ optional($product->category)->name }}</a>
                                    <span> / {{ $product->name }}</span>
                                </div>

                                {{-- image zoom html start --}}
                                @php
                                    $feature_img = asset('assets/frontend/image/section_img/product_dets1.jpg');
                                    if (file_exists($product->image)) {
                                        $feature_img = asset($product->image);
                                    }
                                @endphp
                                <div class="image-show" href="{{ $feature_img }}">
                                    <i class="icofont-heart product-details-wish flybtn"></i>
                                    <img src="{{ $feature_img }}" id="show-img" class="flyitem"
                                        alt="{{ $product->name }}">
                                </div>

                                {{-- <div class="thumbnail-border">
                                    <div class="small-img">
                                        <img src="{{ asset('icon_right.png') }}" class="icon-left" alt=""
                                            id="prev-img">
                                        <div class="small-container">
                                            <div id="small-img-roll">
                                                @foreach ($product->images ?? [] as $image)
                                                    @if (file_exists($image->image))
                                                        <img src="{{ asset($image->image) }}" class="show-small-img"
                                                            alt="thumbnail">
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <img src="{{ asset('icon_right.png') }}" class="icon-right" alt=""
                                            id="next-img">
                                    </div>
                                </div> --}}

                            </div>
                        </div>


                        <div class="col-lg-4">
                            <div class="product_order product_info">
                                <div class="order_title">
                                    <p>Category: {{ optional($product->category)->name }}</p>
                                </div>
                                <div class="order_title2">
                                    <p>{{ $product->name }}</p>
                                    @if ($product->discount_price)
                                        <del><span class="text-danger">৳{{ $product->selling_price }}</span></del>
                                        <span style="font-size:20px">৳{{ $product->discount_price }}</span>
                                    @else
                                        <span>৳{{ $product->selling_price }}</span>
                                    @endif

                                </div>

                                <div class="order_cart">
                                    <div class="quantity">
                                        <a href="javascript:void(0)" class="quantity_minus">
                                            <span><i class="fas fa-minus"></i></span>
                                        </a>
                                        <input name="quantity" type="text" class="quantity_input" value="1">
                                        <a href="javascript:void(0)" class="quantity_plus">
                                            <span><i class="fas fa-plus"></i></span>
                                        </a>
                                    </div>
                                    <div class="order_button">
                                        <a href="javascript:void(0)" class="add-to-cart-btn"
                                            data-product-id="{{ $product->id }}">
                                            <i class="far fa-shopping-bag"></i> Add to Cart
                                        </a>
                                        {{-- <a href="#"><i class="fas fa-heart"></i></a> --}}
                                    </div>
                                </div>


                                {{-- <div class="product_info">
                                    {!! $product->description !!}
                                </div> --}}
                            </div>
                            <div class="product_tab mt-5">
                                <ul class="tabs">
                                    <li data-tab-target="#home" class="active tab">Details</li>
                                    <li data-tab-target="#pricing" class="tab">Share</li>
                                </ul>

                                <div class="tab-content">
                                    <div id="home" data-tab-content class="active">
                                        <div class="mb-2"></div>
                                        {!! $product->description !!}
                                    </div>
                                    <div id="pricing" data-tab-content>
                                        <div class="tab_social">
                                            <a
                                                href="https://www.facebook.com/sharer/sharer.php?u={{ request()->url() }}&display=popup">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                            <a
                                                href="https://twitter.com/share?url={{ request()->url() }}&text={{ $product->name }}">
                                                <i class="fab fa-twitter-square"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            @foreach ($related_products as $product)
                                <div class="related_product">
                                    <h3>Related Product</h3>
                                    <div class="related_info">
                                        @if (file_exists($product->image))
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                        @else
                                            <img src="{{ asset('assets/frontend') }}/image/bg/product1.jpg"
                                                alt="{{ $product->name }}">
                                        @endif
                                        <p>{{ $product->name }}</p>
                                        <span>৳ {{ $product->offer_price ?: $product->price }}</span>
                                    </div>
                                    <div class="order_cart related_cart">
                                        <div class="quantity">
                                            <a href="javascript:void(0)" class="quantity_minus">
                                                <span><i class="fas fa-minus"></i></span>
                                            </a>
                                            <input name="quantity" type="text" class="quantity_input"
                                                value="1">
                                            <a href="javascript:void(0)" class="quantity_plus">
                                                <span><i class="fas fa-plus"></i></span>
                                            </a>
                                        </div>
                                        <div class="order_button">
                                            <a href="javascript:void(0)" class="add-to-cart-btn"
                                                data-product-id="{{ $product->id }}">
                                                <i class="far fa-shopping-bag"></i>
                                                Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product details section end herer -->


        <!-- related product slide start here -->
        <div class="related_product_slide">
            <h2>Related Product</h2>
            <div class="container">
                <div class="slide_inner">
                    <div class="swiper related_swiper">
                        <div class="swiper-wrapper">
                            @foreach ($related__second_products as $product)
                                <div class="swiper-slide">
                                    <x-frontend.product-box :item="$product" />

                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- related product slide end here -->

        <!-- also viewd product sectino star here -->
        <div class="related_product_slide">
            <h2>People Also Viewed ...</h2>
            <div class="container">
                <div class="slide_inner">
                    <div class="swiper related_swiper">
                        <div class="swiper-wrapper">
                            @foreach ($random_products as $product)
                                <div class="swiper-slide">
                                    <x-frontend.product-box :item="$product" />

                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- also viewd product sectino star here -->


    </x-slot>
</x-layout>
