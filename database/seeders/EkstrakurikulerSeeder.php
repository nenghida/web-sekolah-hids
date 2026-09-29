<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ekstrakurikuler;

class EkstrakurikulerSeeder extends Seeder
{
    public function run(): void
    {
        $eskul = [
            [
                'nama_eskul' => 'PMR',
                'pembina' => 'Mega nurunisa,s.pd.',
                'deskripsi' => 'Palang Merah Remaja yang melatih siswa dalam pertolongan pertama, kesehatan, kepedulian sosial, dan kegiatan kemanusiaan.',
                'logo' => 'pmr.jpeg',
            ],
            [
                'nama_eskul' => 'Paskibraka',
                'pembina' =>' Ende iskandar,s.tp.',
                'deskripsi' => 'Kegiatan yang melatih kedisiplinan, kekompakan, kepemimpinan, dan keterampilan baris-berbaris.',
                'logo' => 'paskibraka.png',
            ],
            [
                'nama_eskul' => 'Pramuka',
                'pembina' =>' M.najib aminulah.',
                'deskripsi' => 'Kegiatan kepramukaan yang membentuk karakter, kemandirian, kedisiplinan, kepemimpinan, dan kerja sama siswa.',
                'logo' => 'pramuka.png',
            ],
            [
                'nama_eskul' => 'Marching Band',
                'pembina' =>' Nurah alwaini,a.ma.pust.',
                'deskripsi' => 'Kegiatan seni musik yang mengembangkan kemampuan bermusik, kekompakan, kedisiplinan, dan kreativitas siswa.',
                'logo' => 'marching-band.png',
            ],
            [
                'nama_eskul' => 'Rohis',
                'pembina' => 'Asep muhlis sulaeman,s.pd.i.',
                'deskripsi' => 'Kegiatan kerohanian Islam yang bertujuan meningkatkan pemahaman keagamaan, akhlak, dan kegiatan keislaman siswa.',
                'logo' => 'rohis.png',
            ],
            [
                'nama_eskul' => 'Bahasa Jepang',
                'pembina' =>' Saripul basar.',
                'deskripsi' => 'Kegiatan pembelajaran bahasa dan budaya Jepang untuk meningkatkan kemampuan komunikasi serta wawasan siswa.',
                'logo' => 'bahasa-jepang.png',
            ],
            [
                'nama_eskul' => 'Karawitan',
                'pembina' =>' Moch.yoga agung N,s.pd.,m.pd.',
                'deskripsi' => 'Kegiatan seni musik tradisional yang melatih siswa dalam memainkan alat musik dan melestarikan budaya daerah.',
                'logo' => 'karawitan.png',
            ],
            [
                'nama_eskul' => 'Futsal',
                'pembina' =>' jaya nur setiawandi,s.pd.',
                'deskripsi' => 'Kegiatan olahraga futsal untuk meningkatkan kebugaran, keterampilan bermain, sportivitas, dan kerja sama tim.',
                'logo' => 'futsal.png',
            ],
            [
                'nama_eskul' => 'Volly',
                'pembina' =>' Dedi sukardi,s.pd.',
                'deskripsi' => 'Kegiatan olahraga bola voli yang mengembangkan keterampilan, kebugaran, kekompakan, dan sportivitas siswa.',
                'logo' => 'volly.png',
            ],
            [
                'nama_eskul' => 'Cinematik',
                'pembina' => 'Rahmat setiawan,s.t.',
                'deskripsi' => 'Kegiatan yang mengembangkan kreativitas siswa dalam bidang fotografi, videografi, perfilman, dan produksi konten digital.',
                'logo' => 'cinematik.png',
            ],
        ];

        foreach ($eskul as $data) {
            eskul::create($data);
        }
    }
}