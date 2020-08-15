<section class="navbar-area">
    <nav class="navbar navbar-collapse navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logobaru.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item unvisible">
                    <a class="nav-link page-scroll" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item unvisible">
                    <a class="nav-link page-scroll" href="{{ route('register') }}">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('home') }}">Home</a>
                </li>

                @if (isset($sharedEvents))
                    @foreach ($sharedEvents['event'] as $event)
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="{{ route('event.show', ['event' => $event->slug]) }}">
                                {{ $event->name }}
                            </a>
                        </li>
                    @endforeach

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Lomba</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            @foreach ($sharedEvents['competition'] as $event)
                                <a class="dropdown-item" href="{{ route('competition.show', ['competition' => $event->slug]) }}">
                                    <span class="item-text">{{ $event->name }}</span>
                                </a>

                                @unless($loop->last)
                                    <div class="dropdown-items-divide-hr"></div>
                                @endunless
                            @endforeach
                        </div>
                    </li>
                @else
                    Error: 'needevents' middleware is required
                @endif
            </ul>
        </div>
        <div class="navbar-btn d-none d-sm-inline-block">
            <ul>
                @auth
                    <li><a class="solid" href="{{ route('dashboard.index') }}">Dashboard</a></li>
                @else
                    <li><a class="solid" href="{{ route('login') }}">Login</a></li>
                    <li><a class="solid daftar" href="{{ route('register') }}">Daftar</a></li>
                @endauth
            </ul>
        </div>
    </nav> <!-- navbar -->
</section>
