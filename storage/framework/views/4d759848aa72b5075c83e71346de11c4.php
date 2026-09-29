<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMK Negeri 1 Cijati</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            min-height: 100vh;
        }

        /* NAVBAR */
        .navbar {
            background: linear-gradient(90deg, #1565c0, #0d47a1);
            padding: 15px 40px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            color: white !important;
            font-size: 23px;
            font-weight: bold;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .nav-link {
            color: white !important;
            font-size: 17px;
            margin-left: 15px;
            padding: 8px 12px !important;
            border-radius: 8px;
            transition: 0.3s;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* CONTENT */
        .content {
            min-height: calc(100vh - 140px);
            padding: 50px 8%;
        }

        /* FOOTER */
        footer {
            background: #0d47a1;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {

            .navbar {
                padding: 15px 20px;
            }

            .navbar-nav {
                margin-left: 0;
                margin-top: 10px;
            }

            .nav-link {
                margin-left: 0;
            }

            .content {
                padding: 30px 5%;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">

        <div class="container-fluid">

            <!-- Nama Sekolah -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                SMK Negeri 1 Cijati
            </a>

            <!-- Tombol Mobile -->
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/')); ?>">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/profil')); ?>">
                            Profil
                        </a>
                    </li>

                    <li class="nav-item">
                         <a class="nav-link" href="<?php echo e(url('/guru')); ?>"> 
                            Guru
                         </a> 
                        </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/jurusan')); ?>">
                            Jurusan
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/eskul')); ?>">
                            Eskul
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/galeri')); ?>">
                            Galeri
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- CONTENT -->
    <main class="content">

        <?php echo $__env->yieldContent('content'); ?>

    </main>


    <!-- FOOTER -->
    <footer>
        <p>
            &copy; <?php echo e(date('Y')); ?> SMK Negeri 1 Cijati
        </p>

        <p>
            Website Sekolah SMK Negeri 1 Cijati
        </p>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html><?php /**PATH C:\laragon\www\web-sekolah-ukk-nenghida\resources\views/layouts/app.blade.php ENDPATH**/ ?>