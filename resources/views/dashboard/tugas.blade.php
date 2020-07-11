@extends('dashboard.partial.main')

@section('content')
<article class="col-md-9 position-relative">
    <div class="row">
        <div class="col-md">
            <h6 class="pt-5 pb-3 ml-5" style="color:rgba(0,0,0,0.5)">Dashboard (breadcumbs)</h6>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <h4 class="ml-5">Software Development</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="card rounded shadow-sm mx-5 my-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md">
                                <h5 class="card-text font-weight-bold">Proposal</h5>
                            </div>
                        </div>
                    </li>
                  <li class="list-group-item">
                      <div class="row">
                          <div class="col-md">
                              <p class="card-text">21 Juni 2020 - 21 Juli 2020</p>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md">
                            <span class="card-text text-warning"><i class="fa fa-frown"></i>&#9;Belum Upload</span>
                            {{-- <span class="card-text text-success"><i class="fa fa-check-circle"></i>&#9;Belum Upload</span> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <span class="card-text">Upload File :</span>
                            <form method="POST" action="{{ route('dashboard.payment') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="payment_confirm"></br>
                                <button class="btn btn-warning mt-2" type="submit">Konfirmasi</button>
                            </form>
                        </div>
                    </div>
                  </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="card rounded shadow-sm mx-5 my-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md">
                                <h5 class="card-text font-weight-bold">Prototype</h5>
                            </div>
                        </div>
                    </li>
                  <li class="list-group-item">
                    <div class="row">
                        <div class="col-md">
                            <p class="card-text">21 Juni 2020 - 21 Juli 2020</p>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md">
                          <span class="card-text text-warning"><i class="fa fa-frown"></i>&#9;Belum Upload</span>
                          {{-- <span class="card-text text-success"><i class="fa fa-check-circle"></i>&#9;Belum Upload</span> --}}
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md">
                          <span class="card-text">Upload File :</span>
                          <form method="POST" action="{{ route('dashboard.payment') }}" enctype="multipart/form-data">
                              @csrf
                              <input type="file" name="payment_confirm"></br>
                              <button class="btn btn-warning mt-2" type="submit">Konfirmasi</button>
                          </form>
                      </div>
                  </div>
                  </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- @if (Auth::user()->team->payment_confirm)
        <p>
            Kamu sudah membayar
        </p>

        <img src="{{ Storage::url(Auth::user()->team->payment_confirm) }}" width="500" />

        <p>
            @if (Auth::user()->team->is_active)
                Sudah dikonfirmasi
            @else
                Belum dikonfirmasi
            @endif
        </p>
    @else
        <form method="POST" action="{{ route('dashboard.payment') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="payment_confirm"><br>
            <button type="submit">Konfirmasi</button>
        </form>
    @endif --}}
</article>
@endsection
