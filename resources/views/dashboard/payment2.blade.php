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
            <h4 class="ml-5">Pembayaran Biaya Pendaftaran Data Mining</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="card rounded shadow-sm mx-5 my-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                      <div class="row">
                          <div class="col-md">
                              <h5 class="card-text mb-2">Status Pembayaran</h5>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md">
                              <h4 class="text-warning"><i class="fa fa-frown"></i>&#9;Menunggu Pembayaran</h4>
                              {{-- opsi apabila ditolak, dan dikonfirmasi --}}
                              {{-- <h4 class="text-success"><i class="fa fa-check-circle"></i>&#9;Terkonfirmasi</h4>
                              <h4 class="text-danger"><i class="fa fa-times-circle"></i>&#9;Ditolak</h4> --}}
                          </div>
                      </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                        <div class="col-md">
                            <h5 class="card-text mb-2">Form Pembayaran</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p class="card-text">Upload Bukti Pembayaran :</p>
                            <form method="POST" action="{{ route('dashboard.payment') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="payment_confirm"></br>
                                <button class="btn btn-warning mt-2" type="submit">Konfirmasi</button>
                            </form>
                        </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                        <div class="col-md">
                            <h5 class="card-text mb-2">Bukti Pembayaran</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md text-center my-2">
                            <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22880%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20880%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_172a42cec83%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A44pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_172a42cec83%22%3E%3Crect%20width%3D%22880%22%20height%3D%22250%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22328.328125%22%20y%3D%22144.6734375%22%3E880x250%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Bukti Pembayaran" class="img-fluid rounded shadow-sm">
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
