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
                    {{ $team->leader->name }} {{ $team->leader->email }}
                </td>
                <td>
                    @if ($team->payment_confirm)
                        <a href="{{ Storage::url($team->payment_confirm) }}" target="_blank">
                            Bukti pembayaran
                        </a>
                    @else
                        Belum membayar
                    @endif
                </td>
                <td>
                    @if ($team->payment_confirm)
                        <a href="{{ route('admin.payment.confirm', ['team' => $team->id]) }}">Konfirmasi</a>
                        <a href="{{ route('admin.payment.reject', ['team' => $team->id]) }}">Tolak</a>
                    @endif

                    <a href="{{ route('admin.payment.delete', ['team' => $team->id]) }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
