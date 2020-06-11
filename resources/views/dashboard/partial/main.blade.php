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
      <div class="container-fluid">
        <div class="row">
          <nav class="navbar navbar-light bg-white shadow-sm rounded col-md mt-1 mb-1 ml-1 mr-1">
            <a class="navbar-brand py-3" href="#">
              <img src="{{asset('assets/images/logopanjang.png')}}" width="20%" alt loading="lazy">
            </a>
          </nav>
        </div>
      </div>
          @if (session('status'))
          <div>
              {{session('status')}}
          </div>
          @endif
          <main class="container-fluid">
            <div class="row">
                <aside class="col-md-3 bg-light shadow-sm" style="height:100vh">
                    <div class="card my-5 mx-auto" style="width: 80%;">
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a style="text-decoration:none;color:black;" href="#" alt="Dashboard" title="Dashboard"><i class="fa fa-home"></i>&emsp;Dashboard</a></li>
                          <li class="list-group-item"><a style="text-decoration:none;color:black;" href="#" alt="Timeline" title="Timeline"><i class="fa fa-calendar-alt"></i>&emsp;Timeline</a></li>
                          <li class="list-group-item"><a style="text-decoration:none;color:black;" href="#" alt="Payment" title="Payment"><i class="fa fa-credit-card"></i>&emsp;Payment</a></li>
                        </ul>
                      </div>
                </aside>
                {{-- Content --}}
              @yield('content')
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
