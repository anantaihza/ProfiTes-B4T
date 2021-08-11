<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="/assets/css/admin/paket.css" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Uji Profisiensi</title>
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

    <div class="container path mb-5">
        <!-- Title -->
        <div class="title mt-4 pt-3">
            <h2>Menu Admin</h2>
            <hr />
        </div>
        <!-- Title -->

        <!-- Button -->
        <div class="d-flex justify-content-end">
            <div class="btn-group">
                <div class="btn-icon py-2 px-3">
                    <i class="fas fa-plus"></i>
                </div>
                <button type="button" class="btn btn-add px-3" data-bs-toggle="modal" data-bs-target="#addAdmin">Tambah Admin</button>
                <!-- Modal -->
                <div class="modal fade" id="addAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg text-start">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Tambah Admin
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body border-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 username">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="username" />
                                            </div>
                                            <div class="mb-3 email">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="email" placeholder="name@example.com" />
                                            </div>
                                            <div class="mb-3 nama">
                                                <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama-lengkap" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 telepon">
                                                <label for="telepon" class="form-label">No Telepon</label>
                                                <input type="number" class="form-control" id="telepon" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="14" />
                                            </div>
                                            <div class="mb-3 password">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password" />
                                            </div>
                                            <div class="mb-3 alamat">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <textarea class="form-control" id="alamat" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button -->

        <br>

        <!-- Tab Lunas -->
        <div class="card" style="background-color: #fff;">
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead style="background-color: #656fc2; color: white; ">
                        <tr class="text-center">
                            <th style="width:5%;" scope="col" class="align-middle">No</th>
                            <th scope="col" class="align-middle">Username</th>
                            <th scope="col" class="align-middle">Nama Lengkap</th>
                            <th scope="col" class="align-middle">Email</th>
                            <th scope="col" class="align-middle">No Telepon</th>
                            <th scope="col" class="align-middle">Alamat</th>
                            <th scope="col" class="align-middle">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-center">1</th>
                            <td class="text-center">test</td>
                            <td class="text-center">testing</td>
                            <td class="text-center">test@gmail.com</td>
                            <td class="text-center">12345</td>
                            <td class="text-center">dimana-mana</td>
                            <td class="text-center">
                                <!-- Modal Edit -->
                                <button type="button" class="btn btnedit" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="" method="post">
                                                <div class="modal-body border-0">
                                                    <div class="mb-3" style="text-align: left;">
                                                        <label class="form-label">Username</label>
                                                        <input type="text" class="form-control" name="username" id="username" value="">
                                                        <label class="form-label">Nama Lengkap</label>
                                                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="">
                                                        <label class=" form-label">Email</label>
                                                        <input type="text" class="form-control" name="email" id="email" value="">
                                                        <label class="form-label">No Telepon</label>
                                                        <input type="text" class="form-control" name="no_telepon" id="no_telepon" value="">
                                                        <label class="form-label">Alamat</label>
                                                        <input type="text" class="form-control" name="alamat" id="alamat" value="">
                                                        <label class="form-label">Password</label>
                                                        <input type="text" class="form-control" name="password_new" id="password_new" value="">
                                                        <label class="form-label">Konfirmasi Password</label>
                                                        <input type="text" class="form-control" name="repassword" id="repassword" value="">
                                                    </div>
                                                </div>
                                                <div class=" modal-footer border-0">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <!-- Button Hapus -->
                                <button type="button" class="btn btnhapus" data-bs-toggle="modal" data-bs-target="#hapusModal">Hapus</button>
                                <div id="hapusModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-confirm modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header flex-column border-0">

                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                                            </div>
                                            <div class="modal-body border-0">
                                                <p>Jika telah dihapus, tidak dapat dikembalikan kembali</p>
                                            </div>
                                            <div class="modal-footer justify-content-center border-0">
                                                <form action="/Admin/deletePaket/" method="post">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
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