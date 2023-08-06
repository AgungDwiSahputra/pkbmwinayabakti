<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="pkbm, winaya bakti, sekolah terbaik, sekolah hebat, sekolah mantap, sekolah indenesia, paket a, paket b, paket c, paket d, sekolah paket banyusari, sekollah paket karawang, sekolah paket indonesia">
    <meta name="description" content="Bergabunglah dengan kami di PKBM Winaya Bakti dan rasakan pengalaman belajar yang menyenangkan, inspiratif, dan membawa dampak positif bagi masa depan Anda. Bersama, mari kita jadikan pendidikan sebagai alat untuk mencapai impian dan membangun generasi penerus bangsa yang unggul dan berdaya saing global.">
    <meta property="og:title" content="{{ $title }}>
    <meta property="og:description" content="Bergabunglah dengan kami di PKBM Winaya Bakti dan rasakan pengalaman belajar yang menyenangkan, inspiratif, dan membawa dampak positif bagi masa depan Anda. Bersama, mari kita jadikan pendidikan sebagai alat untuk mencapai impian dan membangun generasi penerus bangsa yang unggul dan berdaya saing global.">
    <title>{{ $title }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/icon.png') }}" type="image/x-icon">

    {{-- Framework CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    {{-- CSS CUSTOM --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary-very-less sticky-top">
        <div class="container">
            <a class="navbar-brand fw-700" href="#">WINAYA BAKTI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Prestasi</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Tentang</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
            <a href="javascript:;">
                <button type="button" class="btn btn-primary fw-600 d-flex align-items-center justify-content-between">GABUNG SEKARANG <svg xmlns="://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right-short ms-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                  </svg></button>
            </a>
            </div>
        </div>
    </nav>
    <section id="hero" class="bg-primary-very-less">
        <div class="container">
            <div class="row">
                <div class="col-5 hero-copy">
                    <p class="text-primary fw-600 mb-4">PUSAT KEGIATAN BELAJAR MASYARAKAT</p>
                    <h1 class="fw-700">Kualitas pendidikan terbaik ada di PKBM <span class="text-primary">Winaya Bakti</span></h1>
                    <p class="fw-400 mt-4">Menginspirasi, Membangun, dan Memimpin!</p>
                    <a href="javascript:;">
                        <button class="btn btn-primary fw-600 me-2 mb-2 mb-lg-0">GABUNG SEKARANG</button>
                        <button class="btn btn-primary-outline fw-600">Tentang Sekolah</button>
                    </a>
                </div>
                <div class="col-7">
                    <img class="hero-image" src="{{ asset('assets/img/landing_page/hero-image.png') }}" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>
    <section id="pendidikan" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="box-pendidikan bg-primary-very-less text-center fw-600 text-primary">
                        PAKET A
                    </div>
                </div>
                <div class="col-4">
                    <div class="box-pendidikan bg-primary-very-less text-center fw-600 text-primary">
                        PAKET B
                    </div>
                </div>
                <div class="col-4">
                    <div class="box-pendidikan bg-primary-very-less text-center fw-600 text-primary">
                        PAKET C
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Framework CSS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>