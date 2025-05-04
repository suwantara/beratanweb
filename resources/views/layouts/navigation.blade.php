<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <!-- Primary Navigation Menu -->
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <x-application-logo class="d-inline-block align-top" />
        </a>

        <!-- Hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto">
                @foreach(config('dashboard-menu.menu') as $menuItem)
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs($menuItem['route']) ? 'active' : '' }}"
                           href="{{ route($menuItem['route']) }}">
                            <i class="{{ $menuItem['icon'] }}"></i>
                            {{ $menuItem['title'] }}
                            @if(isset($menuItem['badge']) && isset($menuItem['badge']['count']))
                                @php
                                    $count = is_callable($menuItem['badge']['count']) ? $menuItem['badge']['count']() : $menuItem['badge']['count'];
                                @endphp
                                @if($count > 0)
                                    <span class="badge bg-danger">{{ $count }}</span>
                                @endif
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>

            <!-- Settings Dropdown -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                Profile
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    Log Out
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
