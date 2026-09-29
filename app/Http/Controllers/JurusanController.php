<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function index()
    {
        // $jurusans = Jurusan::withCount('siswas')->get();
        $jurusan = Jurusan::all();

        return view('jurusan', compact('jurusan'));
    }

    public function show(Jurusan $jurusan)
    {
        $jurusan->loadCount('siswas');

        return view('jurusan-detail', compact('jurusan'));
    }
}