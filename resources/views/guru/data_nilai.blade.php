@extends('layouts.main_guru')

@section('content')
<div class="container-fluid my-4">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">Data Nilai</h2>

            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <select id="kelas" class="form-select" onchange="filterKelas(this.value)">
                    <option value="">Semua</option>
                    <option value="X 1" {{ request('kelas') == 'X 1' ? 'selected' : '' }}>X 1</option>
                    <option value="X 2" {{ request('kelas') == 'X 2' ? 'selected' : '' }}>X 2</option>
                    <option value="X 3" {{ request('kelas') == 'X 3' ? 'selected' : '' }}>X 3</option>
                    <option value="X 4" {{ request('kelas') == 'X 4' ? 'selected' : '' }}>X 4</option>
                    <option value="X 5" {{ request('kelas') == 'X 5' ? 'selected' : '' }}>X 5</option>
                    <option value="X 6" {{ request('kelas') == 'X 6' ? 'selected' : '' }}>X 6</option>
                    <option value="X 7" {{ request('kelas') == 'X 7' ? 'selected' : '' }}>X 7</option>
                    <option value="X 8" {{ request('kelas') == 'X 8' ? 'selected' : '' }}>X 8</option>
                    <!-- Tambah kelas lain kalau ada -->
                </select>
            </div>

            <ul class="nav nav-tabs mb-3">
                @php
                    $jenisTesList = [
                        'kuis pencarian linear' => 'Kuis Pencarian Linear',
                        'kuis pencarian biner' => 'Kuis Pencarian Biner',
                        'kuis pencarian beruntun dengan sentinel' => 'Kuis Pencarian Beruntun dengan Sentinel',
                        'evaluasi' => 'Evaluasi'
                    ];
                    $currentJenisTes = request('jenis_tes') ?? 'kuis pencarian linear';
                @endphp
            
                @foreach ($jenisTesList as $key => $label)
                <li class="nav-item">
                    <a class="nav-link {{ $currentJenisTes == $key ? 'active' : '' }}" 
                       href="{{ route('data-nilai', array_merge(request()->except('page'), ['jenis_tes' => $key])) }}">
                       {{ $label }}
                    </a>
                </li>
                @endforeach
            </ul>            

            <!-- Search and Limit -->
            <form method="GET" action="{{ route('data-nilai') }}" class="row g-3 mb-4">
                <div class="col-md-4">
                    <select name="limit" class="form-select">
                        <option value="10" {{ request('limit') == 10 ? 'selected' : '' }}>10</option>
                        <option value="15" {{ request('limit') == 15 ? 'selected' : '' }}>15</option>
                        <option value="20" {{ request('limit') == 20 ? 'selected' : '' }}>20</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Cari nama siswa">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Cari</button>
                </div>

                <!-- Tombol Export di bawah, rata kanan -->
                <div class="col-12 d-flex justify-content-end gap-2 mt-3">
                    <a href="{{ route('nilai.export.pdf', ['jenis_tes' => $currentJenisTes]) }}" class="btn btn-success">
                        Export Nilai Semua Kelas (1 PDF)
                    </a>
                    <a href="{{ route('nilai.exportPDFPerKelas', ['jenis_tes' => $currentJenisTes]) }}" class="btn btn-secondary">
                        Export Nilai Per Kelas (Beberapa PDF)
                    </a>
                </div>
            </form>


            <!-- Table -->
            <table class="table table-bordered" id="nilaiTable">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Nilai Terakhir</th>
                        <th>Waktu Pengerjaan</th>
                        <th>Banyak Percobaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($siswa as $index => $item)
                        @php
                            $nilaiItem = $item->nilai->first();
                        @endphp
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->user->name ?? 'N/A' }}</td>
                            <td>{{ $item->kelas }}</td>
                            <td>{{ $item->nilai_tertinggi->nilai ?? 0 }}</td>
                            <td>{{ $item->nilai_tertinggi->waktu_pengerjaan ?? '00:00:00' }}</td>
                            <td>{{ $item->nilai_tertinggi->percobaan ?? 0 }}</td>
                            <td>
                                <form id="hapus-nilai-{{ $item->user_id }}" action="{{ route('nilai.hapus') }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ $item->user_id }}">
                                    <input type="hidden" name="jenis_tes" value="{{ $jenisTes }}">
                                    <button type="button" class="btn btn-danger btn-sm" onclick="konfirmasiHapus('{{ $item->user_id }}')">Hapus</button>
                                </form>                                
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data.</td>
                        </tr>
                    @endforelse
                </tbody>                
            </table>
        </div>
    </div>
</div>

<script>
    function filterKelas(kelas) {
        const url = new URL(window.location.href);
        url.searchParams.set('kelas', kelas);
        window.location.href = url.toString();
    }

    function konfirmasiHapus(userId) {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data nilai siswa ini akan dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('hapus-nilai-' + userId).submit();
            }
        })
    }

</script>
@endsection

@section('scripts')
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session("success") }}',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session("error") }}',
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    @endif
@endsection
