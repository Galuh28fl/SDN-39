<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
    <a
        href=""
        class="navbar-brand font-weight-bold text-secondary"
        style="font-size: 20px"
    >
        <img src="{{ asset('image/logoo.png') }}" alt="Logo Sekolah" style="height: 40px; width: auto; margin-right: 3px; margin-left: 10px">
        <span class="text-primary">SDN 39 PONTIANAK UTARA</span>
    </a>

    <button
        type="button"
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
        <div
            class="collapse navbar-collapse justify-content-between"
            id="navbarCollapse"
        >
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="{{route('index')}}" class="nav-item nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Beranda</a>
                <a href="{{route('about')}}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Tentang</a>
                <a href="{{route('class')}}" class="nav-item nav-link {{ request()->routeIs('class') ? 'active' : '' }}">Ekstrakurikuler </a>
                <a href="{{route('gallery')}}" class="nav-item nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Galeri</a>
                <div class="nav-item dropdown">
                    <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    >Kegiatan & Berita </a
                    >
                    <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('activity')}}" class="dropdown-item">Kegiatan </a>
                    <a href="{{route('news')}}" class="dropdown-item">Berita</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
