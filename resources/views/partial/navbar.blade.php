<!-- NAVBAR START -->
<section class="navbar-area">
  <nav class="navbar navbar-collapse navbar-expand-lg navbar-custom">
    <a class="navbar-brand" href="#home">
      <img src="{{ asset('assets/images/logobaru.png') }}" alt="Logo">
    </a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link page-scroll" href="#home">Home</a>
      </li>

      <!--li class="nav-item dropdown">
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Lomba</a>

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
          </li-->

          <!-- Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Lomba</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="softdev.html"><span class="item-text">Mobile Apps</span></a>
              <div class="dropdown-items-divide-hr"></div>
              <a class="dropdown-item" href="datamining.html"><span class="item-text">Data Mining</span></a>
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
</section>
<!-- NAVBAR END -->
