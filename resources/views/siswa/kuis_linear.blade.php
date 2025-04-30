<head>
    <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            background-color: #f8f9fa;
        }
        .center-container {
            height: 100vh;
        }
    </style>
</head>

<div class="container d-flex justify-content-center align-items-center center-container px-2">
    <div class="card shadow w-100" style="max-width: 600px;">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Instruksi Kuis Pencarian Linear</h5>
        </div>
        <div class="card-body">
            @if ($sudahMengerjakan && $lulus)
                <p class="fs-6 text-success">✅ Anda sudah mengerjakan kuis ini dan mendapatkan skor <strong>{{ $nilai->skor }}</strong>.</p>
                <p class="fs-6">Karena skor Anda sudah memenuhi KKM (70), Anda <strong>tidak perlu mengerjakan ulang</strong> kuis ini.</p>
            @else
                <p class="fs-6">Anda akan mengerjakan <strong>Kuis Pencarian Linear</strong></p>
                <p class="fs-6">
                    Waktu yang disediakan untuk menjawab adalah <strong>50 menit</strong>, 
                    Kriteria Ketuntasan Minimal (KKM) yang harus dicapai adalah <strong>70</strong>.
                </p>
                <p class="fs-6 mb-2">Berikut petunjuk pelaksanaannya:</p>
                <ul class="fs-6">
                    <li>Pastikan perangkat terhubung ke internet dengan koneksi yang stabil.</li>
                    <li>Siapkan alat tulis seperti kertas dan pena untuk coretan jika diperlukan.</li>
                    <li>Baca soal dengan teliti.</li>
                    <li>Atur waktu dengan baik agar semua soal terjawab sebelum waktu habis.</li>
                    <li>Jangan keluar atau berpindah aplikasi selama kuis berlangsung.</li>
                    <li>Setelah waktu habis, aplikasi akan otomatis menyimpan jawaban dan menutup akses ke soal.</li>
                </ul>
            @endif
        </div>
        <div class="card-footer d-flex justify-content-end gap-2">
            @if (!($sudahMengerjakan && $lulus))
                <a href="{{ route('siswa.materi', ['bab' => 4, 'page' => 1]) }}" class="btn btn-danger">Batal</a>
                {{-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button> --}}
                <a href="{{ route('kuis.kuis_linear') }}" class="btn btn-primary" id="modalKuisBtn">Kerjakan Kuis</a>
            @else
                <a href="{{ route('siswa.materi', ['bab' => 4, 'page' => 2]) }}" class="btn btn-secondary">Materi Selanjutnya</a>
            @endif
        </div>
    </div>
</div>


<!-- Bootstrap JS (Optional, for modal functionality) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>