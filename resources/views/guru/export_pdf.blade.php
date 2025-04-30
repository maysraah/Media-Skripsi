<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai - {{ $jenisTes }}</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
    </style>
</head>
<body>
    <h2>Hasil {{ $jenisTes }}</h2>

    @foreach ($data as $kelas => $siswaKelas)
        <h3>Kelas: {{ $kelas }}</h3>
        <table border="1" cellpadding="5" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Waktu Pengerjaan</th>
                    <th>Percobaan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswaKelas as $index => $siswa)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $siswa['nama'] }}</td>
                        <td>{{ $siswa['nilai'] }}</td>
                        <td>{{ $siswa['waktu'] }}</td>
                        <td>{{ $siswa['percobaan'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    @endforeach
</body>
</html>
