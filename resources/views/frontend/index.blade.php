<x-layout>
    <x-slot name="content">


        <!-- banner section start -->
        <section class="banner_section">
            <div class="swiper banner_swiper">
                <div class="swiper-wrapper">

                    @foreach ($banners as $banner)
                        <div class="swiper-slide">
                            <a href="{{ $banner->link }}" target="_blank">
                                <img src="{{ asset($banner->image) }}" alt="{{ $banner->title }}" class="banner-top">
                            </a>
                        </div>
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

        <!-- simple gallery section end here -->


        <!-- store section start here -->
        {{-- <x-frontend.random-product /> --}}
        <!-- store section end here -->



        <!-- new arrival section start here -->
        {{-- <x-frontend.new-arrival-product /> --}}
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
                    {{-- @foreach (banners()->where('position', 'bottom') as $item)
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
                    @endforeach --}}
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


        <div class="fast_delivery">
            <img src="{{ asset('assets/frontend') }}/image/section_img/fast_delivary.jpg" alt="image" loading="lazy">
        </div>
        <!-- foot slide section end here -->

    </x-slot>
</x-layout>
