<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ThinkSearch Login</title>
  <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
  <div class="container p-3">
    <h2 class="text-center">Selamat Datang di Media Pembelajaran</h2>
    <h2 class="text-center">Algoritma Pencarian <i>(Searching)</i> Kelas X</h2>
    <div class="row justify-content-center align-items-center mt-5">
      <div class="col-md-6 text-center">
        <img src="{{ asset('storage/img/login.png') }}" class="img-fluid rounded">
      </div>
      <div class="col-md-6">
        <div class="form p-3 border rounded shadow">
          <h3 class="text-center mb-3">Masuk untuk melanjutkan</h3>

          <form method="post" action="{{ route('login.auth') }}">
            @csrf

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
              @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <div class="input-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                <button class="btn btn-outline-secondary toggle-password" type="button" data-target="password">
                  <i class="bi bi-eye"></i>
                </button>
              </div>
              @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="checkRemember" name="checkRemember">
              <label class="form-check-label" for="checkRemember">Ingat Saya</label>
            </div>

            <div class="text-end mb-3">
              <button type="submit" class="btn btn-primary">Masuk</button>
            </div>
          </form>

          <p class="text-center mt-3">
            Belum punya akun? <a href="{{ route('register.show') }}" class="text-success">Buat akun sekarang!</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  @include('partials.footer')

  <!-- jQuery (diperlukan untuk toggle password) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script untuk toggle password -->
  <script>
    $(document).ready(function () {
      $('.toggle-password').click(function () {
        const targetId = $(this).data('target');
        const input = $('#' + targetId);
        const icon = $(this).find('i');

        if (input.attr('type') === 'password') {
          input.attr('type', 'text');
          icon.removeClass('bi-eye').addClass('bi-eye-slash');
        } else {
          input.attr('type', 'password');
          icon.removeClass('bi-eye-slash').addClass('bi-eye');
        }
      });
    });
  </script>
</body>
</html>
