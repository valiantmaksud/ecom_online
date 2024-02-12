<x-layout>
    <x-slot name="content">


    <!-- loyal section start here -->
    <div class="loyal_section">
        <div class="container">
            <div class="loyal_inner">
                <div class="common_title">
                    <h2>LOYALTY CARD</h2>
                </div>
                <div class="loyal_cards">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="cards_img">
                                <img src="{{ asset('assets/frontend') }}/image/section_img/loyal1.jpg" alt="image">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cards_img">
                                <img src="{{ asset('assets/frontend') }}/image/section_img/loyal2.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="get_lCard">
                    <h4>WHAT IS A LOYALTY CARD? HOW TO GET IT?</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="protfolio_card">
                                <a href="#!"><img src="{{ asset('assets/frontend') }}/image/section_img/loyal3.png" alt="image"></a>
                                <div class="desc">
                                    <p>Any Customer of TheMall can claim a Loyalty Card and it will be valid
                                        after opening an account at www.{{ website_setting('site_title') }} upon their 1st purchase
                                        from TheMall.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="protfolio_card">
                                <a href="#!"><img src="{{ asset('assets/frontend') }}/image/section_img/loyal4.png" alt="image"></a>
                                <div class="desc">
                                    <p>After 5th purchase is done, the customer will receive flat 5% Discount on 6th, 7th, 8th, 9th & 10th purchases from TheMall.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="protfolio_card">
                                <a href="#!"><img src="{{ asset('assets/frontend') }}/image/section_img/loyal5.png" alt="image"></a>
                                <div class="desc">
                                    <p>After the 10th purchase, or purchasing 10,000 Tk. products, the customer will receive a VIP Card from TheMall.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="loyality_rules">
                    <div class="common_title">
                        <h2>RULES FOR {{ website_setting('site_title') }}'S LOYALTY CARD</h2>
                    </div>
                    <ul>
                        <li>Any Customer of {{ website_setting('site_title') }} can claim a Loyalty Card and it will be Valid after Opening an account at www.{{ website_setting('site_title') }} upon their 1st purchase from TheMall.                        </li>
                        <li>The account must contain the name, present address, contact number and email address of the customer which must be used with every purchase.</li>
                        <li>Starting from the 1st purchase, the customer will receive 1 sticker on the Loyalty Card with every purchase done.</li>
                        <li>Only stickers of TheMall will be valid and counted.</li>
                        <li>It is the duty of the customer to let TheMall's customer service know about their purchase and ask for sticker.</li>
                        <li>It is duty of the customer to receive sticker from the Delivery person and stick it on the Loyalty Card.</li>
                        <li>All the stickers received must be on 1 Loyalty Card Only, stickers on more than 1 Loyalty card will not be valid and counted.</li>
                        <li>After 5th purchase is done, the customer will receive Flat 5% Discount on 6th, 7th, 8th, 9th & 10th purchases from TheMall.</li>
                        <li>After the 10th Purchase, the customer will receive a VIP Card from TheMall.</li>
                        <li>Or if the customer's purchase reaches 10,000 tk., he/she will be awarded with TheMall's exclusive VIP Card.</li>
                        <li>TheMall's VIP Card Holders would get Flat 10% Discount on EVERY Purchase from TheMall with many other Value Added Services.</li>
                        <li>TheMall has full authority to cease the Loyalty Card/VIP Card upon any Breach of the above Rules & Regulations.</li>
                        <li>TheMall holds every right to amend or delete any of the Rules & Regulations any time.</li>
                        <li>None of the Discounts of Either Loyalty or VIP Card will be applicable on products already on Sale/Discount/Package/Bundle.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- loyal section end here -->


    </x-slot>
</x-layout>
