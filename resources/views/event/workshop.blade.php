@extends('partial.main')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/workshop/css/main.css') }}">
@endpush

@section('content')
    <!-- WORKSHOP START -->
    <section class="workshop">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 margin">
                        <h1 class="title">Workshop</h1>
                        <p class="text">Dapatkan materi mulai dari langkah-langkah merilis startup mulai dari nol, hingga mendapatkan feedback dari mentor/speaker terkait startup atau ide kamu.</p>
                        <ul class="btn"><li><a class="main-btn btn-one" href="#">Daftar</a></li></ul>
                        <ul class="btn"><li><a class="main-btn btn-two" href="#">Guidebook</a></li></ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-container">
                            <img class="fluid" src="{{ asset('assets/workshop/images/orasi.png') }}" alt="orasi">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WORKSHOP END -->

    <!-- MATERI START -->
    <section class="materi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title">Materi</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- single pricing -->
                            <div class="jenis center mt-30">
                                <div class="paket-1 blue">
                                    <h4 class="judul">Kickstart Your Startup 101</h4>
                                </div>
                            </div>
                            <div class="single-pricing enterprise mt-40">
                                <div class="pricing-list">
                                    <ul>
                                        <li><i class="lni-check-mark-circle"></i> Mendapat ide pengembangan sebuah startup.</li>
                                        <li><i class="lni-check-mark-circle"></i> Menyusun Business Model Canvas.</i></li>
                                        <li><i class="lni-check-mark-circle"></i> Membangun dan menyusun tim.</i></li>
                                        <li><i class="lni-check-mark-circle"></i> Menyusun produk hingga tahap MVP.</li>
                                        <li><i class="lni-check-mark-circle"></i> Validasi penerimaan prototype produk.</li>
                                    </ul>
                                </div>
                            </div> <!-- single pricing -->
                            <!-- single pricing -->
                        </div>
                        <div class="col-lg-6">
                            <div class="jenis center mt-30">
                                <div class="purple paket-1">
                                    <h4 class="judul">Startup Biz Clinic</h4>
                                </div>
                            </div>
                            <div class="single-pricing pro mt-40">
                                <div class="pricing-list">
                                    <ul>
                                        <li><i class="lni-check-mark-circle"></i> Mendapat ide pengembangan sebuah startup.</li>
                                        <li><i class="lni-check-mark-circle"></i> Konsultasi dan Feedback  terkait BMC.</li>
                                        <li><i class="lni-check-mark-circle"></i> Saran terkait pengembangan startup yang telah disusun.</li>
                                    </ul>
                                </div>
                            </div> <!-- single pricing -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
