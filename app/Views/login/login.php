<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="/assets/css/login.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Halaman Awal</title>
</head>

<body>
    <div class="container-sm">
        <div class="card mx-auto">
            <div class="card-body">
                <div class="row">
                    <div class="banner col-lg-6 col-md-12 d-none d-lg-block">
                        <div class="containter px-3 py-4">
                            <h2 class="text-center">ProfiTes B4T</h2>
                            <p class="text-center">
                                Silahkan login untuk melakukan Uji Profisiensi.
                            </p>
                            <br />
                            <br />
                            <p>
                                <i class="fas fa-check-circle"></i> Daftar & login dengan
                                mudah
                            </p>
                            <p>
                                <i class="fas fa-check-circle"></i> kelola uji profisiensi
                                secara elektronik
                            </p>
                            <p>
                                <i class="fas fa-check-circle"></i> Unduh berkas laporan
                                secara lengkap
                            </p>
                            <p>
                                <i class="fas fa-check-circle"></i> Lakukan pembayaran secara
                                otomatis
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 py-4">
                        <div class="container">
                            <div class="title-login text-center d-lg-none d-xl-none">
                                <h2>ProfiTes B4T</h2>
                                <p>Silahkan login untuk melakukan Uji Profisiensi.</p>
                            </div>
                            <nav class="py-3">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                        Login
                                    </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                        Daftar
                                    </button>
                                    <a class="btn bantuan" id="nav-bantuan-tab" type="button">
                                        <i class="fas fa-question-circle"></i> Bantuan
                                    </a>
                                </div>
                            </nav>
                            <div class="tab-content px-4" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <?php echo session()->getFlashdata('error'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <!-- Form Login  -->
                                    <form action="/Login/login" method="post">
                                        <div class="my-3 row">
                                            <label for="staticEmail" class="col-2 col-form-label"><i class="fas fa-user"></i></label>
                                            <div class="col-10">
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Username atau Alamat Email" />
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-2 col-form-label"><i class="fas fa-lock"></i></label>
                                            <div class="col-10">
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-4">
                                            <i class="fas fa-sign-in-alt"></i> Submit
                                        </button>
                                    </form>

                                    <!-- Form login  -->
                                </div>


                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <p>Periksa kembali Form</p>
                                            </hr />
                                            <?php echo session()->getFlashdata('error'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Form Daftar  -->
                                    <form method="post" action="/Login/register">
                                        <div class="my-3 row">
                                            <label for="staticUsername" class="col-2 col-form-label"><i class="fas fa-user"></i></label>
                                            <div class="col-10">
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Username" />
                                            </div>
                                        </div>
                                        <div class="my-3 row">
                                            <label for="Email" class="col-2 col-form-label"><i class="far fa-envelope"></i></label>
                                            <div class="col-10">
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Alamat Email" />
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="Password" class="col-2 col-form-label"><i class="fas fa-lock"></i></label>
                                            <div class="col-10">
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-4">
                                            <i class="fas fa-sign-in-alt"></i> Submit
                                        </button>
                                    </form>

                                    <!-- Form Daftar  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>