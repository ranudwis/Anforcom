@extends('partial.main')

@section('content')
    <!-- HOME START -->
    <section id="lomba" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">{{ $competition->name }}</h1>
                                    <p class="text">Kompetisi yang bertujuan untuk mencari penyeselaian permasalahan pengolahan data serta memprediksi data tersebut.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one" href="{{ route('enroll.show', ['event' => $competition->slug]) }}">Daftar</a></li>
                                        <li><a class="main-btn rounded-two" href="{{ asset('rulebooks/Rulebook Data Mining Anforcom 2020.pdf') }}">Rulebook</a></li>
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box laptop d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="{{ asset('assets/images/slider/Group 33.png') }}" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->
            </div>
        </div>
    </section>

    <!-- HOME ENDS -->

    @include('event.partial.theme')

    @include('event.partial.timeline')

    <!-- FAQ START -->

    <section id="FAQ" class="faq-area">
        {{-- <div class="container">
        <div class="row">
        <div class="col-lg-6">
        <div class="faq-content mt-45">
        <div class="faq-title">
        <h6 class="sub-title">Cari tahu lagi</h6>
        <h4 class="title">Frequently Asked Questions</h4>
    </div> <!-- faq title -->
    <div class="faq-accordion">
    <div class="accordion" id="accordionExample">
    <div class="card">
    <div class="card-header" id="headingOne">
    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Pendaftaran dan info lomba data mining dimana kak? Kok gaada di web?</a>
</div>

<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
<div class="card-body">
<p class="text">Lomba data mining bisa kalian temukan di page paling atas dan memencet tombol arrow ke kanan atau memencet tombol kanan di bagian bawah bagian tersebut.</p>
</div>
</div>
</div> <!-- card -->
<div class="card">
<div class="card-header" id="headingTwo">
<a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Apakah ada template untuk proposal<br> lomba mobile apps kak?</a>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
<div class="card-body">
<p class="text">Tidak ada template untuk proposal lomba mobile apps sehingga pesertta dapat dengan bebas mengkreasikan desain proposal tersebut.</p>
</div>
</div>
</div> <!-- card -->
<div class="card">
<div class="card-header" id="headingThree">
<a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Apakah boleh mengikuti kedua cabang<br> lomba sekaligus kak?</a>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
<div class="card-body">
<p class="text">Tidak, peserta yang sudah terdaftar disalah satu lomba tidak dapat mengikuti cabang lomba lain.</p>
</div>
</div>
</div> <!-- card -->
</div>
</div> <!-- faq accordion -->
</div> <!-- faq content -->
</div>
<!--<div class="col-lg-7">
<div class="about-image mt-50">
<img src="assets/images/about.jpg" alt="about">
</div>
</div> -->
</div> <!-- row --> --}}
</div> <!-- container -->
</section>

<!-- FAQ ENDS -->

@endsection
