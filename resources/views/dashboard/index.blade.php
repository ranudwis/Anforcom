@extends('dashboard.partial.main')

@section('content')
    <main class="container-fluid">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <h2 class="pt-5 pb-5">Dashboard</h2>
        </div>
    </div>
    @if ($registrations->isEmpty())
        <div class="row">
            <div class="col-md-12 d-flex justify-content-start">
                <h3>Kamu belum terdaftar pada lomba atau event apapun</h3>
            </div>
        </div>
    @else
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <h3>Kamu terdaftar pada : </h3>
        </div>
    </div>
    <div class="row">
        <div class="container">
            @foreach ($registrations as $registration)
            <div class="card" style="margin-top: 0.5rem">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="#" alt="{{$registration->event->name}}" title="{{$registration->event->name}}">{{$registration->event->name}}</a>
                    </h5>
                    @if ($registration->isInactive())
                        <a href="#" class="btn btn-warning"><i class="fa fa-frown"></i>&nbsp;Belum Bayar</a>
                    @elseif ($registration->isPaid())
                        <a href="#" class="btn btn-info"><i class="fa fa-clock"></i>&nbsp;Menunggu Konfirmasi</a>
                    @elseif ($registration->isRejected())
                        <a href="#" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;Pembayaran Gagal</a>
                    @elseif ($registration->isActive())
                        <a href="#" class="btn btn-danger"><i class="fa fa-check"></i>&nbsp;Terdaftar</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <a class="btn btn-primary mt-2 mb-2 flex-d justify-content-center" href="{{ route('enroll.index') }}">Daftar event atau lomba lain</a>
            </div>
        </div>
    </div>
    </main>
@endsection
