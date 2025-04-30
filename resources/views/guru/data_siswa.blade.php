@extends('layouts.main_guru')

@section('content')
<div class="container-fluid my-4">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">Data Siswa</h2>

            <!-- Search and Filter -->
            <form method="GET" action="{{ route('data-siswa') }}" class="row align-items-end g-3 mb-4">
                <div class="col-md-4">
                    <label for="search" class="form-label">Cari Siswa Berdasarkan Nama:</label>
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Cari nama siswa">
                </div>
                <div class="col-md-4">
                    <label for="kelas" class="form-label">Kelompokkan Siswa Berdasarkan Kelas:</label>
                    <select id="kelas" name="kelas" class="form-select" onchange="this.form.submit()">
                        <option value="">Semua</option>
                        <option value="X 1" {{ request('kelas') == 'X 1' ? 'selected' : '' }}>X 1</option>
                        <option value="X 2" {{ request('kelas') == 'X 2' ? 'selected' : '' }}>X 2</option>
                        <option value="X 3" {{ request('kelas') == 'X 3' ? 'selected' : '' }}>X 3</option>
                        <option value="X 4" {{ request('kelas') == 'X 4' ? 'selected' : '' }}>X 4</option>
                        <option value="X 5" {{ request('kelas') == 'X 5' ? 'selected' : '' }}>X 5</option>
                        <option value="X 6" {{ request('kelas') == 'X 6' ? 'selected' : '' }}>X 6</option>
                        <option value="X 7" {{ request('kelas') == 'X 7' ? 'selected' : '' }}>X 7</option>
                        <option value="X 8" {{ request('kelas') == 'X 8' ? 'selected' : '' }}>X 8</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Terapkan</button>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('data-siswa') }}" class="btn btn-secondary w-100">Reset</a>
                </div>
            </form>                        

            <!-- Tabel -->
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $index => $student)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $student->user->name }}</td>
                            <td>{{ $student->kelas }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada data siswa.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
