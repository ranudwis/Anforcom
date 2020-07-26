<!DOCTYPE html>
<html lang="en">

<head>
    <title>You have been registered</title>
    <!--  meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/enrollment/css/regist.css') }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/icons/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png" />
    <!--===============================================================================================-->
</head>

<body>
    <div id="main-content">
        <div class="container d-flex" id="content">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <!-- Anforcom's logo container -->
                    <div class="container text-left mt-3">
                        <img src="{{ asset('assets/enrollment/images/logo-putih.png') }}" alt="Anforcom Logo" class="logo">
                    </div>
                    <!-- End of Anforcom's logo container -->

                    <!-- Main title -->
                    <div class="container main-title mt-4 mb-4">
                        <h1>Mohon maaf, Anda tidak dapat mendaftar event ini.</h1>
                    </div>
                    <!-- End of Main title -->

                    <!-- Service Button -->
                    <div class="container p-0 mb-0 mb-md-5">
                        <div class="col-5 col-lg-5 col-md-7">
                            @auth
                                <a href="{{ route('dashboard.index') }}" class="btn btn-light btn-block">KEMBALI</a>
                            @else
                                <a href="{{ route('home') }}" class="btn btn-light btn-block">KEMBALI</a>
                            @endauth
                        </div>
                    </div>
                    <!-- End of Service Button -->
                </div>
                <div class="col-md-6">
                    <div class="container pb-5">
                        <!-- Image Illustration Right -->
                        <img src="{{ asset('assets/enrollment/images/already-registered.png') }}" alt="" class="img-fluid illustration-image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->

</body>

</html>
