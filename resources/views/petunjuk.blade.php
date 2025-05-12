<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ThinkSearch</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            font-size: var(--base-font-size);
        }

        .btn-nav:hover {
            color: #011B78 !important;
        }

        .btn-login:hover {
            background-color: #0335c2 !important;
            color: white !important;
        }

        li {
            padding: 5px;
        }
    </style>
</head>
<body>
    <!-- Navigasi Lengket -->
    <nav class="navbar navbar-expand-lg bg-light sticky-top shadow-sm">
        <div class="container-fluid">
            <h4 style="color: #6f727a;">Think<span style="color: #011B78;">Search</span></h4>
            {{-- <a class="navbar-brand" href="#">ThinkSearch</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link active me-3 btn-nav" aria-current="page" href="{{ route('home') }}">Beranda</a>
                    <a class="nav-link active me-3 btn-nav" aria-current="page" href="{{ route('petunjuk') }}">Petunjuk Penggunaan</a>
                    <a class="nav-link active me-3 btn-nav" aria-current="page" href="{{ route('tentang') }}">Tentang</a>
                </div>
            </div>
            <div class="text-end d-flex align-items-center">
                @if (Auth::check())
                    <div class="user me-3">
                        Halo, {{ Auth::user()->name }}
                    </div>
                    <a href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a>
                @else
                    <a href="{{ route('login') }}" class="btn me-2 btn-login" style="background-color: #011B78; color: white">MASUK</a>
                    <a href="{{ route('register.show') }}" class="btn btn-secondary">DAFTAR</a>
                @endif
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container my-5">
        <!-- Card untuk membungkus konten dalam box -->
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="text-center mb-4 fw-bold">
                    Petunjuk Penggunaan Aplikasi
                </h3>
                <h5 class="mb-4 fw-bold">
                    Halaman Beranda
                </h5>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="centered" src="{{ asset('storage/img/landing-page.jpg') }}" alt="Halaman Beranda"
                        style="max-width: 100%; height: auto; width: 700px;">
                </div><br>
                <h5>Keterangan:</h5>
                <ol>
                    <li><b>Navigasi</b> untuk berpindah ke halaman <b>Beranda, Petunjuk Penggunaan,</b> dan <b>Tentang.</b></li>
                    <li>Tombol <b>"Masuk"</b> berfungsi untuk masuk ke akun yang sudah terdaftar dan tombol <b>"Daftar"</b> berfungsi untuk daftar akun bagi pengguna baru.</li>
                    <li>Tombol <b>"Mulai Sekarang"</b> berisi materi pembelajaran bagi siswa. Tombol <b>"Halaman Guru"</b> berisi tabel data siswa dan tabel nilai siswa yang dibutuhkan Guru.</li>
                    <li>Berisi informasi mengenai fitur-fitur yang tersedia dalam media pembelajaran ini.</li>
                </ol><br>
                <h5 class="mb-4 fw-bold">
                    Halaman Materi
                </h5>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img class="centered" src="{{ asset('storage/img/materi-page.png') }}" alt="Halaman Materi"
                        style="max-width: 100%; height: auto; width: 700px;">
                </div><br>
                <h5>Keterangan:</h5>
                <ol>
                    <li><b>Sidebar:</b> Berisi daftar judul setiap sub bab materi. Silahkan klik materi yang ingin dipelajari.</b></li>
                    <li>Tombol <b>"Petunjuk Pengerjaan":</b> Berisi panduan bagaimana cara mengerjakan soal-soal aktivitas dalam media.</li>
                    <li><b>"Informasi Nama User":</b> Jika di klik muncul fitur <b>"Logout"</b></li>
                    <li>Tombol <b>Sebelumnya:</b> Berfungsi untuk berpindah dari halaman yang sedang dibuka ke halaman sebelumnya.</li>
                    <li>Tombol <b>Selanjutnya:</b> Berfungsi untuk berpindah dari halaman yang sedang dibuka ke halaman selanjutnya.</li>
                    <li><b>Konten:</b> Berisi materi yang dibahas, sesuai dengan materi yang dipilih pada sidebar oleh pengguna.</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Link Bootstrap JS dan dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
