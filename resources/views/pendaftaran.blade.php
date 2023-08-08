<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> <!-- HAPUS BAGIAN INI -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="pendaftaran sekolah, pkbm, winaya bakti, daftar sekolah terbaik, daftar sekolah hebat, daftar sekolah mantap, daftar sekolah indenesia, paket a, paket b, paket c, paket d, daftar sekolah paket banyusari, daftar sekolah paket karawang, sekolah paket indonesia">
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

    {{-- SELECT2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body>
    <div id="pendaftaran" class="d-flex flex-row justify-content-center">
        <nav class="nav flex-column align-items-center position-relative" id="navbar-utama">
            <div class="d-flex align-items-center justify-content-start">
                <img width="58" height="58" class="me-2" src="{{ asset('assets/icon.png') }}" alt="Logo PKBM Winaya bakti">
                <img width="58" height="58" src="{{ asset('assets/icon-2.png') }}" alt="Logo 2 PKBM Winaya bakti">
            </div>
            <h5 class="text-center fw-700 text-small d-block mb-3 mt-1">PKBM<br>Winaya Bakti</h5>
            <div class="pilihan-paket mt-5">
                <h6 class="fw-700 text-center">PILIHAN PAKET</h6>
                <button class="btn-paket btn btn-primary-less-outline text-white w-100 mb-2 fw-600 active" data-value="a">PAKET A</button>
                <button class="btn-paket btn btn-primary-less-outline text-white w-100 mb-2 fw-600" data-value="b">PAKET B</button>
                <button class="btn-paket btn btn-primary-less-outline text-white w-100 mb-2 fw-600" data-value="c">PAKET C</button>
            </div>
            <div class="sosial-media position-absolute">
                <div class="d-flex flex-column">
                    <a href="">
                        <img width="20" src="{{ asset('assets/img/sosmed/instagram.png') }}" alt="Sosisal Media Instagram PKBM Winaya Bakti">
                        <p class="m-0 p-0 mb-1 d-inline-block fw-400 ms-1 text-black">Instagram</p>
                    </a>
                    <a href="">
                        <img width="20" src="{{ asset('assets/img/sosmed/youtube.png') }}" alt="Sosisal Media Youtube PKBM Winaya Bakti">
                        <p class="m-0 p-0 mb-1 d-inline-block fw-400 ms-1 text-black">Youtube</p>
                    </a>
                    <a href="">
                        <img width="20" src="{{ asset('assets/img/sosmed/facebook.png') }}" alt="Sosisal Media Facebook PKBM Winaya Bakti">
                        <p class="m-0 p-0 mb-1 d-inline-block fw-400 ms-1 text-black">Facebook</p>
                    </a>
                    <a href="">
                        <img width="20" src="{{ asset('assets/img/sosmed/whatsapp.png') }}" alt="Sosisal Media Whatsapp PKBM Winaya Bakti">
                        <p class="m-0 p-0 mb-1 d-inline-block fw-400 ms-1 text-black">+62 858-9424-0856</p>
                    </a>
                </div>
            </div>
        </nav>

        <div id="content" class="bg-white position-relative" data-bs-spy="scroll" data-bs-target="#navbar-utama" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h5 class="text-center fw-700 mb-5">FORMULIR PENDAFTARAN<br>SISWA/I BARU PKBM WINAYA BAKTI<br>TAHUN AJARAN 2023/2024</h5>
                    </div>
                </div>
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input id="input_paket" type="text" name="paket" value="a" hidden>
                    <div id="proses-data" class="d-flex flex-row align-items-center">
                        <div id="data-1" class="w-100">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 pe-4">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" autofocus required id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Lengkap">
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" autofocus required id="email" name="email" placeholder="Masukan Email">
                                        </div>
                                        <div class="col-12">
                                            <label for="no_hp" class="form-label">Nomor Handphone</label>
                                            <input type="number" class="form-control" autofocus required id="no_hp" name="no_hp" placeholder="Masukan Nomor Handphone">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="provinsi" class="form-label">Provinsi</label>
                                            <select id="provinsi" class="form-select select2" aria-label="Provinsi" name="provinsi" required>
                                                <option value="1" selected>Jawa Barat</option>
                                                <option value="2">One</option>
                                                <option value="3">Two</option>
                                                <option value="4">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="kota" class="form-label">Kota/Kabupaten</label>
                                            <select id="kota" class="form-select select2" aria-label="Kota atau Kabupaten" name="kota" required>
                                                <option value="1" selected>Karawang</option>
                                                <option value="2">One</option>
                                                <option value="3">Two</option>
                                                <option value="4">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-9">
                                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                                            <input type="text" class="form-control" autofocus required name="alamat_lengkap" id="alamat" placeholder="Masukan Alamat Lengkap">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="kode_pos" class="form-label">Kode Pos</label>
                                            <input type="number" class="form-control" autofocus required id="kode_pos" name="kode_pos" placeholder="Kode Pos">
                                        </div>
                                        <div class="col-12">
                                            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                            <select id="kewarganegaraan" class="form-select select2" aria-label="Kewarganegaraan" name="kewarganegaraan" required>
                                                <option value="1" selected>Warga Negara Indonesia</option>
                                                <option value="2">One</option>
                                                <option value="3">Two</option>
                                                <option value="4">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="pendidikan_akhir" class="form-label">Pendidikan Akhir</label>
                                            <select id="pendidikan_akhir" class="form-select select2" aria-label="Pendidikan Akhir" name="pendidikan_akhir" required>
                                                <option value="1" selected>SMA</option>
                                                <option value="2">One</option>
                                                <option value="3">Two</option>
                                                <option value="4">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 ps-4">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="nisn" class="form-label">NISN</label>
                                            <input type="number" class="form-control" autofocus required id="nisn" name="nisn" placeholder="Masukan Nomor Induk Siswa Nasional">
                                        </div>
                                        <div class="col-12">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="number" class="form-control" autofocus required id="nik" name="nik" placeholder="Masukan Nomor Induk Keluarga">
                                        </div>
                                        <div class="col-12">
                                            <label for="agama" class="form-label">Agama</label>
                                            <input type="text" class="form-control" autofocus required id="agama" name="agama" placeholder="Masukan Agama">
                                        </div>
                                        <div class="col-md-7">
                                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control" autofocus required name="tempat_lahir" id="tempat_lahir" placeholder="Masukan Tempat Lahir">
                                        </div>
                                        <div class="col-md-5">
                                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" autofocus required id="tgl_lahir" name="tgl_lahir" placeholder="Masukan Tanggal Lahir">
                                        </div>
                                        <div class="col-12">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            <select id="jenis_kelamin" class="form-select select2" aria-label="jenis_kelamin" name="jenis_kelamin" required>
                                                <option value="1" selected>Laki - Laki</option>
                                                <option value="2">One</option>
                                                <option value="3">Two</option>
                                                <option value="4">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                            <input type="text" class="form-control" autofocus required id="nama_ibu" name="nama_ibu" placeholder="Masukan Nama Ibu">
                                        </div>
                                        <div class="col-12">
                                            <label for="no_hp_ortu" class="form-label">Nomor Telepon Orang Tua</label>
                                            <input type="text" class="form-control" autofocus required id="no_hp_ortu" name="no_hp_ortu" placeholder="Masukan Nomor Handphone Orang Tua">
                                        </div>
                                    </div>
                                </div>
                                <div class="action d-flex align-content-center justify-content-end mt-3 mb-4">
                                    <button type="button" class="btn btn-primary-less mt-4 fw-600 text-white btn-data" data-action="next" data-show="1">SELANJUTNYA</button>
                                </div>
                            </div>
                        </div>
                        <div id="data-2" class="w-100" style="display: none;">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 pe-4">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="ktp" class="form-label">Upload KTP</label>
                                            <input class="form-control" type="file" id="ktp" name="ktp">
                                            <div class="uploaded_ktp mt-2 ms-1"></div>
                                        </div>
                                        <div class="col-12">
                                            <label for="kk" class="form-label">Upload Kartu Keluarga</label>
                                            <input class="form-control" type="file" id="kk" name="kk">
                                            <div class="uploaded_kk mt-2 ms-1"></div>
                                        </div>
                                        <div class="col-12">
                                            <label for="ijazah" class="form-label">Upload Ijazah Pendidikan Terakhir</label>
                                            <input class="form-control" type="file" id="ijazah" name="ijazah" required>
                                            <div class="uploaded_ijazah mt-2 ms-1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 ps-4">
                                    <div class="panduan">
                                        <p class="p-0 m-0" style="font-size: 14px;">
                                            <span style="font-size: 14px;font-weight: 600;">Panduan Upload Dokumen/File :</span>
                                            <ol style="font-size: 14px;">
                                                <li>Pastikan Dokumen/File (KTP/KK/Ijazah) dalam kondisi baik dan valid.</li>
                                                <li>Gunakan kamera dengan kualitas baik atau ponsel dengan resolusi tinggi.</li>
                                                <li>Pastikan cahaya cukup dan tidak ada bayangan yang mengganggu.</li>
                                                <li>Pastikan seluruh bagian Dokumen/File (KTP/KK/Ijazah) terlihat jelas pada foto.</li>
                                                <li>Periksa kembali semua informasi pada Dokumen/File (KTP/KK/Ijazah) agar terbaca dengan baik.</li>
                                                <li>Pastikan Dokumen/File (KTP/KK/Ijazah) dalam format JPEG atau PNG.</li>
                                            </ol>
                                        </p>
                                        <p class="p-0 m-0" style="font-size: 14px;">
                                            <span style="font-size: 14px;font-weight: 600;">Informasi Lebih Lanjut :</span><br>
                                            WA : 0858-9424-0856 (Tutor)
                                        </p>
                                    </div>
                                </div>
                                <div class="action d-flex align-content-center justify-content-between mt-4 mb-4">
                                    <button type="button" class="btn btn-primary-less-outline mt-4 fw-600 text-primary-less btn-data" data-action="previous" data-show="2">SEBELUMNYA</button>
                                    <button class="btn btn-primary-less mt-4 fw-600 text-white">KIRIM</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
    
    {{-- Framework CSS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    {{-- SELECT2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Pemilihan Paket
        $('.btn-paket').on('click', function(){
            var nilai = $(this).attr('data-value');
            $('.btn-paket').removeClass('active');
            $(this).addClass('active');
            $('#input_paket').val(nilai);
        });
    </script>

    <script>
        // Validation valid form
        const inputFields = document.querySelectorAll('input[required]');

        function validateForm() {
            let allFieldsFilled = true;

            inputFields.forEach((input) => {
                if (input.value.trim() === '') {
                    allFieldsFilled = false;
                }
            });

            return allFieldsFilled;
        }
    </script>

    <script>
        // Navigasi form data
        $('.btn-data').on('click', function(){
            if (validateForm()) {
                var action = $(this).attr('data-action');
                if(action == 'previous'){
                    var now_show = parseInt($(this).attr('data-show')); //Mengambil form ke berapa yang tampil => 2
                    var show = '#data-'+(now_show-1); //membuat format id data untuk show/hide setiap form => #data-1
                    $(show).show();
                    $('#data-'+now_show).hide();
                }else{
                    var now_show = parseInt($(this).attr('data-show')); //Mengambil form ke berapa yang tampil => 1
                    var show = '#data-'+(now_show+1); //membuat format id data untuk show/hide setiap form => #data-2
                    $(show).show();
                    $('#data-'+now_show).hide();
                }
            }else{
                Swal.fire({
                    icon: 'info',
                    title: 'Oops...',
                    text: 'Masih terdapat data yang belum terisi',
                    customClass: {
                        confirmButton: 'btn btn-primary-less'
                    }
                })
            }
        });

        // Mengaktifkan select2
        $(document).ready(function(){
            $('.select2').select2();
        });
    </script>

</body>
</html>