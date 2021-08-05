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

        <!-- Breadcrumb -->

        <!-- Title -->
        <div class="title mt-4 pt-3">
            <h2> Paket Uji Profisiensi</h2>
            <hr />
        </div>
        <!-- Title -->

        <!-- Button -->
        <div class="d-flex justify-content-end">
            <div class="btn-group">
                <a class="btn btn-add px-3" href="/ujiProfisiensi/pilih-baru">Tambah Paket</a>
            </div>
        </div>
        <!-- Button -->


        <!-- Tab Lunas -->
        <div class="tab-content my-4" id="nav-tabContent">
            <table class="table table-bordered border-dark" style="text-align: center;">
                <thead style="background-color: #1a1d21; color: white; ">
                    <tr>
                        <th style="width:5%;" scope="col" class="align-middle">No</th>
                        <th scope="col" class="align-middle">Nama Paket</th>
                        <th scope="col" class="align-middle">Biaya</th>
                        <th scope="col" class="align-middle">Parameter Uji</th>
                        <th scope="col" class="align-middle">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <th>Paket 1</th>
                        <th>3.000.000</th>
                        <th>Ash Content</th>
                        <th>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal">Hapus</button>
                            <p></p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addParameterModal">Tambah Parameter</button>
                            <!-- modal edit -->
                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Paket</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3" style="text-align: left;">
                                                    <label class="form-label">Nama Pengujian</label>
                                                    <input type="text" class="form-control" name="penanggung_jawab_lab" id="penanggung_jawab_lab" value="cikoy">
                                                    <label class="form-label">Biaya</label>
                                                    <input type="text" class="form-control" name="penanggung_jawab_lab" id="penanggung_jawab_lab">
                                                    <label class="form-label">Biaya Terbilang</label>
                                                    <input type="text" class="form-control" name="penanggung_jawab_lab" id="penanggung_jawab_lab">
                                                    <label class="form-label">Keterangan</label>
                                                    <input type="text" class="form-control" name="penanggung_jawab_lab" id="penanggung_jawab_lab">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal hapus -->
                            <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <!-- <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div> -->
                                        <div class="modal-body">
                                            <h5>Apakah anda yakin ingin</h5>
                                            <h5>menghapus Paket ?</h5>
                                            <p></p>
                                            <button type="button" class="btn btn-primary">Ya</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal edit -->
                            <div class="modal fade" id="addParameterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Parameter</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3" style="text-align: left;">
                                                    <label class="form-label">Nama Parameter</label>
                                                    <input type="text" class="form-control" name="penanggung_jawab_lab" id="penanggung_jawab_lab" value="cikoy">
                                                    <label class="form-label">Satuan</label>
                                                    <input type="text" class="form-control" name="penanggung_jawab_lab" id="penanggung_jawab_lab">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-add">Tambah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                </tbody>
            </table>
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