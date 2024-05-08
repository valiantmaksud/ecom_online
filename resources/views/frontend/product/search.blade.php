@php
    if($min_price == $max_price){
        $min_price = $max_price - 100;
    }
    if($min_price <= 0){
        $min_price = 0;
    }
@endphp
<x-layout>
    <x-slot name="title">
        All Product
    </x-slot>
    <x-slot name="content">
        <!-- menu product section start herer -->
        <div class="menu_product">
            <div class="menu-product-body">
                {{-- <div class="container"> --}}
                <h2 class="menu_product_title">
                    @if (request()->filled('category'))
                        Category: {{ request()->category }}
                    @else
                        All Product
                    @endif
                </h2>
                <div class="menu_product_inner">
                    <div class="row">
                        <div class="col-lg-3 pr-0">
                            <div class="filter-side" style="border-right: 3px solid #f0f0f0; padding-right: 5px;">
                                <p>FILTER BY PRICE</p>
                                <div class="price-slider mt-2">
                                    <span class="d-flex justify-content-between">
                                        <input type="number" value="{{ (int)$min_price }}" name="min_price" id="min_price"
                                            min="{{ (int)$min_price }}" max="{{ $max_price }}" />
                                        to
                                        <input type="number" value="{{ (int)$max_price }}" name="max_price" id="max_price"
                                            min="{{ (int)$min_price }}" max="{{ (int)$max_price }}" />
                                    </span>
                                    <input value="{{ (int)$min_price }}" min="{{ (int)$min_price }}" max="{{ (int)$max_price }}" id="minRange" type="range" />
                                    <input value="{{ (int)$max_price }}" min="{{ (int)$min_price }}" max="{{ (int)$max_price }}" id="maxRange" type="range" />
                                </div>

                                <p class="mt-5">PRODUCT CATEGORIES</p>
                                @foreach ($categories as $category)
                                    <div class="product-categories d-flex justify-content-between">
                                        <a href="{{ route('frontend.search', ['category' => $category->name]) }}"
                                            style="color: var(--pink)">{{ $category->name }}</a>
                                        <p class="badge"
                                            style="background-color: var(--pink); padding: 3px 10px; line-height: inherit; height: 22px;">
                                            {{ $category->total_product }}
                                        </p>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="sidebar_products">
                                <div class="item_title">
                                    <p>ITEMS: {{ $products->total() }}</p>
                                    <div class="product-price-sorting">
                                        <p>Sort By:</p>
                                        <select name="sort_by">
                                            <option value="featured">Featured</option>
                                            <option value="best-selling">Best Selling</option>
                                            <option value="a-z">Alphabetically, A-Z</option>
                                            <option value="z-a">Alphabetically, Z-A</option>
                                            <option value="low-high">Price, Low to High</option>
                                            <option value="high-low">Price, High to Low</option>
                                            <option value="new-arrival">New Arrival</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item_products_box">
                                    <div class="row mb-4">

                                        @foreach ($products as $product)
                                            <div class="col-lg-3 col-md-4 col-sm-6 home_product_width width-50">
                                                <x-frontend.product-box :item="$product" />
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu product section end here -->


    </x-slot>

    <x-slot name="scripts">
        <script>
            const url = "{{ request()->fullUrl() }}"
            function loadProduct() {
                let _this = $(this);

            }
        </script>
    </x-slot>
</x-layout>
