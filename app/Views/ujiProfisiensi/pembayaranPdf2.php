<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" , srhink-to-fit="no">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td {
            padding: 2px;
        }

        .invoice table td {
            border: 1px solid #fff;
        }
    </style>
    <title>Uji Profites</title>

</head>

<body>

    <div class="container">
        <div style="line-height:1px;">
            <h5 class="text-center">BADAN PENELITIAN DAN PENGEMBANGAN INDUSTRI</h5>
            <h3 class="text-center">BALAI BESAR BAHAN DAN BARANG TEKNIK</h3>
            <p class="text-center">Jl. Sangkuriang No.14 Bandung 40135 JAWA BARAT - INDONESIA</p>
            <p class="text-center">Telp. 022-2504088, 2510682, 2504828, 2507626, Fax. 022-2502027
            </p>
            <p class="text-center">Website: www.b4t.go.id E-mail: b4t@go.id</p>
        </div>
        <br><br>
        <div>
            <table class="table">
                <tbody>
                    <tr>
                        <td scope="row" colspan="3" style="border: 1px solid #000;"></td>
                    </tr>
                    <tr class="bg-white">
                        <td scope="row" style="border: 1px solid #000;">
                            <b style="font-size: 30px;">INVOICE</b>
                            <table class="invoice">
                                <tr>
                                    <td>
                                        <p class="m-0">Tanggal </p>
                                    </td>
                                    <td>
                                        <p class="m-0">: 21 Juli 2019</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="m-0">No order </p>
                                    </td>
                                    <td>
                                        <p class="m-0">: <?= session()->get('dataAdministrasi')[0]->id_administrasi; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="m-0">No reff</p>
                                    </td>
                                    <td>
                                        <p class="m-0">: <?= session()->get('dataAdministrasi')[0]->no_refrensi; ?></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td scope="row" colspan="2" style="border: 1px solid #000;">
                            <table class="invoice">
                                <tr>
                                    <td>
                                        <p>Peminta Jasa</p>
                                    </td>
                                    <td>
                                        <p>: <?= $dataAdministrasi->nama_user ?></p>
                                    </td>
                                </tr>
                            </table>
                            <p><b>Alamat</b></p>
                            <p style="line-height: 0.5px;"><?= $dataAdministrasi->detail_alamat ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" colspan="3" style="border: 1px solid #000;"></td>
                    </tr>
                    <tr class="bg-white">
                        <td scope="row" style="border: 1px solid #000;">No.</td>
                        <td scope="row" style="border: 1px solid #000;">Uraian</td>
                        <td scope="row" style="border: 1px solid #000;">Jumlah</td>
                    </tr>
                    <tr class="bg-white">
                        <td scope="row" style="border: 1px solid #000;">1</td>
                        <td scope="row" style="border: 1px solid #000;"><?= session()->get('dataAdministrasi')[0]->nama_pengujian; ?></td>
                        <td scope="row" style="border: 1px solid #000;"><?= session()->get('dataAdministrasi')[0]->biaya; ?></td>
                    </tr>
                    <tr class="bg-white">
                        <td scope="row" colspan="3" style="border: 1px solid #000;">
                            <p>Terbilang :</p>
                            <b><?= $dataAdministrasi->biaya_terbilang ?></b>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td scope="row" colspan="3" style="border: 1px solid #000;">
                            <table class="invoice">
                                <tr>
                                    <td>
                                        <p class="m-0">Account No.</p>
                                    </td>
                                    <td>
                                        <p>: 9883333799694285</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="m-0">Bank</p>
                                    </td>
                                    <td>
                                        <p class="m-0">: BNI Cabang PTB Jl. Taman Sari No.80 Bandung</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="m-0">Account Name</p>
                                    </td>
                                    <td>
                                        <p class="m-0">: Dana Kelolaan BLU-B4T</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>