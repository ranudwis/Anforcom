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
        </ul>
        @yield('content')
    </body>
</html>
