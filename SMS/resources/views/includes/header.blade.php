<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto">
            @if (Session::get('user'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('loginPage') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('regPage') }}">Registration</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
