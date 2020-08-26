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
                    <h1 class="title">{{ $event->name }}</h1>
                    <p class="text">Dapatkan materi mulai dari langkah-langkah merilis startup mulai dari nol, hingga mendapatkan feedback dari mentor/speaker terkait startup atau ide kamu.</p>
                    <ul class="btn">
                        <li><a class="main-btn btn-one" href="{{ route('enroll.show', ['event' => $event->slug]) }}">Daftar</a></li>
                    </ul>
                    <ul class="btn">
                        <li><a class="main-btn btn-two" href="{{ asset('rulebooks/Guidebook Workshop Kickstart Your Startup 101.pdf') }}">Guideline</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="img-container">
                        {{-- <img class="fluid" src="{{ asset('assets/workshop/images/orasi.png') }}" alt="orasi"> --}}
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
                                <p>
                                    Peserta akan mendapatkan materi mengenai langkah-langkah merintis
                                    sebuah startup dari nol, mulai dari penemuan dan pengembangan ide,
                                    menyusun Business Model Canvas, membangun tim, menyusun produk
                                    hingga tahap MVP, serta validasi penerimaan prototype produk (materi
                                    lebih lanjut sesuai TOR – menunggu finish). Peserta juga akan diajak untuk
                                    melakukan praktik pada sesi ini. Sesi ini terbagi menjadi dua pertemuan,
                                    Sabtu (17 Oktober 2020) pukul 12.45-15.00 dan Minggu (18 Oktober 2020)
                                    pukul 08.00-12.00.
                                </p>
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
                                <p>
                                    Pada sesi ini, peserta akan mendapat kesempatan untuk mendapatkan
                                    feedback dari mentor/speaker terkait ide, hasil karya, atau saran terkait
                                    pengembangan startup yang telah disusun sebelumnya. Sesi ini akan
                                    dilaksanakan pada hari Minggu (18 Oktober 2020) pukul 13.00-15.30.
                                </p>
                            </div>
                        </div> <!-- single pricing -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('event.partial.timeline')
@endsection
