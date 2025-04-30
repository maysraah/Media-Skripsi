@extends('layouts.main_materi')

@section('title', 'Dashboard')

@section('content')
<div class="content-header mb-4">
    <h1 class="fw-bold" style="color: #011B78;">Dashboard</h1>
</div>

<div class="row g-4">
    <!-- Kuis Linear -->
    <div class="col-md-6">
        <div class="p-4 border rounded shadow-sm h-100">
            <h5>Kuis Pencarian Linear</h5>
            @if ($nilai['linear'] == 0)
                <p class="text-danger">✗ Anda belum mengerjakan kuis ini.</p>
            @else
                <p class="text-success">✓ Anda sudah mengerjakan kuis ini.</p>
                <p class="text-success">Nilai terakhir Anda: <strong>{{ $nilai['linear'] }}</strong></p>
            @endif
        </div>
    </div>

    <!-- Kuis Biner -->
    <div class="col-md-6">
        <div class="p-4 border rounded shadow-sm h-100">
            <h5>Kuis Pencarian Biner</h5>
            @if ($nilai['biner'] == 0)
                <p class="text-danger">✗ Anda belum mengerjakan kuis ini.</p>
            @else
                <p class="text-success">✓ Anda sudah mengerjakan kuis ini.</p>
                <p class="text-success">Nilai terakhir Anda: <strong>{{ $nilai['biner'] }}</strong></p>
            @endif
        </div>
    </div>

    <!-- Kuis Sentinel -->
    <div class="col-md-6">
        <div class="p-4 border rounded shadow-sm h-100">
            <h5>Kuis Pencarian Beruntun dengan Sentinel</h5>
            @if ($nilai['sentinel'] == 0)
                <p class="text-danger">✗ Anda belum mengerjakan kuis ini.</p>
            @else
                <p class="text-success">✓ Anda sudah mengerjakan kuis ini.</p>
                <p class="text-success">Nilai terakhir Anda: <strong>{{ $nilai['sentinel'] }}</strong></p>
            @endif
        </div>
    </div>

    <!-- Evaluasi -->
    <div class="col-md-6">
        <div class="p-4 border rounded shadow-sm h-100">
            <h5>Evaluasi</h5>
            @if ($nilai['evaluasi'] == 0)
                <p class="text-danger">✗ Anda belum mengerjakan kuis ini.</p>
            @else
                <p class="text-success">✓ Anda sudah mengerjakan kuis ini.</p>
                <p class="text-success">Nilai terakhir Anda: <strong>{{ $nilai['evaluasi'] }}</strong></p>
            @endif
        </div>
    </div>
</div>
@endsection
