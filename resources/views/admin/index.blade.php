<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/icon.png') }}" type="image/x-icon">

    {{-- Framework CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- CSS Fickity -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    {{-- CSS CUSTOM --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
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
            <h5 class="text-center fw-700 text-small d-block mb-3 mt-1">ADMIN<br>PKBM Winaya Bakti</h5>
            <div class="pilihan-paket mt-5 w-100">
                <h6 class="fw-700 text-left">MENU</h6>
                <nav class="nav flex-column">
                    <a class="btn btn-primary-less-outline text-white w-100 mb-2 fw-600 active" aria-current="page" href="#">Dashboard</a>
                    <a class="btn btn-danger w-100 mb-2 fw-600 mt-3" href="{{ route('logout.admin') }}">Logout</a>
                </nav>
                {{-- <button class="btn-paket btn btn-primary-less-outline text-white w-100 mb-2 fw-600 active">Dashboard</button> --}}
                {{-- <button class="btn-paket btn btn-primary-less-outline text-white w-100 mb-2 fw-600" data-value="b">PAKET B</button>
                <button class="btn-paket btn btn-primary-less-outline text-white w-100 mb-2 fw-600" data-value="c">PAKET C</button> --}}
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
            <div class="container p-5">
                <div class="row">
                    <div class="col">
                        <div class="d-lg-none d-flex align-items-center justify-content-center mb-3">
                            <img width="58" height="58" class="me-2" src="{{ asset('assets/icon.png') }}" alt="Logo PKBM Winaya bakti">
                            <img width="58" height="58" src="{{ asset('assets/icon-2.png') }}" alt="Logo 2 PKBM Winaya bakti">
                        </div>
                        <h5 class="text-left fw-700 mb-5">Selamat Datang Admin PKBM Winaya Bakti</h5>
                        <div class="d-lg-none d-block pilihan-paket mt-5">
                            <h6 class="fw-700 text-center">MENU</h6>
                            <nav class="nav flex-row">
                                <a class="btn btn-primary-less-outline text-white w-100 mb-2 fw-600 active" aria-current="page" href="#">Dashboard</a>
                                <a class="btn btn-danger w-100 mb-2 fw-600 mt-3" href="{{ route('logout.admin') }}">Logout</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="kotak text-center w-25">
                            <p class="fw-600">Total Siswa Terdaftar</p>
                            <span>{{ count($siswa) }}</span>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-sm-12">
                        <div class="kotak text-center">
                            <p class="fw-600">Total Siswa Sudah di Konfirmasi</p>
                            <span>10</span>
                        </div>
                    </div> --}}
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <p class="fw-700 mb-0">List Siswa Terdaftar</p>
                        <div class="table-responsive">
                        <table class="table table-hover" id="tabel-user-terdaftar">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Nomor Telepon</th>
                                    <th>Alamat Lengkap</th>
                                    {{-- <th>Aksi</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($siswa as $no => $data)
                                    <tr>
                                        <td>{{ $no+1 }}</td>
                                        <th onclick="detailedSiswa('{{ $data->nisn }}','{{ $data->nik }}')" class="text-primary" style="cursor: pointer">{{ $data->nisn }}</th>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->no_telp }}</td>
                                        <td>{{ $data->alamat_lengkap }}</td>
                                        {{-- <td>
                                            <a href="#" class="text-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                                </svg>    
                                            </a> 
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination">
                            {{ $siswa->appends(Request::all())->links() }}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- MODALS --}}
    <!-- Modal Detail Siswa -->
    <div class="modal fade" id="modal-detailedSiswa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detailedSiswaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="detailedSiswaLabel">Data Detail Siswa</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="data-siswa"><table></table></div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    {{-- END MODALS --}}

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
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
        function detailedSiswa(no_nisn, no_nik) {
            var nisn = no_nisn;
            var nik = no_nik;
            var target = '#modal-detailedSiswa';
            // Make an Ajax request to retrieve student data
            $.ajax({
                url: "{{ route('detail.siswa') }}",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    nisn: nisn,
                    nik: nik
                },
                beforeSend: function () {
                    // Tambahkan kode yang ingin Anda lakukan sebelum permintaan AJAX dimulai
                    $('#data-siswa table').remove();
                },
                success: function (response) {
                    $(target).modal("show");
                    $(target+" #data-siswa").append(response); // Clear existing list
                },
                error: function (xhr, status, error) {
                    console.log('Ajax request failed:', error);
                }
            });
        }
    </script>


</body>
</html>