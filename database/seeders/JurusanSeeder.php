<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        $jurusan = [
            [
                'nama_jurusan' => 'TKRO',
                'deskripsi' => 'Teknik Kendaraan Ringan dan Otomotif mempelajari perawatan, perbaikan, dan teknologi kendaraan ringan.',
                'foto' => 'tkro.jpeg',
            ],
            [
                'nama_jurusan' => 'RPL',
                'deskripsi' => 'Rekayasa Perangkat Lunak mempelajari pemrograman, pengembangan aplikasi, website, dan sistem perangkat lunak.',
                'foto' => 'logorpl.jpeg',
            ],
            [
                'nama_jurusan' => 'APHP',
                'deskripsi' => 'Agribisnis Pengolahan Hasil Pertanian mempelajari pengolahan hasil pertanian menjadi produk yang memiliki nilai tambah.',
                'foto' => 'aphp.jpeg',
            ],
            [
                'nama_jurusan' => 'BDP',
                'deskripsi' => 'Bisnis Daring dan Pemasaran mempelajari kegiatan bisnis, pemasaran, penjualan, dan perdagangan secara konvensional maupun digital.',
                'foto' => 'bdp.jpeg',
            ],
        ];

        foreach ($jurusan as $data) {
            Jurusan::create($data);
        }
    }
}
