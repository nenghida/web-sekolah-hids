<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProfilSekolah;

class ProfilSekolahSeeder extends Seeder
{
    public function run(): void
    {
        ProfilSekolah::create([
            'nama_sekolah' => 'SMK NEGERI 1 CIJATI',

            'npsn' => '20252505',

            'alamat' => 'Jl. Raya Cijati, Kecamatan Cijati, Kabupaten Cianjur, Jawa Barat',

            'status' => 'Negeri',

            'akreditasi' => 'A',

            'telepon' => '02632360657',

            'email' => 'smkn.1cijati@yahoo.co.id',

            'website' => 'http://www.smkn1cijati.sch.id',

            'deskripsi' => 'SMK Negeri 1 Cijati merupakan sekolah menengah kejuruan negeri yang berada di Kecamatan Cijati, Kabupaten Cianjur, Jawa Barat. Sekolah berkomitmen memberikan pendidikan kejuruan yang berkualitas serta membekali peserta didik dengan pengetahuan, keterampilan, karakter, dan kompetensi sesuai bidang keahlian.',

            'logo' => 'logo-smkn1-cijati.png',
        ]);
    }
}
