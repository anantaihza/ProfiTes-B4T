<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        .footer {
            width: 100%;
            height: 7vh;
            background-color: #ffffff;
        }
    </style>
    <title>Document</title>
</head>

<body style="background-color: #E5E5E5;">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-sm">
            <a class="navbar-brand fw-bold" href="/dashboard">UP-<i>tek</i>MIRA</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarProfites" aria-controls="navbarProfites" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarProfites">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Perusahaan</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="badge rounded-pill bg-primary"><?= session()->get('username'); ?></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="/profile">Pengaturan Profil</a>
                            </li>
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

    <div class="container mt-5">
        <div class="title mt-5 pt-5">
            <h3>Perusahaan</h3>

        </div>
        <div class="row">
            <div class="col mt-4" style="background-color: white;">
                <div class="table-responsive">
                    <table class="table table-bordered mt-4" style="text-align: center;">
                        <thead style="background-color: black; color: white; text-align: center;">
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
                                        <button type="button" style="background-color: slateblue;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#perusahaan<?= $user->id_user; ?>">Detail</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="perusahaan<?= $user->id_user; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Perusahaan A</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered mt-4" style="text-align: center;">
                                                                <thead style="background-color: black; color: white; text-align: center;">
                                                                    <tr>
                                                                        <th class="align-middle">No</th>
                                                                        <th class="align-middle">Nama Lab</th>
                                                                        <th class="align-middle">Paket</th>
                                                                        <th class="align-middle">Biaya</th>
                                                                        <th class="align-middle">Action</th>
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
                                                                                        <button type="button" style="background-color: slateblue;" class="btn btn-primary">Buat Lunas</button>
                                                                                    </td>
                                                                                <?php elseif ($adm->status_pembayaran === "Sudah Lunas") : ?>
                                                                                    <td>
                                                                                        <button class="btn btn-secondary dropdown-toggle" style="background-color: transparent; border-color: transparent; color:#757575;" type="button" data-bs-toggle="dropdown">Menu</button>

                                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                                            <li>
                                                                                                <a class="dropdown-item" href="/inputPengiriman">Input Pengiriman</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a class="dropdown-item" href="/detailPengujian">Lihat Pengujian</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </td>
                                                                                <?php endif ?>
                                                                            </tr>
                                                                        <?php endif ?>
                                                                        <!-- <tr>
                                                                            <th scope="row">2</th>
                                                                            <td>Laboratorium B</td>
                                                                            <td>Paket 2</td>
                                                                            <td>10000000</td>
                                                                            <td>
                                                                                <button class="btn btn-secondary dropdown-toggle" style="background-color: transparent; border-color: transparent; color:#757575;" type="button" data-bs-toggle="dropdown">Menu</button>
                                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                                    <li><a class="dropdown-item" href="/inputPengiriman">Input Pengiriman</a></li>
                                                                                    <li><a class="dropdown-item" href="/detailPengujian">Lihat Pengujian</a></li>
                                                                                </ul>
                                                                            </td>
                                                                        </tr> -->
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
    <div class="footer fixed-bottom">
        <div class="container">
            <p class="mb-0 pt-3 fw-bold">@ UP-<i>tek</i>MIRA</p>
        </div>
    </div>


</body>

</html>