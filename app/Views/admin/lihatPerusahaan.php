<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Document</title>
</head>

<body style="background-color: #E5E5E5;">

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

    <div class="container">
        <h3>Perusahaan</h3>
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
                            <tr>
                                <th scope="row">1</th>
                                <td><strong>Perusahaan A</strong> </td>
                                <td><strong>agus</strong> </td>
                                <td><strong>agus@gmail.com</strong> </td>
                                <td><strong>Bandung</strong> </td>
                                <td>
                                    <button type="button" style="background-color: slateblue;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td><strong>Laboratorium A</strong> </td>
                                                                    <td><strong>Paket 1</strong> </td>
                                                                    <td><strong>50000000</strong> </td>
                                                                    <td> <button type="button" style="background-color: slateblue;" class="btn btn-primary">Lunas</button> </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td><strong>Laboratorium B</strong> </td>
                                                                    <td><strong>Paket 2</strong> </td>
                                                                    <td><strong>10000000</strong> </td>
                                                                    <td>
                                                                        <button class="btn btn-secondary dropdown-toggle" style="background-color: transparent; border-color: transparent; color:#757575;" type="button" data-bs-toggle="dropdown">Menu</button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                                            <li><a class="dropdown-item active" href="#">Input Pengiriman</a></li>
                                                                            <li><a class="dropdown-item" href="#">Lihat Pengujian</a></li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</body>

</html>