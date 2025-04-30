<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Guru</title>
    <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
@extends('layouts.main_guru')

@section('content')
    <!-- Header -->
    <div class="content-header mb-4">
        <h1>Dashboard Guru</h1>
    </div>

    <!-- Grid Container -->
    <div class="container">
        <!-- Row for "Jumlah Siswa" -->
        <div class="row justify-content-center mb-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <i class="fas fa-users fa-3x text-primary me-3"></i>
                        <div>
                            <h5 class="card-title">Jumlah Siswa</h5>
                            <p class="card-text fs-4">{{ $jumlahSiswa }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row for "Nilai" -->
        <div class="row g-3">
            <!-- Box 2: Nilai Rata-Rata -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <i class="fas fa-chart-line fa-3x text-success me-3"></i>
                        <div>
                            <h5 class="card-title">Nilai Rata-Rata</h5>
                            <p class="card-text">Kuis Pencarian Linear: {{ $rataRataLinear ?? '-' }}</p>
                            <p class="card-text">Kuis Pencarian Biner: {{ $rataRataBiner ?? '-' }}</p>
                            <p class="card-text">Kuis Pencarian Beruntun dengan Sentinel: {{ $rataRataSentinel ?? '-' }}</p>
                            <p class="card-text">Evaluasi: {{ $rataRataEvaluasi ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box 3: Nilai Tertinggi -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <i class="fas fa-trophy fa-3x text-warning me-3"></i>
                        <div>
                            <h5 class="card-title">Nilai Tertinggi</h5>
                            <p class="card-text">Kuis Pencarian Linear: {{ $nilaiTertinggiLinear ?? '-' }}</p>
                            <p class="card-text">Kuis Pencarian Biner: {{ $nilaiTertinggiBiner ?? '-' }}</p>
                            <p class="card-text">Kuis Pencarian Beruntun dengan Sentinel: {{ $nilaiTertinggiSentinel ?? '-' }}</p>
                            <p class="card-text">Evaluasi: {{ $nilaiTertinggiEvaluasi ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box 4: Nilai Terendah -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <i class="fas fa-arrow-down fa-3x text-danger me-3"></i>
                        <div>
                            <h5 class="card-title">Nilai Terendah</h5>
                            <p class="card-text">Kuis Pencarian Linear: {{ $nilaiTerendahLinear ?? '-' }}</p>
                            <p class="card-text">Kuis Pencarian Biner: {{ $nilaiTerendahBiner ?? '-' }}</p>
                            <p class="card-text">Kuis Pencarian Beruntun dengan Sentinel: {{ $nilaiTerendahSentinel ?? '-' }}</p>
                            <p class="card-text">Evaluasi: {{ $nilaiTerendahEvaluasi ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
