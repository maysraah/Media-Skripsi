<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Materi')</title>
  <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">
  <!-- Bootstrap & Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Custom CSS -->
  <style>
    :root {
      --base-font-size: 16px;
    }
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      font-size: var(--base-font-size);
      /* padding-top: 56px; */
      padding: 30px;
    }
    @media (max-width: 576px) {
      :root { --base-font-size: 14px; }
    }
    @media (min-width: 768px) {
      :root { --base-font-size: 16px; }
    }
    @media (min-width: 1200px) {
      :root { --base-font-size: 18px; }
    }
    
    .wrapper {
      display: flex;
      flex-direction: column;
      background-color: #011B78;
    }
    .wrapper-inner {
      display: flex;
      margin-left: 250px;
      transition: margin-left 0.3s ease;
      padding-top: 50px;
      padding-left: 20px;
      padding-right: 20px;
      padding-bottom: 20px;
    }

    .content-inner {
      box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1), 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Pada layar kecil, hilangkan margin kiri supaya konten full-width */
    @media (max-width: 768px) {
      .wrapper-inner { margin-left: 0; }
      }
      .content-inner {
        width: 100%;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
  </style>
  @stack('styles')
</head>
<body>
  <div class="wrapper">
    @include('partials.sidebar')
    <div class="wrapper-inner">
      <div class="content-inner">
        @yield('content')
      </div>
    </div>
  </div>
  @include('partials.footer')
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
  <script>
    const scrollKey = `scrollPosition_${window.location.pathname}`;
  
    // Simpan posisi scroll sebelum unload
    window.addEventListener('beforeunload', function () {
      localStorage.setItem(scrollKey, window.scrollY);
    });
  
    // Saat halaman dimuat, kembalikan scroll (jika ada)
    window.addEventListener('load', function () {
      const savedPosition = localStorage.getItem(scrollKey);
      if (savedPosition !== null) {
        window.scrollTo({ top: parseInt(savedPosition), behavior: 'auto' });
      }
  
      // Hapus posisi scroll halaman lain untuk mencegah efek lintas halaman
      Object.keys(localStorage).forEach(key => {
        if (key.startsWith('scrollPosition_') && key !== scrollKey) {
          localStorage.removeItem(key);
        }
      });
    });
  </script>  
</body>
</html>
