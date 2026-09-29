<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ekstrakulikuler;

class ekstrakulikulerController extends Controller
{
    public function index()
    {
        $eskul = esktrakulikuler::all();

        return view('eskul', compact('eskul'));
    }
}