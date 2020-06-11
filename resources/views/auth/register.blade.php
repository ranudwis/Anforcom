<!DOCTYPE html>
<html lang="id" dir="ltr">

<head>
    <title>Register</title>
    <!--  meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/form/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/form/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/form/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/form/css/main.css') }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/form/images/icons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/form/images/icons/favicon-96x96.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/form/images/icons/favicon-16x16.png') }}" />
    <!--===============================================================================================-->
</head>

<body>
    <!-- daftar anforcom
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    {{ $error }}
    @endforeach
    @endif
    <form method="post" action="{{ $formAction }}">
        @csrf
        <input type="text" name="name" placeholder="nama" /><br />
        <input type="text" name="email" placeholder="email" /><br />
        <input type="text" name="password" placeholder="password" /><br />
        <input type="text" name="password_confirmation" placeholder="ulangi password" /><br />
        <input type="text" name="contact" placeholder="Line / WA" /><br />
        <button type="submit">Daftar</button>
    </form> -->

    <div class="limiter">
        <div class="login100-more" style="background-image: url({{ asset('assets/form/images/illustration.png') }});">
        </div>
        <div class="container-login100">
            <div class="wrap-login100 justify-content-center">
                <form class="login100-form validate-form pt-5" method="post" action="{{ $formAction }}">
                    <div class="login100-logo mx-auto ml-lg-0 pt-lg-5">
                        <img src="{{ asset('assets/form/images/LOGO2.png') }}" class="img-fluid">
                    </div>
                    <span class="login100-form-title mt-3 p-b-34">
                        <h4 class="font-weight-bold text-dark text-left text-center text-lg-left">Buat Akun Baru</h4>
                    </span>
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    {{ $error }}
                    @endforeach
                    @endif
                    <div class="alert alert-danger btn-block" role="alert">
                        This is an example danger alert for validate form
                    </div>
                    @csrf
                    <div class="form-group-full">
                        <label for="username">Username</label>
                        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                            <input id="username" class="input100" type="text" name="name" placeholder="anforcom">
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                    <div class="form-group-full">
                        <label for="email">Email</label>
                        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type email">
                            <input id="email" class="input100" type="email" name="email" placeholder="anforcom2020@gmail.com">
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                    <div class="form-group-half pr-2">
                        <label for="first-name">Password</label>
                        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type password">
                            <input class="input100" type="password" name="password" placeholder="**********">
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                    <div class="form-group-half pl-2">
                        <label for="first-name">Konfirmasi Password</label>
                        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type password">
                            <input class="input100" type="password" name="password_confirmation" placeholder="**********">
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                    <div class="form-group-full">
                        <label for="contact">Contact</label>
                        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type contact">
                            <input class="input100" type="text" name="contact" placeholder="(Whatsapp/Line)">
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                    <div class="container pl-0 pr-0 utilities mb-4" style="border-radius: 50%">
                        <span class="float-left">
                            <div class="round">
                                <input class="mt-0 mr-2" type="checkbox" id="checkbox" />
                                <label class="m-t-2" for="checkbox"></label> Ingat Saya
                            </div>
                        </span>
                        <a href="" class="float-right">Lupa Password </a>
                    </div>
                    <div class="container-login100-form-btn p-b-50">
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>

                    <div class="w-full text-center pb-lg-2">
                        <a href="#" class="">
                            Sudah punya akun? <a href="{{ route('login') }}" data-url="{{ route('login') }}" class="text-warning">Masuk di sini!</a>
                        </a>
                    </div>
                </form>


            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('assets/form/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/form/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/form/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <!-- <script src="{{ asset('assets/form/assets/js/main.js') }}"></script> -->

    <!-- <script>
        $(document).ready(function() {
            $("a").click(function(event) {
                var $this = $(this),
                    url = $this.data("url");

                $(document.body).load(url);
                event.preventDefault();
            });
        });
    </script> -->

</body>

</html>