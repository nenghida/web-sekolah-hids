<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\Guru;
use App\Models\Galery;
use App\Models\Jurusan;
use App\Models\Ekstrakurikuler;

class HomeController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        $guru = Guru::count();
        $galery = Galery::latest()->get();
        $jurusan = Jurusan::all();
        $ekstrakurikuler = Ekstrakurikuler::all();

        return view('home', compact(
            'profil',
            'guru',
            'galery',
            'jurusan',
            'ekstrakurikuler'
        ));
    }

    public function profil()
    {
        return view('profil');
    }

    public function jurusan(){
        $jurusan ="rpl";

        return view('jurusan',compact());
    }
}