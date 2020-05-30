@extends('dashboard.partial.main')

@section('content')
    @if (Auth::user()->team->payment_confirm)
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
    @endif
@endsection
