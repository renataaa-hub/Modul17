@php
$currentRouteName = Route::currentRouteName(); @endphp
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1">
            <i class="bi-hexagon-fill me-2"></i> Data Master
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto">
                    <a href="{{ route('home') }}"
                        class="nav-link @if ($currentRouteName == 'home') active @endif">Home</a>
                </li>
                <li class="nav-item col-2 col-md-auto">
                    <a href="{{ route('employees.index') }}"
                        class="nav-link @if ($currentRouteName == 'employees.index') active @endif">Employee</a>
                </li>
            </ul>
            <hr class="d-md-none text-white-50">
            @guest
            @if (Route::has('login'))
            <a href="{{ route('login') }}" class="btn btn-outline-light my-2 ms-md-auto">
                <i class="bi-box-arrow-in-right me-1"></i> Login
            </a>
            @endif

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-outline-light my-2 ms-md-2">
                <i class="bi-person-plus me-1"></i> Register
            </a>
            @endif
            @else
            <div class="dropdown ms-md-auto">
                <button class="btn btn-outline-light dropdown-toggle" type="button" id="userMenu"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-person-circle me-1"></i> {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                    <li>
                        <a class="dropdown-item" href="{{ route('profile') }}">
                            <i class="bi-person-circle me-1"></i> My Profile
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item text-danger" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi-box-arrow-right me-1"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endguest
        </div>
    </div>
</nav>