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
            <a class="navbar-brand fw-bold" href="#">ProfiTes B4T</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarProfites" aria-controls="navbarProfites" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarProfites">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="far fa-calendar-alt"></i> Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-database"></i> Uji Profisiensi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="badge rounded-pill bg-primary">User1</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Pengaturan Profil</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Logout</a>
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
                        <li class="breadcrumb-item"><a href="#">Uji Profisiensi</a></li>
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
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-3">
                <button class="btn btn-produk">
                    <div class="cursor-hover">
                        <img src="/assets/img/ujiProfisiensi/ban.jpg" alt="Ban" class="image" />
                        <div class="overlay">
                            <div class="text">Ban</div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-3">
                <button class="btn btn-produk">
                    <div class="cursor-hover">
                        <img src="/assets/img/ujiProfisiensi/beton.jpg" alt="Beton" class="image" />
                        <div class="overlay">
                            <div class="text">Beton</div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-3">
                <button class="btn btn-produk">
                    <div class="cursor-hover">
                        <img src="/assets/img/ujiProfisiensi/klinker.jpg" alt="Klinker" class="image" />
                        <div class="overlay">
                            <div class="text">Klinker</div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-3">
                <button class="btn btn-produk">
                    <div class="cursor-hover">
                        <img src="/assets/img/ujiProfisiensi/logam.jpg" alt="Logam" class="image" />
                        <div class="overlay">
                            <div class="text">Logam</div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-3">
                <button class="btn btn-produk">
                    <div class="cursor-hover">
                        <img src="/assets/img/ujiProfisiensi/semen.jpg" alt="Semen" class="image" />
                        <div class="overlay">
                            <div class="text">Semen</div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <!-- main -->
    </div>

    <!-- Footer -->
    <div class="footer mt-5">
        <div class="container">
            <p class="mb-0 pt-3 fw-bold">@ B4T 2018</p>
        </div>
    </div>
    <!-- Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>