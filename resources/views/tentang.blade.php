<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-nav:hover {
          color: #011B78 !important;
        }

        .btn-login:hover {
            background-color: #0335c2 !important;
            color: white !important;
        }
    </style>
</head>
<body class="bg-light">

    <!-- Navigasi Lengket -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ThinkSearch</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link active me-3 btn-nav" aria-current="page" href="{{ route('home') }}">Beranda</a>
                    {{-- <a class="nav-link active me-3 btn-nav" aria-current="page" href="#">Petunjuk Penggunaan</a> --}}
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
                <p>Media pembelajaran ini dibuat untuk memenuhi persyaratan dalam menyelesaikan program Strata-1 Pendidikan Komputer dengan judul:</p>
                <h3 class="text-center mb-4 fw-bold">
                    Pengembangan Media Pembelajaran Interaktif Berbasis Web pada Materi Algoritma <i>Searching</i> untuk Kelas X SMA dengan Pendekatan <i>Computational Thinking</i>
                </h3>
                <h3 class="text-dark mb-3 fw-semibold">Identitas Pengembang</h3>
                <ul class="list-unstyled fs-5">
                    <li class="d-flex mb-2">
                        <span class="fw-bold" style="width: 200px">Nama</span> 
                        <span>: Maysarah</span>
                    </li>
                    <li class="d-flex mb-2">
                        <span class="fw-bold" style="width: 200px">Dosen Pembimbing 1</span> 
                        <span>: Dr. Harja Santana Purba, M. Kom</span>
                    </li>
                    <li class="d-flex mb-2">
                        <span class="fw-bold" style="width: 200px">Dosen Pembimbing 2</span> 
                        <span>: Novan Alkaf Bahraini Saputra, S. Kom, M. T</span>
                    </li>
                    <li class="d-flex mb-2">
                        <span class="fw-bold" style="width: 200px">Program Studi</span> 
                        <span>: Pendidikan Komputer</span>
                    </li>
                    <li class="d-flex mb-2">
                        <span class="fw-bold" style="width: 200px">Fakultas</span> 
                        <span>: Fakultas Keguruan dan Ilmu Pendidikan</span>
                    </li>
                    <li class="d-flex mb-2">
                        <span class="fw-bold" style="width: 200px">Universitas</span> 
                        <span>: Universitas Lambung Mangkurat</span>
                    </li>
                    <li class="d-flex mb-2">
                        <span class="fw-bold" style="width: 200px">Email</span> 
                        <span>: <a href="mailto:mayyysarah18@gmail.com" class="text-decoration-none text-primary">mayyysarah18@gmail.com</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Link Bootstrap JS dan dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
