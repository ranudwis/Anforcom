    <!DOCTYPE html>
    <html lang="id" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>{{ env('APP_NAME', 'Anforcom') }}</title>
    </head>

    <body>
        <a href="{{ route('login') }}">Masuk</a>
        <a href="{{ route('register') }}">Daftar</a>
    </body>

    </html>