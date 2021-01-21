<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portal UMKM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">
    <link rel="shortcut icon" href="{{{ asset('images/favicon.png') }}}">

    @include('includes.js')
    @include('includes.css')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-style navbar-container">
        <a class="col-11 col-lg-2" href="{{ url('/') }}">
            <img class="img img-fluid" src="images/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link txt-menu" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-menu" href="#">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-menu" href="#">Pengumuman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-menu" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-login btn-primary ">Login</button>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="">
            @yield('content')
        </div>
    </div>
    <div class="container-fluid container-footer">
      <div class="row">
        <div class="col-xl-3">
            <img class="img img-fluid logo-footer" src="images/logo-footer.png" alt="">
        </div>
        <div class="col-xl-2">
            <ul class="navbar-nav">
                <li class="nav-item txt-footer">
                    <a class="menu-footer" href="">Berita</a>
                </li>
                <li class="nav-item txt-footer">
                    <a class="menu-footer" href="">Pengumuman</a>
                </li>
                <li class="nav-item txt-footer">
                    <a class="menu-footer" href="">Tentang Kami</a>
                </li>
                <li class="nav-item txt-footer">
                    <a class="menu-footer" href="">Alamat</a>
                </li>
            </ul>
        </div>
        <div class="col-xl-4">
            <ul class="navbar-nav">
                <li class="nav-item txt-footer">
                    <a class="menu-footer" href="" style="font-weight: bold;">Contact Us</a>
                </li>
                <li class="nav-item txt-footer">
                    <a class="menu-footer" href="">Jl. Raya Pos Pengumben No.40,
                      Jakarta 11550</a>
                </li>
                <li class="nav-item txt-footer">
                    <a class="menu-footer" href="">(+62) 834524262</a>
                </li>
            </ul>
        </div>
        <div class="col-xl-3">
          <p class="menu-footer" style="margin-top: 54px;font-weight: bold;">Copyright 2020, PortalUMKM</p>
        </div>
    </div>
    </div>
      


</body>

</html>
