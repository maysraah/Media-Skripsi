<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ThinkToSearch</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .start-btn {
            background-color: #011B78;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 15px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            display: inline-block;
            text-decoration: none;
        }

        .start-btn:hover {
            background-color: #0225a3;
            transform: scale(1.05);
        }
        
        #nama_media {
            background: linear-gradient(to right, #011B78, #338feb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
      </style>
</head>
<body>
    <!-- Navigasi Lengket -->
    <nav class="navbar navbar-expand-lg bg-light sticky-top shadow-sm">
        <div class="container-fluid">
            <h4 id="nama_media">Think to Search</h4>
            {{-- <h4 style="color: #011B78" id="nama_media">Think <span style="color: #8E99A7">to</span> <span style="color: #1976D2"> Search</span></h4> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link active me-3 btn-nav" aria-current="page" href="{{ route('home') }}">Beranda</a>
                    <a class="nav-link active me-3 btn-nav" aria-current="page" href="{{ route('petunjuk') }}">Petunjuk Penggunaan</a>
                    <a class="nav-link active me-3 btn-nav" aria-current="page" href="{{ route('tentang') }}">Tentang</a>
                    @if (Auth::check() && Auth::user()->role === 'guru')
                        <a href="{{ route('dashboard-guru') }}" class="nav-link active me-3 btn-nav" aria-current="page">
                            Halaman Guru
                        </a>
                    @elseif (Auth::check() && Auth::user()->role === 'siswa')
                        <a class="nav-link active me-3 btn-nav" aria-current="page" style="pointer-events: none; opacity: 0.6;" aria-disabled="true">
                            Halaman Guru
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link active me-3 btn-nav" aria-current="page">
                            Halaman Guru
                        </a>
                    @endif
                </div>
            </div>
            <div class="text-end d-flex align-items-center">
                @if (Auth::check())
                    <div class="user me-3">
                        Halo, {{ Auth::user()->name }}
                    </div>
                    <a href="{{ route('login.logout') }}" class="btn btn-danger">KELUAR</a>
                @else
                    <a href="{{ route('login') }}" class="btn me-2 btn-login" style="background-color: #011B78; color: white">MASUK</a>
                    <a href="{{ route('register.show') }}" class="btn btn-secondary">DAFTAR</a>
                @endif
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container mt-4">
        <div class="row mb-3 align-items-center">
            <!-- Gambar sebelah kiri -->
            <div class="col-md-6">
                <img src="{{ asset('storage/img/searching.png') }}" class="img-fluid rounded">
            </div>
            <!-- Teks dan Tombol sebelah kanan -->
            <div class="col-md-6" style="text-align: justify;">
                <h5 style="color: #011B78;">Memahami Algoritma Pencarian <i>(Searching)</i> dengan <br>Interaktifitas Menarik</h5>
                <p>Media ini dirancang untuk membantu siswa membangun pemahaman mendalam tentang cara kerja berbagai algoritma pencarian melalui pengalaman belajar yang interaktif dan visual.
                    Dengan pendekatan <i>Computational Thinking</i>, siswa diajak untuk mengamati pola, memecah masalah, menyusun strategi, dan menguji solusi secara sistematis.
                </p>
                
                <a href="{{ route('dashboard.index') }}" class="start-btn">
                    Mulai Sekarang
                </a>
            </div>
        </div>
    </div>
    <!-- Fitur-fitur -->
    <div class="container-fluid py-5" style="background-color: #f5f5f5;">
        <div class="container">
            <h3 class="text-center mb-4" style="color: #011B78;">Fitur-Fitur</h3>
            <div class="row g-4">
                <!-- Fitur 1 -->
                <div class="col-md-4">
                    <div class="p-4 bg-white shadow-sm rounded text-center">
                        <img src="{{ asset('storage/img/fitur-materi.png') }}" class="img-fluid rounded mb-3" alt="Fitur 1" style="max-width: 100px;">
                        <h5 class="fw-bold" style="color: #011B78;">Materi Interaktif</h5>
                        <p>Materi yang dikerjakan siswa akan memberikan umpan balik untuk membantu pembelajaran siswa.</p>
                    </div>
                </div>
                <!-- Fitur 2 -->
                <div class="col-md-4">
                    <div class="p-4 bg-white shadow-sm rounded text-center">
                        <img src="{{ asset('storage/img/fitur-kuis.png') }}" class="img-fluid rounded mb-3" alt="Fitur 2" style="max-width: 100px;">
                        <h5 class="fw-bold" style="color: #011B78;">Kuis dan Evaluasi</h5>
                        <p>Uji pemahaman siswa dengan kuis-kuis di akhir subbab dan evaluasi di akhir pembelajaran.</p>
                    </div>
                </div>
                <!-- Fitur 3 -->
                <div class="col-md-4">
                    <div class="p-4 bg-white shadow-sm rounded text-center">
                        <img src="{{ asset('storage/img/fitur-guru.png') }}" class="img-fluid rounded mb-3" alt="Fitur 3" style="max-width: 100px;">
                        <h5 class="fw-bold" style="color: #011B78;">Dashboard Guru</h5>
                        <p>Halaman khusus untuk guru memonitor pekerjaan siswa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
