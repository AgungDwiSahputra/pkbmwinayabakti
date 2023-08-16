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
            <a href="{{ route('index') }}" class="mb-3 d-block nav-link text-left w-100 text-primary fs-14">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                </svg>
              kembali</a>
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
                    <a href="https://instagram.com/winayabakti" target="_BLANK">
                        <img width="20" src="{{ asset('assets/img/sosmed/instagram.png') }}" alt="Sosisal Media Instagram PKBM Winaya Bakti">
                        <p class="m-0 p-0 mb-1 d-inline-block fw-400 ms-1 text-black">Instagram</p>
                    </a>
                    <a href="https://youtube.com/@PKBMWINAYABAKTI" target="_BLANK">
                        <img width="20" src="{{ asset('assets/img/sosmed/youtube.png') }}" alt="Sosisal Media Youtube PKBM Winaya Bakti">
                        <p class="m-0 p-0 mb-1 d-inline-block fw-400 ms-1 text-black">Youtube</p>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100095358017708" target="_BLANK">
                        <img width="20" src="{{ asset('assets/img/sosmed/facebook.png') }}" alt="Sosisal Media Facebook PKBM Winaya Bakti">
                        <p class="m-0 p-0 mb-1 d-inline-block fw-400 ms-1 text-black">Facebook</p>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=6285894240856">
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
                        <div class="d-lg-none d-flex align-items-center justify-content-center mb-3">
                            <img width="58" height="58" class="me-2" src="{{ asset('assets/icon.png') }}" alt="Logo PKBM Winaya bakti">
                            <img width="58" height="58" src="{{ asset('assets/icon-2.png') }}" alt="Logo 2 PKBM Winaya bakti">
                        </div>
                        @php
                            $year = date("Y");
                            $nextYear = date("Y", strtotime("+1 year"));
                        @endphp
                        <h5 class="text-center fw-700 mb-5">FORMULIR PENDAFTARAN<br>SISWA/I BARU PKBM WINAYA BAKTI<br>TAHUN AJARAN {{ $year }}/{{ $nextYear }}</h5>
                        <div class="d-lg-none d-block pilihan-paket mt-5">
                            <h6 class="fw-700 text-center">PILIHAN PAKET</h6>
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="btn-paket btn btn-primary-less-outline text-white w-100 mb-2 me-2 fw-600 active" data-value="a">PAKET A</button>
                                <button class="btn-paket btn btn-primary-less-outline text-white w-100 mb-2 me-2 fw-600" data-value="b">PAKET B</button>
                                <button class="btn-paket btn btn-primary-less-outline text-white w-100 mb-2 fw-600" data-value="c">PAKET C</button>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" id="form-data">
                    @csrf
                    <input id="input_paket" type="text" name="paket" value="a" hidden>
                    <div id="proses-data" class="d-flex flex-row align-items-center">
                        <div id="data-1" class="w-100">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 pe-lg-4 p-0 px-2">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="nama_lengkap" class="form-label">Nama Lengkap<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" autofocus required id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Lengkap">
                                            @error('nama_lengkap')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" autofocus required id="email" name="email" placeholder="Masukan Email">
                                            @error('email')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="no_hp" class="form-label">Nomor Handphone<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" autofocus required id="no_hp" name="no_hp" placeholder="Masukan Nomor Handphone">
                                            @error('no_hp')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="kota" class="form-label">Kabupaten / Kota<span class="text-danger">*</span></label>
                                            <select id="kota" class="form-select select2" aria-label="kota" name="kota" required>
                                                @foreach($kabupaten as $kab)
                                                    @php
                                                        $kota = $kab->id.'-'.$kab->provinsi->id;
                                                    @endphp 
                                                    <option value="{{ $kota }}">{{ $kab->nama .', '.$kab->provinsi->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-9">
                                            <label for="alamat" class="form-label">Alamat Lengkap<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" autofocus required name="alamat_lengkap" id="alamat" placeholder="Masukan Alamat Lengkap">
                                            @error('alamat_lengkap')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="kode_pos" class="form-label">Kode Pos<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" autofocus required id="kode_pos" name="kode_pos" placeholder="Kode Pos">
                                            @error('kode_pos')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="kewarganegaraan" class="form-label">Kewarganegaraan<span class="text-danger">*</span></label>
                                            <select id="kewarganegaraan" class="form-select select2" aria-label="Kewarganegaraan" name="kewarganegaraan" required>
                                                <option value="wni" selected>Warga Negara Indonesia</option>
                                                <option value="wna">Warga Negara Asing</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="pendidikan_akhir" class="form-label">Pendidikan Akhir<span class="text-danger">*</span></label>
                                            <select id="pendidikan_akhir" class="form-select select2" aria-label="Pendidikan Akhir" name="pendidikan_akhir" required>
                                                <option value="sma" selected>SMA</option>
                                                <option value="smp">SMP</option>
                                                <option value="sd">SD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 ps-lg-4 p-0 px-2 mt-lg-0 mt-3">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="nisn" class="form-label">NISN</label>
                                            <input type="number" class="form-control" autofocus id="nisn" name="nisn" placeholder="Masukan Nomor Induk Siswa Nasional" maxlength="18">
                                            @error('nisn')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="nik" class="form-label">NIK<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" autofocus required id="nik" name="nik" placeholder="Masukan Nomor Induk Keluarga" maxlength="30">
                                            @error('nik')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="agama" class="form-label">Agama<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" autofocus required id="agama" name="agama" placeholder="Masukan Agama">
                                            @error('agama')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-7">
                                            <label for="tempat_lahir" class="form-label">Tempat Lahir<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" autofocus required name="tempat_lahir" id="tempat_lahir" placeholder="Masukan Tempat Lahir">
                                            @error('tempat_lahir')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-5">
                                            <label for="tgl_lahir" class="form-label">Tanggal Lahir<span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" autofocus required id="tgl_lahir" name="tgl_lahir" placeholder="Masukan Tanggal Lahir">
                                            @error('tgl_lahir')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                                            <select id="jenis_kelamin" class="form-select select2" aria-label="jenis_kelamin" name="jenis_kelamin" required>
                                                <option value="laki-laki" selected>Laki - Laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="nama_ibu" class="form-label">Nama Ibu<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" autofocus required id="nama_ibu" name="nama_ibu" placeholder="Masukan Nama Ibu">
                                            @error('nama_ibu')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="no_hp_ortu" class="form-label">Nomor Telepon Orang Tua<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" autofocus required id="no_hp_ortu" name="no_hp_ortu" placeholder="Masukan Nomor Handphone Orang Tua">
                                            @error('no_hp_ortu')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
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
                                <div class="col-lg-6 col-md-12 col-sm-12 pe-lg-4 p-0 px-2">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="ktp" class="form-label">Upload KTP</label>
                                            <input class="form-control" type="file" id="ktp" name="ktp">
                                            <div class="uploaded_ktp mt-2 ms-1">
                                                <img id="ktp_preview" src="#" alt="KTP Preview" style="display: none;max-height:97px;">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="kk" class="form-label">Upload Kartu Keluarga</label>
                                            <input class="form-control" type="file" id="kk" name="kk">
                                            @error('kk')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                            <div class="uploaded_kk mt-2 ms-1">
                                                <img id="kk_preview" src="#" alt="KK Preview" style="display: none;max-height:97px;">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="ijazah" class="form-label">Upload Ijazah Pendidikan Terakhir</label>
                                            <input class="form-control" type="file" id="ijazah" name="ijazah">
                                            @error('ijazah')
                                                <span class="text-danger" style="font-size: 12px">{{ $message }}</span>
                                            @enderror
                                            <div class="uploaded_ijazah mt-2 ms-1">
                                                <img id="ijazah_preview" src="#" alt="Ijazah Preview" style="display: none;max-height:97px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="d-lg-none d-block mt-4" style="width: 50%">
                                <div class="col-lg-6 col-md-12 col-sm-12 ps-lg-4 p-0 px-2 mt-lg-0 mt-3">
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
                                    <button type="submit" class="btn btn-primary-less mt-4 fw-600 text-white">KIRIM</button>
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
        $(document).ready(function() {
            if ($(window).width() < 992) {
                $("#navbar-utama").remove();
            }
        });
    </script>

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
        function validateForm(number) {
            // const inputFields = document.querySelectorAll('input[required]');
            const inputFields = $('#data-'+number).find('input[required]').toArray();
            let allFieldsFilled = true;

            inputFields.forEach((input) => {
                if (input.value == '' || input.value == null) {
                    allFieldsFilled = false;
                }
            });

            return allFieldsFilled;
        }
    </script>

    <script>
        // Navigasi form data
        $('.btn-data').on('click', function(){
            var action = $(this).attr('data-action');
            var now_show = parseInt($(this).attr('data-show')); //Mengambil form ke berapa yang tampil => 2
            if (validateForm(now_show)) {
                if(action == 'previous'){
                    var show = '#data-'+(now_show-1); //membuat format id data untuk show/hide setiap form => #data-1
                    $(show).show();
                    $('#data-'+now_show).hide();
                }else{
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
                });
                $('#form-data').submit();
            }
        });

        // Mengaktifkan select2
        $(document).ready(function(){
            $('.select2').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            // Ketika input file diubah
            $('#ktp').change(function() {
                $('#ktp_preview').show();
                readURL(this, '#ktp_preview');
            });
            $('#kk').change(function() {
                $('#kk_preview').show();
                readURL(this, '#kk_preview');
            });
            $('#ijazah').change(function() {
                $('#ijazah_preview').show();
                readURL(this, '#ijazah_preview');
            });
        });
        
        // Fungsi untuk membaca URL file dan menampilkan gambar
        function readURL(input, previewSelector) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function(e) {
                    $(previewSelector).attr('src', e.target.result);
                };
        
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>
</html>