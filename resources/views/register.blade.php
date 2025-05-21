<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ThinkSearch Register</title>
        <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <div class="container p-3">
            <h2 class="text-center">Buat Akun Baru</h2>
            <div class="row justify-content-center align-items-center mt-5">
                <!-- Gambar di sebelah kiri -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('storage/img/register.png') }}" class="img-fluid rounded">
                </div>
                <!-- Form register di sebelah kanan -->
                <div class="col-md-6">
                    <div class="form p-3 border rounded shadow">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="post" action="{{ route('register.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="namaInput" class="form-label">Nama</label>
                                <input type="text" class="form-control @error('namaInput') is-invalid @enderror" id="namaInput" name="namaInput" value="{{ old('namaInput') }}">
                                @error('namaInput')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="kelasInput" class="form-label">Kelas</label>
                                <select class="form-select @error('kelasInput') is-invalid @enderror" id="kelasInput" name="kelasInput">
                                    <option value="">-- Pilih Kelas --</option>
                                    <option value="X 1" {{ old('kelasInput') == 'X 1' ? 'selected' : '' }}>X 1</option>
                                    <option value="X 2" {{ old('kelasInput') == 'X 2' ? 'selected' : '' }}>X 2</option>
                                    <option value="X 3" {{ old('kelasInput') == 'X 3' ? 'selected' : '' }}>X 3</option>
                                    <option value="X 4" {{ old('kelasInput') == 'X 4' ? 'selected' : '' }}>X 4</option>
                                    <option value="X 5" {{ old('kelasInput') == 'X 5' ? 'selected' : '' }}>X 5</option>
                                    <option value="X 6" {{ old('kelasInput') == 'X 6' ? 'selected' : '' }}>X 6</option>
                                    <option value="X 7" {{ old('kelasInput') == 'X 7' ? 'selected' : '' }}>X 7</option>
                                    <option value="X 8" {{ old('kelasInput') == 'X 8' ? 'selected' : '' }}>X 8</option>
                                </select>
                                @error('kelasInput')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>                            

                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email</label>
                                <input type="text" class="form-control @error('emailInput') is-invalid @enderror" id="emailInput" name="emailInput" value="{{ old('emailInput') }}">
                                @error('emailInput')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="passwordInput" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control @error('passwordInput') is-invalid @enderror" id="passwordInput" name="passwordInput">
                                    <button class="btn btn-outline-secondary toggle-password" type="button" data-target="passwordInput">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                                <p style="font-size: 12px">*Minimal 8 karakter campuran angka dan huruf</p>
                                @error('passwordInput')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="passwordInput_confirmation" class="form-label">Konfirmasi Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control @error('passwordInput_confirmation') is-invalid @enderror" id="passwordInput_confirmation" name="passwordInput_confirmation">
                                    <button class="btn btn-outline-secondary toggle-password" type="button" data-target="passwordInput_confirmation">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                                @error('passwordInput_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.toggle-password').click(function() {
                    var input = $('#' + $(this).data('target'));
                    var icon = $(this).find('i');
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    </body>
</html>
