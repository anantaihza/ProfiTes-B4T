<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <style>
        table th {
            background: #0c1c60 !important;
            color: #fff !important;
            border: 1px solid #ddd !important;
            line-height: 15px !important;
            text-align: center !important;
            vertical-align: middle !important;

        }

        table td {
            line-height: 15px !important;
            text-align: center !important;
            border: 1px solid;
        }
    </style> -->


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <title>Uji Profites</title>

</head>

<body>
    <!-- <div class="container">
        <h2>Laporan Iklan Tayang</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>judul</th>
                    <th>deskripsi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><?= $dataAdministrasi->nama_user ?></td>

                </tr>

            </tbody>
        </table>
    </div> -->
    <div class="container" style=" height: 100%;">
        <div class="row justify-content-md-center">
            <div class="col-12">
                <div>
                    <div class="row">
                        <div class="col-4">

                            <img src="/assets/img/ujiProfisiensi/logo_kementrian_perindustrian.png" alt="" style="float: right; display: block; margin-top: 22px; width: 50%;">
                        </div>
                        <div class="col-8" style="  line-height:1px;">
                            <div style="float: left;">
                                <h5 class="text-center">BADAN PENELITIAN DAN PENGEMBANGAN INDUSTRI</h5>
                                <h2 class="text-center">BALAI BESAR BAHAN DAN BARANG TEKNIK</h2>
                                <p class="text-center">Jl. Sangkuriang No.14 Bandung 40135 JAWA BARAT - INDONESIA</p>
                                <p class="text-center">Telp. 022-2504088, 2510682, 2504828, 2507626, Fax. 022-2502027
                                </p>
                                <p class="text-center">Website: www.b4t.go.id E-mail: b4t@go.id</p>
                            </div>

                        </div>
                    </div>
                    <div class="row" style=" height: 100%;">
                        <table class="table table-bordered">

                            <tbody>
                                <tr>
                                    <td scope="row" colspan="3"></td>
                                </tr>
                                <tr class="bg-white">
                                    <td scope="row">
                                        <b style="font-size: 30px;">INVOICE</b>
                                        <div class="row" style="line-height: 1px;">

                                            <div class=" col-3">
                                                <p></p>
                                                <p>Tanggal</p>
                                                <p>no order</p>
                                                <p>no reff</p>
                                            </div>
                                            <div class="col-9">
                                                <p></p>
                                                <p>: 9883333799694285</p>
                                                <p>: <?= session()->get('dataAdministrasi')[0]->id_administrasi; ?></p>
                                                <p>: <?= session()->get('dataAdministrasi')[0]->no_refrensi; ?></p>
                                            </div>
                                        </div>

                                    </td>
                                    <td scope="row" colspan="2">
                                        <p style="color: fff; font-size: 30px;"> </p>
                                        <div class="row">

                                            <div class="col-2">

                                                <p>Peminta Jasa :</p>
                                            </div>
                                            <div class="col-10">
                                                <p> <?= $dataAdministrasi->nama_user ?></p>
                                                <p><?= $dataAdministrasi->detail_alamat ?></p>
                                            </div>
                                        </div>




                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row" colspan="3"></td>
                                </tr>
                                <tr class="bg-white">
                                    <td scope="row">No.</td>
                                    <td scope="row">Uraian</td>

                                    <td scope="row">Jumlah</td>

                                </tr>
                                <tr class="bg-white">
                                    <td scope="row">1</td>
                                    <td scope="row"><?= session()->get('dataAdministrasi')[0]->nama_pengujian; ?></td>

                                    <td scope="row"><?= session()->get('dataAdministrasi')[0]->biaya; ?></td>

                                </tr>

                                <tr class="bg-white">
                                    <td scope="row" colspan="3">
                                        <p>Terbilang :</p>
                                        <b><?= $dataAdministrasi->biaya_terbilang ?></b>

                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <td scope="row" colspan="3">
                                        <div class="row">

                                            <div class="col-2">

                                                <p>Account No.</p>
                                                <p>bank</p>
                                                <p>Account Name</p>
                                            </div>
                                            <div class="col-10">
                                                <p>: 9883333799694285</p>
                                                <p>: BNI Cabang PTB Jl. Taman Sari No.80 Bandung</p>
                                                <p>: Dana Kelolaan BLU-B4T</p>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>