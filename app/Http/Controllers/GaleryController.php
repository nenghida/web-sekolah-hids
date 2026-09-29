<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galery;

class galeryController extends Controller
{
    public function index()
    {
        $galeris = galery::all();

        return view('galery', compact('galeris'));
    }
}