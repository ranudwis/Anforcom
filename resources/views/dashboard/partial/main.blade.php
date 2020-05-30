<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>{{ env('APP_NAME', 'Anfrocom') }}</title>
    </head>
    <body>
        <ul>
            <li>
                <a href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('dashboard.payment') }}">Pembayaran</a>
            </li>
            <li>
                <a href="{{ route('logout') }}">Logout</a>
            </li>
        </ul>
        @if (session('status'))
            <div>
                {{session('status')}}
            </div>
        @endif

        @yield('content')
    </body>
</html>
