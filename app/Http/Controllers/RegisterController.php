<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Nilai;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'namaInput' => 'required|string|max:255',
            'emailInput' => 'required|email|unique:users,email',
            'kelasInput' => 'required|string|max:100',
            'passwordInput' => 'required|min:8|confirmed',
        ]);

        // Buat user baru dengan role "siswa"
        $user = User::create([
            'name' => $validatedData['namaInput'],
            'email' => $validatedData['emailInput'],
            'password' => Hash::make($validatedData['passwordInput']),
            'role' => 'siswa', // Tambahkan role default sebagai "siswa"
        ]);

        // Buat data siswa dengan user_id yang baru saja dibuat
        $siswa = Siswa::create([
            'user_id' => $user->id,
            'kelas' => $validatedData['kelasInput'],
        ]);

        // Tambahkan nilai default ke tabel nilai
        $jenisTesList = [
            'kuis pencarian linear', 
            'kuis pencarian biner', 
            'kuis pencarian beruntun dengan sentinel', 
            'evaluasi'
        ];

        foreach ($jenisTesList as $jenisTes) {
            Nilai::create([
                'siswa_user_id' => $user->id,
                'jenis_tes' => $jenisTes,
                'nilai' => 0, // Default nilai awal
                'waktu_pengerjaan' => 0,
                'percobaan' => 0,
            ]);
        }

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }
}
