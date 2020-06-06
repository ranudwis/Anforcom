<!-- NAVBAR START -->
<section class="navbar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/images/logobaru.png') }}" alt="Logo">
                    </a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#home">Home</a>
                        </li>
                        <!-- Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Lomba</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                @if (isset($sharedEvents))
                                    @foreach ($sharedEvents as $event)
                                        <a
                                            class="dropdown-item"
                                            href="{{ route('competition.show', ['competition' => $event->slug]) }}"
                                        >
                                            <span class="item-text">{{ $event->name }}</span>
                                        </a>

                                        @unless ($loop->last)
                                            <div class="dropdown-items-divide-hr"></div>
                                        @endunless
                                    @endforeach
                                @else
                                    Error: 'needevents' middleware is required
                                @endif

                            </div>
                        </li>
                        <!-- End of dropdown Menu -->
                    </ul>
                    <div class="navbar-btn d-none d-sm-inline-block">
                        <ul>
                            <li><a class="solid" href="{{ route('login') }}">Login</a></li>
                        </ul>
                    </div>
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<!-- NAVBAR END -->
