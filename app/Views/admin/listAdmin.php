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
                            <form action="/Admin/insertAdmin" method="POST">
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
                                                    <input type="text" class="form-control" id="username" name="username" />
                                                </div>
                                                <div class="mb-3 email">
                                                    <label for="email" class="form-label">Email address</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" />
                                                </div>
                                                <div class="mb-3 nama">
                                                    <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3 telepon">
                                                    <label for="telepon" class="form-label">No Telepon</label>
                                                    <input type="number" class="form-control" id="telepon" name="telepon" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="14" />
                                                </div>
                                                <div class="mb-3 password">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" />
                                                </div>
                                                <div class="mb-3 alamat">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer border-0">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- alert -->
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <?php if (!empty(session()->getFlashdata('message'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('message'); ?>
            </div>
        <?php endif; ?>
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
                        <?php $i = 1; ?>
                        <?php foreach ($admins as $admin) : ?>
                            <tr>
                                <th class="text-center"><?= $i ?></th>
                                <td class="text-center"><?= $admin->username; ?></td>
                                <td class="text-center"><?= $admin->nama_user; ?></td>
                                <td class="text-center"><?= $admin->email; ?></td>
                                <td class="text-center"><?= $admin->no_telepon; ?></td>
                                <td class="text-center"><?= $admin->detail_alamat; ?></td>
                                <td class="text-center">
                                    <!-- Modal Edit -->
                                    <?php if (session()->get('username') === $admin->username) : ?>
                                        <button type="button" class="btn btnedit" data-bs-toggle="modal" data-bs-target="#editModal<?= $admin->id_user; ?>">Edit</button>
                                        <div class="modal fade" id="editModal<?= $admin->id_user; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header border-0">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="/Admin/editAdmin/<?= $admin->id_user; ?>" method="post">
                                                        <div class="modal-body border-0">
                                                            <div class="mb-3" style="text-align: left;">
                                                                <label class="form-label">Username</label>
                                                                <input type="text" class="form-control" name="username" id="username" value="<?= $admin->username; ?>" required>
                                                                <label class="form-label">Nama Lengkap</label>
                                                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?= $admin->nama_user; ?>" required>
                                                                <label class=" form-label">Email</label>
                                                                <input type="text" class="form-control" name="email" id="email" value="<?= $admin->email; ?>" required>
                                                                <label class="form-label">No Telepon</label>
                                                                <input type="number" class="form-control" name="no_telepon" id="no_telepon" value="<?= $admin->no_telepon; ?>" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="14">
                                                                <label class="form-label">Alamat</label>
                                                                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $admin->detail_alamat; ?>" required>
                                                                <label class="form-label">Password</label>
                                                                <input type="password" class="form-control" name="password_new" id="password_new" placeholder="Optional">
                                                                <label class="form-label">Konfirmasi Password</label>
                                                                <input type="password" class="form-control" name="repassword" id="repassword">
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
                                    <?php else : ?>
                                        <p><i> Tidak Memiliki Akses </i></p>
                                    <?php endif; ?>



                                    <!-- Button Hapus -->
                                    <!-- <button type="button" class="btn btnhapus" data-bs-toggle="modal" data-bs-target="#hapusModal">Hapus</button>
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
                                    </div> -->
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
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