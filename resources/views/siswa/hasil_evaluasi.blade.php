<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Evaluasi</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h2>Hasil Evaluasi</h2>
        <p><strong>Nama:</strong> {{ $nilai->siswa->user->name }}</p>
        <p><strong>Jenis Tes:</strong> {{ $nilai->jenis_tes }}</p>
        <p><strong>Nilai:</strong> {{ $nilai->nilai }}</p>
        <p><strong>Waktu Pengerjaan:</strong> {{ $nilai->waktu_pengerjaan }} detik</p>
        <p><strong>Percobaan Ke:</strong> {{ $nilai->percobaan }}</p>

        @if($nilai->nilai < 70)
            <div class="alert alert-warning mt-3">Nilai kamu belum mencukupi. Silakan ulangi evaluasi.</div>
            <a href="{{ route('siswa.evaluasi') }}" class="btn btn-warning">Ulang Evaluasi</a>
            <a href="{{ route('siswa.materi', ['bab' => 4, 'page' => 1]) }}" class="btn btn-secondary">Kembali ke Materi</a>
        @else
            <div class="alert alert-success mt-3">Selamat! Nilai kamu sudah memenuhi KKM.</div>
            <a href="{{ route('dashboard.index') }}" class="btn btn-secondary">Dashboard</a>
            {{-- <a href="{{ route('siswa.materi', ['bab' => 4, 'page' => 3]) }}" class="btn btn-success">Lanjut Materi Berikutnya</a> --}}
        @endif
    </div>
</body>
</html>
