<section class="store_section">
    <div class="container-fluid">
        <div class="store_inner">
            <div class="common_title">
                <h2>BACK IN STORE</h2>
                <!-- <div class="bordered_heading"></div> -->
            </div>
            <div class="row product_section mb-4">
                @foreach (random_product() as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 home_product_width mb-1 width-50">
                        <x-frontend.product-box :item="$item" />
                    </div>
                @endforeach

                <div class="more_btn">
                    <a href="{{ route('frontend.search',['is_random' => true]) }}">SEE ALL</a>
                </div>

            </div>
        </div>
    </div>
</section>
