@extends('auth.partial.main')

@section('title', 'Login')

@section('content')
    <div class="limiter">
        <div class="login100-more" style="background-image: url({{ asset('assets/form/images/Illustration.png') }});"></div>
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
                        <label for="username">Email</label>
                        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                            <input id="username" class="input100" type="text" name="email" placeholder="anforcom" value="{{old('email')}}">
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
@endsection
