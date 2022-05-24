<nav class="navbar sticky-top navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand poppins fw-semibold fs-4" href="/" onclick="scrollToTop()">
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
                    <a class="nav-link {{ request()->segment(1) === 'vacancy' ? 'active' : '' }}" href="/vacancy"
                        onclick="scrollToTop()">Lowongan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) === 'kategori' ? 'active' : '' }}" href="/kategori"
                        onclick="scrollToTop()">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) === 'perusahaan' ? 'active' : '' }}"
                        href="/perusahaan" onclick="scrollToTop()">Perusahaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(1) === 'faq' ? 'active' : '' }}" href="/faq"
                        onclick="scrollToTop()">FAQ</a>
                </li>
            </ul>

            @auth
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Halo, {{ explode(' ', Auth::user()->name)[0] }}!
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/profile" onclick="scrollToTop()">Profil</a></li>
                        <li><a class="dropdown-item" href="/berkas" onclick="scrollToTop()">Berkas Anda</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit" onclick="scrollToTop()">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth

            @unless(Auth::check() || Auth::guard('company')->check())
                <a href="/login" onclick="scrollToTop()" class="btn btn-dark me-2"> <i
                        class="fa-solid fa-right-to-bracket"></i> Login</a>
                <a href="/register" onclick="scrollToTop()" class="btn btn-outline-dark"> <i
                        class="fa-solid fa-user-plus"></i> Register</a>
            @endunless
        </div>
    </div>
</nav>
