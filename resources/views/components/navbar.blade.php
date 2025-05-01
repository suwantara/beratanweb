<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">Beratan Dairy</h1>
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Tentang Kami</a>
            <a href="{{ route('service') }}" class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Layanan</a>
            <a href="{{ route('product') }}" class="nav-item nav-link {{ request()->routeIs('product') ? 'active' : '' }}">Produk</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Halaman</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ route('gallery') }}" class="dropdown-item {{ request()->routeIs('gallery') ? 'active' : '' }}">Galeri</a>
                    <a href="{{ route('artikel') }}" class="dropdown-item peer {{ request()->routeIs('blog') ? 'active' : '' }}:">Artikel</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a>
        </div>
        <div class="border-start ps-4 d-none d-lg-block">
            <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
        </div>
    </div>
</nav>
<!-- Navbar End -->
