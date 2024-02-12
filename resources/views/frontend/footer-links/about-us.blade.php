<x-layout>
    <x-slot name="content">

        <!-- about us section start here -->
        <div class="about_us">
            <div class="container">
                <div class="about_inner">
                    <div class="common_title">
                        <h2>ABOUT US</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="about_image">
                                <img src="{{ asset('assets/frontend') }}/image/section_img/about.jfif" alt="image">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="about_content">
                                <p>{{ website_setting('site_title') }} is one of the first E-commerce sites in
                                    Bangladesh which offers directly imported products
                                    only from UK and USA to your doorsteps. We only offer products that are already in
                                    our store, thus enabling
                                    us to deliver the goods in shortest possible time. Now you can shop for your
                                    favorite brand of cosmetics,
                                    baby products, grooming needs, perfumes, dental and medical products from the
                                    comfort of your home.
                                    For hassle free shopping we have cash on delivery and B-kash option. We understand
                                    the busy nature of
                                    our modern day customers. Hence it became our mission to start
                                    {{ website_setting('site_title') }}, catering specially for
                                    their needs. Our customers can search through thousands of famous brand products
                                    from our ever growing
                                    list in the website, with details about the products, to find the one suiting just
                                    their needs. Having
                                    technology on our side we have devised our website to be as accessible and easy as
                                    it would be fast.
                                    The high-end products are neatly categorized for the ease of the customer, also
                                    saving their valuable
                                    time. Live globally, buy locally. With {{ website_setting('site_title') }}, we look
                                    forward to raising an online shopping
                                    revolution combining the gratification of the super market with the convenience of
                                    Internet. Our
                                    well stocked stores cut down the time of delivering the products to your doorstep by
                                    half. So the
                                    buying experience becomes that much sweeter.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about us section end here -->


    </x-slot>
</x-layout>
