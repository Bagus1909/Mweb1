<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/logo.jpg" alt="" width="30" height="30" class="d-inline-block align-text-top">
            Mitsubishi Jogja
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('produk') ? 'active' : '' }}" href="/produk">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('simulasi') ? 'active' : '' }}" href="/simulasi">Simulasi Kredit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pemesanan') ? 'active' : '' }}" href="/pemesanan">Pemesanan</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>