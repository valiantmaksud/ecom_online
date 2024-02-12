<x-layout>
    <x-slot name="content">

    <!-- vip section start here -->
    <div class="vip_section">
        <div class="container">
            <div class="vip_inner">
                <div class="vip_ban">
                    <img src="{{ asset('assets/frontend') }}/image/section_img/vip1.png" alt="image">
                </div>
                <div class="common_title">
                    <h2>VIP CARD</h2>
                    <img src="{{ asset('assets/frontend') }}/image/section_img/vip2.png" alt="image">
                </div>
                <div class="vip_rules">
                    <h3>RULES & REGULATIONS OF VIP CARD</h3>
                    <div class="rules">
                        <ul>
                            <li>The Vip card can only be used by the person on whose name the card has been issued to.</li>
                            <li>This card is valid only at {{ website_setting('site_title') }} and other corporate clients affiliated with {{ website_setting('site_title') }}.</li>
                            <li>For redemption of the VIP card, minimum purchase of BDT 10,000 Tk must be done in a year.</li>
                            <li>Lost card can be replaced with the payment of BDT 200tk.</li>
                            <li>Use of this card constitutes acceptance of terms & conditions of {{ website_setting('site_title') }} and regulations issued thereunder as may be amended from time to time.
                                 {{ website_setting('site_title') }} reserves the right to change the benefits and rules of membership without prior notice.</li>
                        </ul>
                    </div>
                </div>
                <div class="text-center"><b>***Terms & Conditions Applied.***</b></div>
                <div class="vip_term">
                    <h3>MORE BENEFITS FOR ALL MEMBERS:</h3>

                    <div class="terms">
                        <p>18 Hours Dedicated Customer Service</p>
                        <p>{{ website_setting('site_title') }} Facebook Group</p>
                        <p>& Many more!</p>
                    </div>
                    
                </div>
                <div class="reward">
                    <div class="common_title">
                        <h2>REWARDS ACTIVITY</h2>
                        <p>You haven't redeemed any rewards yet!</p>
                    </div>
                    <img src="{{ asset('assets/frontend') }}/image/section_img/reward1.png" alt="image"> <br>
                    <a href="#!">View Pints & Spend</a>
                </div>
            </div>
        </div>
    </div>
    <!-- vip section end here -->

    </x-slot>
</x-layout>
