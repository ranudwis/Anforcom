    <!DOCTYPE html>
    <html lang="id" dir="ltr">

    <head>
        @include('partial.headtag')
        <meta charset="utf-8">
        <title>{{ env('APP_NAME', 'Anforcom') }}</title>
    </head>

    <body>
        <!--a href="{{ route('competition.index') }}">List Lomba</a>
        <a href="{{ route('login') }}">Masuk</a>
        <a href="{{ route('register') }}">Daftar</a-->

        @extends('partial.main')

        <!-- HOME START -->
        <section id="home" class="header">
          <div class="header-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <div class="text-container">
                    <h1>Anforcom 2020</h1>
                    <p class="text">Annual Informatics Competition (Anforcom) 2020 merupakan kompetisi skala nasional yang diselenggarakan oleh Himpunan Mahasiswa Informatika Universitas Diponegoro.</p>
                    <ul class="slider-btn rounded-buttons">
                      <li><a class="main-btn rounded-one" href="{{ route('register') }}">Daftar</a></li>
                    </ul>
                  </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                  <img class="img-fluid" src="assets/images/robot.png" alt="maskot">
                </div>
              </div> <!-- end of row -->
            </div> <!-- end of header-content -->
          </div> <!-- end of container -->
        </section>
        <!-- HOME ENDS -->

        <!-- ABOUT START -->
        <section>
          <div id="about" class="about">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-title text-center pb-10">
                    <h3 class="title">Apa itu Anforcom?</h3>
                  </div>
                </div>
                <div class="col-xs-12 col-md-8">
                  <p class="text">Anforcom 2020 kembali hadir dengan berfokus pada kemampuan peserta dalam software development dan data mining.</p>
                  <p class="text">Anforcom pada tahun ini mengusung tema yaitu "Reconnecting Society with Advanced Technology" dengan harapan mahasiswa Indonesia dapat membuat aplikasi se-kreatif dan se-inovatif mungkin yang dapat menciptakan generasi cemerlang untuk Indonesia di masa depan.</p>
                </div>
                <div class="col-xs-6 col-md-4">
                  <div class="image-container">
                    <img class="img-fluid" src="assets/images/logo.png" alt="logoav">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- ABOUT END -->

        <!-- EVENT START -->
        <section id="event" class="event">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="text-center pb-10">
                  <h3 class="title">Kompetisi dan acara</h3>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <div class="single-service text-center mt-30">
                  <a href="{{ route('competition.show', ['competition' => 'apps-innovation']) }}">
                    <div class="image-fluid service-icon">
                      <img src="assets/images/computer.png" alt="">
                    </div>
                    <div class="service-content">
                      <h4 class="title service-title">Apps Innovation</h4>
                      <p>Kompetisi yang bertujuan untuk membuat dan mengembangkan aplikasi mengenai suatu tema tertentu.</p>
                    </div>
                  </a>
                </div> <!-- single service -->
              </div>
              <div class="col-lg-6">
                <div class="single-service text-center mt-30">
                  <a href="{{ route('competition.show', ['competition' => 'datmin']) }}">
                    <div class="image-fluid service-icon">
                      <img src="assets/images/data-mining.png" alt="">
                    </div>
                    <div class="service-content">
                      <h4 class="title service-title">Data Mining</h4>
                      <p class="text">Kompetisi yang bertujuan untuk mencari penyeselaian permasalahan pengolahan data serta memprediksinya.</p>
                    </div>
                  </a>
                </div> <!-- single service -->
              </div>
              <div class="col-lg-6">
                <div class="single-service text-center mt-30">
                  <a href="#">
                    <div class="image-fluid service-icon">
                      <img src="assets/images/speech.png" alt="">
                    </div>
                    <div class="service-content">
                      <h4 class="title service-title">Workshop</h4>
                      <p class="text">Dapatkan materi mulai dari langkah-langkah merilis startup mulai dari nol, hingga mendapatkan feedback dari mentor/speaker terkait startup atau ide kamu.</p>
                    </div>
                  </a>
                </div> <!-- single service -->
              </div>
              {{-- <div class="col-lg-6">
                <div class="single-service text-center mt-30">
                  <a href="#">
                    <div class="image-fluid service-icon">
                      <img src="assets/images/theater.png" alt="">
                    </div>
                    <div class="service-content">
                      <h4 class="title service-title">Live music</h4>
                      <p class="text">Acara penutupan dengan guest star ternama.</p>
                    </div>
                  </a>
                </div> <!-- single service --> --}}
              </div>
            </div>
          </div>
        </section>
        <!-- EVENT END -->

        <!-- TEASER START -->
        <section id="teaser">
          <div class="basic-3">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h2 class="title">Teaser Anforcom 2020</h2>
                </div> <!-- end of col -->
              </div> <!-- end of row -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="image-container">
                    <div class="video-wrapper">
                      <a class="popup-youtube" href="{{ env('ANFORCOM_TEASER_URL') }}" data-effect="fadeIn" target="_blank">
                        <img class="img-fluid" src="assets/images/video.jpg" alt="alternative">
                        <span class="video-play-button">
                          <span></span>
                        </span>
                      </a>
                    </div> <!-- end of video-wrapper -->
                  </div> <!-- end of image-container -->
                </div> <!-- end of col -->
              </div> <!-- end of row -->
            </div> <!-- end of container -->
          </div> <!-- end of basic-3 -->
        </section>
        <!-- TEASER END -->

        <!-- SPONSOR START -->
        {{-- <section id="sponsor" class="sponsor">
          <div class="brand-area pt-90">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-title text-center pb-10">
                    <h3 class="title">Sponsored by</h3>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">
                    <div class="single-logo mt-30 wow fadeIn">
                      <img src="assets/images/sponsor/Google.png" alt="brand">
                    </div>
                    <div class="single-logo mt-30 wow fadeIn">
                      <img src="assets/images/sponsor/Facebook.png" alt="brand">
                    </div>
                    <div class="single-logo mt-30 wow fadeIn">
                      <img src="assets/images/sponsor/Tesla.png" alt="brand">
                    </div>
                    <div class="single-logo mt-30 wow fadeIn">
                      <img src="assets/images/sponsor/Gojek.png" alt="brand">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> --}}
        <!-- SPONSOR PARTNER END -->

        <!-- MEDIA PARTNER END -->
        {{-- <section id="medpar" class="medpar">
          <div class="brand-area pt-90">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-title text-center pb-10">
                    <h3 class="title">Media Partner</h3>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">
                    <div class="single-logo mt-30 wow fadeIn">
                      <img src="assets/images/sponsor/NYT.png" alt="brand">
                    </div>
                    <div class="single-logo mt-30 wow fadeIn">
                      <img src="assets/images/sponsor/BBC.png" alt="brand">
                    </div>
                    <div class="single-logo mt-30 wow fadeIn">
                      <img src="assets/images/sponsor/CNN.png" alt="brand">
                    </div>
                    <div class="single-logo mt-30 wow fadeIn">
                      <img src="assets/images/sponsor/Bloomberg.png" alt="brand">
                    </div>
                    <div class="single-logo mt-30 wow fadeIn">
                      <img src="assets/images/sponsor/JP.png" alt="brand">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> --}}
        <!-- MEDIA PARTNER END -->
    </body>
    </html>
