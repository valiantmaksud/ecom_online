<section class="highlighted_product_section">
    <div class="container-fluid">
        <div class="journey_inner">
            <div class="content">
                <h2>{{ website_settings()->where('key', 'top_selling_heading')->first()->value ?? 'TOP SELLING PRODUCT' }}</h2>
            </div>


            <div class="tab-content">
                <div id="home" data-tab-content class="active">
                    <div class="row product_section mb-4">

                        @foreach (top_selling_product() as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 home_product_width mb-1 width-50">
                                <x-frontend.product-box :item="$product" />

                            </div>
                        @endforeach
                        <div class="more_btn">
                            <a href="{{ route('frontend.search',['top_selling' => true]) }}">SEE ALL</a>
                        </div>
                    </div>
                    </div>

            </div>
        </div>
    </div>
</section>
