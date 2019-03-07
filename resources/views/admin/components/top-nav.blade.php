<nav class="navbar navbar-expand navbar-light bg-light shadow {{ $default ?? '' }} fixed-top" id="navDash">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand text-uppercase font-weight-bold d-block text-center animated rubberBand"
           href="{{ route('admin.home') }}">
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
                <li class="nav-item mr-3 no-underline">
                    <div class="dropdown nav-link">
                        <a href="#" class="text-muted no-un" id="menu" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="fa fa-user"></i>
                            {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menu" style="min-width: 200px">
                            <div class="menu-arrow-up"></div>

                            <a href="{{ route('house.create') }}"
                               class="dropdown-item {{ active('house.create') ? 'active' : '' }}">
                                New House
                            </a>

                            <div class="dropdown-divider"></div>

                            <a href="{{ route('admin.houses') }}" class="dropdown-item {{ active('admin.houses') ? 'active' : '' }}">
                                Houses
                            </a>

                            <div class="dropdown-divider"></div>

                            <a href="{{ route('admin.orders') }}" class="dropdown-item">
                                Orders
                            </a>

                            <div class="dropdown-divider"></div>

                            <a href="{{ route('home') }}"
                               class="dropdown-item">
                                <i class="fa fa-globe"></i>
                                Website
                            </a>

                            <div class="dropdown-divider"></div>

                            <form method="post" action="{{ route('admin.logout') }}">

                                @csrf

                                <button type="submit" class="dropdown-item pointer" role="button">
                                    <i class="fa fa-power-off text-danger"></i>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>