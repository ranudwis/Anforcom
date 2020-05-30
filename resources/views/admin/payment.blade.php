@extends('admin.partial.main')

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

        @foreach ($teams as $team)
            <tr>
                <td>
                    {{ $team->name }}
                </td>
                <td>
                    {{ $team->university }}
                </td>
                <td>
                    {{ dd($team->leader)}}
                    {{ $team->leader->name }} {{ $team->leader->email }}
                </td>
                <td>
                    @if ($team->payment_confirmation)
                        <a href="{{ Storage::url($team->payment_confirm) }}">Bukti pembayaran</a>
                    @else
                        Belum membayar
                    @endif
                </td>
                <td>
                    @if ($team->payment_confirmation)
                        <a href="{{ route('admin.payment.confirm') }}">Konfirmasi</a>
                        <a href="{{ route('admin.payment.reject') }}">Tolak</a>
                    @endif

                    <a href="{{ route('admin.payment.delete') }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
