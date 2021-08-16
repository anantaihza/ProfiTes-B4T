<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="/assets/css/ujiProfisiensiBaruPilih.css" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Buat Baru</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-sm">
            <a class="navbar-brand fw-bold" href="/ujiProfisiensi">UP-<i>tek</i>MIRA</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarProfites" aria-controls="navbarProfites" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarProfites">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/ujiProfisiensi">Uji Profisiensi</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="badge rounded-pill bg-primary"><?= session()->get('username'); ?></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/profile">Pengaturan Profil</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="/Login/logout">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container path">
        <!-- Breadcrumb -->
        <div class="card border-0">
            <div class="card-body p-1">
                <nav style="--bs-breadcrumb-divider: '/'" aria-label="breadcrumb">
                    <ol class="breadcrumb m-2">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="/uji-profisiensi">Uji Profisiensi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Buat Baru
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb -->

        <!-- Title -->
        <div class="title mt-4 pt-3">
            <h2>Uji Profisiensi Baru</h2>
            <hr />
        </div>
        <!-- Title -->


        <!-- main -->
        <p>Silahkan pilih Produk yang hendak dilakukan Uji Profisiensi</p>
        <div class="row pb-5 mb-5">

            <?php foreach ($pengujian as $row) { ?>
                <div class="col-lg-4 col-md-6 col-12 mt-3">

                    <a class="btn btn-produk" href="profisiensiBaru/<?= $row->id_pengujian; ?>">
                        <div class="cursor-hover">
                            <div class="image"></div>
                            <div class="overlay">
                                <div class="text"><?= $row->nama_pengujian; ?></div>
                            </div>
                        </div>
                    </a>

                </div>
            <?php } ?>


        </div>
        <!-- main -->
    </div>

    <!-- Footer -->
    <div class="footer mt-5 fixed-bottom">
        <div class="container">
            <p class="mb-0 pt-3 fw-bold">@ UP-<i>tek</i>MIRA</p>
        </div>
    </div>
    <!-- Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>