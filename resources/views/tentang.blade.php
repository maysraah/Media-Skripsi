<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi Media</title>
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
                <p>Media pembelajaran ini dibuat untuk memenuhi persyaratan dalam menyelesaikan program Strata-1 Pendidikan Komputer dengan judul:</p>
                <h3 class="text-center mb-4 fw-bold">
                    Pengembangan Media Pembelajaran Interaktif Berbasis Web pada Materi Algoritma <i>Searching</i> untuk Kelas X SMA dengan Pendekatan <i>Computational Thinking</i>
                </h3>
                <h3 class="text-dark mb-3 fw-semibold">Identitas Pengembang</h3>
                <ul class="list-unstyled fs-5">
                    <li class="d-flex mb-2">
                        <span class="fw-bold" style="width: 250px">Nama</span> 
                        <span>: Maysarah</span>
                    </li>
                    <li class="d-flex mb-2">
                        <span class="fw-bold" style="width: 250px">Dosen Pembimbing 1</span> 
                        <span>: Dr. Harja Santana Purba, M. Kom</span>
                    </li>
                    <li class="d-flex mb-2">
                        <span class="fw-bold" style="width: 250px">Dosen Pembimbing 2</span> 
                        <span>: Novan Alkaf Bahraini Saputra, S. Kom, M. T</span>
                    </li>
                    <li class="d-flex mb-2">
                        <span class="fw-bold" style="width: 250px">Program Studi</span> 
                        <span>: Pendidikan Komputer</span>
                    </li>
                    <li class="d-flex mb-2">
                        <span class="fw-bold" style="width: 250px">Fakultas</span> 
                        <span>: Fakultas Keguruan dan Ilmu Pendidikan</span>
                    </li>
                    <li class="d-flex mb-2">
                        <span class="fw-bold" style="width: 250px">Universitas</span> 
                        <span>: Universitas Lambung Mangkurat</span>
                    </li>
                    <li class="d-flex mb-2">
                        <span class="fw-bold" style="width: 250px">Email</span> 
                        <span>: <a href="mailto:mayyysarah18@gmail.com" class="text-decoration-none text-primary">mayyysarah18@gmail.com</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <!-- Card untuk membungkus konten dalam box -->
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class=" mb-4 fw-bold">
                    Daftar Pustaka dan Atribusi
                </h3>

                <p>Beecher, K. (2017). Computational Thinking A Beginner's Guide to Problem-Solving and Programming.</p>
                <p>Liem, N., Vania, N., Hakim, H., & Natalia. (2022). Computational Thinking Mata Kuliah Pilihan Selektif.</p>
                <p>Mushthofa, Wahyono, Asfarian, A., Ramadhan, D. A., Putro, H. P., Wisnubhadra, I., . . . Pratiwi, H. (2021). Informatika. Jakarta Pusat: Pusat Kurikulum dan Perbukuan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</p>
                <p>Prasetyo, S. A. (n.d.). Buku Pendamping Pembelajaran ASPIRASI, Informatika untuk SMA/MA Semester 2 (Fase E). CV Graha Printama Selaras.</p>
                <p>Yanti, F., & Eriana, E. S. (2024). Algoritma Sorting dan Searching. Purbalingga: Eureka Media Aksara.</p>
                <p>Ilustrasi pada media pembelajaran diadapatasi dari <a href="https://storyset.com/work" class="text-decoration-none text-primary">storyset.com/work.</a>
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
