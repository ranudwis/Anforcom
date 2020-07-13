@extends('admin.partial.main')

@section('title', 'Pembayaran')

@section('content')
<table border="1">
    <tr>
        <th>
            Nama tim
        </th>
        <th>
            Universitas
        </th>
        <th>
            Ketua
        </th>
        <th>
            Pembayaran
        </th>
        <th>
            Aksi
        </th>
    </tr>

    @foreach ($registration as $regis)
    <tr>
        <td>
            {{ $regis->teams->name }}
        </td>
        <td>
            {{ $regis->teams->university }}
        </td>
        <td>
            {{ $regis->teams->leader->name }}

        </td>
        <td>
            @if ($regis->payment_confirmation)
            <a href="{{ Storage::url($regis->payment_confirmation) }}" target="_blank">
                Bukti pembayaran
            </a>
            @else
            Belum membayar
            @endif
        </td>
        <td>
            @if ($regis->payment_confirmation)
            <a href="{{ route('admin.payment.confirm', ['regis' => $regis->id]) }}">Konfirmasi</a>
            <a href="{{ route('admin.payment.reject', ['regis' => $regis->id]) }}">Tolak</a>
            @endif
            <a href="{{ route('admin.payment.delete', ['regis' => $regis->id]) }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection