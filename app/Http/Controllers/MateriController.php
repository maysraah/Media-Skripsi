<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MateriController extends Controller
{
    private $materi = [
        [
            'title' => 'Pendahuluan',
            'pages' => ['Pendahuluan']
        ],
        [
            'title' => 'Konsep Pendekatan Pembelajaran Computational Thinking',
            'pages' => ['Pengertian', 'Empat Fondasi CT']
        ],
        [
            'title' => 'Contoh Penerapan Pendekatan Computational Thinking',
            'pages' => ['Contoh Penerapan Pendekatan Computational Thinking']
        ],
        [
            'title' => 'Konsep Algoritma Pencarian',
            'pages' => ['Konsep Algoritma Pencarian']
        ],
        [
            'title' => 'Memahami Algoritma Pencarian dengan Pendekatan Computational Thinking',
            'pages' => ['Pencarian Linear', 'Pencarian Biner', 'Pencarian Beruntun Sentinel', 'Latihan Penerapan Searching dan CT']
        ],
        [
            'title' => 'Evaluasi',
            'pages' => ['Evaluasi']
        ]
    ];

    public function index($bab, $page)
    {
        if (!isset($this->materi[$bab]['pages'][$page - 1])) {
            abort(404, 'Halaman materi tidak ditemukan.');
        }

        $data['btnSebelumnya'] = true;
        $data['btnSelanjutnya'] = [
            'type' => 'page',
            'url' => route('siswa.materi', ['bab' => $bab, 'page' => $page + 1])
        ];
        $data['bab'] = $bab;
        $data['page'] = $page;

        $countBabPage = count($this->materi[$bab]['pages']);

        if ($page == 1) {
            $data['btnSebelumnya'] = false;
        }

        if ($bab == 0 || ($bab == 1 && $page == 2) || $bab == 2 || $bab == 3 || $bab == 4) {
            $data['btnSelanjutnya']['type'] = 'bab';
            $data['btnSelanjutnya']['url'] = route('siswa.materi', ['bab' => $bab + 1, 'page' => 1]);
        } elseif ($page == $countBabPage) {
            $data['btnSelanjutnya']['type'] = 'modal';
        }

        if ($bab == 4 && $page == 1) {
            $data['btnSelanjutnya']['url'] = Auth::check()
                ? route('siswa.kuis_linear')
                : route('siswa.materi', ['bab' => $bab, 'page' => $page + 1]);
        }

        if ($bab == 4 && $page == 2) {
            $data['btnSelanjutnya']['url'] = Auth::check()
                ? route('siswa.kuis_biner')
                : route('siswa.materi', ['bab' => $bab, 'page' => $page + 1]);
        }

        if ($bab == 4 && $page == 3) {
            $data['btnSelanjutnya']['url'] = Auth::check()
                ? route('siswa.kuis_sentinel')
                : route('siswa.materi', ['bab' => $bab, 'page' => $page + 1]);
        }

        if ($bab == 4 && $page == 4) {
            $data['btnSelanjutnya']['url'] = Auth::check()
                ? route('siswa.evaluasi')
                : route('login');
        }

        $data['title'] = $this->materi[$bab]['pages'][$page - 1];
        $data['bab_title'] = $this->materi[$bab]['title'];
        $data['materi'] = view('materi.' . $bab . '-' . $page);

        return view('siswa.materi', $data);
    }
}
