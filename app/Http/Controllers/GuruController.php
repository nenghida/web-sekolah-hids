<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Galeri;
use App\Models\Prestasi;

class GuruController extends Controller
{
    public function index()
    {
        $jumlahGuru  = Guru::count();
        //$jumlahSiswa = Siswa::count();
        $gurus= Guru::all();
        // $galeriTerbaru = Galeri::latest()->take(8)->get();
        // $prestasiTerbaru = Prestasi::latest()->take(6)->get();

        $visi = 'Menjadi lembaga pendidikan unggul yang menghasilkan lulusan '
              . 'berkarakter, kompeten, dan berdaya saing global.';

        $misi = [
            'Menyelenggarakan pembelajaran yang inovatif, kreatif, dan berbasis teknologi.',
            'Membentuk peserta didik yang beriman, bertakwa, dan berakhlak mulia.',
            'Mengembangkan potensi akademik dan non-akademik siswa secara optimal.',
            'Menjalin kerja sama dengan dunia usaha, dunia industri, dan masyarakat.',
            'Menciptakan lingkungan sekolah yang aman, nyaman, dan berbudaya lingkungan.',
        ];

        return view('guru', compact('gurus'
            // 'jumlahGuru',
            // 'jumlahSiswa',
            // 'galeriTerbaru',
            // 'prestasiTerbaru',
            // 'visi',
            // 'misi'
        ));
    }
}