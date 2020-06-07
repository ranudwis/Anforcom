<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ env('APP_NAME', 'Anforcom') }}</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/comingsoon/images/icons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/comingsoon/images/icons/favicon-96x96.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/comingsoon/images/icons/favicon-16x16.png') }}" />
    <meta name="theme-color" content="#ffffff" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet" 
      href="{{ asset('assets/comingsoon/vendor/bootstrap/css/bootstrap.min.css') }}"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/comingsoon/vendor/animate/animate.css') }}" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/comingsoon/vendor/select2/select2.min.css') }}"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/comingsoon/css/util.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/comingsoon/css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/comingsoon/css/style.css') }}" />
    <!--===============================================================================================-->
  </head>
  <body>
    <!--  -->
    <div class="simpleslide100">
      <div
        class="simpleslide100-item bg-img1"
        style="background-image: url('assets/comingsoon/images/bg01.png');"
      ></div>
      <div
        class="simpleslide200-item bg-img1"
        style="background-image: url('assets/comingsoon/images/bg02.png');"
      ></div>
    </div>

    <div class="flex-col-c-sb size1 overlay1">
      <!--  -->
      <div class="w-full flex-w flex-sb-m p-l-80 p-r-80 p-t-22 p-lr-15-sm">
        <div class="wrappic1 mx-auto text-center">
          <a href="#"
            ><img
              src="{{ asset('assets/comingsoon/images/icons/logo2020.png') }}"
              alt="Anforcom 2020"
              title="Logo Anforcom 2020"
          /></a>
        </div>
      </div>

      <!--  -->
      <div class="flex-col-c-m p-l-15 p-r-15 p-t-50 p-b">
        <h3 class="l1-txt1 txt-center p-b-40 respon1">
          Coming Soon
        </h3>

        <div class="flex-w flex-c-m cd100">
          <div class="flex-col-c wsize1 m-b-30">
            <span class="l1-txt2 p-b-9 days">0</span>
            <span class="s1-txt1 where1 mx-auto">Days</span>
          </div>

          <div class="flex-col-c wsize1 m-b-30">
            <span class="l1-txt2 p-b-9 hours">0</span>
            <span class="s1-txt1 where1 mx-auto">Hours</span>
          </div>

          <div class="flex-col-c wsize1 m-b-30">
            <span class="l1-txt2 p-b-9 minutes">0</span>
            <span class="s1-txt1 where1 mx-auto">Minutes</span>
          </div>

          <div class="flex-col-c wsize1 m-b-30">
            <span class="l1-txt2 p-b-9 seconds">0</span>
            <span class="s1-txt1 where1 mx-auto">Seconds</span>
          </div>
        </div>
        <h2 id="dateDisplay" class="l1-txt1 txt-center p-b-40" style="font-size: 24px; color: white">
        </h2>
        <h2 class="l1-txt2 txt-center p-b-40" style="font-size: 36px; color: white">Reconnecting Society with<br>Advanced Technology</h2>
      </div>

      <!--  -->
      <div class="flex-w flex-c-m p-b-35">
        <a
          href="https://twitter.com/anforcom?lang=en"
          target="_blank"
          class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5"
        >
          <i class="fab fa-twitter"></i>
        </a>

        <a
          href="https://www.instagram.com/anforcom/?hl=en"
          target="_blank"
          class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5"
        >
          <i class="fab fa-instagram"></i>
        </a>

        <a
          href="line://ti/p/@gsy5063l"
          class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-5"
        >
          <i class="fab fa-line"></i>
        </a>
      </div>
    </div>

    <!-- <div class="container-fluid size1 overlay2">
      <div class="row color middle">
        <div class="col-md-1 col-0"></div>
        <div class="col-md-7 col-12 py-5 align-items-center my-5">
          <h3><strong>About The Event</strong></h3>
          <h5><strong>Annual Informatics Competition 2019</strong></h5>
          <br />
          <p>
            ANFORCOM adalah serangkaian event IT tahunan berskala nasional yang
            diselenggarakan oleh Himpunan Mahasiswa Informatika Universitas
            Diponegoro
          </p>
        </div>

        <div class="col-md-4 col-12 my-5 py-5">
          <div class="wrappic2">
            <a href="#"><img src="images/icons/logo2020.png" alt="Anforcom 2020" title="Logo Anforcom 2020"/></a>
          </div>
        </div>
      </div>
    </div> -->

    <!--===============================================================================================-->
    <script src="{{ asset('assets/comingsoon/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/comingsoon/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/comingsoon/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/comingsoon/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/comingsoon/vendor/countdowntime/moment.min.js') }}"></script>
    <script src="{{ asset('assets/comingsoon/vendor/countdowntime/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/comingsoon/vendor/countdowntime/moment-timezone-with-data.min.js') }}"></script>
    <script src="{{ asset('assets/comingsoon/vendor/countdowntime/countdowntime.js') }}"></script>
    <script>
      var releaseDate = "{{ env('ANFORCOM_OPEN_COMING_SOON') }}";
      $('#dateDisplay').text(moment(releaseDate).format('D MMMM YYYY'))
      var releaseDateSplitted = releaseDate.split('-')
      $(".cd100").countdown100({
        /*Set Endtime here*/
        /*Endtime must be > current time*/
        endtimeYear: parseInt(releaseDateSplitted[0]),
        endtimeMonth: parseInt(releaseDateSplitted[1]),
        endtimeDate: parseInt(releaseDateSplitted[2]),
        endtimeHours: 0,
        endtimeMinutes: 0,
        endtimeSeconds: 0,
        timeZone: "Asia/Jakarta",
        // ex:  timeZone: "America/New_York"
        //go to " http://momentjs.com/timezone/ " to get timezone
      });
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/comingsoon/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
      $(".js-tilt").tilt({
        scale: 1.1,
      });
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/comingsoon/js/main.js') }}"></script>
  </body>
</html>
