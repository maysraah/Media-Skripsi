<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showDataPengguna()
    {
        $data['users'] = User::all();

        return view('data_pengguna',$data);
    }

    public function tentang()
    {
        return view('tentang');
    }

}
