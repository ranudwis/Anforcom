@extends('auth.partial.main')

<<<<<<< HEAD
<head>
    <title>Login</title>
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
    <!-- <h2>Form Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        @if (session('status'))
        <div>
            {{session('status')}}
        </div>
        @endif
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="email" value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password">
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit">Login</button>
        <a href="{{ route('register') }}">Register</a>
    </form> -->

    <div class="limiter">
        <div class="login100-more" style="background-image: url({{ asset('assets/form/images/illustration.png') }});"></div>
        <div class="container-login100">
            <div class="wrap-login100 justify-content-center">
                <form class="login100-form validate-form pt-5 pb-lg-5" method="POST" action="{{ route('login') }}">
                    <div class="login100-logo mx-auto ml-lg-0 pt-lg-5">
                        <img src="{{ asset('assets/form/images/LOGO2.png') }}" class="img-fluid">
                    </div>
                    <span class="login100-form-title mt-3 p-b-34">
                        <h4 class="font-weight-bold text-dark text-left text-center text-lg-left">Masuk ke Akun Kamu
                        </h4>
                    </span>
                    <div class="alert alert-danger btn-block" role="alert">
                        This is an example danger alert for validate form
                    </div>
                    @csrf
                    @if (session('status'))
                    <div>
                        {{session('status')}}
                    </div>
                    @endif
                    <div class=" form-group-full">
                        <label for="username">Username</label>
                        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                            <input id="username" class="input100" type="text" name="username" placeholder="anforcom" value="{{old('username')}}">
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                    <div class="form-group-full">
                        <label for="first-name">Password</label>
                        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type password">
                            <input class="input100" type="password" name="pass" placeholder="**********">
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
                        <button class="login100-form-btn" type="submit">
                            Masuk
                        </button>
                    </div>

                    <div class="w-full text-center pb-lg-2">
                        <a href="#" class="">
                            Belum punya akun? <a href="{{ route('register') }}" data-url="{{ route('register') }}" class="text-warning">Daftar di
                                sini!</a>
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

    <!-- <script type="text/javascript">
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
=======
@section('title', 'Login')

@section('content')
	<div class="limiter">
		<div class="wrap-login100 justify-content-center">
			<div class="login100-more" style="background-image: url('assets/images/illustration.png');"></div>
			<form action="{{ route('login') }}" method="post" class="login100-form validate-form pt-5 pb-lg-5">
                @csrf

				<div class="login100-logo mx-auto ml-lg-0 pt-lg-5">
					<img src="{{ asset('assets/images/logolong.png') }}" class="img-fluid">
				</div>
				<span class="login100-form-title mt-3 p-b-34">
					<h4 class="font-weight-bold text-dark text-left text-center text-lg-left">Masuk ke Akun Kamu
					</h4>
				</span>
				<div class="form-group-full">
					<label for="username">Email</label>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="username" class="input100" type="text" name="email" placeholder="anforcom">
						<span class="focus-input100"></span>
					</div>
				</div>
				<div class="form-group-full">
					<label for="first-name">Password</label>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" placeholder="**********">
						<span class="focus-input100"></span>
					</div>
				</div>

				{{-- <div class="container pl-0 pr-0 utilities mb-4" style="border-radius: 50%">
					<span class="float-left">
						<div class="round">
							<input class="mt-0 mr-2" type="checkbox" id="checkbox" />
							<label class="m-t-2" for="checkbox"></label> Ingat Saya
						</div>
					</span>
					<a href="" class="float-right">Lupa Password </a>
				</div> --}}

				<div class="container-login100-form-btn p-b-50">
					<button class="login100-form-btn">
						Masuk
					</button>
				</div>

				<div class="w-full text-center pb-lg-2">
					<a href="#" class="">
						Belum punya akun?

                        <a href="#" data-url="{{ route('register') }}" class="text-warning">
                            Daftar di sini!
                        </a>
					</a>
				</div>
			</form>
		</div>
	</div>
@endsection
>>>>>>> b7b6ce845bea5018c875f84f62def365ce35e8f5
