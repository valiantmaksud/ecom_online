<x-layout>
    <x-slot name="content">

    <!-- privacy section start here -->
    <div class="condition_section">
        <div class="container">
            <div class="condition_inner">
                <div class="condition_content">
                    <span>Privacy Policy at {{ website_setting('site_title') }}:</span>
                    <p>Data protection is a matter of trust and your privacy is important to us. We shall therefore only use your name and other information which relates to you in the manner set out in this Privacy Policy. </p>
                    <p> Personal Information that we collect:</p>
                    <p>Personal information is collected for the purpose of identifying, locating or contacting any of our valued customers. It is necessary for giving our customers the genuine experience of online shopping. The types of Personal Information that we collect are:</p>
                    <p>Contact Information that allows us to communicate with you, such as your name, postal addresses, email addresses, social media website user account names, telephone numbers, or other</p>
                    <p>addresses at which you receive communications from or on behalf of {{ website_setting('site_title') }}.</p>
                    <p>Transaction Information on how and what you are purchasing from {{ website_setting('site_title') }}.</p>
                    <p>Financial Account Information, including your Bkash account numbers or your Credit/Debit card information, to process payments for when you buy at {{ website_setting('site_title') }}.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- privacy section end here -->

    </x-slot>
</x-layout>
