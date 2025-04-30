<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $query = Siswa::with('user');

        if ($request->filled('search')) {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('kelas')) {
            $query->where('kelas', $request->kelas);
        }

        // Sorting berdasarkan nama siswa dari relasi user
        $students = $query->get()->sortBy(function ($siswa) {
            return strtolower($siswa->user->name);
        })->values();

        return view('guru.data_siswa', compact('students'));
    }

}
