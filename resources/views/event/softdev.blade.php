@extends('partial.main')

@section('content')
<!-- HOME START -->
<section id="home" class="slider_area">
    <div id="carouselThree" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider-content">
                                <h1 class="title">Mobile Apps</h1>
                                <p class="text">Kompetisi yang bertujuan untuk membuat dan mengembangkan applikasi mobile mengenai suatu tema tertentu.</p>
                                <ul class="slider-btn rounded-buttons">
                                    @auth
                                        <li><a class="main-btn rounded-one" href="{{ route('enroll', ['event' => $competition->slug]) }}">Daftar</a></li>
                                    @else
                                        <li><a class="main-btn rounded-one" href="{{ route('register', ['next' => $competition->slug]) }}">Daftar</a></li>
                                    @endauth
                                    <li><a class="main-btn rounded-two" href="{{ asset('assets/files/Juklak Anforcom 2019.pdf') }}">Guidebook</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
                <div class="slider-image-tangan d-none d-lg-flex align-items-end">
                    <div class="slider-image">
                        <img src="{{ asset('assets/images/slider/Group 34.png') }}" alt="Hero">
                    </div> <!-- slider-imgae -->
                </div> <!-- slider-imgae box -->
            </div> <!-- carousel-item -->
        </div>
    </div>
</section>

<!-- HOME ENDS -->

<!-- TEMA START -->

<section id="tema" class="tema-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-10">
                    <h3 class="title">Tema</h3>
                    <p class="text">"Be a Brilliant Generation Through Digital Tech Innovation!"</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
    </div> <!-- container-->
</section><!-- section -->

<!-- TEMA ENDS -->

<!-- TIMELINE START -->

<section id="timeline" class="features-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-10">
                    <h3 class="title">Timeline</h3>
                    <p class="text">Catat tanggalnya dan jangan sampai tertinggal!</p>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <ul class="timeline">
                            <li>
                                <li>
                                    <div class="content-text">
                                        <h3 class="line-title">Pendaftaran</h3>
                                        <span>15 Juni - 06 September 2020</span>
                                        <p class="line-text">Batas Pendaftaran.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="content-text">
                                        <h3 class="line-title">Pengumpulan Proposal</h3>
                                        <span>06 Juli - 13 September 2020</span>
                                        <p class="line-text">Batas Pengumpulan Proposal.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="content-text">
                                        <h3 class="line-title">Pengumuman Finalis</h3>
                                        <span>27 September 2020</span>
                                        <p class="line-text">Akan diberitakan finalis anforcom melalui web dan media lainnya.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="content-text">
                                        <h3 class="line-title">Pengumpulan File Finalis</h3>
                                        <span>12 October 2020</span>
                                        <p class="line-text">Batas Pengumpulan file yang dibutuhkan saat final.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="content-text">
                                        <h3 class="line-title">Final</h3>
                                        <span>18 October 2020</span>
                                        <p class="line-text">Final akan dilaksanakan secara online.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>

    <!-- TIMELINE ENDS -->

    <!-- FAQ START -->

    <section id="FAQ" class="faq-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
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
                <img src="{{ asset('assets/images/about.jpg') }}" alt="about">
            </div>
        </div> -->
    </div> <!-- row -->
</div> <!-- container -->
</section>

<!-- FAQ ENDS -->
@endsection
