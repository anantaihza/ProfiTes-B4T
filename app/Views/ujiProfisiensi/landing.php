<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="/assets/css/ujiProfisiensiLanding.css" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Uji Profisiensi</title>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-sm">
            <a class="navbar-brand fw-bold" href="/ujiProfisiensi">ProfiTes B4T</a>
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
                        <li class="breadcrumb-item"><a href="/ujiProfisiensi">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Uji Profisiensi
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb -->

        <!-- Title -->
        <div class="title mt-4 pt-3">
            <h2>Uji Profisiensi</h2>
            <hr />
        </div>
        <!-- Title -->

        <!-- Button -->
        <div class="d-flex justify-content-end">
            <div class="btn-group">
                <div class="btn-icon py-2 px-3">
                    <i class="fas fa-plus"></i>
                </div>
                <a class="btn btn-add px-3" href="/ujiProfisiensi/pilih-baru">Uji Profisiensi</a>
            </div>
        </div>
        <!-- Button -->

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#Lunas" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                    Sudah Lunas
                </button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#Belum-Lunas" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                    Belum Lunas
                </button>
            </div>
        </nav>
        <!-- Tab Lunas -->
        <div class="tab-content my-4" id="nav-tabContent">
            <div class="tab-pane fade show active" id="Lunas" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-2">
                        <!-- Card Lunas -->
                        <?php foreach ($administrasi as $adm) : ?>
                            <?php if ($adm->status_pembayaran === "Sudah Lunas") : ?>
                                <div class="col">
                                    <div class="card2 d-flex flex-column justify-content-between">
                                        <h4><?= $adm->nama_laboratorium; ?></h4>
                                        <div>

                                            <table class="table table-borderless table-responsive-lg">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Produk</th>
                                                        <td><?= $adm->nama_pengujian; ?></td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Pengujian</th>
                                                        <td><?= $adm->keterangan; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Biaya</th>
                                                        <td>Rp. <?= $adm->biaya; ?></td>

                                                    </tr>
                                                    <!-- <tr>
                                                    <th scope="row">Dibuat pada</th>
                                                    <td>13 Jul 2021 - 20:07:40</td>
    
                                                </tr>
                                                <tr>
                                                    <th scope="row">Jatuh tempo</th>
                                                    <td>17 Jul 2021 - 20:07:40</td>
                                                </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
                                            <?php if ($adm->status_resi === "Sudah") : ?>
                                                <form action="/UjiProfisiensi/pengujian/<?= $adm->id_administrasi; ?>" method="post">
                                                    <button class="btn btn-add ">Pengujian</button>
                                                </form>
                                            <?php else : ?>
                                                <p class="text-center"><b>Pesanan sedang diproses</b></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>
                        <?php endforeach; ?>


                    </div>
                </div>
            </div>
            <!-- Tab Belum Lunas -->
            <div class="tab-pane fade" id="Belum-Lunas" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-2">
                        <!-- Card Belum Lunas -->

                        <?php foreach ($administrasi as $adm) : ?>
                            <?php if ($adm->status_pembayaran === "Belum Lunas") : ?>
                                <div class="col">
                                    <div class="card2 d-flex flex-column justify-content-between">
                                        <h4><?= $adm->nama_laboratorium; ?></h4>
                                        <div>

                                            <table class="table table-borderless table-responsive-lg">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Produk</th>
                                                        <td><?= $adm->nama_pengujian; ?></td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Pengujian</th>
                                                        <td><?= $adm->keterangan; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Biaya</th>
                                                        <td>Rp. <?= $adm->biaya; ?></td>

                                                    </tr>
                                                    <!-- <tr>
                                                    <th scope="row">Dibuat pada</th>
                                                    <td>13 Jul 2021 - 20:07:40</td>
    
                                                </tr>
                                                <tr>
                                                    <th scope="row">Jatuh tempo</th>
                                                    <td>17 Jul 2021 - 20:07:40</td>
                                                </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
                                            <form action="/UjiProfisiensi/getAdministrasi/<?= $adm->id_administrasi; ?>" method="post">

                                                <button class="btn btn-add">Lihat Detail</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>
                        <?php endforeach; ?>





                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer" style="margin-top: 63px;">
        <div class="container">
            <p class="mb-0 pt-3 fw-bold">@ B4T 2018</p>
        </div>
    </div>
    <!-- Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>