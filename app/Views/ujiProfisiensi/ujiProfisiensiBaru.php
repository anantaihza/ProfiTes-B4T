<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/ujiProfisiensiBaru.css">
    <title>Uji Profites</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-sm">
            <a class="navbar-brand" href="#">ProfiTes B4T</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarProfites" aria-controls="navbarProfites" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarProfites">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="far fa-calendar-alt"></i>
                            Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-database"></i> Uji Profisiensi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="badge rounded-pill bg-primary">User1</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Pengaturan Profil</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="">Uji Profisiensi Baru</h1>


        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
                    <li class="satu nav-item" role="presentation">
                        <button class="nav-link active btnTab" id="pills-produk-tab" data-bs-toggle="pill" data-bs-target="#pills-produk" type="button" role="tab" aria-controls="pills-produk" aria-selected="true"><span class="badge">1</span>Produk</button>
                    </li>
                    <li class="dua nav-item" role="presentation">
                        <button class="nav-link btnTab" id="pills-detail-tab" data-bs-toggle="pill" data-bs-target="#pills-detail" type="button" role="tab" aria-controls="pills-detail" aria-selected="false"><span class="badge">2</span>Detail</button>
                    </li>
                    <li class="tiga nav-item" role="presentation">
                        <button class="nav-link btnTab" id="pills-kontak-tab" data-bs-toggle="pill" data-bs-target="#pills-kontak" type="button" role="tab" aria-controls="pills-kontak" aria-selected="false"><span class="badge">3</span>Kontak & Lain-lain</button>
                    </li>
                    <li class="empat nav-item" role="presentation">
                        <button class="nav-link btnTab" id="pills-pembayaran-tab" data-bs-toggle="pill" data-bs-target="#pills-pembayaran" type="button" role="tab" aria-controls="pills-pembayaran" aria-selected="false"><span class="badge">4</span>Pembayaran</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Pertama -->
                    <div class="tab-pane fade show active" id="pills-produk" role="tabpanel" aria-labelledby="pills-produk-tab" style="margin-top: 20px;">
                        <div class="row justify-content-md-center">
                            <div class="col-8 mt-5">
                                <legend>Rincian mengenai produk yang akan dilakukan pengujian</legend>

                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">Produk</label>
                                        <div class="col">
                                            <select class="form-control" name="produk" id="produk">
                                                <option value="">Ban</option>
                                                <option value="">Roda</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Metode Pengujian</label>
                                        <input type="text" class="form-control" id="metodepengujian" placeholder="Metode Pengujian">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">Pengujian</label>
                                        <div class="col">
                                            <select class="form-control" name="pengujian" id="pengujian">
                                                <option value="">Dimensi</option>
                                                <option value="">Berat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">Status Akreditasi</label>
                                        <div>
                                            <label class="radio-inline"><input type="radio" name="statusRegistrasi" value="1">
                                                Ya</label>
                                            <label class="radio-inline"><input type="radio" name="statusRegistrasi" value="0">
                                                Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="row justify-content-md-center">
                            <div class="col-8">
                                <div class="btn-group" style="margin-top: 10px; margin-bottom: 50px; float: right;">
                                    <button type="submit" class="btn btn3 btnNext1">Selanjutnya</button>
                                    <div class="btn-icon2" id="btnGroupAddon">
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Kedua -->
                    <div class="tab-pane fade" id="pills-detail" role="tabpanel" aria-labelledby="pills-detail-tab" style="margin-top: 20px;">
                        <div class="row justify-content-md-center">
                            <div class="col-8 mt-5">
                                <legend>Rincian mengenai informasi detail pengujian</legend>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <label for="">Nama Laboratorium</label>
                                            <div>
                                                <input type="text" class="form-control" id="namaLab">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="">No Telepon</label>
                                            <div>
                                                <input type="text" class="form-control" id="noTelepon">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="">No Fax</label>
                                            <div>
                                                <input type="text" class="form-control" id="noFax" ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-6">
                                                <div>
                                                    <label for="">Alamat</label>
                                                    <div>
                                                        <textarea name="alamat" id="alamat" cols="65" rows="2"></textarea>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="">Alamat Pengiriman</label>
                                                    <div>
                                                        <textarea name="alamat" id="alamat" cols="65" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="row justify-content-md-center">
                                    <div class="col-8">
                                        <div class="btn-group" style="margin-top: 10px; margin-bottom: 50px; float: right;">
                                            <button type="submit" class="btn btn3 btnNext2">Selanjutnya</button>
                                            <div class="btn-icon2" id="btnGroupAddon">
                                                <i class="fas fa-chevron-right"></i>
                                            </div>
                                        </div>
                                        <div class="btn-group" style="margin-top: 10px; margin-bottom: 50px; float: right; margin-right: 5px;">
                                            <div class="btn-icon3" id="btnGroupAddon">
                                                <i class="fas fa-chevron-left"></i>
                                            </div>
                                            <button type="submit" class="btn btn5 btnPrevious2">Sebelumnya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Ketiga -->
                            <div class=" tab-pane fade" id="pills-kontak" role="tabpanel" aria-labelledby="pills-kontak-tab" style="margin-top: 20px;">
                                <div class="row justify-content-md-center">
                                    <div class="col-8 mt-5">
                                        <legend>Rincian mengenai kontak yang terkait pengujian</legend>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div>
                                                    <label for="">Nama</label>
                                                    <div>
                                                        <input type="text" class="form-control" id="nama">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="">Jabatan</label>
                                                    <div>
                                                        <input type="text" class="form-control" id="jabatan">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label style="padding-left: 0" class="control-label col-sm-6" for="">Gunakan Kontrak Pembayaran</label>
                                                    <input type="checkbox" id="" name="" value="1">
                                                    Ya
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <label for="">No Telepon</label>
                                                    <div>
                                                        <input type="text" class="form-control" id="noTelepon">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="">Alamat Email</label>
                                                    <div>
                                                        <input type="email" class="form-control" id="email">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="">Nomor Kontrak</label>
                                                    <div>
                                                        <input type="text" class="form-control" id="alamatKontrak">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="row justify-content-md-center">
                                        <div class="col-8">
                                            <div class="btn-group" style="margin-top: 10px; margin-bottom: 50px; float: right;">
                                                <button type="submit" class="btn btn3 btnNext3">Selanjutnya</button>
                                                <div class="btn-icon2" id="btnGroupAddon">
                                                    <i class="fas fa-chevron-right"></i>
                                                </div>
                                            </div>
                                            <div class="btn-group" style="margin-top: 10px; margin-bottom: 50px; float: right; margin-right: 5px;">
                                                <div class="btn-icon3" id="btnGroupAddon">
                                                    <i class="fas fa-chevron-left"></i>
                                                </div>
                                                <button type="submit" class="btn btn5 btnPrevious3">Sebelumnya</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Keempat -->
                            <div class="tab-pane fade" id="pills-pembayaran" role="tabpanel" aria-labelledby="pills-pembayaran-tab" style="margin-top: 20px;">
                                <div class="row ">
                                    <div class="col">
                                        <div class="container">
                                            <div class="row justify-content-md-center">
                                                <div class="col-12 mt-5">
                                                    <div class="row justify-content-md-center">

                                                        <a class="btn btn4 border" data-bs-toggle="collapse" href="#LaporanSertifikat" role="button" aria-expanded="false" aria-controls="LaporanSertifikat">
                                                            <i class="far fa-money-bill-alt" style="margin-right: 2px;"></i>Detail Pembayaran
                                                        </a>
                                                    </div>

                                                    <div class="collapse.show row" id="LaporanSertifikat">
                                                        <div>
                                                            <table class="table border" style=" width: 51%; margin:
                                                            auto;">
                                                                <tbody>
                                                                    <tr class="bg-white">
                                                                        <th scope="row">No Order</th>
                                                                        <td>
                                                                            19
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="bg-white">
                                                                        <th scope="row">Nomor VA</th>
                                                                        <td>
                                                                            gelap
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="bg-white">
                                                                        <th scope="row">Nomor Refrensi</th>
                                                                        <td>
                                                                            gelap
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="bg-white">
                                                                        <th scope="row">Nominal</th>
                                                                        <td>
                                                                            IDR 1,500,000.00
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="bg-white">
                                                                        <th scope="row">Sistem Pembayaran</th>
                                                                        <td>
                                                                            Pembayaran Secara Langsung
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="bg-white">
                                                                        <th scope="row">Status</th>
                                                                        <td>
                                                                            Belum Lunas
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="bg-white">
                                                                        <th scope="row">Invoice</th>
                                                                        <td>
                                                                            <button class="unduh">
                                                                                <i class="fa fa-download" style="margin-right: 5px;"></i>
                                                                                Unduh
                                                                            </button>
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
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                /**** JQuery *******/
                $('.btnNext1').click(function() {
                    $('.dua').find('button').trigger('click');
                });
                $('.btnNext2').click(function() {
                    $('.tiga').find('button').trigger('click');
                });
                $('.btnNext3').click(function() {
                    $('.empat').find('button').trigger('click');
                });

                $('.btnPrevious2').click(function() {
                    $('.satu').find('button').trigger('click');
                });
                $('.btnPrevious3').click(function() {
                    $('.dua').find('button').trigger('click');
                });
            </script>
</body>
<footer class="fixed-bottom">
    <div class="">
        <div class="container">
            <p class="mb-0 pt-3 fw-bold">@ B4T 2018</p>
        </div>
    </div>
</footer>

</html>