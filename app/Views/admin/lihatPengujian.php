<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="/assets/css/admin/inputanAdmin.css" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Hasil Pengujian</title>
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

    <div class="container path"></div>

    <!-- Title -->
    <div class="title mt-4 pt-3">
        <h2>Tambah Paket Uji</h2>
    </div>
    <!-- Title -->

    <!-- Form -->
    <div class="container" style="margin-top: 50px;">
        <div class="row justify-content-md-center">
            <div class="col-12">
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Nama Penelitian</label>
                            <input class="form-control formInput" id="" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Nama Paket</label>
                            <input type="" class="form-control" name="" id="" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Tanggal Pengujian</label>
                            <input type="" class="form-control" name="" id="" readonly>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered mt-4" style="text-align: center;">
                                    <thead style="background-color: slateblue; color: white; text-align: center;">
                                        <tr>
                                            <th rowspan="2" scope="col" class="align-middle">No</th>
                                            <th rowspan="2" scope="col" class="align-middle">Parameter Uji</th>
                                            <th rowspan="2" scope="col" class="align-middle">Satuan</th>

                                            <th colspan="3" scope="col">Data Hasil Uji</th>
                                            <th rowspan="2" scope="col" class="align-middle">Expanded Uncertainty (U95%)</th>
                                            <th rowspan="2" scope="col" class="align-middle">Standar Acuan</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">A</th>
                                            <th scope="col">B</th>
                                            <th scope="col">Rata-rata</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <tr>
                                            <th scope="row">1</th>
                                            <td>1</td>
                                            <td>1</td>

                                            <td>
                                                <p>1</p>
                                            </td>
                                            <td>
                                                <p>1</p>
                                            </td>
                                            <td>
                                                <p>1</p>
                                            </td>
                                            <td>
                                                <p>1</p>
                                            </td>
                                            <td>
                                                <p>1</p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Form -->


    </div>

    <!-- Footer -->
    <div class="footer fixed-bottom">
        <div class="container">
            <p class="mb-0 pt-3 fw-bold">@ UP-<i>tek</i>MIRA</p>
        </div>
    </div>
    <!-- Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>