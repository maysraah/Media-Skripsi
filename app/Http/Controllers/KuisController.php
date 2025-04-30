<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Nilai;
use App\Models\User;
use App\Models\Siswa;

class KuisController extends Controller
{
    public function kuis_linear()
    {
        $nilai = Nilai::where('siswa_user_id', auth()->id())
                    ->whereRaw('LOWER(jenis_tes) = ?', ['kuis pencarian linear']) // lebih aman
                    ->orderByDesc('nilai') // ambil skor tertinggi, bukan yang terbaru
                    ->first();

        $sudahMengerjakan = false;
        $lulus = false;

        if ($nilai) {
            $sudahMengerjakan = true;
            $lulus = $nilai->nilai >= 70; // perhatikan: fieldnya 'nilai' bukan 'skor'
        }

        return view('siswa.kuis_linear', compact('sudahMengerjakan', 'lulus', 'nilai'));
    }

    public function index_linear()
    {
        // Ambil data nilai terbaru berdasarkan user login dan jenis tes
        $nilai = Nilai::where('siswa_user_id', auth()->id())
                    ->where('jenis_tes', 'kuis pencarian linear')
                    ->latest()
                    ->first();

        return view('kuis.kuis_linear', compact('nilai'));
    }

    public function submitLinear(Request $request)
    {
        $request->validate([
            'nilai' => 'required|integer',
            'waktu_pengerjaan' => 'required|date_format:H:i:s',
            'jenis_tes' => 'required|string'
        ]);        

        // Hitung percobaan sebelumnya
        $jumlahPercobaan = Nilai::where('siswa_user_id', auth()->id())
                         ->where('jenis_tes', $request->jenis_tes)
                         ->where('percobaan', '>', 0) // abaikan entri percobaan ke-0
                         ->count();

        // Buat data baru setiap submit
        $nilai = Nilai::create([
            'siswa_user_id' => auth()->id(),
            'jenis_tes' => $request->jenis_tes,
            'nilai' => $request->nilai,
            'waktu_pengerjaan' => $request->waktu_pengerjaan,
            'percobaan' => $jumlahPercobaan + 1,
        ]);

        return response()->json(['nilai_id' => $nilai->id]);
    }

    public function hasilLinear($id)
    {
        $nilai = Nilai::with('siswa')->findOrFail($id);
        return view('siswa.hasil_kuis_linear', compact('nilai'));
    }

    // Controller Kuis Biner
    public function kuis_biner()
    {
        $nilai = Nilai::where('siswa_user_id', auth()->id())
                    ->whereRaw('LOWER(jenis_tes) = ?', ['kuis pencarian biner']) // lebih aman
                    ->orderByDesc('nilai') // ambil skor tertinggi, bukan yang terbaru
                    ->first();

        $sudahMengerjakan = false;
        $lulus = false;

        if ($nilai) {
            $sudahMengerjakan = true;
            $lulus = $nilai->nilai >= 70; // perhatikan: fieldnya 'nilai' bukan 'skor'
        }

        return view('siswa.kuis_biner', compact('sudahMengerjakan', 'lulus', 'nilai'));
    }

    public function index_biner()
    {
        // Ambil data nilai terbaru berdasarkan user login dan jenis tes
        $nilai = Nilai::where('siswa_user_id', auth()->id())
                    ->where('jenis_tes', 'kuis pencarian biner')
                    ->latest()
                    ->first();

        return view('kuis.kuis_biner', compact('nilai'));
    }

    public function submitBiner(Request $request)
    {
        $request->validate([
            'nilai' => 'required|integer',
            'waktu_pengerjaan' => 'required|date_format:H:i:s',
            'jenis_tes' => 'required|string'
        ]);        

        // Hitung percobaan sebelumnya
        $jumlahPercobaan = Nilai::where('siswa_user_id', auth()->id())
                         ->where('jenis_tes', $request->jenis_tes)
                         ->where('percobaan', '>', 0)
                         ->count();

        // Buat data baru setiap submit
        $nilai = Nilai::create([
            'siswa_user_id' => auth()->id(),
            'jenis_tes' => $request->jenis_tes,
            'nilai' => $request->nilai,
            'waktu_pengerjaan' => $request->waktu_pengerjaan,
            'percobaan' => $jumlahPercobaan + 1,
        ]);

        return response()->json(['nilai_id' => $nilai->id]);
    }

    public function hasilBiner($id)
    {
        $nilai = Nilai::with('siswa')->findOrFail($id);
        return view('siswa.hasil_kuis_biner', compact('nilai'));
    }

    // Controller Kuis Sentinel
    public function kuis_sentinel()
    {
        $nilai = Nilai::where('siswa_user_id', auth()->id())
                    ->whereRaw('LOWER(jenis_tes) = ?', ['kuis pencarian beruntun dengan sentinel']) // lebih aman
                    ->orderByDesc('nilai') // ambil skor tertinggi, bukan yang terbaru
                    ->first();

        $sudahMengerjakan = false;
        $lulus = false;

        if ($nilai) {
            $sudahMengerjakan = true;
            $lulus = $nilai->nilai >= 70; // perhatikan: fieldnya 'nilai' bukan 'skor'
        }

        return view('siswa.kuis_sentinel', compact('sudahMengerjakan', 'lulus', 'nilai'));
    }

    public function index_sentinel()
    {
        // Ambil data nilai terbaru berdasarkan user login dan jenis tes
        $nilai = Nilai::where('siswa_user_id', auth()->id())
                    ->where('jenis_tes', 'kuis pencarian beruntun dengan sentinel')
                    ->latest()
                    ->first();

        return view('kuis.kuis_sentinel', compact('nilai'));
    }

    public function submitSentinel(Request $request)
    {
        $request->validate([
            'nilai' => 'required|integer',
            'waktu_pengerjaan' => 'required|date_format:H:i:s',
            'jenis_tes' => 'required|string'
        ]);        

        // Hitung percobaan sebelumnya
        $jumlahPercobaan = Nilai::where('siswa_user_id', auth()->id())
                         ->where('jenis_tes', $request->jenis_tes)
                         ->where('percobaan', '>', 0)
                         ->count();

        // Buat data baru setiap submit
        $nilai = Nilai::create([
            'siswa_user_id' => auth()->id(),
            'jenis_tes' => $request->jenis_tes,
            'nilai' => $request->nilai,
            'waktu_pengerjaan' => $request->waktu_pengerjaan,
            'percobaan' => $jumlahPercobaan + 1,
        ]);

        return response()->json(['nilai_id' => $nilai->id]);
    }

    public function hasilSentinel($id)
    {
        $nilai = Nilai::with('siswa')->findOrFail($id);
        return view('siswa.hasil_kuis_sentinel', compact('nilai'));
    }

    // Evaluasi
    public function evaluasi()
    {
        $nilai = Nilai::where('siswa_user_id', auth()->id())
                    ->whereRaw('LOWER(jenis_tes) = ?', ['evaluasi']) // lebih aman
                    ->orderByDesc('nilai') // ambil skor tertinggi, bukan yang terbaru
                    ->first();

        $sudahMengerjakan = false;
        $lulus = false;

        if ($nilai) {
            $sudahMengerjakan = true;
            $lulus = $nilai->nilai >= 70; // perhatikan: fieldnya 'nilai' bukan 'skor'
        }

        return view('siswa.evaluasi', compact('sudahMengerjakan', 'lulus', 'nilai'));
    }

    public function index_evaluasi()
    {
        // Ambil data nilai terbaru berdasarkan user login dan jenis tes
        $nilai = Nilai::where('siswa_user_id', auth()->id())
                    ->where('jenis_tes', 'evaluasi')
                    ->latest()
                    ->first();

        return view('kuis.evaluasi', compact('nilai'));
    }

    public function submitEvaluasi(Request $request)
    {
        $request->validate([
            'nilai' => 'required|integer',
            'waktu_pengerjaan' => 'required|date_format:H:i:s',
            'jenis_tes' => 'required|string'
        ]);        

        // Hitung percobaan sebelumnya
        $jumlahPercobaan = Nilai::where('siswa_user_id', auth()->id())
                         ->where('jenis_tes', $request->jenis_tes)
                         ->where('percobaan', '>', 0)
                         ->count();

        // Buat data baru setiap submit
        $nilai = Nilai::create([
            'siswa_user_id' => auth()->id(),
            'jenis_tes' => $request->jenis_tes,
            'nilai' => $request->nilai,
            'waktu_pengerjaan' => $request->waktu_pengerjaan,
            'percobaan' => $jumlahPercobaan + 1,
        ]);

        return response()->json(['nilai_id' => $nilai->id]);
    }

    public function hasilEvaluasi($id)
    {
        $nilai = Nilai::with('siswa')->findOrFail($id);
        return view('siswa.hasil_evaluasi', compact('nilai'));
    }
}
