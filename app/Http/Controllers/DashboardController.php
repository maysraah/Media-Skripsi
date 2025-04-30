<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Daftar jenis tes
        $jenisTesList = [
            'kuis pencarian linear' => 'linear',
            'kuis pencarian biner' => 'biner',
            'kuis pencarian beruntun dengan sentinel' => 'sentinel',
            'evaluasi' => 'evaluasi',
        ];

        $kuis = [];
        $nilai = [];

        foreach ($jenisTesList as $jenisTes => $key) {
            $latestNilai = Nilai::where('siswa_user_id', $userId)
                ->where('jenis_tes', $jenisTes)
                ->orderBy('created_at', 'desc')
                ->first();

            if ($latestNilai) {
                $kuis[$key] = true; // sudah mengerjakan
                $nilai[$key] = $latestNilai->nilai;
            } else {
                $kuis[$key] = false; // belum mengerjakan
                $nilai[$key] = null;
            }
        }

        return view('dashboard', compact('kuis', 'nilai'));
    }

    public function dashboard_guru()
    {
        $jumlahSiswa = Siswa::count();

        $kuisLinear = Nilai::where('jenis_tes', 'kuis pencarian linear');
        $kuisBiner = Nilai::where('jenis_tes', 'kuis pencarian biner');
        $kuisSentinel = Nilai::where('jenis_tes', 'kuis pencarian beruntun dengan sentinel');
        $evaluasi = Nilai::where('jenis_tes', 'evaluasi');

        return view('guru.dashboard_guru', [
            'jumlahSiswa' => $jumlahSiswa,
            'rataRataLinear' => $kuisLinear->avg('nilai'),
            'rataRataBiner' => $kuisBiner->avg('nilai'),
            'rataRataSentinel' => $kuisSentinel->avg('nilai'),
            'rataRataEvaluasi' => $evaluasi->avg('nilai'),

            'nilaiTertinggiLinear' => $kuisLinear->max('nilai'),
            'nilaiTertinggiBiner' => $kuisBiner->max('nilai'),
            'nilaiTertinggiSentinel' => $kuisSentinel->max('nilai'),
            'nilaiTertinggiEvaluasi' => $evaluasi->max('nilai'),

            'nilaiTerendahLinear' => $kuisLinear->min('nilai'),
            'nilaiTerendahBiner' => $kuisBiner->min('nilai'),
            'nilaiTerendahSentinel' => $kuisSentinel->min('nilai'),
            'nilaiTerendahEvaluasi' => $evaluasi->min('nilai'),
        ]);
    }

    public function data_siswa()
    {
        return view('guru.data_siswa');
    }

    public function data_nilai()
    {
        return view('guru.data_nilai');
    }
}
