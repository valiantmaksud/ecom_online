<x-layout>
    <x-slot name="content">


    <!-- menu product section start herer -->
    <div class="menu_product">
        <div class="menu-product-body">
        {{-- <div class="container"> --}}
            <h2 class="menu_product_title">Face Primer</h2>
            <div class="menu_product_inner">
                <div class="row">
                    <div class="col-lg-3 pr-0">
                        <div class="filter-side" style="border-right: 3px solid #f0f0f0; padding-right: 5px;">
                            <p>FILTER BY PRICE</p>
                            <div class="price-slider mt-2">
                                <span class="d-flex justify-content-between">
                                    <input type="number" value="0" name="min_price" id="min_price" min="0" max="1000"/>
                                        to
                                    <input type="number" value="1000" name="max_price" id="max_price" min="0" max="1000"/>
                                </span>
                                <input value="0" min="0" max="1000" id="minRange" type="range"/>
                                <input value="1000" min="0" max="1000" id="maxRange" type="range"/>
                            </div>

                            <p class="mt-5">PRODUCT CATEGORIES</p>
                            <div class="product-categories d-flex justify-content-between">
                                <a href="javascript:void(0)" style="color: var(--pink)">Shampoo</a>
                                <p class="badge" style="background-color: var(--pink); padding: 3px 10px; line-height: inherit; height: 22px;">10</p>
                            </div>

                            <div class="sidebar_content mt-3">
                                <p class="filter-title">FILTER BY BRAND</p>
                                <div class="filter-by-brand">
                                    <input class="search_bar form-control my-2" type="text" placeholder="Search">
                                    <div class="form_label">

                                        <input type="checkbox">
                                        <label for="html">
                                            <a href="javascript:void(0)">Bourjois (1)</a>
                                        </label><br>

                                        <input type="checkbox">
                                        <label for="html">
                                            <a href="javascript:void(0)">L'oreal (1)</a>
                                        </label><br>

                                        <input type="checkbox">
                                        <label for="html">
                                            <a href="javascript:void(0)">Lancaster (1)</a>
                                        </label><br>

                                        <input type="checkbox">
                                        <label for="html">
                                            <a href="javascript:void(0)">Makeup Revolution (2)</a>
                                        </label><br>

                                        <input type="checkbox">
                                        <label for="html">
                                            <a href="javascript:void(0)">Maybelline (3)</a>
                                        </label><br>

                                        <input type="checkbox">
                                        <label for="html">
                                            <a href="javascript:void(0)">Maybelline (3)L</a>
                                        </label><br>

                                        <input type="checkbox">
                                        <label for="html">
                                            <a href="javascript:void(0)">Rimmel (2)</a>
                                        </label><br>

                                        <input type="checkbox">
                                        <label for="html">
                                            <a href="javascript:void(0)">Technic (12)</a>
                                        </label><br>

                                        <input type="checkbox">
                                        <label for="html">
                                            <a href="javascript:void(0)">Technic (12)</a>
                                        </label><br>

                                        <input type="checkbox">
                                        <label for="html">
                                            <a href="javascript:void(0)">Technic (12)</a>
                                        </label><br>
                                    </div>
                                </div>
                                <div class="filter-by-skin-type">
                                    <p class="filter-title">FILTER BY SKIN TYPE</p>

                                    <input type="checkbox">
                                    <label for="html">Oily</label><br>

                                    <input type="checkbox">
                                    <label for="html">Dry</label><br>

                                    <input type="checkbox">
                                    <label for="html">Combination</label><br>

                                    <input type="checkbox">
                                    <label for="html">Normal</label><br>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="sidebar_products">
                            <div class="item_title">
                                <p>ITEMS: 38</p>
                                <div class="product-price-sorting">
                                    <p>Sort By:</p>
                                    <select name="items">
                                        <option value="featured">Featured</option>
                                        <option value="featured">Best Selling</option>
                                        <option value="featured">Alphabetically, A-Z</option>
                                        <option value="featured">Alphabetically, Z-A</option>
                                        <option value="featured">Price, Low to High</option>
                                        <option value="featured">Price, High to Low</option>
                                        <option value="featured">New Arrival<option>
                                    </select>
                                </div>
                            </div>
                            <div class="item_products_box">
                                <div class="row mb-4">

                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                        <div class="product_box">
                                            <div class="product_image">
                                                <img src="{{ asset('assets/frontend')}}/image/bg/product1.jpg" alt="image">

                                                <div class="show_once">
                                                    <span>Item Title</span>
                                                    <a href="javascript:void(0)" class="quick_view_btn">QUICK SHOP</a>
                                                </div>
                                                <p>Best Seller</p>
                                            </div>
                                            <div class="product_det">
                                                <div class="review">
                                                    <i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                                </div>
                                                <a href="{{ url('/product-details') }}"
                                                    class="parent">Item Name</a>
                                                <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                                <P class="child">
                                                    <span>300৳</span> 200৳
                                                </P>
                                            </div>
                                            <div class="product_cart">
                                                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                                </button>
                                            </div>
                                            <div class="best_seller">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                        <div class="product_box">
                                            <div class="product_image">
                                                <img src="{{ asset('assets/frontend')}}/image/bg/product1.jpg" alt="image">

                                                <div class="show_once">
                                                    <span>Item Title</span>
                                                    <a href="javascript:void(0)" class="quick_view_btn">QUICK SHOP</a>
                                                </div>
                                                <p>Best Seller</p>
                                            </div>
                                            <div class="product_det">
                                                <div class="review">
                                                    <i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                                </div>
                                                <a href="{{ url('/product-details') }}"
                                                    class="parent">Item Name</a>
                                                <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                                <P class="child">
                                                    <span>300৳</span> 200৳
                                                </P>
                                            </div>
                                            <div class="product_cart">
                                                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                                </button>
                                            </div>
                                            <div class="best_seller">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                        <div class="product_box">
                                            <div class="product_image">
                                                <img src="{{ asset('assets/frontend')}}/image/bg/product1.jpg" alt="image">

                                                <div class="show_once">
                                                    <span>Item Title</span>
                                                    <a href="javascript:void(0)" class="quick_view_btn">QUICK SHOP</a>
                                                </div>
                                                <p>Best Seller</p>
                                            </div>
                                            <div class="product_det">
                                                <div class="review">
                                                    <i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                                </div>
                                                <a href="{{ url('/product-details') }}"
                                                    class="parent">Item Name</a>
                                                <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                                <P class="child">
                                                    <span>300৳</span> 200৳
                                                </P>
                                            </div>
                                            <div class="product_cart">
                                                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                                </button>
                                            </div>
                                            <div class="best_seller">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                        <div class="product_box">
                                            <div class="product_image">
                                                <img src="{{ asset('assets/frontend')}}/image/bg/product1.jpg" alt="image">

                                                <div class="show_once">
                                                    <span>Item Title</span>
                                                    <a href="javascript:void(0)" class="quick_view_btn">QUICK SHOP</a>
                                                </div>
                                                <p>Best Seller</p>
                                            </div>
                                            <div class="product_det">
                                                <div class="review">
                                                    <i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                                </div>
                                                <a href="{{ url('/product-details') }}"
                                                    class="parent">Item Name</a>
                                                <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                                <P class="child">
                                                    <span>300৳</span> 200৳
                                                </P>
                                            </div>
                                            <div class="product_cart">
                                                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                                </button>
                                            </div>
                                            <div class="best_seller">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                        <div class="product_box">
                                            <div class="product_image">
                                                <img src="{{ asset('assets/frontend')}}/image/bg/product1.jpg" alt="image">

                                                <div class="show_once">
                                                    <span>Item Title</span>
                                                    <a href="javascript:void(0)" class="quick_view_btn">QUICK SHOP</a>
                                                </div>
                                                <p>Best Seller</p>
                                            </div>
                                            <div class="product_det">
                                                <div class="review">
                                                    <i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                                </div>
                                                <a href="{{ url('/product-details') }}"
                                                    class="parent">Item Name</a>
                                                <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                                <P class="child">
                                                    <span>300৳</span> 200৳
                                                </P>
                                            </div>
                                            <div class="product_cart">
                                                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                                </button>
                                            </div>
                                            <div class="best_seller">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                        <div class="product_box">
                                            <div class="product_image">
                                                <img src="{{ asset('assets/frontend')}}/image/bg/product1.jpg" alt="image">

                                                <div class="show_once">
                                                    <span>Item Title</span>
                                                    <a href="javascript:void(0)" class="quick_view_btn">QUICK SHOP</a>
                                                </div>
                                                <p>Best Seller</p>
                                            </div>
                                            <div class="product_det">
                                                <div class="review">
                                                    <i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                                </div>
                                                <a href="{{ url('/product-details') }}"
                                                    class="parent">Item Name</a>
                                                <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                                <P class="child">
                                                    <span>300৳</span> 200৳
                                                </P>
                                            </div>
                                            <div class="product_cart">
                                                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                                </button>
                                            </div>
                                            <div class="best_seller">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                        <div class="product_box">
                                            <div class="product_image">
                                                <img src="{{ asset('assets/frontend')}}/image/bg/product1.jpg" alt="image">

                                                <div class="show_once">
                                                    <span>Item Title</span>
                                                    <a href="javascript:void(0)" class="quick_view_btn">QUICK SHOP</a>
                                                </div>
                                                <p>Best Seller</p>
                                            </div>
                                            <div class="product_det">
                                                <div class="review">
                                                    <i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                                </div>
                                                <a href="{{ url('/product-details') }}"
                                                    class="parent">Item Name</a>
                                                <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                                <P class="child">
                                                    <span>300৳</span> 200৳
                                                </P>
                                            </div>
                                            <div class="product_cart">
                                                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                                </button>
                                            </div>
                                            <div class="best_seller">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                        <div class="product_box">
                                            <div class="product_image">
                                                <img src="{{ asset('assets/frontend')}}/image/bg/product1.jpg" alt="image">

                                                <div class="show_once">
                                                    <span>Item Title</span>
                                                    <a href="javascript:void(0)" class="quick_view_btn">QUICK SHOP</a>
                                                </div>
                                                <p>Best Seller</p>
                                            </div>
                                            <div class="product_det">
                                                <div class="review">
                                                    <i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i><i class="fas fa-star">
                                                    </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                                </div>
                                                <a href="{{ url('/product-details') }}"
                                                    class="parent">Item Name</a>
                                                <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                                <P class="child">
                                                    <span>300৳</span> 200৳
                                                </P>
                                            </div>
                                            <div class="product_cart">
                                                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                                </button>
                                            </div>
                                            <div class="best_seller">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                                            </div>
                                        </div>
                                    </div>

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
</x-layout>
