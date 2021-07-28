<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/ujiProfisiensiBaru.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Uji Profites</title>

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

    <div class="container">
        <h1 class="">Uji Profisiensi Baru</h1>
        <div class="row ">
            <div class="col">
                <div class="row justify-content-md-center">
                    <div class="col-6">
                        <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
                            <li class="satu nav-item" role="presentation">
                                <button class="nav-link active btnTab" id="pills-produk-tab" data-bs-toggle="pill" data-bs-target="#pills-produk" type="button" role="tab" aria-controls="pills-produk" aria-selected="true">Pembayaran</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-produk" role="tabpanel" aria-labelledby="pills-produk-tab" style="margin-top: 20px;">
                        <div class="row justify-content-md-center">
                            <div class="col-12 mt-5">
                                <div class="row justify-content-md-center">
                                    <a class="btn btn4 border" data-bs-toggle="collapse" href="#LaporanSertifikat" role="button" aria-expanded="false" aria-controls="LaporanSertifikat">
                                        <i class="far fa-money-bill-alt" style="margin-right: 2px;"></i>Detail Pembayaran
                                    </a>
                                </div>
                                <div class="collapse.show row" id="LaporanSertifikat">
                                    <div>
                                        <table class="table border" style=" width: 51%; margin: auto;">
                                            <tbody>
                                                <tr class="bg-white">
                                                    <th scope="row">No Order</th>
                                                    <td>
                                                        <?= session()->get('dataAdministrasi')->id_administrasi; ?>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <th scope="row">Nomor VA</th>
                                                    <td>
                                                        <?= session()->get('dataAdministrasi')->no_va; ?>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <th scope="row">Nomor Refrensi</th>
                                                    <td>
                                                        <?= session()->get('dataAdministrasi')->no_refrensi; ?>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <th scope="row">Sistem Pembayaran</th>
                                                    <td>
                                                        Pembayaran Secara Langsung
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <th scope="row">Paket</th>
                                                    <td>
                                                        <?= session()->get('dataAdministrasi')->nama_pengujian; ?>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white">
                                                    <th scope="row">Nominal</th>
                                                    <td>
                                                        IDR <?= session()->get('dataAdministrasi')->biaya; ?>
                                                    </td>
                                                </tr>

                                                <tr class="bg-white">
                                                    <th scope="row">Status</th>
                                                    <td>
                                                        <?= session()->get('dataAdministrasi')->status_pembayaran; ?>
                                                    </td>
                                                </tr>

                                                <tr class="bg-white">
                                                    <th scope="row">Invoice</th>
                                                    <td>
                                                        <form action="/GeneratePdf/generatePDF" method="post">
                                                            <button class="unduh">
                                                                <i class="fa fa-download" style="margin-right: 5px;"></i>
                                                                Unduh
                                                            </button>

                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer class="fixed-bottom">
    <div class="">
        <div class="container">
            <p class="mb-0 pt-3 fw-bold">@ B4T 2018</p>
        </div>
    </div>
</footer>

</html>