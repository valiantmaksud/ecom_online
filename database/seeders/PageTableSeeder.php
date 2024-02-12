<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->datas() as $key => $item) {
            Page::UpdateOrCreate(['slug'=> $item['slug']],$item);
        }
    }


    private function datas()
    {
        return [
            ['title'=> 'About Us', 'slug'=> 'about-us', 'created_by'=> 1, 'image'=> 'assets/frontend/image/section_img/about.jfif', 'content'=> 'site_title is one of the first E-commerce sites in Bangladesh which offers directly imported products
            only from UK and USA to your doorsteps. We only offer products that are already in our store, thus enabling
             us to deliver the goods in shortest possible time. Now you can shop for your favorite brand of cosmetics,
              baby products, grooming needs, perfumes, dental and medical products from the comfort of your home.
              For hassle free shopping we have cash on delivery and B-kash option. We understand the busy nature of
               our modern day customers. Hence it became our mission to start site_title, catering specially for
                their needs. Our customers can search through thousands of famous brand products from our ever growing
                 list in the website, with details about the products, to find the one suiting just their needs. Having
                  technology on our side we have devised our website to be as accessible and easy as it would be fast.
                   The high-end products are neatly categorized for the ease of the customer, also saving their valuable
                    time. Live globally, buy locally. With site_title, we look forward to raising an online shopping
                     revolution combining the gratification of the super market with the convenience of Internet. Our
                     well stocked stores cut down the time of delivering the products to your doorstep by half. So the
                      buying experience becomes that much sweeter.'],
            ['title'=> 'Terms and Conditions', 'slug'=> 'terms-and-conditions', 'created_by'=> 1, 'image'=> '', 'content'=> '<span>Overview</span>

            <p>This website is operated by Site Limited. Throughout the site, the terms “we”, “us” and
                 “our” refer to Site Limited. Site Limited offers this website, including all information,
                  tools and services available from this site to you, the user, conditioned upon your acceptance of
                   all terms, conditions, policies and notices stated here.
            </p>
            <span>Changes to the Terms of Service and the Website</span>
            <p>By visiting our site andor purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. By using the Services, you are agreeing to all of the Terms of Service, as may be updated by us from time to time. We reserve the right to update the Website and these Terms of Service from time to time, at our discretion and without any prior notice. It is solely your responsibility to keep up-to-date with the latest Terms and Conditions by checking back regularly. Your continued use of the Website following the publishing of updated Terms of Service will be taken to mean that you have read and agree to the changes.</p>
            <span>Access to the Website</span>
            <p>We work hard to ensure the Website is always up and available, but we can\'t guarantee that the Website will not have downtime for any reason. We reserve the right to close the Website for short periods of time for general maintenance, but will attempt to keep this to a minimum. We will not be liable if for any reason all or any part of the Website is unavailable at any time, for any length of time.</p>
            <p>Parts of the Website require you to input a password to access certain features. This is to be able to give you details relevant to your order whilst still keeping them private to you. To do this, as part of our security procedures, we require you to register an account with Site Limited by entering your email and phone number and choosing a secure password. We highly recommend that you choose a strong password that is hard for others to guess, and you log out from your account at the end of every session. There is a password reset procedure in case you forget your password. You must treat your account log-in information as confidential, not disclosing it to any third party. If you think there may have been any breach of security then it is your responsibility to notify us immediately and if log-in is possible, to change your password.</p>
            <p>It is a condition of your use of the Website that all the information you provide on the Website is correct, current and complete. We reserve the right to disable any user account in our sole discretion, at any time for any or no reason, including if, in our opinion, you have failed to comply with any provision of these Terms of Service.</p>
            <p>We do not guarantee that the Website or any content provided on the Website is error free. We manage your personal data according to our Privacy Policy.</p>
            <span>Prohibitions</span>

            <p></p>
            <p>You must not misuse this Website. You will not: commit or encourage a criminal offense; transmit or distribute a virus, Trojan, worm, logic bomb or any other material which is malicious, technologically harmful, in breach of confidence or in any way offensive or obscene; hack into any aspect of the Service; corrupt data; cause annoyance to other users; infringe upon the rights of any other person’s proprietary rights; send any unsolicited advertising or promotional material, commonly referred to as “spam”; or attempt to affect the performance or functionality of any computer facilities of or accessed through this Website. Breaching this provision would constitute a criminal offense and Site Limited will report any such breach to the relevant law enforcement authorities and disclose your identity to them. </p>
            <span>Product information</span>

            <p>Site Limited takes great care when putting product information, descriptions and images on-line but will not be held responsible for any mistakes or omissions to any information given.</p>
            <span>Prices</span>

            <p>The prices indicated on the website of Site Limited are shown in BDT (Bangladesh Taka) and do not include delivery costs. The delivery costs are clearly shown in the checkout page and invoiced at the end of the order in addition to the price of the products. We reserve the right to modify our prices at any moment but this will be indicated to you on the order at the time the order is placed.</p>
            <span>Delivery</span>

            <p>Site Limited does everything in its power to respect the delivery times indicated on the website. We cannot, however, be held responsible for late delivery caused by any incident beyond our control.</p>
            <span>Return Policy</span>

            <p>If you receive a product that is damaged in shipping, defective or that is not the product you ordered, please return it to Site Limited and we\'ll arrange for a replacement. But some conditions apply. Those are:</p>
            <ul>
                <li>Order must be checked in front of the delivery person (Inside Dhaka).</li>
                <li>If you find any defect and you think you need to return the product, inform the “Customer Service Department” as soon as possible along with a picture and return it instantly. (Inside Dhaka)</li>
                <li>If product is damaged it must be informed immediately after receiving and retuned within 3 days from the day the product has been received. (Outside Dhaka)</li>
                <li>Product must be intact, however there can be exception (if the product is damaged).</li>
                <li>Used or Swatched product will not be considered for exchange or refund.</li>
                <li>If the customer chooses or places an order by themselves and want to return/change the product (except damaged products) the request will not be accepted.</li>
                <li>And in case of return for exceptional circumstances, customer must pay the transportation cost.</li>
                <li>Original Invoice must be returned along with the product.</li>
            </ul>
            <span>Verification:</span>

            <p>Once we receive your returned product, the product will be forwarded to the Product Development and Inspection Department. It will take 1-2 business days to verify the issue and after verification if it is found that the claim is valid, then the product will be exchanged or money will be refunded.</p>

            <div class="common_title">
                <h2>Lifestyle’s Return Policy</h2>
            </div>
            <span>Procedure to return a product:</span>

            <p>Product must be checked in front of our delivery person (Inside Dhaka) and for outside Dhaka, you will have at most 24 hours after item delivery, to notify us that you want to return your product. If your item meets all the requirements, your return can be initiated by calling our Customer Service Department at 01977300901, 01977300902 or inbox us. </p>
            <span>Reasons for returning or replacement:</span>

            <ul>
                <li>If the received product is damaged, defective or ordered incorrect size at the time of delivery.</li>
                <li>If the ordered product is not the right product. </li>
            </ul>
            <span>Guidelines need to follow when customers are requesting to return or replace a product:</span>

            <ul>
                <li>No exchanges and trials for women tops, leggings, pants, sunglasses, jewelry except for shoes and sandals.</li>
                <li>For exchanging shoes and sandals, if any customers order it from our website on their own then replacement will not be possible except for they consult it with our Customer Service Department before placing order.</li>
                <li>Product must be intact, however there can be exception (if the product is damaged).</li>
                <li>  Shoes can be exchanged for once if these are unused, clean, and in their original state and packaging. For exchanging, customers need to inform our Customer Service Department within 24 hours (Outside Dhaka) and must be checked in front of our delivery person (Inside Dhaka).

                </li>
            </ul>
            <span>Following information must be given when customers inform to our Customer Service Department:</span>

            <ul>
                <li>Order Id.</li>
                <li>For any defected product, inform our “Customer Service Department” as soon as possible along with a picture.</li>
                <li>The reason for the return. </li>
            </ul>
            <span>Verification:</span>

            <ul>
                <li>Once we receive your returned product, the product will be forwarded to the Product Development and Inspection Department. It will take 2-3 working days to verify the issue and after verification, if it is found that the claim is valid, then the product will be exchanged or money will be refunded.</li>
                <li>If the claim is not valid then Site will not be liable to exchange or return the money.</li>
            </ul>
            <span>Privacy and protection of personal data</span>

            <p>The details you give us are essential for the processing and delivery of your orders, and therefore failure to provide these details will result in the cancellation of your order. By registering on the Site, you agree to provide us with sincere and true information as it concerns you. Communicating false information is contrary to the present general Terms and Conditions.</p>
            <p>You have the right to access and rectify all the information that concerns you. You can at any time make a request to Site Limited to find out what personal information we hold concerning you. You may at any time, and by request, modify this information.</p>
            <p>We use "Cookies" to generate statistics based on data from visitors to our site and suggest products that might interest you according to the items that you selected when you previously visited the site. Cookies do not contain any confidential information about you.</p>
            <span>Intellectual ownership &amp; Copyright</span>

            <p>The intellectual property rights in all software and content (including photographic images) made available to you on or through this Website remains the property of Site Limited or its licensors and are protected by copyright laws and treaties around the world. All such rights are reserved by Site Limited and its licensors. You may store, print and display the content supplied solely for your own personal use. You are not permitted to publish, manipulate, distribute or otherwise reproduce, in any format, any of the content or copies of the content supplied to you or which appears on this Website nor may you use any such content in connection with any business or commercial enterprise.</p>
            <span>Variation</span>

            <p>Site Limited shall have the right in its absolute discretion at any time and without notice to amend, remove or vary the Services and/or any page of this Website.</p>
            <span>Invalidity</span>

            <p>If any part of the Terms of Service is unenforceable the enforce ability of any other part of the Terms of Service will not be affected all other clauses remaining in full force and effect. So far as possible where any clause/sub-clause or part of a clause/sub-clause can be severed to render the remaining part valid, the clause shall be interpreted accordingly. Alternatively, you agree that the clause shall be rectified and interpreted in such a way that closely resembles the original meaning of the clause /sub-clause as is permitted by law.</p>
            <span>Feedback &amp; Comments</span>

            <p>Any opinions left on the Website by customers are screened and moderated by Site Limited. If the comments infringe on the law or are inappropriate (abusive publicity, defamation, insults, out of context commentary etc.), Site Limited reserves the right to refuse or modify it.</p>
            <span>Entire Agreement</span>

            <p>The above Terms of Service constitute the entire agreement of the parties and supersede any and all preceding and contemporaneous agreements between you and Site Limited. Any waiver of any provision of the Terms of Service will be effective only if in writing and authorized by Site Limited.</p>'],

            ['title'=> 'Privacy Policy', 'slug'=> 'privacy-and-policy', 'created_by'=> 1, 'image'=> '', 'content'=> '<span>Privacy Policy at Site:</span>
            <p>Data protection is a matter of trust and your privacy is important to us. We shall therefore only use your name and other information which relates to you in the manner set out in this Privacy Policy. </p>
            <p> Personal Information that we collect:</p>
            <p>Personal information is collected for the purpose of identifying, locating or contacting any of our valued customers. It is necessary for giving our customers the genuine experience of online shopping. The types of Personal Information that we collect are:</p>
            <p>Contact Information that allows us to communicate with you, such as your name, postal addresses, email addresses, social media website user account names, telephone numbers, or other</p>
            <p>addresses at which you receive communications from or on behalf of Site.</p>
            <p>Transaction Information on how and what you are purchasing from Site.</p>
            <p>Financial Account Information, including your Bkash account numbers or your Credit/Debit card information, to process payments for when you buy at Site.</p>'],

            ['title'=> 'Payments', 'slug'=> 'payments', 'image'=> '', 'created_by'=> 1, 'content'=> '<p>At Site, we aspire to present the customers with the life time experience in easy online shopping. One of the most
            important factors in achieving this target is to make the transaction effortless for our clients. That is why we have
             incorporated the most popular of transaction methods. We accept:
       </p>
       <span>Cash on Delivery.  (Dhaka Only. Customers Outside Dhaka please pay by bKash or other payment methods) Bkash Credit or Debit card.</span>
       <span>1. Cash on Delivery:</span>
       <p>When you make a purchase using the COD option, your product will be booked. You will receive a call from us to confirm your
            Order before it gets dispatched. If you are unreachable or unable to attend the call, please contact us if you are still
             interested in receiving the product.
       </p>
       <span>2. BKash:</span>
       <p>bKash is a fast, affordable, secure, convenient and a nationwide service. bKash Limited,
            a subsidiary of BRAC Bank, started as a joint venture between BRAC Bank Limited,
             Bangladesh and Money in Motion LLC, USA.
       </p>
       <p>How to bKash:</p>
       <p>Please use following steps to pay now:</p>
       <ul>
           <li>From checkout page select “Pay by bKash” and click on “Checkout”</li>
           <li>Enter you bKash account number and click on “Confirm” </li>
           <li>Enter the Verification Code that has been sent to your bKash account number and click on “Confirm” </li>
           <li>Enter your bKash pin and click on “Confirm” </li>
           <li>Done!!!</li>
       </ul>
       <span>3. Credit or debit card: </span>
       <p>Credit cards</p>
       <p>We accept payments made using Visa, MasterCard and American Express credit cards.
            To pay using your credit card at checkout, you will need your card number, expiry date,
             three-digit CVV number (found on the backside of your card).
       </p>
       <p>Debit cards</p>
       <p>We accept payments made using Visa, MasterCard and Maestro debit cards.</p>
       <p>To pay using your debit card at checkout, you will need your card number, expiry date (optional for Maestro cards),
       three-digit CVV number (optional for Maestro cards).
       </p>'],
        ];
    }
}
