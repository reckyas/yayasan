<div class="top-head">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i>&nbsp;Gupak warak, RT:06/05</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<header class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <a class="navbar-brand logo-header d-flex d-flex" href="/">
                    <img src="{{asset('images/logo-yayasan.jpeg')}}" class="d-inline-block align-top mr-3" alt="">
                    <div class="title-site">
                        {{ config('app.name') }}
                        <div class="site-description">SHOLEH – CERDAS – ROBBANI</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <div class="d-flex mt-4">
                    <input type="text" placeholder="Cari..." class="search">
                    <button class="tombol">Cari</button>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="navbar navbar-expand-lg navbar-dark bg-costume container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Lembaga
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">MADRASAH DINIYAH TAKMILIYAH NURUSSYIFA</a>
                    <a class="dropdown-item" href="#">TK ISLAM TERPADU NURUSSYIFA</a>
                    <a class="dropdown-item" href="#">SEKOLAH ALAM TERPADU NURUSSYIFA</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Disabled</a>
            </li>
        </ul>
    </div>
</div>