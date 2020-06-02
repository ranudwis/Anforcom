software development
@auth
    <a href="{{ route('enroll', ['event' => $competition->slug]) }}">daftar</a>
@else
    <a href="{{ route('register', ['next' => $competition->slug]) }}">daftar</a>
@endauth
