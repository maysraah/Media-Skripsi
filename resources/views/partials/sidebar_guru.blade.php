<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            padding-top: 56px;
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }

        #nama_media {
            background: linear-gradient(to right, #011B78, #338feb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Hilangkan margin dan padding default */
        html, body {
            margin: 0 !important;
            padding: 0 !important;
            overflow-x: hidden; /* mencegah scroll horizontal */
        }

        /* Hilangkan bayangan sidebar (AdminLTE) */
        .main-sidebar {
            box-shadow: none !important;
        }

        .sidebar .nav-link {
            position: relative;
            color: #000;
            padding-left: 20px;
            transition: transform 0.3s ease;
            white-space: normal;
            word-wrap: break-word;
            word-break: break-word;
        }

        .sidebar .nav-link:before {
            content: '';
            position: absolute;
            left: 0;
            top: 100%;
            transform: translateY(-100%);
            height: 100%;
            width: 4px;
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        .sidebar .nav-link:hover:before {
            background-color: #003869;
        }

        .sidebar .nav-link:hover {
            background-color: #ececec;
        }

        .sidebar .nav-link.active {
            transform: translateX(10px);
            background-color: #ececec;
        }

        .sidebar .nav-link.active:before {
            background-color: #003869;
        }

        .btn-wide {
            min-width: 200px;
            white-space: nowrap;
        }

        .collapse.show {
            display: block !important;
        }

        @media (max-width: 768px) {
            #closeSidebarBtn {
                display: block; 
            }

            .sidebar-closed .brand-link {
                display: flex !important;
            }


            .main-sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease-in-out;
            }

            body.sidebar-open .main-sidebar {
                transform: translateX(0);
            }
        }

        @media (min-width: 768px) {
            #closeSidebarBtn {
                display: none; 
            }

            body.sidebar-open .main-sidebar {
                transform: none !important; 
            }
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item d-md-none">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                    <span class="ml-2">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" aria-labelledby="userDropdown">
                    <a href="{{ route('login.logout') }}" class="dropdown-item">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="petunjukModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Petunjuk Pengerjaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li><b>Soal Pilihan Ganda:</b> Klik jawaban yang anda pilih hingga muncul tanda centang.<br>
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img style="width: 400px;" src="{{ asset('storage/img/pilgan.png') }}" alt="Soal Pilihan Ganda">
                            </div>
                            atau,<br>Klik jawaban yang anda pilih hingga berubah warna menjadi biru.<br>
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img style="width: 150px;" src="{{ asset('storage/img/pilgan-2.png') }}" alt="Soal Pilihan Ganda">
                            </div>
                        </li>
                        <li><b>Soal Isian:</b> Isilah kotak jawaban yang disediakan dengan jawaban anda.<br>
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img src="{{ asset('storage/img/isian.png') }}" alt="Soal Isian">
                            </div>
                        </li>
                    </ul>
                    <p>Setelah mengisi semua jawaban, klik tombol <button class="btn btn-success">Cek Jawaban</button> untuk memeriksa jawaban anda.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
        <div class="brand-link d-flex justify-content-between align-items-center pr-2">
            <h4 id="nama_media">Think to Search</h4>
            <button id="closeSidebarBtn" onclick="closeSidebar()" class="btn btn-sm text-danger" style="font-size: 1.2rem;">
                <i class="fas fa-times"></i>
            </button>
        </div>        
        
        <div class="sidebar">
            <nav class="mt-2">
                <a href="{{ route('dashboard-guru') }}" class="nav-link {{ Request::is('guru/dashboard*') ? 'active' : '' }}">
                    {{-- <i class="nav-icon fas fa-book"></i> --}}
                    <p>Dashboard</p>
                </a>

                <a href="{{ route('data-siswa') }}" class="nav-link {{ Request::is('guru/data-siswa*') ? 'active' : '' }}">
                    {{-- <i class="nav-icon fas fa-user-graduate"></i> --}}
                    <p>Data Siswa</p>
                </a>

                <a href="{{ route('data-nilai') }}" class="nav-link {{ Request::is('guru/data-nilai*') ? 'active' : '' }}">
                    {{-- <i class="nav-icon fas fa-clipboard-list"></i> --}}
                    <p>Data Nilai</p>
                </a>
            </nav>
        </div>
    </aside>
</div>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        // Toggle sidebar untuk mobile
        $('[data-widget="pushmenu"]').on('click', function (e) {
            e.preventDefault();
            $('body').toggleClass('sidebar-open');
        });

        // Tampilkan ikon X ketika sidebar terbuka
        $(window).resize(function () {
            if ($(window).width() <= 768) {
                if ($('body').hasClass('sidebar-open')) {
                    $('#closeSidebarBtn').show(); // Tampilkan tombol X saat sidebar terbuka
                } else {
                    $('#closeSidebarBtn').hide(); // Sembunyikan tombol X jika sidebar tertutup
                }
            } else {
                $('#closeSidebarBtn').hide(); // Sembunyikan tombol X pada layar besar
            }
        });

        // Memastikan status tombol X pada saat halaman pertama kali dimuat
        if ($(window).width() <= 768 && $('body').hasClass('sidebar-open')) {
            $('#closeSidebarBtn').show();
        }

        // Fungsi untuk menutup sidebar
        window.closeSidebar = function () {
            $('body').removeClass('sidebar-open');
            $('#closeSidebarBtn').hide(); // Sembunyikan tombol X setelah sidebar ditutup
        };

        // Simpan status dropdown
        $('.collapse').on('show.bs.collapse', function () {
            localStorage.setItem($(this).attr('id'), 'open');
        });

        $('.collapse').on('hide.bs.collapse', function () {
            localStorage.removeItem($(this).attr('id'));
        });

        // Buka dropdown sebelumnya
        $('.collapse').each(function () {
            if (localStorage.getItem($(this).attr('id')) === 'open') {
                $(this).addClass('show');
            }
        });

        // Scroll ke nav-link aktif
        let activeLink = $('.sidebar .nav-link.active');
        if (activeLink.length > 0) {
            // Buka dropdown yang berisi link aktif
            activeLink.closest('.collapse').addClass('show');
            
            // Scroll ke nav-link aktif setelah dropdown terbuka
            setTimeout(function() {
                $('.sidebar').animate({
                    scrollTop: activeLink.offset().top - $('.sidebar').offset().top + $('.sidebar').scrollTop() - 50
                }, 400);
            }, 300); // Delay untuk memastikan dropdown terbuka terlebih dahulu
        }
    });
</script>
</body>

{{-- <head>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }
        
        .nav-link.active {
            background-color: #003366 !important;
            color: #ffffff !important;
            border-radius: 4px !important;
        }

        .nav-link.active:hover {
            background-color: #001f33 !important;
            color: #ffffff !important;
        }
    </style>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
                <!-- Left navbar links -->
                <button id="toggleSidebar" class="btn btn-light m-2">
                    <i class="fas fa-bars"></i>
                </button>
    
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- User Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                            <span class="ml-2">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" aria-labelledby="userDropdown">
                            <a href="{{ route('login.logout') }}" class="dropdown-item">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
    
            <!-- Main Sidebar -->
            <aside class="main-sidebar sidebar-light-primary elevation-4 position-fixed">
                <!-- Brand Logo -->
                <a href="#" class="brand-link">
                    <h4 style="color: #6f727a;">Think<span style="color: #011B78;">Search</span></h4>
                </a>
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
                            <!-- Dashboard -->
                            <li class="nav-item">
                                <a href="{{ route('dashboard-guru') }}" class="nav-link {{ Request::is('guru/dashboard*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <!-- Data Siswa -->
                            <li class="nav-item">
                                <a href="{{ route('data-siswa') }}" class="nav-link {{ Request::is('guru/data-siswa*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-user-graduate"></i>
                                    <p>Data Siswa</p>
                                </a>
                            </li>
                            <!-- Data Nilai -->
                            <li class="nav-item">
                                <a href="{{ route('data-nilai') }}" class="nav-link {{ Request::is('guru/data-nilai*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-clipboard-list"></i>
                                    <p>Data Nilai</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
    
        <!-- AdminLTE and dependencies -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     --}}