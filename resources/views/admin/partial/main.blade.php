<!DOCTYPE html>
<html lang="id" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Anforcom Admin</title>
</head>

<body>
    <ul>
        <li>
            <a href="{{ route('admin.payment') }}">Pembayaran</a>
        </li>
        <li>
            <a href="{{ route('logout') }}">Keluar</a>
        </li>
        <li>
            <a href="{{ route('admin.sponsor') }}">Sponsor</a>
        </li>
        <li>
            <a href="{{ route('admin.medpart') }}">Media Partner</a>
        </li>
        <li>
            <a href="{{ route('admin.task') }}">Tambah Tugas</a>
        </li>
        <li>
            <a href="{{ route('admin.timeline') }}">Tambah Timline</a>
        </li>
    </ul>
    @yield('content')
</body>

</html>