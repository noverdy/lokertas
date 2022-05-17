<nav class="navbar sticky-top navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand poppins fw-semibold fs-4" href="/">
            <img src="{{ url('icon.png') }}" width=40 class="me-1 rounded">
            Lokertas
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) === 'lowongan' ? 'active' : '' }}"
                        href="/lowongan">Lowongan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) === 'kategori' ? 'active' : '' }}"
                        href="/kategori">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) === 'perusahaan' ? 'active' : '' }}"
                        href="/perusahaan">Perusahaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) === 'faq' ? 'active' : '' }}" href="/faq">FAQ</a>
                </li>
            </ul>
            @auth
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Halo, {{ explode(' ', Auth::user()->name)[0] }}!
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/profile">Profil</a></li>
                        <li><a class="dropdown-item" href="/berkas">Berkas Anda</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
            @guest
                <a href="/login" class="btn btn-dark"> <i class="fa-solid fa-right-to-bracket"></i> Login</a>
            @endguest
        </div>
    </div>
</nav>
