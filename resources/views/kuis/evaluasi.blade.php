<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evaluasi</title>
  <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/kuis/evaluasi.css') }}">
</head>
<body>
  <div class="container mt-4">
    <h1 class="text-center" style="color:#011B78">Evaluasi</h1>
    <div class="row mt-4">
      
      <!-- Kolom Kiri: Soal -->
      <div class="col-md-8 mb-4">
        <div class="question-container">
          <div id="question-content"></div>
          <div class="navigation-buttons mt-3">
            <button id="prev-btn" class="btn btn-danger" disabled>&laquo; Sebelum</button>
            <button id="next-btn" class="btn btn-primary">Selanjutnya &raquo;</button>
          </div>
        </div>
      </div>
  
      <!-- Kolom Kanan: Info -->
      <div class="col-md-4">
        <div class="card shadow-sm mb-4">
          <div class="card-body text-center">
            <h4 id="percobaan">Percobaan ke-{{ $nilai->percobaan + 1 }}</h4>
            <div id="timer" class="timer my-2 fs-4 text-danger"></div>
          </div>
        </div>
  
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <h5>Daftar Soal</h5>
            <div id="question-nav" class="question-navigation"></div>
          </div>
        </div>
  
        <div class="submit-container mt-3 text-center">
          <button id="submit-btn" class="btn btn-success" style="display: none;">Kumpulkan Jawaban</button>
        </div>

        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="text-center">Keterangan</h5>
            <div>
              <div class="legend-item"><span class="legend-color active"></span> Nomor soal saat ini</div>
              <div class="legend-item"><span class="legend-color answered"></span> Soal sudah terjawab</div>
              <div class="legend-item"><span class="legend-color ragu"></span> Jawaban ragu-ragu</div>
              <div class="legend-item"><span class="legend-color belum"></span> Soal belum terjawab</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <script src="{{ asset('js/kuis/evaluasi.js') }}"></script>
</body>
</html>
