<!DOCTYPE html>
<html lang="id" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | Anforcom Admin</title>
</head>

<body>
    <ul>
        <li>
            <a href="{{ route('admin.payment') }}">Pembayaran</a>
        </li>
        <li>
            <a href="{{ route('admin.sponsor') }}">Sponsor</a>
        </li>
        <li>
            <a href="{{ route('admin.medpart') }}">Media Partner</a>
        </li>
        <li>
            <a href="{{ route('admin.task') }}">Tugas</a>
        </li>
        <li>
            <a href="{{ route('admin.timeline') }}">Tambah Timline</a>
        </li>
        <li>
            <a href="{{ route('logout') }}">Keluar</a>
        </li>
    </ul>

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    @yield('content')
</body>

</html>