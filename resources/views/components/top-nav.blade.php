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
                    <a class="nav-link text-dark {{ active('support') ? 'current-link' : '' }}"
                       href="{{ route('support') }}">
                        <span class="fa-stack fa-1x has-badge" data-count="0">
                          <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                          <i style="" class="fa fa-shopping-cart fa-stack-2x"></i>
                        </span>
                        <span class="d-lg-none">Cart</span>
                    </a>
                </li>

                <li class="nav-item  mr-3">
                    <div class="nav-link">
                        <a class=" {{ active('about') ? 'current-link' : '' }} text-muted"
                           href="{{ route('support') }}">Register</a>
                        |
                        <a class="{{ active('support') ? 'current-link' : '' }} text-muted"
                           href="{{ route('support') }}">Login</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>