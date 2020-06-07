<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <title>{{ env('APP_NAME', 'Anfrocom') }}</title>
    </head>
    <body>
      {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid rgba(0,0,0,.125)">
        <a class="navbar-brand" href="#">Anforcom 2020</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('dashboard.payment') }}"">Pembayaran</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
              </ul>
            </div>
          </nav>
          {{-- End Navbar --}}
          @if (session('status'))
          <div>
              {{session('status')}}
          </div>
          @endif
        {{-- Content --}}
        @yield('content')
        {{-- Footer --}}
          <footer class="py-4 bg-dark text-white-50" id="sticky-footer">
            <div class="container">
              <p><a href="http://anforcom.com" alt="Anforcom 2020" title="Anforcom 2020">Anforcom 2020</a> - Copyright 2020</p>
            </div>
          </footer>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
