@extends('dashboard.partial.main')

@section('content')
    @if ($registrations->isEmpty())
        Kamu belum terdaftar pada lomba atau event apapun
    @else
        Kamu terdaftar pada

        @foreach ($registrations as $registration)
            <div style="background-color: gray; width: 500px; margin: 8px 0">
                {{ $registration->event->name }}<br />

                @if ($registration->isInactive())
                    Menunggu pembayaran
                @elseif ($registration->isPaid())
                    Menunggu konfirmasi pembayaran oleh admin
                @elseif ($registration->isRejected())
                    Pembayaran ditolak, ulagi lagi
                @endif
            </div>
        @endforeach
    @endif

    <div>
        <a href="{{ route('enroll.index') }}">Daftar event atau lomba lain</a>
    </div>
@endsection
