<nav class="navbar navbar-expand-lg navbar-light bg-light shadow {{ $default ?? '' }} fixed-top" id="navDash">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand text-uppercase font-weight-bold d-block text-center animated rubberBand"
           href="{{ route('home') }}">
            <img src="{{ asset('img/icon.png') }}" height="50" class="d-inline-block align-middle" alt="Byarent">
            Byarent
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content"
                aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse justify-content-end" id="nav-content">
            <ul class="nav navbar-nav">
                <li class="nav-item mr-3">
                    <a class="nav-link {{ active('houses') ? 'current-link' : '' }}"
                       href="{{ route('houses') }}">
                        <i class="fa fa-home"></i>
                        Houses
                    </a>
                </li>

                <li class="nav-item mr-3">
                    <a class="nav-link {{ active('about') ? 'current-link' : '' }}"
                       href="{{ route('support') }}">About</a>
                </li>

                <li class="nav-item  mr-3">
                    <a class="nav-link {{ active('support') ? 'current-link' : '' }}"
                       href="{{ route('support') }}">Support</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark {{ active('checkout') ? 'current-link' : '' }}"
                       href="{{ route('checkout') }}">
                        <span class="fa-stack fa-1x has-badge" data-count="0">
                          <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                          <i style="" class="fa fa-shopping-cart fa-stack-2x"></i>
                        </span>
                        <span class="d-lg-none">Cart</span>
                    </a>
                </li>

                <li class="nav-item mr-3 no-underline">
                    @if(auth()->check())
                        <div class="dropdown nav-link">
                            <a href="#" class="text-muted no-un" id="menu" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="fa fa-user"></i>
                                {{ auth()->user()->name }}
                            </a>
                            <form method="post" action="{{ route('logout') }}" class="dropdown-menu"
                                  aria-labelledby="menu">

                                @csrf

                                <button type="submit" class="dropdown-item pointer" role="button">
                                    <i class="fa fa-power-off text-danger"></i>
                                    Logout
                                </button>
                            </form>
                        </div>
                    @else
                        <div class="nav-link">
                            <a class=" {{ active('register') ? 'current-link' : '' }} text-muted"
                               href="{{ route('register') }}">Register</a>
                            |
                            <a class="{{ active('login') ? 'current-link' : '' }} text-muted"
                               href="{{ route('login') }}">Login</a>
                        </div>
                    @endif
                </li>

            </ul>
        </div>
    </div>
</nav>