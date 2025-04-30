    <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .wrapper-inner {
            flex: 1;
            display: flex;
            padding: 20px;
            justify-content: center;
            align-items: flex-start;
            transition: margin-left 0.3s ease-in-out;
            margin-left: 250px; /* Default: sidebar terbuka */
        }

        /* Jika sidebar tertutup, konten penuhi layar */
        .wrapper-inner.full {
            margin-left: 0;
        }

        body {
            font-family: Arial, sans-serif;
            padding-top: 56px;
        }
        /* Container untuk dashboard */
        .container-dashboard {
            background-color: #f5f5f5; /* Abu muda */
            border-radius: 8px;
            padding: 20px;
        }

        /* Desain kotak (box) */
        .box {
            background-color: #ffffff; /* Putih */
            border: 1px solid #ddd; /* Border abu */
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow lembut */
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .box:hover {
            transform: scale(1.05); /* Efek zoom */
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2); /* Shadow lebih tebal saat hover */
        }

    </style>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Include Sidebar -->
        @include('partials.sidebar_guru')

        <!-- Content Wrapper -->
        <div class="wrapper-inner">
            <div class="container mt-4">
                @yield('content')
            </div>
        </div>
        <!-- /.content-wrapper -->
    </div>

    <footer>
        @include('partials.footer')
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('scripts')
    <!-- Tombol toggle, misalnya di navbar -->

    <script>
        const toggleBtn = document.getElementById('toggleSidebar');
        const sidebar = document.querySelector('.sidebar'); // Sesuaikan jika perlu
        const wrapperInner = document.querySelector('.wrapper-inner');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('closed'); // Sidebar ditutup
            wrapperInner.classList.toggle('full'); // Konten penuhi layar
        });

        document.getElementById('toggleSidebar').addEventListener('click', function () {
        document.body.classList.toggle('sidebar-collapse');
    });
    </script>

</body>
</html>
