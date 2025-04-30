<head>
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
    