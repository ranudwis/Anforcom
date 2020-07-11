<!doctype html>
<html lang="id">

<head>
    <title>Form Pendaftaran {{ $event->name }}</title>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/form/css/style.css') }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/form/images/icons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/form/images/icons/favicon-96x96.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/form/images/icons/favicon-16x16.png') }}" />
    <!--===============================================================================================-->
</head>

<body>
    <!-- <h2>Form Pendaftaran Anforcom</h2>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/auth/style.css') }}">

    <title>Pendaftaran {{ $event->name }}</title>
    </head>

    <body>

        <section id="register">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8 text-center mx-auto pt-5" id="judulregis">
                        <img src="{{ asset('assets/form/images/LOGO2.png') }}" class="img-fluid mb-2" style="max-height: 30px;">
                        <h2 class="form-title">Form Pendaftaran {{ $event->name }}</h2>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger btn-block mt-3" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error) <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mt-4" id="form-regis">
                    <form action="{{ route('enroll.create', ['event' => $event->slug]) }}" method="post" enctype="multipart/form-data" class="validate-form" novalidate>
                        @csrf

                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="card pb-0 pt-2 mb-5">
                                    <div class="card-body">
                                        <div class="card-title">Informasi Tim</div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-university"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="university" type="text" name="university" value="{{old('university')}}" required>
                                                <label for="university" class="form-control-placeholder">Perguruan Tinggi
                                                    *</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-clipboard-list"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="team_name" type="text" name="team_name" value="{{old('team_name')}}" required>
                                                <label for="team_name" class="form-control-placeholder">Nama Tim Anda
                                                    *</label>
                                                <!-- <span id='bantuan_nama_tim' style='display: none; color: red'>Team sudah
                                                Terdaftar</span> -->
                                            </div>
                                        </div>

                                        <div class="card-title mt-5">Ketua Tim</div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="leader_name" type="text" name="leader_name" value="{{ Auth::user()->name }}" required readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-id-card"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="leader_nim" type="text" name="leader_nim" value="{{old('leader_nim')}}" required>
                                                <label for="leader_nim" class="form-control-placeholder">Nomor Mahasiswa
                                                    Ketua (NIM) *</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Scan Kartu Tanda Mahasiswa Ketua *
                                                <small>.png/.jpg</small></label>
                                            <input class="form-control-file" type="file" name="leader_ktm" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card pt-2 mb-2">
                                    <div class="card-body">
                                        <div class="card-title">Anggota Tim</div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user-plus"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="nama_anggota1" type="text" name="members[0][name]" value="{{ old('members[0][name]') }}" required>
                                                <label for="nama_anggota1" class="form-control-placeholder">Nama Anggota
                                                    1</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-id-card"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="nim_anggota1" type="text" name="members[0][nim]" value="" required>
                                                <label for="nim_anggota1" class="form-control-placeholder">Nomor Mahasiswa
                                                    Anggota 1 (NIM)</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-at"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="email_anggota1" type="text" name="members[0][email]" value="" required>
                                                <label for="email_anggota1" class="form-control-placeholder">Email
                                                    Anggota 1</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="kontak_anggota1" type="text" name="members[0][contact]" value="" required>
                                                <label for="kontak_anggota1" class="form-control-placeholder">Line/Whatsapp
                                                    Anggota 1</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Scan Kartu Tanda Mahasiswa Anggota 1
                                                <small>.png/.jpg</small></label>
                                            <input class="form-control-file" type="file" name="members[0][ktm]">
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user-plus"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="nama_anggota2" type="text" name="members[1][name]" value="" required>
                                                <label for="nama_anggota2" class="form-control-placeholder">Nama Anggota
                                                    2</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-id-card"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="nim_anggota2" type="text" name="members[1][nim]" value="" required>
                                                <label for="nim_anggota2" class="form-control-placeholder">Nomor Mahasiswa
                                                    Anggota 2</label>
                                                <div class="invalid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-at"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="email_anggota2" type="text" name="members[1][email]" value="" required>
                                                <label for="email_anggota2" class="form-control-placeholder">Email
                                                    Anggota 2</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-phone"></i>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="kontak_anggota2" type="text" name="members[1][contact]" value="" required>
                                                <label for="kontak_anggota2" class="form-control-placeholder">Line/Whatsapp
                                                    Anggota 2 (NIM)</label>
                                                <div class="invalid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group upload">
                                            <label for="">Scan Kartu Tanda Mahasiswa Anggota 2
                                                <small>.png/.jpg</small></label>
                                            <input class="form-control-file" type="file" name="members[1][ktm]">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5" id="button_keterangan">
                                <p class="mb-1"><small>*) Wajib untuk diisi</small></p>
                                <button class="btn btn-block d-flex justify-content-center mx-auto" type="submit">DAFTAR!</button>
                            </div>
                        </div>
                    </form>
                </div>
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
    </body>

</html>
