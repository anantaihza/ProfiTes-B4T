<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" , srhink-to-fit="no">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

    </style>
    <title>Uji Profites</title>

</head>

<body>

    <div class="container">
        <div style="line-height:1px;">
            <h5 class="text-center">BADAN PENELITIAN DAN PENGEMBANGAN INDUSTRI</h5>
            <h3 class="text-center">BALAI BESAR BAHAN DAN BARANG TEKNIK</h3>
            <p class="text-center">Jl. Sangkuriang No.14 Bandung 40135 JAWA BARAT - INDONESIA</p>
            <p class="text-center ">Telp. 022-2504088, 2510682, 2504828, 2507626, Fax. 022-2502027
            </p>
            <p class="text-center">Website: www.b4t.go.id E-mail: b4t@go.id</p>
        </div>
        <br><br>
        <h5 class="text-center">LAPORAN HASIL PENGUJIAN UJI PROFISIENSI</h5>
        <h5 class="text-center">LABORATORIUM UJI NIKEL LATERIT</h5>


        <br>
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <td>Nama Laboratorium Peserta UP</td>
                    <td>: Laboratorium A</td>
                </tr>
                <tr>
                    <td>No. Akreditasi</td>
                    <td>: LP - 945 - IDN</td>
                </tr>
                <tr>
                    <td>Kode Sampel UP</td>
                    <td>: 16/NI-1/I/2021</td>
                </tr>
                <tr>
                    <td>Tanggal Pengujian</td>
                    <td>: 14 April 2021</td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered border-dark mt-4" style="text-align: center;">
            <thead style="text-align: center;">
                <tr>
                    <th rowspan="2" scope="col" class="align-middle">Parameter Uji</th>
                    <th rowspan="2" scope="col" class="align-middle">Satuan</th>
                    <th rowspan="2" scope="col" class="align-middle">Kode Teknik *)</th>
                    <th colspan="3" scope="col">Data Hasil Uji</th>
                    <th rowspan="2" scope="col" class="align-middle">Expanded Uncertainty (U95%)</th>
                    <th rowspan="2" scope="col" class="align-middle">Standar Acuan</th>
                </tr>
                <tr>
                    <th scope="col">A</th>
                    <th scope="col">B</th>
                    <th scope="col">Rata-rata</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($dataParam as $param) : ?>
                    <tr>
                        <td><?= $param->nama_parameter; ?></td>
                        <td><?= $param->satuan; ?></td>
                        <td><?= $param->nama_teknik; ?></td>

                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>