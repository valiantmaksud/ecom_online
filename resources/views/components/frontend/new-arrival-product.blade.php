<section class="new_arrival_section">
    <div class="container-fluid">
        <div class="new_arrval_inner">
            <div class="common_title">
                <h2>NEW ARRIVAL</h2>
            </div>
            <div class="arrival_product">
                <div class="row product_section mb-4">
                    @foreach (latest_products() as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 home_product_width mb-1 width-50">
                            <x-frontend.product-box :item="$item" />

                        </div>
                    @endforeach

                    <div class="more_btn">
                        <a href="{{ route('frontend.search',['is_latest' => true]) }}">SHOP ALL NEW ARRIVALS</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
