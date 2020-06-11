@extends('auth.partial.main')

@section('title', 'Registrasi')

@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 justify-content-center">
				<div class="login100-more" style="background-image: url('assets/images/illustration.png');">
				</div>
				<form action="{{ $formAction }}" method="post" class="login100-form validate-form pt-5">
                    @csrf

					<div class="login100-logo mx-auto ml-lg-0 pt-lg-5">
						<img src="{{ asset('assets/images/logolong.png') }}" class="img-fluid">
					</div>
					<span class="login100-form-title mt-3 p-b-34">
						<h4 class="font-weight-bold text-dark text-left text-center text-lg-left">Buat Akun Baru</h4>
					</span>
					<div class="form-group-full">
						<label for="username">Nama</label>
						<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20"
							data-validate="Type user name">
							<input id="username" class="input100" type="text" name="name" placeholder="Anforcom">
							<span class="focus-input100"></span>
						</div>
					</div>
					<div class="form-group-full">
						<label for="email">Email</label>
						<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type email">
							<input id="email" class="input100" type="email" name="email"
								placeholder="anforcom2020@gmail.com">
							<span class="focus-input100"></span>
						</div>
					</div>
					<div class="form-group-half pr-2">
						<label for="first-name">Password</label>
						<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20"
							data-validate="Type password">
							<input class="input100" type="password" name="password" placeholder="**********">
							<span class="focus-input100"></span>
						</div>
					</div>
					<div class="form-group-half pl-2">
						<label for="first-name">Konfirmasi Password</label>
						<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20"
							data-validate="Type password">
							<input class="input100" type="password" name="password_confirmation" placeholder="**********">
							<span class="focus-input100"></span>
						</div>
					</div>
					<div class="form-group-full">
						<label for="contact">Kontak</label>
						<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type contact">
							<input class="input100" type="text" name="contact" placeholder="(Whatsapp/Line)">
							<span class="focus-input100"></span>
						</div>
					</div>
					<div class="container-login100-form-btn p-b-50">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

					<div class="w-full text-center pb-lg-2">
						<a href="#" class="">
							Sudah punya akun?
                            <a href="#" data-url="{{ route('login') }}" class="text-warning">
                                Masuk di sini!
                            </a>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
