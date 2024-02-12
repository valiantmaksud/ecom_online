<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Home' }} | {{ website_setting('site_title') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300&family=Mulish:ital,wght@0,200;0,300;0,400;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/style.css">

    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/cartlist.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/search-box.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/profile.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/cart-button.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/product-details.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/price-range.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/common.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/variable.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/image-zoom.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/quick-view.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/scrollbar.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/auth.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/checkout.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/footer-links.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/venobox.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/navbar.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/sidebar-menu.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/custom.css">

    <link href="{{ asset('assets/share/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/share/select2/css/select2-custom.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/frontend')}}/css/responsive.css">
    {{-- <link href="{{ asset('assets/share/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" /> --}}

    <style>
        .navbar-light .navbar-nav .nav-link.active, .navbar-light, .navbar .navbar-nav .nav-item a, .navbar_buttons i {
            color: {{ website_setting('header_text_color') }} !important;
        }
         ul.footer_links li a, ul.footer_links li, .footer_social a, .footer_content {
            color: {{ website_setting('footer_text_color') }} !important;
        }
        .footer_list {
            background-color: {{ website_setting('footer_bg_color') }} !important;
        }
        
    </style>
</head>

<!--================================
	    HEAD SECTION END
==================================-->
