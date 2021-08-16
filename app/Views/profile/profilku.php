<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="/assets/css/profilku.css" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Profilku</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-sm">
            <a class="navbar-brand fw-bold" href="/ujiProfisiensi">UP-<i>tek</i>MIRA</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarProfites" aria-controls="navbarProfites" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarProfites">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/ujiProfisiensi">Uji Profisiensi</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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
                            Profilku
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb -->

        <!-- Title -->
        <div class="title mt-4 pt-3">
            <h2>Profilku</h2>
            <hr />
        </div>
        <!-- Title -->


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
        <!-- Form -->
        <form action="/Profile/update/<?= session()->get('id'); ?>" method="post">
            <div class="form-profil">
                <div class="row mb-3">
                    <div class="col-1"></div>
                    <label for="username" class="col-3 col-form-label text-end fw-bold">Username</label>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="username1"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" id="username" aria-label="username1" aria-describedby="username1" value="<?= $user->username; ?>" readonly />
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-1"></div>
                    <label for="email" class="col-3 col-form-label text-end fw-bold">Alamat Email</label>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="email1"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" id="email" aria-label="email1" aria-describedby="email1" value="<?= $user->email; ?>" readonly />
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-1"></div>
                    <label for="password-aktif" class="col-3 col-form-label text-end fw-bold">Password Aktif</label>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <input type="password" class="form-control" name="password-old" id="password-old" aria-label="password-aktif1" aria-describedby="password-aktif1" />
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-1"></div>
                    <label for="password" class="col-3 col-form-label text-end fw-bold">Password</label>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <input type="password" class="form-control" name="password-new" id="password-new" aria-label="password1" aria-describedby="password1" />
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-1"></div>
                    <label for="password-konfirm" class="col-3 col-form-label text-end fw-bold">Konfirmasi Password</label>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <input type="password" class="form-control" name="repassword" id="repassword" aria-label="password-konfirm1" aria-describedby="password-konfirm1" />
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-1"></div>
                    <label for="nama-lengkap" class="col-3 col-form-label text-end fw-bold">Nama Perusahaan</label>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <input type="text" class="form-control" name="nama_user" id="nama_user" aria-label="nama-lengkap1" aria-describedby="nama-lengkap1" value="<?= $user->nama_user; ?>" />
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-1"></div>
                    <label for="nama-lengkap" class="col-3 col-form-label text-end fw-bold">Alamat</label>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <div class="form-floating">
                            <textarea class="form-control" name="detail_alamat" id="detail_alamat" style="height: 100px"><?= $user->detail_alamat; ?></textarea>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-1"></div>
                    <label for="no-telepon" class="col-3 col-form-label text-end fw-bold">No Telepon</label>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <input type="number" value="<?= $user->no_telepon; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="14" class="form-control" name="no_telepon" id="no_telepon" aria-label="no-telepon1" aria-describedby="no-telepon1" />
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-1"></div>
                    <label for="no-fax" class="col-3 col-form-label text-end fw-bold">No Fax</label>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <input type="number" value="<?= $user->no_fax; ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="14" class="form-control" name="no_fax" id="no_fax" aria-label="no-fax1" aria-describedby="no-fax1" />
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row mb-3 py-4">
                    <div class="col-1"></div>
                    <div class="col-3"></div>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <div class="btn-group">
                            <div class="btn-icon py-2 px-3">
                                <i class="far fa-save"></i>
                            </div>
                            <button type="submit" class="btn-save px-3">Simpan</button>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </form>

        <!-- Form -->
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <p class="mb-0 pt-3 fw-bold">@ UP-<i>tek</i>MIRA</p>
        </div>
    </div>
    <!-- Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>