<x-layout>
    <x-slot name="content">


        <!-- banner section start -->
        <section class="banner_section">
            <div class="swiper banner_swiper">
                <div class="swiper-wrapper">

                    @foreach (banners()->where('position','top')->take(5) as $banner)

                        @if ($banner->video)
                        {{-- <iframe class="swiper-slide" src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0&autoplay=1&mute=1"></iframe> --}}
                        {{-- NOTE: Chrome only support autoplay while the video is initially muted on load --}}
                        {{-- REMEMBER: youtube video link won't work in source link --}}
                            {{-- <video class="swiper-slide" width="100%" loop="true" controls autoplay muted style="background: white;">
                                <source src="{{ $banner->video }}" type="video/webm" />
                            </video> --}}
                        @else
                            <div class="swiper-slide">
                                <a href="{{ $banner->link }}" target="_blank">
                                    <img src="{{ asset($banner->image) }}" alt="{{ $banner->title }}" class="banner-top">
                                </a>
                            </div>


                        @endif

                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- banner section end -->


        <!-- mobile menu -->

        <x-frontend.mobile-menu />
        <!-- mobile menu -->


        <!-- gallery section start here -->
        <x-frontend.category-grid-one />
        <!-- gallery section end here -->


        <!-- journey section start here  -->
        <x-frontend.top-selling-product />


        <!-- journey section end here -->

        <!-- simple gallery section start here -->

        <x-frontend.middle-banner />
        <!-- simple gallery section end here -->


        <!-- store section start here -->
        <x-frontend.random-product />
        <!-- store section end here -->


        <!-- trending section start here -->
        <section class="trending_section">
            <div class="container-fluid">
                <div class="tranding_inner">

                    <div class="skin_care">
                        <div class="common_title">
                            <h2>{{ website_setting('current_trending_heading') }}</h2>
                        </div>
                        <div class="row">
                            @foreach (banners()->where('trending', 1) as $item)
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="cat_box">
                                        <div class="cat_image">
                                            <a href="#">
                                                @if (file_exists($item->image))
                                                    <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                                                @else
                                                    <img src="{{ asset('assets/frontend') }}/image/section_img/cat_box1.jpg" alt="image">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="cat_content">
                                            <a href="#">{{ $item->title }}</a>
                                            <p>{{ $item->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mall_exclusive">
                        <div class="common_title">
                            <h2>{{ website_setting('exclusive_heading') }}</h2>
                        </div>
                        <div class="row">
                            @foreach (banners()->where('is_exclusive',1)->take(3) as $item)
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="cat_box">
                                    <div class="cat_image">
                                        <a href="#">
                                            @if (file_exists($item->image))
                                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                                            @else
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/cat_box1.jpg" alt="image">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="cat_content">
                                        <a href="#">{{ $item->title }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- <div class="exclusive_discount">
                        @foreach (banners()->where('is_exclusive',1)->take(2) as $item)
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="discount_box">
                                    <div class="discount_img">
                                        <img src="{{ asset('assets/frontend') }}/image/section_img/discount_box1.jpg"
                                            alt="image">
                                    </div>
                                    <p>3 Mehendi @59Tk Only!</p>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-sm-6">
                                <div class="discount_box">
                                    <div class="discount_img">
                                        <img src="{{ asset('assets/frontend') }}/image/section_img/discount_box2.jpg"
                                            alt="image">
                                    </div>
                                    <p>BUY 1 GET 1</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- trending section end here -->


        <!-- new arrival section start here -->
        <x-frontend.new-arrival-product />
        <!-- new arrival section end here -->


        <!-- mall section start here -->
        {{-- <section class="mall_section">
            <div class="container-fluid">
                <div class="mall_inner">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="mall_content">
                                <h2>{{ website_setting('site_title') }} Guides</h2>
                                <p>We are dedicated to educating our community about all things skincare.
                                    We address key steps in your routine, providing guides on the double-cleanse,
                                    eye care, and sunscreen.
                                </p>
                                <div class="more_btn">
                                    <a href="#">LEARN MORE</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="guide_image">
                                <img src="{{ asset('assets/frontend') }}/image/section_img/guide_image.jpg"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- mall section end here -->


        <!-- neotrogena section start here -->
        <section class="neotrogena_section gallery_section">
            <div class="swiper gallery_swiper">
                <div class="swiper-wrapper">
                    @foreach (banners()->where('position', 'bottom') as $item)
                    <div class="swiper-slide">
                        <a href="#">
                            @if (file_exists($item->image))
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                            @else
                                <img src="{{ asset('assets/frontend') }}/image/section_img/neotragena2.jpg" alt="image" loading="lazy">
                            @endif
                        </a>
                        <p>{{ $item->title }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- neotrogena section end here -->


        <!-- blog section start here -->
        {{-- <section class="blog_section">
            <div class="container-fluid">
                <div class="blog_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="blog_content">
                                <h2>the blog</h2>
                                <p>Your skin care guide, <br> inspired by {{ website_setting('site_title') }}</p>
                                <a href="#">Visit The Blog</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="blog_card">
                                <div class="blog_img">
                                    <img src="{{ asset('assets/frontend') }}/image/section_img/blogimg1.jpg"
                                        alt="image">
                                </div>
                                <div class="blog_info">
                                    <span>OTHERS</span>
                                    <P>Lorem ipsum dolor sit amet</P>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="blog_card">
                                <div class="blog_img">
                                    <img src="{{ asset('assets/frontend') }}/image/section_img/blogimg1.jpg"
                                        alt="image">
                                </div>
                                <div class="blog_info">
                                    <span>OTHERS</span>
                                    <P>Lorem ipsum dolor sit amet</P>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="blog_card">
                                <div class="blog_img">
                                    <img src="{{ asset('assets/frontend') }}/image/section_img/blogimg1.jpg"
                                        alt="image">
                                </div>
                                <div class="blog_info">
                                    <span>OTHERS</span>
                                    <P>Lorem ipsum dolor sit amet</P>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- blog section end here -->


        <!-- customers review section start here -->
        <section class="customer_review d-none">
            <div class="container">
                <div class="customer_rev">
                    <h3>Customer Reviews</h3>

                    <div class="swiper review_Swiper d-none">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="review_content">
                                    <p>"This is one of the most authentic shop in Bangladesh. From where i can purchase
                                        products
                                        without any doubt. And their services, behaviors are also very good. Good range
                                        of products
                                        and their availability. I’m a satisfied customer. Thank you {{ website_setting('site_title') }} bd and best
                                        of luck."
                                    </p>
                                    <h4>Nelaa Mehzahin <span>Facebook</span></h4>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="review_content">
                                    <p>"This is one of the most authentic shop in Bangladesh. From where i can purchase
                                        products
                                        without any doubt. And their services, behaviors are also very good. Good range
                                        of products
                                        and their availability. I’m a satisfied customer. Thank you {{ website_setting('site_title') }} bd and best
                                        of luck."
                                    </p>
                                    <h4>Nelaa Mehzahin <span>Facebook</span></h4>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="review_content">
                                    <p>"This is one of the most authentic shop in Bangladesh. From where i can purchase
                                        products
                                        without any doubt. And their services, behaviors are also very good. Good range
                                        of products
                                        and their availability. I’m a satisfied customer. Thank you {{ website_setting('site_title') }} bd and best
                                        of luck."
                                    </p>
                                    <h4>Nelaa Mehzahin <span>Facebook</span></h4>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- customers review section end here -->


        <!-- foot slide section start here -->
        <section class="gallery_section footerslide section">
            <div class="swiper footer_swiper">
                <div class="swiper-wrapper">
                    @foreach (banners()->where('position', '!=', 'top') as $item)
                    <div class="swiper-slide">
                        <a href="#">
                            @if (file_exists($item->image))
                                <img src="{{ asset($item->image) }}" alt="image" loading="lazy">
                            @else
                                <img src="{{ asset('assets/frontend') }}/image/section_img/foot_slide1.jpg" alt="image" loading="lazy">
                            @endif
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>

        <div class="fast_delivery">
            <img src="{{ asset('assets/frontend') }}/image/section_img/fast_delivary.jpg" alt="image" loading="lazy">
        </div>
        <!-- foot slide section end here -->

    </x-slot>
</x-layout>
