<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>e-Commerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300&family=Mulish:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/common.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/variable.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/blog-v1.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/footer-links.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/style-2.css">

</head>
<body>

    <!-- blog header section start here -->
    <div class="blogHeader_section">
        <div class="container-fluid">
            <div class="blogHeader_inner">
                <div class="blogHeader_left">
                    <a href="index.html"><img src="{{ asset('assets/frontend') }}/image/logo/Screenshot_1-removebg-preview.png" alt="image"></a>
                </div>
                <div class="blogHeader_middle">
                    <div class="blogHeader-body">
                        <input type="text" placeholder="Search Anything...">
                        <i class="far fa-search"></i>
                    </div>
                </div>
                <div class="blogHeader_right">
                    <ul>
                        <li><a href="#">the basics</a>
                            <div class="blog_mega">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="blog_mega_list">
                                            <ul>
                                                <li><a href="#">Basic Skincare Guideline</a></li>
                                                <li><a href="#">Skincare Routine</a></li>
                                                <li><a href="#">Basic Makeup Guideline</a></li>
                                                <li><a href="#">View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega1.jpg" alt="image">
                                                <p>অয়লি স্কিনের জন্য মেকআপ টিপস</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega2.jpg" alt="image">
                                                <p>ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega3.jpg" alt="image">
                                                <p>অয়লি স্কিনের জন্য মেকআপ টিপস</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">skin care</a>
                            <div class="blog_mega">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="blog_mega_list">
                                            <ul>
                                                <li><a href="#">Basic Skincare Guideline</a></li>
                                                <li><a href="#">Skincare Routine</a></li>
                                                <li><a href="#">Basic Makeup Guideline</a></li>
                                                <li><a href="#">View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega1.jpg" alt="image">
                                                <p>অয়লি স্কিনের জন্য মেকআপ টিপস</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega2.jpg" alt="image">
                                                <p>ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega3.jpg" alt="image">
                                                <p>অয়লি স্কিনের জন্য মেকআপ টিপস</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">hair care</a>
                            <div class="blog_mega">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="blog_mega_list">
                                            <ul>
                                                <li><a href="#">Basic Skincare Guideline</a></li>
                                                <li><a href="#">Skincare Routine</a></li>
                                                <li><a href="#">Basic Makeup Guideline</a></li>
                                                <li><a href="#">View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega1.jpg" alt="image">
                                                <p>অয়লি স্কিনের জন্য মেকআপ টিপস</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega2.jpg" alt="image">
                                                <p>ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega3.jpg" alt="image">
                                                <p>অয়লি স্কিনের জন্য মেকআপ টিপস</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">health care</a>
                            <div class="blog_mega">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="blog_mega_list">
                                            <ul>
                                                <li><a href="#">Basic Skincare Guideline</a></li>
                                                <li><a href="#">Skincare Routine</a></li>
                                                <li><a href="#">Basic Makeup Guideline</a></li>
                                                <li><a href="#">View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega1.jpg" alt="image">
                                                <p>অয়লি স্কিনের জন্য মেকআপ টিপস</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega2.jpg" alt="image">
                                                <p>ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega3.jpg" alt="image">
                                                <p>অয়লি স্কিনের জন্য মেকআপ টিপস</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">makeup</a>
                            <div class="blog_mega">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="blog_mega_list">
                                            <ul>
                                                <li><a href="#">Basic Skincare Guideline</a></li>
                                                <li><a href="#">Skincare Routine</a></li>
                                                <li><a href="#">Basic Makeup Guideline</a></li>
                                                <li><a href="#">View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega1.jpg" alt="image">
                                                <p>অয়লি স্কিনের জন্য মেকআপ টিপস</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega2.jpg" alt="image">
                                                <p>ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega3.jpg" alt="image">
                                                <p>অয়লি স্কিনের জন্য মেকআপ টিপস</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">babe care</a>
                            <div class="blog_mega">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="blog_mega_list">
                                            <ul>
                                                <li><a href="#">Basic Skincare Guideline</a></li>
                                                <li><a href="#">Skincare Routine</a></li>
                                                <li><a href="#">Basic Makeup Guideline</a></li>
                                                <li><a href="#">View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega1.jpg" alt="image">
                                                <p>অয়লি স্কিনের জন্য মেকআপ টিপস</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega2.jpg" alt="image">
                                                <p>ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega3.jpg" alt="image">
                                                <p>অয়লি স্কিনের জন্য মেকআপ টিপস</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">others</a>
                            <div class="blog_mega">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="blog_mega_list">
                                            <ul>
                                                <li><a href="#">Basic Skincare Guideline</a></li>
                                                <li><a href="#">Skincare Routine</a></li>
                                                <li><a href="#">Basic Makeup Guideline</a></li>
                                                <li><a href="#">View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega1.jpg" alt="image">
                                                <p>অয়লি স্কিনের জন্য মেকআপ টিপস</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega2.jpg" alt="image">
                                                <p>ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="blog_mega_img">
                                            <a href="#">
                                                <img src="{{ asset('assets/frontend') }}/image/section_img/blog_mega3.jpg" alt="image">
                                                <p>অয়লি স্কিনের জন্য মেকআপ টিপস</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="blogHeader_menu">
                    <i class="far fa-bars"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="blog_mobile_menu">
        <div class="blog_cross_bar">
            <i class="far fa-times"></i>
        </div>
        <ul>
            <li><a href="#">the baisc</a></li>
            <li><a href="#">skin care</a></li>
            <li><a href="#">hair care</a></li>
            <li><a href="#">health care</a></li>
            <li><a href="#">makeup</a></li>
            <li><a href="#">baby care</a></li>
            <li><a href="#">others</a></li>
        </ul>
    </div>
   <!-- blog header section end here -->

   <!-- blog banner section start here -->
   <div class="blogbanner_section">
        <div class="container">
            <div class="blogbanner_inner">
                <img src="{{ asset('assets/frontend') }}/image/section_img/blogbanner.jpg" alt="image">
            </div>
        </div>
   </div>
   <!-- blog banner section end here -->

   <!-- blog content section start here -->
   <div class="blogcontent_section">
        <div class="container">
            <div class="blogcontent_inner">
                <div class="common_title">
                    <h2>shop the story</h2>
                    <div class="image">
                        <img src="{{ asset('assets/frontend') }}/image/section_img/mallblog1.jpg" alt="image">
                        <div class="img_content">
                            <p>BY {{ website_setting('site_title') }} BLOG</p>
                            <span>25-JUL-2022</span>
                        </div>
                    </div>
                    <div class="content">
                        <p>আপনার শিশুর জন্ম হলে, এস্ট্রোজেন  মাত্রাও কমতে শুরু করে এবং তখন চুল ঝরে পড়তে শুরু করে। প্রসবের পর চুল পড়া বন্ধ করার জন্য খুব বেশি কিছু করা যায় না। সাধারণত শিশুর জন্মের ৬-৮ মাস পরে চুলগুলি তাদের প্রাক-গর্ভাবস্থায় ফিরে আসে। কিন্তু আপনার চুলের গঠন অস্থায়ীভাবে বা এমনকি স্থায়ীভাবে গর্ভাবস্থার পরে পরিবর্তিত হতে পারে। এটি অতিরিক্ত তৈলাক্ত বা খুব শুষ্ক, ভাঙা হতে পারে।</p>
                        <br>
                        <p>প্রসবের পর  চুল পড়ার সাথে জড়িত কিছু প্রচলিত ধারণা :</p>
                        <br>
                        <p>স্তন্যপান করানোর ফলে চুল পড়ে কারণ মা এর পুষ্টি শিশুর কাছে চলে যায়-</p>
                        <br>
                        <p>যদিও এটি লজিকাল মনে হতে পারে কিন্তু বুকের দুধ খাওয়ানো এবং চুল পড়া সরাসরি যুক্ত নয়। এমনকি ফর্মুলা ফিডিং মায়েদের  ও  চুল ঝরে । সব মায়েদের খাদ্যে অতিরিক্ত প্রোটিন অন্তর্ভুক্ত করতে হবে।তাহলে মায়ের প্রোটিন ঘাটতি কম হবে।</p>
                        <br>
                        <p>চুল পড়া বন্ধ করতে সব সময় চুল ঢেকে রাখুন</p>
                        <br>
                        <p>সবসময় আপনার চুল ঢেকে রাখলে ঘাম বা চুলকানির কারণ হতে পারে। মাথা ঢেকে রাখলেই  চুল পড়া বন্ধ করা যায় না।</p>
                        <br>
                        <p>চুলে সবসময় তেল দিয়ে রাখুন-</p>
                        <br>
                        <p>চুলে সবসময় তেল রাখবেন না। মাথার ত্বকের শ্বাস নেওয়া দরকার, তেল মাথার ত্বকে একটি অতিরিক্ত স্তর তৈরি করতে পারে। মাথার ত্বককে স্বাভাবিকভাবে শ্বাস নিতে দেওয়া ভাল। এছাড়া বেশি তেল বেশি ধুলো ধরে রাখে যার ফলে ময়লাও বেশি হবে। তার চেয়ে, সারারাত চুলে তেল দিয়ে পরের দিন ধুয়ে ফেলুন।</p>
                        <br>
                        <p>মায়ের জন্য চুলের যত্নের কিছু পরামর্শ:</p>
                        <br>
                        <p>- একটি ডিমের সাদা অংশ এবং দুই টেবিল চামচ অলিভ অয়েল ভালো করে ব্লেন্ড করে হেয়ার প্যাক তৈরি করুন। এটি আপনার চুলে প্রায় ৩০ মিনিটের জন্য প্রয়োগ করুন এবং তারপরে হালকা গরম বা ঠান্ডা জল দিয়ে ধুয়ে ফেলুন । </p>
                        <br>
                        <p>-সারারাত একটি পাত্রে মেথি গুঁড়া  ভিজিয়ে রাখুন। তরল ছেঁকে নিন এবং মাথার ত্বকে ম্যাসাজ করার জন্য ব্যবহার করুন। এরপর, তোয়ালে দিয়ে আপনার মাথা চার ঘণ্টা মুড়িয়ে রাখুন। আপনার চুল শ্যাম্পু দিয়ে ধুয়ে নিন এবং স্বাভাবিক নিয়মে কন্ডিশনার লাগান।</p>
                        <br>
                        <p>-ক্যাস্টর অয়েলের ১ ভাগ নারকেল তেল ৫ ভাগ মিশ্রিত করুন। এই মিশ্রণটি আপনার মাথার ত্বকে ম্যাসাজ করুন। সারারাত রেখে পরের দিন ভালো করে শ্যাম্পু করে ফেলুন ।</p>
                    </div>
                    <div class="blog_social">
                        <p>SHARE</p>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-facebook-f"></i>
                    </div>
                </div>
            </div>
        </div>
   </div>
   <!-- blog content section end here -->


    <!-- related product slide start here -->
    <div class="related_product_slide blog_page_slide">
        <div class="common_title">
            <h2>shop the story</h2>
        </div>
        <div class="container">
            <div class="slide_inner">
                <div class="swiper related_swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="#"><img src="{{ asset('assets/frontend') }}/image/bg/product1.jpg" alt="image"></a>

                                <div class="show_once">
                                    <span>This Refreshing Facewash is 100% soap free. This Vegan Facewash remove dirt, oil and impurities..</span>
                                    <a href="#">QUICK SHOP</a>
                                </div>

                                <p>Best Seller</p>

                            </div>
                            <div class="product_det">
                                <div class="review">
                                    <i class="fas fa-star"></i><i class="fas fa-star">
                                    </i><i class="fas fa-star"></i><i class="fas fa-star">
                                    </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                </div>
                                <p class="parent">POWER KNIGHT</p>
                                <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                <P class="child">
                                    <span>330$</span> 230$</P>
                            </div>

                            <div class="product_cart">
                                <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                </button> -->

                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                </button>

                            </div>

                            <div class="best_seller">
                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                            </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="#"><img src="{{ asset('assets/frontend') }}/image/bg/product1.jpg" alt="image"></a>

                                <div class="show_once">
                                    <span>This Refreshing Facewash is 100% soap free. This Vegan Facewash remove dirt, oil and impurities..</span>
                                    <a href="#">QUICK SHOP</a>
                                </div>

                                <p>Best Seller</p>

                            </div>
                            <div class="product_det">
                                <div class="review">
                                    <i class="fas fa-star"></i><i class="fas fa-star">
                                    </i><i class="fas fa-star"></i><i class="fas fa-star">
                                    </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                </div>
                                <p class="parent">POWER KNIGHT</p>
                                <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                <P class="child">
                                    <span>330$</span> 230$</P>
                            </div>

                            <div class="product_cart">
                                <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                </button> -->

                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                </button>

                            </div>

                            <div class="best_seller">
                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                            </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="#"><img src="{{ asset('assets/frontend') }}/image/bg/product1.jpg" alt="image"></a>

                                <div class="show_once">
                                    <span>This Refreshing Facewash is 100% soap free. This Vegan Facewash remove dirt, oil and impurities..</span>
                                    <a href="#">QUICK SHOP</a>
                                </div>

                                <p>Best Seller</p>

                            </div>
                            <div class="product_det">
                                <div class="review">
                                    <i class="fas fa-star"></i><i class="fas fa-star">
                                    </i><i class="fas fa-star"></i><i class="fas fa-star">
                                    </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                </div>
                                <p class="parent">POWER KNIGHT</p>
                                <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                <P class="child">
                                    <span>330$</span> 230$</P>
                            </div>

                            <div class="product_cart">
                                <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                </button> -->

                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                </button>

                            </div>

                            <div class="best_seller">
                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                            </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="#"><img src="{{ asset('assets/frontend') }}/image/bg/product1.jpg" alt="image"></a>

                                <div class="show_once">
                                    <span>This Refreshing Facewash is 100% soap free. This Vegan Facewash remove dirt, oil and impurities..</span>
                                    <a href="#">QUICK SHOP</a>
                                </div>

                                <p>Best Seller</p>

                            </div>
                            <div class="product_det">
                                <div class="review">
                                    <i class="fas fa-star"></i><i class="fas fa-star">
                                    </i><i class="fas fa-star"></i><i class="fas fa-star">
                                    </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                </div>
                                <p class="parent">POWER KNIGHT</p>
                                <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                <P class="child">
                                    <span>330$</span> 230$</P>
                            </div>

                            <div class="product_cart">
                                <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                </button> -->

                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                </button>

                            </div>

                            <div class="best_seller">
                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                            </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="product_box">
                            <div class="product_image">
                                <a href="#"><img src="{{ asset('assets/frontend') }}/image/bg/product1.jpg" alt="image"></a>

                                <div class="show_once">
                                    <span>This Refreshing Facewash is 100% soap free. This Vegan Facewash remove dirt, oil and impurities..</span>
                                    <a href="#">QUICK SHOP</a>
                                </div>

                                <p>Best Seller</p>

                            </div>
                            <div class="product_det">
                                <div class="review">
                                    <i class="fas fa-star"></i><i class="fas fa-star">
                                    </i><i class="fas fa-star"></i><i class="fas fa-star">
                                    </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                </div>
                                <p class="parent">POWER KNIGHT</p>
                                <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                <P class="child">
                                    <span>330$</span> 230$</P>
                            </div>

                            <div class="product_cart">
                                <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                </button> -->

                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                    <i class="fas fa-shopping-bag"></i> ADD TO CART
                                </button>

                            </div>

                            <div class="best_seller">
                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                            </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="#"><img src="{{ asset('assets/frontend') }}/image/bg/product1.jpg" alt="image"></a>

                                    <div class="show_once">
                                        <span>This Refreshing Facewash is 100% soap free. This Vegan Facewash remove dirt, oil and impurities..</span>
                                        <a href="#">QUICK SHOP</a>
                                    </div>

                                    <p>Best Seller</p>

                                </div>
                                <div class="product_det">
                                    <div class="review">
                                        <i class="fas fa-star"></i><i class="fas fa-star">
                                        </i><i class="fas fa-star"></i><i class="fas fa-star">
                                        </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                    </div>
                                    <p class="parent">POWER KNIGHT</p>
                                    <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                    <P class="child">
                                        <span>330$</span> 230$</P>
                                </div>

                                <div class="product_cart">
                                    <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                        <i class="fas fa-shopping-bag"></i> ADD TO CART
                                    </button> -->

                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                        <i class="fas fa-shopping-bag"></i> ADD TO CART
                                    </button>

                                </div>

                                <div class="best_seller">
                                    <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                    <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                                </div>
                            </div>
                      </div>
                      <div class="swiper-slide">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="#"><img src="{{ asset('assets/frontend') }}/image/bg/product1.jpg" alt="image"></a>

                                    <div class="show_once">
                                        <span>This Refreshing Facewash is 100% soap free. This Vegan Facewash remove dirt, oil and impurities..</span>
                                        <a href="#">QUICK SHOP</a>
                                    </div>

                                    <p>Best Seller</p>

                                </div>
                                <div class="product_det">
                                    <div class="review">
                                        <i class="fas fa-star"></i><i class="fas fa-star">
                                        </i><i class="fas fa-star"></i><i class="fas fa-star">
                                        </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                    </div>
                                    <p class="parent">POWER KNIGHT</p>
                                    <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                    <P class="child">
                                        <span>330$</span> 230$</P>
                                </div>

                                <div class="product_cart">
                                    <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                        <i class="fas fa-shopping-bag"></i> ADD TO CART
                                    </button> -->

                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                        <i class="fas fa-shopping-bag"></i> ADD TO CART
                                    </button>

                                </div>

                                <div class="best_seller">
                                    <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller1.png" alt="image">
                                    <img src="{{ asset('assets/frontend') }}/image/bg/best_Seller2.png" alt="image">
                                </div>
                            </div>
                      </div>
                      <div class="swiper-slide">
                            <div class="product_box">
                                <div class="product_image">
                                    <a href="#"><img src="{{ asset('assets/frontend') }}/image/bg/product1.jpg" alt="image"></a>

                                    <div class="show_once">
                                        <span>This Refreshing Facewash is 100% soap free. This Vegan Facewash remove dirt, oil and impurities..</span>
                                        <a href="#">QUICK SHOP</a>
                                    </div>

                                    <p>Best Seller</p>

                                </div>
                                <div class="product_det">
                                    <div class="review">
                                        <i class="fas fa-star"></i><i class="fas fa-star">
                                        </i><i class="fas fa-star"></i><i class="fas fa-star">
                                        </i><i class="fas fa-star"></i> <a class="view" href="#">(1 reviews)</a>
                                    </div>
                                    <p class="parent">POWER KNIGHT</p>
                                    <a href="#">Power Kinght pro fiver Very Damaged...</a>
                                    <P class="child">
                                        <span>330$</span> 230$</P>
                                </div>

                                <div class="product_cart">
                                    <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                        <i class="fas fa-shopping-bag"></i> ADD TO CART
                                    </button> -->

                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
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
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

    </div>
    <!-- related product slide end here -->


    <!-- blog form start here -->
    <div class="blog_form">
        <div class="common_title">
            <h2>is it cool if we email you?</h2>
        </div>
        <div class="blog-subscriber">
            <input type="text" placeholder="EMAIL ADDRESS">
            <a href="#">SUBSCRIBE</a>
        </div>
    </div>
    <!-- blog form start here -->


    <!-- blog copyright -->
    <div class="blog_copyright">
        <div class="container">
            <div class="blog_deck">
                <ul>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="conditions.html">TERMS & POLICY</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
                <p>© 2022 TheMallBd. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- blog copyright -->



    <!-- scripts js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="{{ asset('assets/frontend')}}/js/script.js"></script>
    <script src="{{ asset('assets/frontend')}}/js/script-2.js"></script>
    <script src="{{ asset('assets/frontend')}}/js/slider.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


</body>
</html>
