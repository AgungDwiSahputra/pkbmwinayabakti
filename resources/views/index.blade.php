<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H3ETDJWZJ5"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-H3ETDJWZJ5');
    </script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="pkbm,pkbm winaya bakti,winaya bakti,sekolah terbaik,sekolah hebat,sekolah mantap,sekolah indenesia,paket a,paket b,paket c,paket d,sekolah paket banyusari,sekolah paket karawang,sekolah paket indonesia">
    <meta name="description" content="Bergabunglah dengan kami di PKBM Winaya Bakti dan rasakan pengalaman belajar yang menyenangkan, inspiratif, dan membawa dampak positif bagi masa depan Anda. Bersama, mari kita jadikan pendidikan sebagai alat untuk mencapai impian dan membangun generasi penerus bangsa yang unggul dan berdaya saing global.">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="Bergabunglah dengan kami di PKBM Winaya Bakti dan rasakan pengalaman belajar yang menyenangkan, inspiratif, dan membawa dampak positif bagi masa depan Anda. Bersama, mari kita jadikan pendidikan sebagai alat untuk mencapai impian dan membangun generasi penerus bangsa yang unggul dan berdaya saing global.">
    <title>{{ $title }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/icon.png') }}" type="image/x-icon">

    {{-- Framework CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- CSS Fickity -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    {{-- CSS CUSTOM --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">
</head>
<body>
    <nav id="navbar-utama" class="navbar navbar-expand-lg bg-primary-very-less sticky-top">
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
                <a class="nav-link" href="#prestasi">Prestasi</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#kontak">Kontak</a>
                </li>
            </ul>
            <a href="{{ route('register') }}">
                <button type="button" class="btn btn-primary fw-600 d-flex align-items-center justify-content-between">GABUNG SEKARANG <svg xmlns="://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right-short ms-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                  </svg></button>
            </a>
            </div>
        </div>
    </nav>
    <div data-bs-spy="scroll" data-bs-target="#navbar-utama" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
        <section id="hero" class="bg-primary-very-less">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12 hero-copy">
                        <p class="text-primary fw-600 mb-4">PUSAT KEGIATAN BELAJAR MASYARAKAT</p>
                        <h1 class="fw-700">Kualitas pendidikan terbaik ada di PKBM <span class="text-primary">Winaya Bakti</span></h1>
                        <p class="fw-400 mt-4">Menginspirasi, Membangun, dan Memimpin!</p>
                        <a href="{{ route('register') }}">
                            <button class="btn btn-primary fw-600 me-2 mb-2 mb-lg-0">GABUNG SEKARANG</button>
                        </a>
                        <a href="#tentang">
                            <button class="btn btn-primary-outline fw-600">Tentang Sekolah</button>
                        </a>
                    </div>
                    <div class="col-lg-7 d-lg-block d-none">
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
        <section id="pelatihan">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-sm-12 mb-lg-0 mb-md-0 mb-3">
                        <h3 class="fw-700 text-white">PELATIHAN / KURSUS</h3>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="d-lg-flex d-md-flex align-items-lg-center align-items-md-center justify-content-lg-around justify-content-md-around flickity-effect w-100">
                            <div class="list-pelatihan text-center">
                                <img width="100" height="100" class="rounded-circle" src="{{ asset('assets/img/landing_page/pelatihan/jahit.jpg') }}" alt="Pelatihan Menjahit PKBM Winaya Bakti">
                                <p class="text-center mt-2 text-white">Menjahit</p>
                            </div>
                            <div class="list-pelatihan text-center">
                                <img width="100" height="100" class="rounded-circle" src="{{ asset('assets/img/landing_page/pelatihan/bahasa_ingris.jpg') }}" alt="Pelatihan Berbahasa Inggris PKBM Winaya Bakti">
                                <p class="text-center mt-2 text-white">Berbahasa Inggris</p>
                            </div>
                            <div class="list-pelatihan text-center">
                                <img width="100" height="100" class="rounded-circle" src="{{ asset('assets/img/landing_page/pelatihan/desain.jpg') }}" alt="Pelatihan Desain Grafis PKBM Winaya Bakti">
                                <p class="text-center mt-2 text-white">Desain Grafis</p>
                            </div>
                            <div class="list-pelatihan text-center">
                                <img width="100" height="100" class="rounded-circle" src="{{ asset('assets/img/landing_page/pelatihan/komputer.jpg') }}" alt="Pelatihan MS. Office PKBM Winaya Bakti">
                                <p class="text-center mt-2 text-white">Ms. Office</p>
                            </div>
                            <div class="list-pelatihan text-center">
                                <img width="100" height="100" class="rounded-circle" src="{{ asset('assets/img/landing_page/pelatihan/wirausaha.jpg') }}" alt="Pelatihan Keworausahaan PKBM Winaya Bakti">
                                <p class="text-center mt-2 text-white">Kewirausahaan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="prestasi">
            <div class="container">
                <h3 class="fw-700 text-center mb-5">PRESTASI - PRESTASI</h3>
                <div class="row pb-3 flickity-effect">
                    <div class="col-lg-3 col-md-5 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img height="205" src="{{ asset('assets/img/landing_page/prestasi/1.jpg ') }}" class="card-img-top" alt="Prestasi 1 PKBM Winaya Bakti">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-700 mb-0">Juara 1</h5>
                                <p class="p-0 m-0 text-center">Tutor Paket B</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img height="205" src="{{ asset('assets/img/landing_page/prestasi/2.jpg ') }}" class="card-img-top" alt="Prestasi 2 PKBM Winaya Bakti">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-700 mb-0">Juara 1</h5>
                                <p class="p-0 m-0 text-center">Tutor Pendidikan Keaksaraan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img height="205" src="{{ asset('assets/img/landing_page/prestasi/3.jpg ') }}" class="card-img-top" alt="Prestasi 3 PKBM Winaya Bakti">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-700 mb-0">Juara 2</h5>
                                <p class="p-0 m-0 text-center">Tutor Pendidikan Kesetaraan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img height="205" src="{{ asset('assets/img/landing_page/prestasi/4.jpg ') }}" class="card-img-top" alt="Prestasi 4 PKBM Winaya Bakti">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-700 mb-0">Juara 1</h5>
                                <p class="p-0 m-0 text-center">Tutor Pengelola PKBM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img height="205" src="{{ asset('assets/img/landing_page/prestasi/sertifikat 1.png ') }}" class="card-img-top" alt="Prestasi 5 PKBM Winaya Bakti">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-700 mb-0">Juara 2</h5>
                                <p class="p-0 m-0 text-center">Tutor Keaksaraan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img height="205" src="{{ asset('assets/img/landing_page/prestasi/sertifikat 2.png ') }}" class="card-img-top" alt="Prestasi 6 PKBM Winaya Bakti">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-700 mb-0">Juara 1</h5>
                                <p class="p-0 m-0 text-center">Tutor Paket B</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="tentang">
            <div class="container">
                <h3 class="fw-700 text-center mb-3">TENTANG SEKOLAH</h3>
                <div class="row">
                    <div class="col-6 d-lg-block d-none">
                        <img style="max-width: 557px" src="{{ asset('assets/img/landing_page/image_tentang.png') }}" alt="Image Tentang PKBM Winaya Bakti">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="flickity-effect">
                            <div class="copy-tentang me-4" style="margin-top: 17%">
                                <div style="border-top: 5px solid #609966;padding-top:20px;width:100px">
                                    <h5 class="fw-700 text-left">VISI</h5>
                                </div>
                                <div class="visi">
                                    <p class="fw-400 mt-3">Mewujudkan Sumber Daya Manusia yang unggul dengan dasar Iman dan Takwa, dan siap menghadapi tantangan dunia usaha di masa datang dan membentuk generasi masa depan yang berkualitas cerdas, kreatif, sehat jasmani dan berakhlak mulia.</p>
                                </div>
                            </div>
                            <div class="copy-tentang me-4" style="margin-top: 15%">
                                <div style="border-top: 5px solid #609966;padding-top:20px;width:100px">
                                    <h5 class="fw-700 text-left">MISI</h5>
                                </div>
                                <div class="misi">
                                    <p class="fw-400 mt-3">
                                        <b>SAPTA KARYA INOVATIF</b>
                                        <ol>
                                            <li>Menyediakan Sarana dan Prasarana Pendidikan bagi masyarakat secara berkualitas, terjangkau, dan mandiri</li>
                                            <li>Memberikan bekal Pendidikan yang dibutuhkan Masyarakat dengan dasar iman dan takwa, untuk menghadapi tantangan dunnia usaha dimasa datang</li>
                                            <li>Mengupayakan perluasan dan pemerataan pelayanan Pendidikan pada masyarakat</li>
                                            <li>Meningkatkan tingkat Pendidikan masyarakat khususnya di Kecamatan Banyusari Kabupaten Karawang</li>
                                        </ol>
                                    </p>
                                </div>
                            </div>
                            <div class="copy-tentang" style="margin-top: 17%">
                                <div style="border-top: 5px solid #609966;padding-top:20px;width:100px">
                                    <h5 class="fw-700 text-left">MOTTO</h5>
                                </div>
                                <div class="motto">
                                    <p class="fw-400 mt-3">
                                        <b>PROGRESIF (Program Religius Inovatif)</b> Berarti Program Peningkatan Mutu PKBM Winaya Bakti berdasarkan Nilai Religius yang berkembang secara Inovatif dalam mewujudkan Peserta Didik Cerdas dan Kompeitif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="kontak">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="d-flex align-items-center justify-content-start mb-2">
                            <img width="58" height="58" class="me-2" src="{{ asset('assets/icon.png') }}" alt="Logo PKBM Winaya bakti">
                            <img width="58" height="58" src="{{ asset('assets/icon-2.png') }}" alt="Logo 2 PKBM Winaya bakti">
                        </div>
                        <h3 class="fw-700 text-left">PKBM WINAYA BAKTI</h3>
                        <p class="fw-400 text-left m-0 p-0">Kualitas pendidikan terbaik ada di sini!</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mt-lg-0 mt-3">
                        <div class="alamat mb-4">
                            <h5 class="fw-700">Alamat</h5>
                            <p class="fw-400">Kamp. Jungklang RT. 01 RW.08, Desa Jayamukti, Kec. Banyusari, Kab. Karawang, 41375<br><a class="text-dark fw-600 fs-12" href="https://goo.gl/maps/28iKipN66t9QEUp78" target="_BLANK">Lihat Peta</a></p>
                        </div>
                        <div class="kontak-sekolah">
                            <h5 class="fw-700">Kontak Sekolah</h5>
                            <p class="fw-400">No. HP : <a class="text-dark" href="https://api.whatsapp.com/send?phone=6285659944490" target="_BLANK">085659944490</a><br>Email : pkbmwinayabaktiofficial@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 ps-lg-5">
                        <h5 class="fw-700">Sosial Media</h5>
                        <div class="sosial-media">
                            <div class="d-flex flex-column">
                                <a href="https://instagram.com/winayabakti" target="_BLANK">
                                    <img width="20" src="{{ asset('assets/img/sosmed/instagram.png') }}" alt="Sosisal Media Instagram PKBM Winaya Bakti">
                                    <p class="m-0 p-0 mb-1 d-inline-block fw-400 ms-1 text-black fs-16">Instagram</p>
                                </a>
                                <a href="https://youtube.com/@PKBMWINAYABAKTI" target="_BLANK">
                                    <img width="20" src="{{ asset('assets/img/sosmed/youtube.png') }}" alt="Sosisal Media Youtube PKBM Winaya Bakti">
                                    <p class="m-0 p-0 mb-1 d-inline-block fw-400 ms-1 text-black fs-16">Youtube</p>
                                </a>
                                <a href="https://www.facebook.com/profile.php?id=100095358017708" target="_BLANK">
                                    <img width="20" src="{{ asset('assets/img/sosmed/facebook.png') }}" alt="Sosisal Media Facebook PKBM Winaya Bakti">
                                    <p class="m-0 p-0 mb-1 d-inline-block fw-400 ms-1 text-black fs-16">Facebook</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
    
    {{-- Framework CSS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Flickity -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @if(session('error'))
        <script>
            $(document).ready(function(){
                Swal.fire({
                    icon: 'error',
                    title: 'Terdapat Kesalahan',
                    text: {{session('error')}},
                    customClass: {
                        confirmButton: 'btn btn-primary-less'
                    }
                });
            })
        </script>
    @endif
    @if(session('success'))
        <script>
            $(document).ready(function(){
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: {{session('success')}},
                    customClass: {
                        confirmButton: 'btn btn-primary-less'
                    }
                });
            })
        </script>
    @endif

    {{-- CUSTOM JavaScript --}}
    <script>
        $('#prestasi .flickity-effect').flickity({
            cellAlign: 'left',
            contain: true,
            wrapAround: true,
            prevNextButtons: false,
            pageDots: true
        });
        $('#tentang .flickity-effect').flickity({
            cellAlign: 'left',
            contain: true,
            prevNextButtons: true,
            pageDots: true,
            adaptiveHeight: true,
            autoPlay: true
        });
    </script>
    <script>
        $('.nav-link').on('click', function(){
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
        });
    </script>
    <script>
        if (window.matchMedia('(max-width: 768px)').matches) {
            $('#pelatihan .flickity-effect').flickity({
                cellAlign: 'left',
                contain: true,
                freeScroll: true,
                wrapAround: true,
                prevNextButtons: false,
                pageDots: false,
                autoPlay: true
            });
        }
    </script>
</body>
</html>