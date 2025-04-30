<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Siswa;
use PDF;
use Illuminate\Support\Facades\Storage;

class NilaiController extends Controller
{
    public function data_nilai(Request $request)
    {
        $jenisTes = $request->jenis_tes ?? 'kuis pencarian linear';

        // Ambil semua siswa
        $query = Siswa::with(['user']);

        // Filter nama
        if ($request->filled('search')) {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%');
            });
        }

        // Filter kelas
        if ($request->filled('kelas')) {
            $query->where('kelas', $request->kelas);
        }

        // Ambil data siswa
        $siswaList = $query->get();

        // Ambil nilai tertinggi per siswa berdasarkan jenis tes
        $nilaiTertinggi = Nilai::select('siswa_user_id', 'nilai', 'waktu_pengerjaan', 'percobaan', 'jenis_tes')
            ->where('jenis_tes', $jenisTes)
            ->orderBy('nilai', 'desc')
            ->get()
            ->unique('siswa_user_id')  // ambil hanya nilai tertinggi per siswa
            ->keyBy('siswa_user_id');  // agar mudah dicocokkan ke siswa

        // Tambahkan nilai tertinggi ke setiap siswa
        $siswaList->each(function ($siswa) use ($nilaiTertinggi) {
            $siswa->nilai_tertinggi = $nilaiTertinggi[$siswa->user_id] ?? null;
        });

        // Urutkan berdasarkan nama siswa (A-Z)
        $siswaList = $siswaList->sortBy(function ($siswa) {
            return strtolower($siswa->user->name ?? '');
        })->values(); // reset indeks supaya rapi di view

        return view('guru.data_nilai', [
            'siswa' => $siswaList,
            'jenisTes' => $jenisTes,
        ]);
    }

    public function hapusNilaiSiswa(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'jenis_tes' => 'required|string',
        ]);
    
        // Ambil siswa terkait
        $siswa = Siswa::where('user_id', $request->user_id)->first();
    
        if (!$siswa) {
            return redirect()->back()->with('error', 'Siswa tidak ditemukan.');
        }
    
        // Hapus semua nilai siswa berdasarkan jenis tes
        Nilai::where('siswa_user_id', $request->user_id)
            ->where('jenis_tes', $request->jenis_tes)
            ->delete();
    
        // Buat entri nilai baru dengan nilai default
        Nilai::create([
            'siswa_user_id' => $request->user_id,
            'jenis_tes' => $request->jenis_tes,
            'nilai' => 0,
            'waktu_pengerjaan' => '00:00:00',
            'percobaan' => 0,
        ]);
    
        return redirect()->back()->with('success', 'Nilai berhasil dihapus dan disetel ke nilai awal.');
    }  

    public function exportPDF(Request $request)
    {
        $jenisTes = $request->jenis_tes ?? 'kuis pencarian linear';

        $siswas = Siswa::with('user')->get();

        $data = $siswas->map(function ($siswa) use ($jenisTes) {
            $nilai = Nilai::where('siswa_user_id', $siswa->user_id)
                        ->where('jenis_tes', $jenisTes)
                        ->orderByDesc('nilai')
                        ->first();

            return [
                'nama' => $siswa->user->name ?? '',
                'kelas' => $siswa->kelas,
                'nilai' => $nilai->nilai ?? 0,
                'waktu' => $nilai->waktu_pengerjaan ?? '00:00:00',
                'percobaan' => $nilai->percobaan ?? 0,
            ];
        })->groupBy('kelas'); // Mengelompokkan berdasarkan kelas

        $pdf = PDF::loadView('guru.export_pdf', [
            'data' => $data,
            'jenisTes' => $jenisTes
        ]);

        return $pdf->download('nilai_' . str_replace(' ', '_', strtolower($jenisTes)) . '.pdf');
    }


    public function exportPDFPerKelas(Request $request)
    {
        $jenisTes = $request->jenis_tes ?? 'kuis pencarian linear';

        $siswas = Siswa::with('user')->get();

        $grouped = $siswas->map(function ($siswa) use ($jenisTes) {
            $nilai = Nilai::where('siswa_user_id', $siswa->user_id)
                        ->where('jenis_tes', $jenisTes)
                        ->orderByDesc('nilai')
                        ->first();

            return [
                'nama' => $siswa->user->name ?? '',
                'kelas' => $siswa->kelas,
                'nilai' => $nilai->nilai ?? 0,
                'waktu' => $nilai->waktu_pengerjaan ?? '00:00:00',
                'percobaan' => $nilai->percobaan ?? 0,
            ];
        })->groupBy('kelas');

        // Simpan semua file PDF di folder storage/app/public/exports/
        $filePaths = [];

        foreach ($grouped as $kelas => $data) {
            $pdf = PDF::loadView('guru.export_pdf', [
                'data' => collect([$kelas => $data]),
                'jenisTes' => $jenisTes
            ]);

            $filename = 'nilai_' . str_replace(' ', '_', strtolower($jenisTes)) . '_kelas_' . str_replace(' ', '_', $kelas) . '.pdf';

            Storage::put('public/exports/' . $filename, $pdf->output());

            $filePaths[] = 'storage/exports/' . $filename; // untuk ditampilkan atau di-download nanti
        }

        // Tampilkan daftar link download
        return view('guru.download_pdfs', [
            'files' => $filePaths,
            'jenisTes' => $jenisTes
        ]);
    }

}
