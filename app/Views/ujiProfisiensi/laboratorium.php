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
    <link rel="stylesheet" href="assets/css/laboratorium.css">
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
        <div class="breadcrumb1" style="margin-top: 80px;">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="margin-bottom: 0px; margin-top: 0px;">
                    <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Uji Profisiensi</a></li>
                    <li class="breadcrumb-item gray" aria-current="page">Laboratorium</li>
                </ol>
            </nav>
        </div>
        <h1 class="">Uji Profisiensi</h1>
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-12 text-center">
                <!-- Button -->
                <div class="btn-group" style="float:right;">
                    <div class="btn-icon" id="btnGroupAddon">
                        <i class="fa fa-asterisk" aria-hidden="true"></i>
                    </div>
                    <button type="button" class="btn btn2">Detail Profisiensi</button>
                </div>
                <!-- Button -->
                <div class="btn-group" style="float:right; margin-right: 10px;">
                    <div class="btn-icon" id="btnGroupAddon">
                        <i class="far fa-copy"></i>
                    </div>
                    <button type="button" class="btn btn2">Daftar Dokumen</button>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
                    <li class="satu nav-item" role="presentation">
                        <button class="nav-link active btnTab" id="pills-pengiriman-tab" data-bs-toggle="pill" data-bs-target="#pills-pengiriman" type="button" role="tab" aria-controls="pills-pengiriman" aria-selected="true"><span class="badge">1</span>Pengiriman</button>
                    </li>
                    <li class="dua nav-item" role="presentation">
                        <button class="nav-link btnTab" id="pills-pengujian-tab" data-bs-toggle="pill" data-bs-target="#pills-pengujian" type="button" role="tab" aria-controls="pills-pengujian" aria-selected="false"><span class="badge">2</span>Pengujian</button>
                    </li>
                    <li class="tiga nav-item" role="presentation">
                        <button class="nav-link btnTab" id="pills-Laporan-tab" data-bs-toggle="pill" data-bs-target="#pills-Laporan" type="button" role="tab" aria-controls="pills-Laporan" aria-selected="false"><span class="badge">3</span>Laporan & Sertifikat</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Pertama -->
                    <div class="tab-pane fade show active" id="pills-pengiriman" role="tabpanel" aria-labelledby="pills-pengiriman-tab" style="margin-top: 20px;">
                        <div class="table-responsive">
                            <table class="table border">
                                <thead class="tabhead">
                                    <tr>
                                        <th style="font-weight:normal;" scope="col" colspan="3"><i style=" font-size:18px; margin-right: 5px;" class="fa">&#xf0d1;</i>Detail
                                            Pengiriman &
                                            Penerimaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white">
                                        <th scope="row">Nomor Resi</th>
                                        <td>1233123123</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <th scope="row">Catatan Pengiriman</th>
                                        <td>Sample pengujian dimensi sudah kami kirimkan dengan no resi tertera.</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status Pengiriman</th>
                                        <td>Sudah Dikirim</td>
                                    </tr>
                                    <tr class="bg-white">
                                        <th scope="row">Petunjuk Teknis</th>
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
                        <div class="table-responsive">
                            <table class="table table-bordered " style="margin-top: 30px; margin-bottom: 30px;">
                                <thead class="tabhead2 table-bordered">
                                    <tr>
                                        <th scope="col">Barang/Dokumen</th>
                                        <th scope="col">Banyaknya</th>
                                        <th scope="col">Kondisi Barang/Dokumen (Mohon Diisi)
                                        </th>
                                        <th scope="col">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sampel</td>
                                        <td>2</td>
                                        <td style="padding-left: 50px; padding-right: 50px;">
                                            <input class="form-control text-center" id="kondisiBarang" placeholder="Kondisi Barang/Dokumen" style="min-width: 250px; margin: auto;">
                                        </td>
                                        <td>
                                            <textarea class="form-control" id="keterangan" rows="3" placeholder="Keterangan" style="min-width: 250px; margin: auto;"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label fw-bold">Penerima</label>
                            </div>
                            <div class="col-auto">
                                <input id="Penerima" class="form-control" placeholder="Nama Penerima Sampel" style="width: 500px;">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label fw-bold">Konfirmasi</label>
                            </div>
                            <div class="col-auto" style="margin-top: 7px;">
                                <input type="checkbox" class="form-check-input" id="Konfirmasi">
                                <label class="form-check-label" for="Konfirmasi">Ya, dengan ini
                                    saya menyatakan data
                                    yang saya isi telah valid</label>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="btn-group" style="margin-top: 10px; margin-bottom: 50px;">
                            <div class="btn-icon2" id="btnGroupAddon">
                                <i style="font-size:16px" class="fa">&#xf093;</i>
                            </div>
                            <button type="submit" class="btn btn3 btnNext1">Submit Penerimaan</button>
                        </div>

                    </div>

                    <!-- Kedua -->
                    <div class="tab-pane fade" id="pills-pengujian" role="tabpanel" aria-labelledby="pills-pengujian-tab">
                        <div class="col info">
                            <p class="fas fa-info-circle pt-3"></i> Info</p>
                            <p>untuk lembar hasil pengujian, isi dengan angka 0 untuk setiap data yang tidak
                                tersedia.</p>
                        </div>
                        <a class=" text-left btn btn4 border" data-bs-toggle="collapse" href="#LembarHasil" role="button" aria-expanded="false" aria-controls="collapseExample" style="width: 100%;">
                            <i style="font-size:14px; margin-right: 3px;" class="fa">&#xf03a;</i></i>Lembar Hasil
                            Pengujian Uji Profisiensi Ban; Dimensi
                        </a>

                        <div class="collapse.show row border" id="LembarHasil" style="background-color: white; margin: auto;">
                            <div class="row" style="padding: 20px;">
                                <div class="col-4">
                                    <p> <strong>Nama Laboratorium</strong> </p>
                                    <input class="form-control" type="text" disabled readonly>
                                </div>
                                <div class="col-4">
                                    <p> <strong>Metode Uji</strong> </p>
                                    <input class="form-control" type="text" disabled readonly>
                                </div>
                                <div class="col-4">
                                    <p> <strong>Tanggal Pengujian</strong> </p>
                                    <input class="form-control" type="date">
                                </div>
                                <div class="col-4">
                                    <p> <strong>Suhu Ruangan</strong> </p>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control">
                                        <div class="input-group-text btn2 text-white">°C</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <p> <strong>Tekanan</strong> </p>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control">
                                        <div class="input-group-text btn2 text-white">psi</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <p> <strong>Kelembaban</strong> </p>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control">
                                        <div class="input-group-text btn2 text-white">%</div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-4">
                                        <thead style="background-color: slateblue; color: white; text-align: center;">
                                            <tr>
                                                <th rowspan="2" scope="col" class="align-middle">No</th>
                                                <th rowspan="2" scope="col" class="align-middle">Parameter Uji</th>
                                                <th rowspan="2" scope="col" class="align-middle">Satuan</th>
                                                <th rowspan="2" scope="col" class="align-middle">Desimal</th>
                                                <th colspan="3" scope="col">Data Hasil Uji</th>
                                                <th colspan="2" scope="col">Nilai Ketidakpastian</th>
                                            </tr>
                                            <tr>
                                                <th scope="col">Pembacaan 1</th>
                                                <th scope="col">Pembacaan 2</th>
                                                <th scope="col">Rerata</th>
                                                <th scope="col">Pembacaan 1</th>
                                                <th scope="col">Pembacaan 2</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Diameter</td>
                                                <td>mm</td>
                                                <td>2</td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Lebar</td>
                                                <td>mm</td>
                                                <td>2</td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>TWI</td>
                                                <td>mm</td>
                                                <td>2</td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <a class=" text-left btn btn4 border" data-bs-toggle="collapse" href="#LembarData" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-top: 30px; width: 100%;">
                            <i style="font-size:14px; margin-right: 3px;" class="fa">&#xf03a;</i></i>Lembar Data
                            Pendukung
                        </a>
                        <div class="collapse.show row border" id="LembarData" style="background-color: white; margin: auto;">
                            <div style="padding: 20px;">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col"> No</th>
                                            <th scope="col">Peralatan</th>
                                            <th scope="col">Ketelitian</th>
                                            <th scope="col">Tanggal Terakhir Kalibrasi/Verifikasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <input class="form-control" type="text">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text">
                                            </td>
                                            <td>
                                                <input class="form-control" type="date">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                <input class="form-control" type="text">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text">
                                            </td>
                                            <td>
                                                <input class="form-control" type="date">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>
                                                <input class="form-control" type="text">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text">
                                            </td>
                                            <td>
                                                <input class="form-control" type="date">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style="margin-top: 30px;">
                            <div class="row">
                                <div class="col">
                                    <p><strong>Diuji oleh</strong></p>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="col">
                                    <p><strong>Disetujui oleh</strong></p>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="row-10 float-end mt-4" style="margin-bottom: 50px;">
                                <button type="button" class="btnNext2 btn btn-primary "><i class="fas fa-paper-plane"></i> Kirim
                                    Hasil
                                    Pengujian</button>
                            </div>
                        </div>
                    </div>

                    <!-- Ketiga -->
                    <div class="tab-pane fade" id="pills-Laporan" role="tabpanel" aria-labelledby="pills-Laporan-tab" style="margin-bottom: 400px;">
                        <div class="row justify-content-md-center" style="margin-top: 30px;">
                            <a class="btn btn4 border" data-bs-toggle="collapse" href="#LaporanSertifikat" role="button" aria-expanded="false" aria-controls="LaporanSertifikat">
                                <i style="font-size:14px; margin-right: 3px;" class="fa">&#xf03a;</i></i>Hasil Pengujian
                            </a>
                        </div>
                        <div class="collapse.show row" id="LaporanSertifikat">
                            <div>
                                <table class="table border" style=" width: 50.8%; margin:
                                auto;">
                                    <tbody>
                                        <tr class="bg-white">
                                            <th scope="row">Laporan Sementara</th>
                                            <td>
                                                <button class="unduh">
                                                    <i class="fa fa-download" style="margin-right: 5px;"></i>
                                                    Unduh
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="bg-white">
                                            <th scope="row">Laporan Akhir</th>
                                            <td>
                                                <button class="unduh">
                                                    <i class="fa fa-download" style="margin-right: 5px;"></i>
                                                    Unduh
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="bg-white">
                                            <th scope="row">Sertifikat</th>
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

    <script type="text/javascript">
        /**** JQuery *******/
        $('.btnNext1').click(function() {
            $('.dua').find('button').trigger('click');
        });
        $('.btnNext2').click(function() {
            $('.tiga').find('button').trigger('click');
        });

        $('.btnPrevious2').click(function() {
            $('.satu').find('button').trigger('click');
        });
        $('.btnPrevious3').click(function() {
            $('.dua').find('button').trigger('click');
        });
    </script>
</body>
<footer>
    <div>
        <div class="container">
            <p class="mb-0 pt-3 fw-bold">@ B4T 2018</p>
        </div>
    </div>
</footer>

</html>