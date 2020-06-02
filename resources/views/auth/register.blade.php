<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Daftar</title>
    </head>
    <body>
        daftar anforcom
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif
        <form method="post" action="{{ $formAction }}">
            @csrf
            <input type="text" name="name" placeholder="nama" /><br />
            <input type="text" name="email" placeholder="email" /><br />
            <input type="text" name="password" placeholder="password" /><br />
            <input type="text" name="password_confirmation" placeholder="ulangi password" /><br />
            <input type="text" name="contact" placeholder="Line / WA" /><br />
            <button type="submit">Daftar</button>
        </form>
    </body>
</html>
