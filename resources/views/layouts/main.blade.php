<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'ThinkSearch')</title>
  <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">
  <!-- Bootstrap CSS (versi 5.3) & Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Custom CSS untuk pengaturan font dan layout -->
  <style>
    :root {
      --base-font-size: 16px;
    }
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      font-size: var(--base-font-size);
      padding-top: 56px; /* Ruang untuk navbar fixed */
    }

    /* Tambahan khusus halaman dashboard */
    .container-dashboard {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .content-header h1 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
    }

    /* Responsive font-size */
    @media (max-width: 576px) {
      :root { --base-font-size: 14px; }
    }
    @media (min-width: 768px) {
      :root { --base-font-size: 16px; }
    }
    @media (min-width: 1200px) {
      :root { --base-font-size: 18px; }
    }
    
    /* Layout sidebar & konten */
    .content-wrapper {
      margin-left: 250px;
      transition: margin-left 0.3s ease;
    }
    /* Pada layar kecil, sidebar disembunyikan (pakai offcanvas) sehingga margin konten nol */
    @media (max-width: 768px) {
      .content-wrapper { margin-left: 0; }
    }
  </style>
  @stack('styles')
</head>
<body>
  <div class="wrapper">
    {{-- Include sidebar (pada layar besar tampil fixed, layar kecil pakai offcanvas) --}}
    @include('partials.sidebar')
    
    <!-- Konten Utama -->
    <div class="content-wrapper">
      <div class="container mt-4">
        @yield('content')
      </div>
    </div>
  </div>

  @include('partials.footer')  {{-- Jika ada footer --}}
  
  <!-- Bootstrap JS Bundle (termasuk Popper) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
