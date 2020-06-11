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
            <h4 class="ml-5">Selamat Datang, {{ Auth::user()->name }}</h4>
        </div>
    </div>

    @if ($registrations->isEmpty())
        <div class="row">
            <div class="col-md">
                <h6 class="ml-5 mt-3">Kamu belum terdaftar pada lomba atau event apapun, klik tombol daftar untuk mendaftar event</h6>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md">
                <h6 class="ml-5 mt-3">Event yang kamu ikuti: </h6>
            </div>
        </div>
    @endif

    @foreach ($registrations as $registration)
        <div class="row">
            <div class="col-md">
                <div class="card rounded shadow-sm mx-5 my-2">
                    <div class="card-body">
                        <h5 class="card-title">
                        <a class="font-weight-bold" href="{{ route('dashboard.tim') }}" style="color:black;text-decoration:none;"alt="{{$registration->event->name}}" title="{{$registration->event->name}}">{{$registration->event->name}}</a>
                        </h5>
                        @if ($registration->isInactive())
                            <span>Status Pembayaran : <span class="text-warning">Belum Membayar</span></span>
                        @elseif ($registration->isPaid())
                            <span>Status Pembayaran : <span class="text-info">Menunggu Konfirmasi</span></span>
                        @elseif ($registration->isRejected())
                            <span>Status Pembayaran : <span class="text-danger">Gagal</span></span>
                        @elseif ($registration->isActive())
                            <span>Status Pembayaran : <span class="text-success">Aktif</span></span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="row mt-4">
        <div class="col-md mb-5">
            <div class="card rounded shadow-sm mx-5 my-2">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="{{ route('enroll.index') }}" alt="Daftar Event Lain" title="Daftar Event Lain" style="text-decoration: none; color: black">
                            <i class="fa fa-plus fa-fw"></i>
                            Daftar
                        </a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    </div>
</article>
@endsection
