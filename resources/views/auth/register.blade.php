@extends('auth.partial.main')

@section('title', 'Registrasi')

@section('content')
<div class="limiter">
    <div class="login100-more" style="background-image: url({{ asset('assets/form/images/illustration.png') }});">
    </div>
    <div class="container-login100">
        <div class="wrap-login100 justify-content-center">
            <form class="login100-form validate-form pt-5" method="post" action="{{ $formAction }}">
                @csrf

                <div class="login100-logo mx-auto ml-lg-0 pt-lg-5">
                    <img src="{{ asset('assets/form/images/LOGO2.png') }}" class="img-fluid">
                </div>
                <span class="login100-form-title mt-3 p-b-34">
                    <h4 class="font-weight-bold text-dark text-left text-center text-lg-left">Buat Akun Baru</h4>
                </span>
                {{-- menampilkan error validasi --}}
                @if (count($errors) > 0)
                <div class="alert alert-danger btn-block" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error) <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="form-group-full">
                    <label for="username">Nama</label>
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
                        Sudah punya akun? <a href="" data-url="{{ route('login') }}" class="text-warning">Masuk di sini!</a>
                    </a>
                </div>
            </form>


        </div>
    </div>
</div>

@endsection
