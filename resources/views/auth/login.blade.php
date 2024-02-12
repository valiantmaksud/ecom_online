<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Sign In | {{ config('app.name') }}</title>
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

                        <x-alert />
                        <div class="text-center  py-5">
                            <div class="mb-4 mb-md-5">
                                <a href="/" class="d-block auth-logo">
                                    <img src="{{ asset('/') }}assets/images/logo-dark.png" alt=""
                                        height="22" class="auth-logo-dark">
                                    <img src="{{ asset('/') }}assets/images/logo-light.png" alt=""
                                        height="22" class="auth-logo-light">
                                </a>
                            </div>
                            <div class="mb-4">
                                <h5>Welcome Back !</h5>
                                <p>Sign in to continue to {{ config('app.name') }}.</p>
                            </div>
                            <form method="POST" action="{{ route('admin.login') }}">
                                @csrf
                                <div class="form-floating form-floating-custom mb-3">
                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email') }}" id="input-username" placeholder="Enter Email">
                                    <label for="input-username">Email</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>
                                <div class="form-floating form-floating-custom mb-3">
                                    <input type="password" class="form-control" name="password" id="input-password"
                                        placeholder="Enter Password">
                                    <label for="input-password">Password</label>
                                    <div class="form-floating-icon">
                                        <i class="uil uil-padlock"></i>
                                    </div>
                                </div>

                                <div class="form-check form-check-info font-size-16">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember-check">
                                    <label class="form-check-label font-size-14" for="remember-check">
                                        Remember me
                                    </label>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-info w-100" type="submit">Log In</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="text-center text-muted p-4">
                            <p class="mb-0">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> {{ config('app.name') }}.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/admin/') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/admin/') }}/libs/metismenujs/metismenujs.min.js"></script>
    <script src="{{ asset('assets/admin/') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('assets/admin/') }}/libs/feather-icons/feather.min.js"></script>

</body>

</html>
