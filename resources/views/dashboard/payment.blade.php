@extends('dashboard.partial.main')

@section('content')
    <form method="POST" action="{{ route('dashboard.payment') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="payment_confirm"><br>
        <button type="submit">Konfirmasi</button>
    </form>
@endsection
