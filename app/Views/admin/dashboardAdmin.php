<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="/assets/css/admin/dashboardAdmin.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-sm">
            <a class="navbar-brand fw-bold" href="/dashboard">UP-<i>tek</i>MIRA</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarProfites" aria-controls="navbarProfites" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarProfites">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/listAdmin">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/listPaket">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/listPerusahaan">Perusahaan</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="badge rounded-pill bg-primary"><?= session()->get('username'); ?></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="/Login/logout">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <h3 class="mb-5"><b>Dashboard</b></h3>

        <div class="row">
            <div class="col-md-4">
                <div class="card jml-perusahaan mt-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 m-auto text-center">
                                <h2><i class="fas fa-briefcase"></i></h2>
                            </div>
                            <div class="col-8 py-2">
                                <h3><b><?= $userJml; ?></b></h3>
                                <p>Jumlah Perusahaan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card paket mt-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 m-auto text-center">
                                <h2><i class="fas fa-archive"></i></h2>
                            </div>
                            <div class="col-8 py-2">
                                <h3><b><?= $paketJml; ?></b></h3>
                                <p>Jumlah Paket</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card pengujian mt-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 m-auto text-center">
                                <h2><i class="far fa-file-alt"></i></h2>
                            </div>
                            <div class="col-8 py-2">
                                <h3><b><?= $administrasiJml; ?></b></h3>
                                <p>Jumlah Pengujian</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card py-3 mt-2">
                    <div class="card-body">
                        <div class="container">
                            <h4>Pengiriman</h4>
                            <div class="row mt-3">
                                <div class="col-4">
                                    <h3><b><?= $pengirimanSampleJml; ?></b></h3>
                                    <p>Pengiriman Sample</p>
                                </div>
                                <div class="col-4">
                                    <h3><b><?= $diterimaJml; ?></b></h3>
                                    <p>Sample Diterima</p>
                                </div>
                                <div class="col-4">
                                    <h3><b><?= $hasilUjiJml; ?></b></h3>
                                    <p>Penyampaian Hasil Uji</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card py-3 mt-2">
                    <div class="card-body">
                        <div class="container">
                            <h4>Pembayaran</h4>
                            <div class="row mt-3">
                                <div class="col-6 belum-lunas">
                                    <h3><b><?= $administrasiBelumLunas; ?></b></h3>
                                    <p>Belum Lunas</p>
                                </div>
                                <div class="col-6 lunas">
                                    <h3><b><?= $administrasiLunas; ?></b></h3>
                                    <p>Sudah Lunas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4 mb-5">
            <div class="card-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="row my-auto">
                                <div class="col-md-6 my-auto">
                                    <p>Admin</p>
                                </div>
                                <div class="col-md-4">
                                    <a href="/listAdmin" class="btn btnpilih">Pilih</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row my-auto">
                                <div class="col-md-6 my-auto">
                                    <p>Perusahaan</p>
                                </div>
                                <div class="col-md-4">
                                    <a href="/listPerusahaan" class="btn btnpilih">Pilih</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row my-auto">
                                <div class="col-md-6 my-auto">
                                    <p>Paket</p>
                                </div>
                                <div class="col-md-4">
                                    <a href="/listPaket" class="btn btnpilih">Pilih</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer fixed-bottom" style="margin-top: 63px">
        <div class="container">
            <p class="mb-0 pt-3 fw-bold">@ UP-<i>tek</i>MIRA</p>
        </div>
    </div>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>