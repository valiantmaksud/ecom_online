<!doctype html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>Two Step Verification | {{ website_setting('site_title') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/admin/') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/admin/') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/admin/') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    
    <body>

    <!-- <body data-layout="horizontal"> -->

        <div class="authentication-bg min-vh-100">
            <div class="bg-overlay bg-white"></div>
            <div class="container">
                <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                 <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        
                        <div class="text-center py-5">
                            <div class="mb-4 mb-md-5">
                                <a href="index.html" class="d-block auth-logo">
                                    <img src="assets/images/logo-dark.png" alt="" height="22" class="auth-logo-dark">
                                    <img src="assets/images/logo-light.png" alt="" height="22" class="auth-logo-light">
                                </a>
                            </div>
                            <div class="mb-4 mb-md-5">
                                <div class="avatar-lg mx-auto">
                                    <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                                        <i class="uil uil-envelope-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="text-muted mb-4 mb-md-5">
                                <h4 class="">Verify Your Email</h4>
                                <p>Please enter the 4 digit code sent to <span class="fw-semibold">{{ optional(auth()->user())->secondary_email }}</span></p>
                            </div>
                            <form method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-3">
                                        <div class="mb-3">
                                            <label for="digit1-input" class="visually-hidden">Dight 1</label>
                                            <input type="text" name="digit_1"
                                                class="form-control form-control-lg text-center"
                                                onkeyup="moveToNext(this, 2)" maxLength="1"
                                                id="digit1-input" required>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-3">
                                        <div class="mb-3">
                                            <label for="digit2-input" class="visually-hidden">Dight 2</label>
                                            <input type="text" name="digit_2"
                                                class="form-control form-control-lg text-center"
                                                onkeyup="moveToNext(this, 3)" maxLength="1"
                                                id="digit2-input" required>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-3">
                                        <div class="mb-3">
                                            <label for="digit3-input" class="visually-hidden">Dight 3</label>
                                            <input type="text" name="digit_3"
                                                class="form-control form-control-lg text-center"
                                                onkeyup="moveToNext(this, 4)" maxLength="1"
                                                id="digit3-input" required>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-3">
                                        <div class="mb-3">
                                            <label for="digit4-input" class="visually-hidden">Dight 4</label>
                                            <input type="text" name="digit_4"
                                                class="form-control form-control-lg text-center"
                                                onkeyup="moveToNext(this, 4)" maxLength="1"
                                                id="digit4-input" required>
                                        </div>
                                    </div><!-- end col -->
                                </div>
                                
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-info w-100">Confirm</button>
                                </div>
                            </form><!-- end form -->

                            <div class="mt-5 text-center text-muted">
                                <p>Didn't receive a code ? <a href="#" class="fw-medium text-decoration-underline">Resend</a></p>
                            </div>
                        </div>  
                        </div><!-- end col -->
                    </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-muted p-4">
                            <p class="mb-0">&copy; <script>document.write(new Date().getFullYear())</script> {{ website_setting('site_title') }}. </p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end authentication section -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/admin/') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/admin/') }}/libs/metismenujs/metismenujs.min.js"></script>
        <script src="{{ asset('assets/admin/') }}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('assets/admin/') }}/libs/feather-icons/feather.min.js"></script>

        <!-- two-step-verification js -->
        <script src="{{ asset('assets/admin/') }}/js/pages/two-step-verification.init.js"></script>

    </body>

</html>
