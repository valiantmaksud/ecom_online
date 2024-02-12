<head>

    <!-- META TAGS -->
    <meta charset="utf-8" />

    <!-- TITLE -->
    <title>{{ $title ?? 'Home' }} | {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Ecommerce" name="description" />
    <meta content="Ecommerce Fan" name="author" />



    <!-- APP FAVICON -->
    <link rel="shortcut icon" href="{{ asset('assets/admin') }}/images/favicon.ico">

    <!-- PLUGIN CSS -->
    <link href="{{ asset('assets/admin') }}/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- BOOTSTRAP CSS -->
    <link href="{{ asset('assets/admin') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- ICONS CSS -->
    <link href="{{ asset('assets/admin') }}/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!--  APP CSS -->
    <link href="{{ asset('assets/admin') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    
    <!-- Gird JS -->
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/libs/gridjs/theme/mermaid.min.css">


    <link rel="stylesheet" href="{{ asset('assets/admin') }}/libs/fontawesome/css/all.min.css">

    <!-- MATERIAL DESIGN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/admin') }}/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />


    <link href="{{ asset('assets/share') }}/select2/css/select2.min.css" rel="stylesheet" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

    <link href="{{ asset('assets/share') }}/select2/css/select2-custom.css" rel="stylesheet" />

    <!-- Sweet Alert-->
    <link href="{{ asset('assets/admin') }}/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
   
    <link href="{{ asset('assets/admin') }}/css/custom-style.css" rel="stylesheet" type="text/css" />

    <!-- PAGE SPECIFIC STYLES -->

    {{ $css ?? '' }}

</head>
