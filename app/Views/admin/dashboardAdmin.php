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
    <style>
        .footer {
            width: 100%;
            height: 7vh;
            background-color: #ffffff;
        }

        .btn-save {
            background-color: #53b8bb;
            border: none;
            color: #ffffff;
            border-radius: 0;
        }

        .btnlunas {
            background-color: #0d6efd;
            border: none;
            color: #ffffff;
            border-radius: 0;
        }

        .btn-save:hover {
            background-color: #3c8083;
            border-color: #656fc2;
        }

        .btnlunas:hover {
            color: #ffffff;
            background-color: #0d4eaf;
        }
    </style>
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

        <div class="mt-2 mb-5 pb-5">

            <div class="card container mt-4" style="background-color: white; padding:30px">
                <h4>Daftar Perusahaan</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mt-4" style="text-align: center;">
                        <thead style="background-color: #656fc2; color: white;  text-align: center;">
                            <tr>
                                <th class="align-middle">No</th>
                                <th class="align-middle">Nama Perusahaan</th>
                                <th class="align-middle">Username</th>
                                <th class="align-middle">Email</th>
                                <th class="align-middle">Alamat</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $user->nama_user; ?></td>
                                    <td><?= $user->username; ?></td>
                                    <td><?= $user->email; ?></td>
                                    <td><?= $user->detail_alamat; ?></td>
                                    <td>

                                        <button type="button" class="btn btn-save px-3" data-bs-toggle="modal" data-bs-target="#perusahaan<?= $user->id_user; ?>">Detail</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="perusahaan<?= $user->id_user; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><?= $user->nama_user; ?></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-bordered mt-4" style="text-align: center;">
                                                                <thead style="background-color: #656fc2; color: white; text-align: center;">
                                                                    <tr>
                                                                        <th class="align-middle">No</th>
                                                                        <th class="align-middle">Nama Lab</th>
                                                                        <th class="align-middle">Paket</th>
                                                                        <th class="align-middle">Biaya</th>
                                                                        <th class="align-middle">Action</th>
                                                                        <th class="align-middle">Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $j = 1; ?>
                                                                    <?php foreach ($administrasi as $adm) : ?>
                                                                        <?php if ($adm->id_user === $user->id_user) : ?>
                                                                            <tr>
                                                                                <th scope="row"><?= $j; ?></th>
                                                                                <td><?= $adm->nama_laboratorium; ?></td>
                                                                                <td><?= $adm->nama_pengujian; ?></td>
                                                                                <td>Rp. <?= $adm->biaya; ?></td>
                                                                                <?php if ($adm->status_pembayaran === "Belum Lunas") : ?>
                                                                                    <td>
                                                                                        <form action="/Admin/buatLunas/<?= $adm->id_administrasi; ?>" method="post">
                                                                                            <button type="submit" class="btn btnlunas px-3">Buat Lunas</button>
                                                                                        </form>


                                                                                    </td>
                                                                                <?php elseif ($adm->status_pembayaran === "Sudah Lunas") : ?>
                                                                                    <td>

                                                                                        <!-- <button class="btn btn-secondary dropdown-toggle" style="background-color: transparent; border-color: transparent; color:#757575;" type="button" data-bs-toggle="dropdown">Menu</button> -->

                                                                                        <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2"> -->
                                                                                        <?php if (($adm->status_pengujian === "Belum") && ($adm->status_resi === "Belum")) : ?>
                                                                                            <button class="btn btn-secondary dropdown-toggle" style="background-color: transparent; border-color: transparent; color:#757575;" type="button" data-bs-toggle="dropdown">Menu</button>
                                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                                                <li>
                                                                                                    <a class="dropdown-item" href="/inputPengiriman/<?= $adm->id_administrasi; ?>">Input Pengiriman</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        <?php elseif (($adm->status_pengujian === "Belum") && ($adm->status_resi === "Sudah")) : ?>
                                                                                            <?php foreach ($pengiriman as $kirim) : ?>
                                                                                                <?php if ($kirim->id_administrasi == $adm->id_administrasi) : ?>
                                                                                                    <p>Tidak ada Action</p>
                                                                                                <?php endif; ?>
                                                                                            <?php endforeach; ?>
                                                                                        <?php elseif (($adm->status_pengujian === "Sudah") && ($adm->status_resi === "Sudah")) : ?>
                                                                                            <button class="btn btn-secondary dropdown-toggle" style="background-color: transparent; border-color: transparent; color:#757575;" type="button" data-bs-toggle="dropdown">Menu</button>
                                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                                                <li>
                                                                                                    <a class="dropdown-item" href="/detailPengujian/<?= $adm->id_administrasi; ?>">Detail Pengujian</a>
                                                                                                </li>
                                                                                            </ul>

                                                                                        <?php endif; ?>
                                                                                        <!-- </ul> -->

                                                                                    </td>
                                                                                <?php endif ?>
                                                                                <td>
                                                                                    <?php if ($adm->status_pembayaran === "Belum Lunas") : ?>
                                                                                        <p>Belum Lunas</p>
                                                                                    <?php elseif ($adm->status_pembayaran === "Sudah Lunas") : ?>
                                                                                        <?php if ($adm->status_resi === "Belum") : ?>
                                                                                            <p>Admin belum membuat resi</p>
                                                                                        <?php elseif ($adm->status_resi === "Sudah") : ?>
                                                                                            <?php foreach ($pengiriman as $kirim) : ?>
                                                                                                <?php if ($kirim->id_administrasi == $adm->id_administrasi) : ?>
                                                                                                    <?php if ($adm->status_pengujian === "Sudah") : ?>
                                                                                                        <p>Pengujian Selesai</p>
                                                                                                    <?php else : ?>
                                                                                                        <?php if ($kirim->status_pengiriman === "Sedang Dikirim") : ?>
                                                                                                            <p>Sedang dikirim</p>
                                                                                                        <?php elseif ($kirim->status_pengiriman === "Diterima") : ?>
                                                                                                            <p>Sudah diterima, menunggu pengujian.</p>
                                                                                                        <?php endif; ?>
                                                                                                    <?php endif; ?>
                                                                                                <?php endif; ?>
                                                                                            <?php endforeach; ?>
                                                                                        <?php endif; ?>
                                                                                    <?php endif; ?>
                                                                                </td>
                                                                            </tr>
                                                                        <?php else : ?>
                                                                            <?php $j = 0; ?>
                                                                        <?php endif; ?>
                                                                        <?php $j++; ?>
                                                                    <?php endforeach; ?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
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