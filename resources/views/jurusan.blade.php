@extends('layouts.app')

@section('content')

<style>
    .jurusan-page {
        padding: 50px 20px;
        min-height: 75vh;
    }

    .jurusan-title {
        text-align: center;
        margin-bottom: 10px;
        font-size: 42px;
        font-weight: bold;
        color: #0d47a1;
    }

    .jurusan-subtitle {
        text-align: center;
        color: #555;
        font-size: 18px;
        margin-bottom: 45px;
    }

    .jurusan-container {
        max-width: 1000px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .jurusan-card {
        background: white;
        border-radius: 15px;
        padding: 35px 25px;
        text-align: center;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transition: 0.3s;
    }

    .jurusan-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.20);
    }

    .jurusan-icon {
        width: 85px;
        height: 85px;
        margin: 0 auto 20px;
        border-radius: 50%;
        background: #1565c0;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        font-weight: bold;
    }

    .jurusan-card h3 {
        color: #1565c0;
        font-size: 24px;
        margin-bottom: 15px;
    }

    .jurusan-card p {
        color: #666;
        line-height: 1.7;
        font-size: 16px;
    }

    .btn-jurusan {
        display: inline-block;
        margin-top: 15px;
        padding: 10px 22px;
        background: #1565c0;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        transition: 0.3s;
    }

    .btn-jurusan:hover {
        background: #0d47a1;
        color: white;
    }

    @media (max-width: 768px) {
        .jurusan-container {
            grid-template-columns: 1fr;
        }

        .jurusan-title {
            font-size: 32px;
        }
    }
</style>


<div class="jurusan-page">

    <h1 class="jurusan-title">
        Jurusan
    </h1>

    <p class="jurusan-subtitle">
        Program keahlian yang tersedia di SMK Negeri 1 Cijati
    </p>


    <div class="jurusan-container">

        <!-- RPL -->
        <div class="jurusan-card">

            <div class="jurusan-icon">
                RPL
            </div>

            <h3>
                Rekayasa Perangkat Lunak
            </h3>

            <p>
                Jurusan RPL mempelajari pemrograman,
                pembuatan website, aplikasi, database,
                dan pengembangan perangkat lunak.
            </p>

            <a href="#" class="btn-jurusan">
                Selengkapnya
            </a>

        </div>


        <!-- TKRO -->
        <div class="jurusan-card">

            <div class="jurusan-icon">
                TKRO
            </div>

            <h3>
                Teknik Kendaraan Ringan Otomotif
            </h3>

            <p>
                Jurusan TKRO mempelajari perawatan,
                perbaikan, dan sistem kendaraan ringan
                serta teknologi otomotif.
            </p>

            <a href="#" class="btn-jurusan">
                Selengkapnya
            </a>

        </div>


        <!-- APHP -->
        <div class="jurusan-card">

            <div class="jurusan-icon">
                APHP
            </div>

            <h3>
                Agribisnis Pengolahan Hasil Pertanian
            </h3>

            <p>
                Jurusan APHP mempelajari pengolahan,
                pengemasan, pemasaran, dan pengembangan
                produk hasil pertanian.
            </p>

            <a href="#" class="btn-jurusan">
                Selengkapnya
            </a>

        </div>


        <!-- BDP -->
        <div class="jurusan-card">

            <div class="jurusan-icon">
                BDP
            </div>

            <h3>
                Bisnis Daring dan Pemasaran
            </h3>

            <p>
                Jurusan BDP mempelajari pemasaran,
                bisnis online, administrasi penjualan,
                pelayanan pelanggan, dan kewirausahaan.
            </p>

            <a href="#" class="btn-jurusan">
                Selengkapnya
            </a>

        </div>

    </div>

</div>

@endsection