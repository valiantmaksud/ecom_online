<div class="md-content">
    <div class="main-body">
        <button id="hide_quick_view" class="close-button"><i class="fa fa-times" aria-hidden="true"></i></button>

        <div class="row">
            <div class="col-lg-6">
                <div class="quick-view-left-side">

                    {{-- image zoom html start --}}
                    @php
                        $image = asset('assets/frontend/image/section_img/product_dets1.jpg');
                        if (file_exists($product->image)){
                            $image = asset($product->image);
                        }
                    @endphp
                    <div class="image-show" href="{{ asset($image) }}">
                        <i class="icofont-heart product-details-wish flybtn"></i>
                        <img src="{{ asset($image) }}" id="show-img" alt="preview img" class="flyitem" style="width: 428px; width: 393px">
                        
                    </div>

                    <div class="thumbnail-border">
                        <div class="small-img">
                            <img src="{{ asset('icon_right.png') }}" class="icon-left" alt="" id="prev-img">
                            <div class="small-container">
                            <div id="small-img-roll">
                                @foreach ($product->images ?? [] as $item)
                                    @if (file_exists($item->image))
                                        <img src="{{ asset($item->image) }}" class="show-small-img" alt="thumbnail">
                                    @endif
                                @endforeach
                                
                            </div>
                            </div>
                            <img src="{{ asset('icon_right.png') }}" class="icon-right" alt="" id="next-img">
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="quick-view-right-side">
                    <h4 class="product-name">{{ $product->name }}</h4>
                    <div class="product-description">
                        <p>
                            {!! $product->description ?? $product->summery !!}
                        </p>
                        <div class="product-price d-flex">
                            <del>৳{{ number_format($product->selling_price) }}</del>
                            <b>৳{{ number_format($product->final_price) }}</b>
                        </div>
                        <div class="order_cart">
                            <div class="quantity">
                                <a href="javascript:void(0)" class="quantity_minus"><span><i class="fas fa-minus"></i></span></a>
                                <input name="quantity" type="text" class="quantity_input" value="1">
                                <a href="javascript:void(0)" class="quantity_plus"><span><i class="fas fa-plus"></i></span></a>
                            </div>
                            <div class="add-to-cart">
                                 <a href="#" class="add-to-cart-btn" data-product-id="{{ $product->id }}"><i class="far fa-shopping-bag"></i> Add to Cart</a>
                            </div>
                            {{-- <div class="wish">
                                 <a href="#"><i class="fas fa-heart"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>