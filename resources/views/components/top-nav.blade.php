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
                    <a class="nav-link {{ active('houses') ? 'active' : '' }}"
                       href="{{ route('houses') }}">
                        <i class="fa fa-home"></i>
                        Houses
                    </a>
                </li>

                <li class="nav-item mr-3">
                    <a class="nav-link {{ active('about') ? 'active' : '' }}"
                       href="{{ route('about') }}">About</a>
                </li>

                <li class="nav-item  mr-3">
                    <a class="nav-link {{ active('support') ? 'active' : '' }}"
                       href="{{ route('support') }}">Support</a>
                </li>

                @if(!auth('admin')->check())
                    <li class="nav-item">
                        <a class="nav-link text-dark {{ active('checkout') ? 'active' : '' }}"
                           href="{{ route('checkout') }}">
                        <span class="fa-stack fa-1x position-relative">
                          <span class="cart-count cart-badge">{{ session('cart') ? count(session('cart')) : null }}</span>
                          <i class="fa fa-shopping-cart fa-stack-2x"></i>
                        </span>
                            <span class="d-lg-none">Cart</span>
                        </a>
                    </li>

                    @if(auth()->check())
                        <li class="nav-item  mr-3">
                            <a class="nav-link {{ active('orders') ? 'active' : '' }}"
                               href="{{ route('orders') }}">Orders</a>
                        </li>

                        <li class="nav-item mr-3 no-underline">
                            <div class="dropdown nav-link">
                                <a href="#" class="text-muted no-un" id="menu" data-toggle="dropdown"
                                   aria-haspopup="true"
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
                        </li>
                    @else
                        <li class="nav-item mr-3 no-underline">
                            <div class="nav-link">
                                <a class=" {{ active('register') ? 'active' : '' }} text-muted"
                                   href="{{ route('register') }}">Register</a>
                                |
                                <a class="{{ active('login') ? 'active' : '' }} text-muted"
                                   href="{{ route('login') }}">Login</a>
                            </div>
                        </li>
                    @endif

                @else

                    <li class="nav-item">
                        <a class="nav-link text-dark"
                           href="{{ route('admin.home') }}">
                            <i class="fa fa-user-secret"></i>
                            Admin
                        </a>
                    </li>

                @endif

            </ul>
        </div>
    </div>
</nav>