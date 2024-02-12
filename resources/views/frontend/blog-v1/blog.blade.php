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
    <div class="blogHeader_section blognewheader_section">
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

    <!-- mallblog banner start here -->
    <div class="mallblog_banner">
        <div class="container">
            <div class="mallblog_ban_inner">
                <div class="blog_ban_slider">
                    <div class="swiper blog_Swiper">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="newblog_img">
                                <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_swiper1.jpg" alt="image"></a>
                                <a href="mallblog.html">কখন আপনার স্কিন কেয়ার  পণ্যগুলি রিপ্লেস করবেন?</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="newblog_img">
                                <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_swiper2.jpg" alt="image"></a>
                                <a href="mallblog.html">কখন আপনার স্কিন কেয়ার  পণ্যগুলি রিপ্লেস করবেন?</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="newblog_img">
                                <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_swiper1.jpg" alt="image"></a>
                                <a href="mallblog.html">কখন আপনার স্কিন কেয়ার  পণ্যগুলি রিপ্লেস করবেন?</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="newblog_img">
                                <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_swiper2.jpg" alt="image"></a>
                                <a href="mallblog.html">কখন আপনার স্কিন কেয়ার  পণ্যগুলি রিপ্লেস করবেন?</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="newblog_img">
                                <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_swiper1.jpg" alt="image"></a>
                                <a href="mallblog.html">কখন আপনার স্কিন কেয়ার  পণ্যগুলি রিপ্লেস করবেন?</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="newblog_img">
                                <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_swiper2.jpg" alt="image"></a>
                                <a href="mallblog.html">কখন আপনার স্কিন কেয়ার  পণ্যগুলি রিপ্লেস করবেন?</a>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mallblog banner end here -->


    <!-- blog trending section start here -->
    <div class="blog_trending">
        <div class="container-fluid">
            <div class="blog_trending_inner">
                <div class="common_title">
                    <h2>trending</h2>
                </div>
                <div class="trending_items">
                    <div class="trending_box">
                        <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_trending.jpg" alt="image"></a>
                        <a href="mallblog.html">চুল বড় করার জন্য সেরা কিছু তেল</a>
                    </div>
                    <div class="trending_box">
                        <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_trending.jpg" alt="image"></a>
                        <a href="mallblog.html">চুল বড় করার জন্য সেরা কিছু তেল</a>
                    </div>
                    <div class="trending_box">
                        <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_trending.jpg" alt="image"></a>
                        <a href="mallblog.html">চুল বড় করার জন্য সেরা কিছু তেল</a>
                    </div>
                    <div class="trending_box">
                        <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_trending.jpg" alt="image"></a>
                        <a href="mallblog.html">চুল বড় করার জন্য সেরা কিছু তেল</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog trending section end here -->


    <!-- blog skincare section start here -->
    <div class="blog_skincare">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="blog_skincare_inner">
                        <div class="common_title">
                            <h2>skincare</h2>
                        </div>
                        <div class="row gx-5">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_skincare1.jpg" alt="image"></a>
                                        <a class="skincare_text" href="mallblog.html">ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</a>
                                    </div>
                                    <div class="col-12">
                                        <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_skincare2.jpg" alt="image"></a>
                                        <a class="skincare_text" href="mallblog.html">ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_skincare3.jpg" alt="image"></a>
                                        <a class="skincare_text" href="mallblog.html">ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</a>
                                    </div>
                                    <div class="col-12">
                                        <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_skincare4.jpg.png" alt="image"></a>
                                        <a class="skincare_text" href="mallblog.html">ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog skincare section end here -->


    <!-- blog makeup section start here -->
    <div class="blog_makeup">
        <div class="container">
            <div class="blog_makeup_inner">
                <div class="row justify-content-center mx-lg-0">
                    <div class="col-md-3">
                        <div class="blogmakeup_box">
                            <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_mekeup.jpg" alt="image"></a>
                            <a href="mallblog.html">ফাউন্ডেশন অক্সিডাইজ করছে ?</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="blogmakeup_box">
                            <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_makeup2.jpg" alt="image"></a>
                            <a href="mallblog.html">ফাউন্ডেশন অক্সিডাইজ করছে ?</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="blogmakeup_box">
                            <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_makeup3.jpg" alt="image"></a>
                            <a href="mallblog.html">ফাউন্ডেশন অক্সিডাইজ করছে ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog makeup section end here -->


    <!-- blog other section start here -->
    <div class="blog_other">
        <div class="container">
            <div class="blog_other_inner">
                <div class="row justify-content-center mx-lg-0 gx-5">
                    <div class="col-md-6">
                        <div class="blogmakeup_box">
                            <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blogother1.jpg" alt="image"></a>
                            <a href="mallblog.html">মেকআপ ব্রাশ ব্যবহারের সঠিক নিয়ম</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blogmakeup_box">
                            <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blogother2.jpg" alt="image"></a>
                            <a href="mallblog.html">মেকআপ ব্রাশ ব্যবহারের সঠিক নিয়ম</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mx-lg-0 gx-5">
                    <div class="col-md-4">
                        <div class="blogmakeup_box">
                            <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blogother3.jpg" alt="image"></a>
                            <a href="mallblog.html">মেকআপ ব্রাশ ব্যবহারের সঠিক নিয়ম</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blogmakeup_box">
                            <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blogother4.jpg" alt="image"></a>
                            <a href="mallblog.html">মেকআপ ব্রাশ ব্যবহারের সঠিক নিয়ম</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blogmakeup_box">
                            <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blogother5.jpg" alt="image"></a>
                            <a href="mallblog.html">মেকআপ ব্রাশ ব্যবহারের সঠিক নিয়ম</a>
                        </div>
                    </div>
                </div>
                <div class="blog_btn">
                    <a href="#!">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
    <!-- blog other section end here -->

    <!-- blog haircare section start here -->
    <div class="blog_hair">
        <div class="container">
            <div class="blog_hair_inner">
                <div class="common_title">
                    <h2>haircare</h2>
                </div>
                <a href="mallblog.html">চুল বড় করার জন্য সেরা </a>
                <a href="mallblog.html">ডেলিভারির পর ও আপনার চুল রাখুন সুন্দর !!</a>
                <a href="mallblog.html">চুলের রং পছন্দ করুন ত্বকের টোন অনুযায়ী</a>
            </div>
            <div class="blog_btn">
                <a href="#!">VIEW ALL</a>
            </div>
        </div>
    </div>
    <!-- blog haircare section end here -->


    <!-- blog health care section start here -->
    <div class="blog_skincare">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="blog_skincare_inner">
                        <div class="common_title">
                            <h2>health care</h2>
                        </div>
                        <div class="row gx-5">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_skincare1.jpg" alt="image"></a>
                                        <a class="skincare_text" href="mallblog.html">ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</a>
                                    </div>
                                    <div class="col-12">
                                        <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_skincare2.jpg" alt="image"></a>
                                        <a class="skincare_text" href="mallblog.html">ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_skincare3.jpg" alt="image"></a>
                                        <a class="skincare_text" href="mallblog.html">ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</a>
                                    </div>
                                    <div class="col-12">
                                        <a href="mallblog.html"><img src="{{ asset('assets/frontend') }}/image/section_img/blog_skincare4.jpg.png" alt="image"></a>
                                        <a class="skincare_text" href="mallblog.html">ফাঙ্গাল অ্যাকনে ও তা ন্যাচারালি দূর করার উপায়</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog health care section end here -->

    <!-- blog insta section start here -->
    <div class="blog_insta">
        <div class="container">
            <div class="blog_insta_inner">
                <div class="common_title">
                    <h2>follow us on instagram</h2>
                </div>
                <div class="swiper footer_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide blog_footer_swiper">
                            <a href="#"><img src="{{ asset('assets/frontend') }}/image/section_img/foot_slide1.jpg" alt="image"></a>
                            <div class="hove_icon">
                                <i class="far fa-heart"></i> <span>0</span>
                                <i class="far fa-comment"></i> <span>0</span>
                            </div>
                        </div>
                        <div class="swiper-slide blog_footer_swiper">
                            <a href="#"><img src="{{ asset('assets/frontend') }}/image/section_img/foot_slide2.jpg" alt="image"></a>
                            <div class="hove_icon">
                                <i class="far fa-heart"></i> <span>0</span>
                                <i class="far fa-comment"></i> <span>0</span>
                            </div>
                        </div>
                        <div class="swiper-slide blog_footer_swiper">
                            <a href="#"><img src="{{ asset('assets/frontend') }}/image/section_img/foot_slide3.jpg" alt="image"></a>
                            <div class="hove_icon">
                                <i class="far fa-heart"></i> <span>0</span>
                                <i class="far fa-comment"></i> <span>0</span>
                            </div>
                        </div>
                        <div class="swiper-slide blog_footer_swiper">
                            <a href="#"><img src="{{ asset('assets/frontend') }}/image/section_img/foot_slide4.jpg" alt="image"></a>
                            <div class="hove_icon">
                                <i class="far fa-heart"></i> <span>0</span>
                                <i class="far fa-comment"></i> <span>0</span>
                            </div>
                        </div>
                        <div class="swiper-slide blog_footer_swiper">
                            <a href="#"><img src="{{ asset('assets/frontend') }}/image/section_img/foot_slide5.jpg" alt="image"></a>
                            <div class="hove_icon">
                                <i class="far fa-heart"></i> <span>0</span>
                                <i class="far fa-comment"></i> <span>0</span>
                            </div>
                        </div>
                        <div class="swiper-slide blog_footer_swiper">
                            <a href="#"><img src="{{ asset('assets/frontend') }}/image/section_img/foot_slide6.jpg" alt="image"></a>
                            <div class="hove_icon">
                                <i class="far fa-heart"></i> <span>0</span>
                                <i class="far fa-comment"></i> <span>0</span>
                            </div>
                        </div>
                        <div class="swiper-slide blog_footer_swiper">
                            <a href="#"><img src="{{ asset('assets/frontend') }}/image/section_img/foot_slide7.png" alt="image"></a>
                            <div class="hove_icon">
                                <i class="far fa-heart"></i> <span>0</span>
                                <i class="far fa-comment"></i> <span>0</span>
                            </div>
                        </div>
                        <div class="swiper-slide blog_footer_swiper">
                            <a href="#"><img src="{{ asset('assets/frontend') }}/image/section_img/foot_slide8.jpg" alt="image"></a>
                            <div class="hove_icon">
                                <i class="far fa-heart"></i> <span>0</span>
                                <i class="far fa-comment"></i> <span>0</span>
                            </div>
                        </div>
                        <div class="swiper-slide blog_footer_swiper">
                            <a href="#"><img src="{{ asset('assets/frontend') }}/image/section_img/foot_slide9.jpg" alt="image"></a>
                            <div class="hove_icon">
                                <i class="far fa-heart"></i> <span>0</span>
                                <i class="far fa-comment"></i> <span>0</span>
                            </div>
                        </div>
                        <div class="swiper-slide blog_footer_swiper">
                            <a href="#"><img src="{{ asset('assets/frontend') }}/image/section_img/foot_slide6.jpg" alt="image"></a>
                            <div class="hove_icon">
                                <i class="far fa-heart"></i> <span>0</span>
                                <i class="far fa-comment"></i> <span>0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog insta section end here -->


    <!-- blog form start here -->
    <div class="blog_form new_blog_form">
        <div class="common_title">
            <h2>is it cool if we email you?</h2>
        </div>
        <div>
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
