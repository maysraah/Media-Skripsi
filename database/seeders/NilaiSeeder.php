<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Nilai;

class NilaiSeeder extends Seeder
{
    public function run()
    {
        // Daftar jenis tes yang akan diberikan ke setiap siswa
        $jenisTesList = ['kuis pencarian linear', 'kuis pencarian biner', 'kuis pencarian beruntun dengan sentinel', 'evaluasi'];

        // Ambil semua siswa
        $siswaList = Siswa::all();

        foreach ($siswaList as $siswa) {
            foreach ($jenisTesList as $jenisTes) {
                // Cek apakah sudah ada nilai untuk jenis tes ini, jika belum maka buat baru
                if (!Nilai::where('siswa_id', $siswa->id)->where('jenis_tes', $jenisTes)->exists()) {
                    Nilai::create([
                        'siswa_id' => $siswa->id,
                        'siswa_user_id' => $siswa->user_id,
                        'jenis_tes' => $jenisTes,
                        'nilai' => 0, // Default nilai awal
                        'waktu_pengerjaan' => 0,
                        'percobaan' => 0,
                    ]);
                }
            }
        }
    }
}
