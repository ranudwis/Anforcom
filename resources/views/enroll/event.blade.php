<!doctype html>
<html lang="en">

<head>
    <title>Form Pendaftaran Workshop ANFORCOM</title>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/eventregistration/css/style.css') }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/icons/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png" />
    <!--===============================================================================================-->

</head>

<body>
    <section id="register" class="mb-5 pb-3">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-8 col-lg-8 text-center mx-auto pt-5" id="judulregis">
                    <img src="{{ asset('assets/eventregistration/images/LOGO2.png') }}" class="img-fluid mb-2" style="max-height: 30px;">
                    <h2 class="form-title">Form Pendaftaran Workshop ANFORCOM</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="btn-block mt-3" id="alert" role="alert">

                    </div>

                    @if ($errors->any())
                    <div class="alert visible alert-danger" role="alert">
                        <ul>

                            @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    @endif
                </div>
            </div>
            <form action="{{ route('enroll.event', ['event' => $event->slug]) }}" method="post" enctype="multipart/form-data" class="validate-form" id="msform">
                @csrf

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card pb-0 pt-2 mb-3">
                            <div class="card-body">
                                <!-- progressbar -->
                                <div class="col-12">
                                    <ul id="progressbar">
                                        <li class="active" id="account">Pilihan Workshop</li>
                                        <li id="personal">Data Peserta</li>
                                    </ul> <!-- fieldsets -->
                                </div>
                                <fieldset>
                                    <div class="card-title">Peserta *</div>
                                    <p>Silahkan memilih mendaftar workshop untuk kategori:</p>
                                    <div class="row pr-5 pl-5 text-center" id="pilihanPeserta">
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pilihan" id="radiobtnIndividu" value="individu">
                                                <label class="form-check-label" for="radiobtnIndividu">
                                                    Individu
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pilihan" id="radiobtnKelompok" value="kelompok">
                                                <label class="form-check-label" for="radiobtnKelompok">
                                                    Kelompok
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-0 pb-0 mt-3"><small>*) Wajib untuk diisi</small></p>
                                    <input type="button" name="next" class="btn btn-success next action-button" value="Selanjutnya" />
                                </fieldset>
                                <fieldset>
                                    <div id="pilihanIndividu">
                                        <div class="card-title">Informasi Peserta</div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control validate-input" id="name" type="text" value="{{ Auth::user()->name }}" disabled>
                                                <label for="name" class="form-control-placeholder">Nama Lengkap
                                                    *</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-envelope"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="email" type="text" value="{{ Auth::user()->email }}" disabled>
                                                <label for="email" class="form-control-placeholder">Email
                                                    *</label>
                                            </div>
                                            <span class="help-block"><small>Menggunakan email yang terdaftar di
                                                    platform
                                                    zoom</small>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-university"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="instance" type="text" name="university">
                                                <label for="instance" class="form-control-placeholder">Instansi
                                                    *</label>
                                            </div>
                                        </div>
                                        <div class="form-group mt-0 pt-0">
                                            <label for="tgl_lahir" class="form-control-placeholder">Tanggal Lahir
                                                *</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-university"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control birthdate" id="birthdate" type="date" name="tgl_lahir">
                                            </div>
                                            <p id="age"></p>
                                        </div>
                                    </div>
                                    <div id="pilihanKelompok">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-group"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="team_name" type="text" required name="team_name">
                                                <label for="team_name" class="form-control-placeholder">Nama Tim *</label>
                                            </div>
                                        </div>

                                        <div class="card-title">Informasi Ketua</div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="leader_name" type="text" value="{{ Auth::user()->name }}" disabled>
                                                <label for="leader_name" class="form-control-placeholder">Nama Lengkap
                                                    Ketua
                                                    *</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-envelope"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="email" type="text" value="{{ Auth::user()->email }}" disabled>
                                                <label for="email" class="form-control-placeholder">Email
                                                    *</label>
                                            </div>
                                            <span class="help-block"><small>Menggunakan email yang terdaftar di
                                                    platform
                                                    zoom</small>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-university"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="leader_instance" type="text" name="university">
                                                <label for="leader_instance" class="form-control-placeholder">Instansi
                                                    Ketua
                                                    *</label>
                                            </div>
                                        </div>
                                        <div class="form-group mt-0 pt-0">
                                            <label for="leader_birthdate" class="form-control-placeholder">Tanggal Lahir
                                                Ketua
                                                *</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-university"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control birthdate" id="leader_birthdate" type="date" name="tgl_lahir">
                                            </div>
                                            <p id="age"></p>
                                        </div>

                                        <hr>

                                        <div class="card-title">Informasi Anggota 1</div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="members0name" type="text" name="members[0][name]">
                                                <label for="members0name" class="form-control-placeholder">Nama Lengkap
                                                    Anggota 1
                                                    *</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-envelope"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="members0email" type="text" name="members[0][email]">
                                                <label for="members0email" class="form-control-placeholder">Email
                                                    Anggota 1
                                                    *</label>
                                            </div>
                                            <span class="help-block"><small>Menggunakan email yang terdaftar di
                                                    platform
                                                    zoom</small>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-phone"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="members0contact" type="text" name="members[0][contact]">
                                                <label for="members0contact" class="form-control-placeholder">WA
                                                    Anggota 1
                                                    *</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-university"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="members0instance" type="text" name="members[0][instation]">
                                                <label for="members0instance" class="form-control-placeholder">Instansi
                                                    Anggota 1
                                                    *</label>
                                            </div>
                                        </div>
                                        <div class="form-group mt-0 pt-0">
                                            <label for="members0birthdate" class="form-control-placeholder">Tanggal
                                                Lahir Anggota 1
                                                *</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-university"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control birthdate" id="members0birthdate" type="date" name="members[0][tgl_lahir]">
                                            </div>
                                            <p id="age"></p>
                                        </div>

                                        <hr>

                                        <div class="card-title">Informasi Anggota 2</div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="members1name" type="text" name="members[1][name]">
                                                <label for="members1name" class="form-control-placeholder">Nama
                                                    Lengkap Anggota
                                                    2
                                                    *</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-envelope"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="members1email" type="text" name="members[1][email]">
                                                <label for="members1email" class="form-control-placeholder">Email
                                                    Anggota
                                                    2
                                                    *</label>
                                            </div>
                                            <span class="help-block"><small>Menggunakan email yang terdaftar di
                                                    platform
                                                    zoom</small>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-phone"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="members1contact" type="text" name="members[1][contact]">
                                                <label for="members1contact" class="form-control-placeholder">WA
                                                    Anggota
                                                    2
                                                    *</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-university"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="members1instance" type="text" name="members[1][instation]">
                                                <label for="members1instance" class="form-control-placeholder">Instansi
                                                    Anggota
                                                    2
                                                    *</label>
                                            </div>
                                        </div>
                                        <div class="form-group mt-0 pt-0">
                                            <label for="members1birthdate" class="form-control-placeholder">Tanggal
                                                Lahir Anggota
                                                2
                                                *</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-university"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control birthdate" id="members1birthdate" type="date" name="members[1][tgl_lahir]">
                                            </div>
                                            <p id="age"></p>
                                        </div>
                                    </div>
                                    <p class="mb-0 pb-0 mt-3"><small>*) Wajib untuk diisi</small></p>
                                    <input type="button" name="previous" class="previous action-button-previous btn btn-light" value="Sebelumnya" />
                                    <input type="submit" name="submit" class="btn btn-success ml-1 submit submit-button" value="Daftar sekarang!" />
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- - - - - -end- - - - -  -->

    <!-- Optional JavaScript -->
    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!--===============================================================================================-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="{{ asset('assets/eventregistration/js/main.js') }}" type="text/javascript"></script>
</body>

</html>
