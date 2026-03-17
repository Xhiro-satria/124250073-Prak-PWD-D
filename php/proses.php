<?php

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$gender = $_POST['gender'];
$hp = $_POST['hp'];
$dokter = $_POST['dokter'];
$layanan = $_POST['layanan'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];

$biayaLayanan = [
    'konsul' => 50000,
    'pemeriksaan' => 100000,
    'vaksin' => 150000,
    'teslab' => 200000
];

$biaya = $biayaLayanan[$layanan];
$admin = 10000;
$diskon = 0;

if ($biaya > 100000 && $biaya <= 150000) {
    if ($umur < 12 || $umur > 60) {
        $diskon = 0.2 * $biaya;
    } else {
        $diskon = 0.1 * $biaya;
    }
} else if ($biaya > 150000) {
    if ($umur < 12 || $umur > 60) {
        $diskon = 0.3 * $biaya;
    } else {
        $diskon = 0.15 * $biaya;
    }
}

$totalBiaya = $biaya - $diskon + $admin;

?>

<!DOCTYPE html>
<html>

<head>
    <title>Hasil Pendaftaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/proses.css">
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="card card-transparan shadow w-75 mx-auto animate__animated animate__fadeIn">
            <div class="card-header text-dark text-center">
                <h4>Data Pendaftaran Pasien</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12 animate__animated animate__fadeIn delay-1s">
                        <h5 class="mb-3 text-dark">Detail Pasien</h5>
                        <table class="table table-transparan">
                            <?php
                            $dataPasien = [
                                "Nama" => $nama,
                                "Umur" => $umur,
                                "Gender" => $gender,
                                "No HP" => $hp
                            ];
                            foreach ($dataPasien as $key => $value) {
                                echo "<tr>
                                <td>$key : </td>
                                <td>$value</td>
                                </tr>";
                            } ?>
                        </table>
                    </div>

                    <div class="col-md-6 col-12animate__animated animate__fadeIn delay">
                        <h5 class="mb-3 text-dark">Detail Kunjungan</h5>
                        <table class="table table-transparan">
                            <?php
                            $dataKunjungan = [
                                "Dokter" => $dokter,
                                "Layanan" => $layanan,
                                "Tanggal" => $tanggal,
                                "Jam" => $jam
                            ];
                            foreach ($dataKunjungan as $key => $value) {
                                echo "<tr>
                            <td>$key : </td>
                            <td>$value</td>
                            </tr>";
                            }?>
                        </table>
                    </div>
                </div>
                <hr>
                <h5 class="mb-3 text-dark animate__animated animate__fadeIn delay">Perhitungan Biaya</h5>

                <table class="table table-transparan">
                    <?php
                    $dataBiaya = [
                        "Biaya Layanan" => $biaya,
                        "Admin" => $admin,
                        "Diskon" => $diskon,
                        "Total Bayar" => $totalBiaya
                    ];
                    foreach ($dataBiaya as $key => $value) {
                        echo "<tr>";
                        if ($key == "Total Bayar") {
                            echo "<th class='table-success'>$key : </th>
                            <td class='table-success'><b>$value</b></td>";
                        } else {
                            echo "<td>$key : </td>
                            <td>$value</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </table>
                <a href="../html/sukses.html"><button class="btn btn-primary w-100">Bayar</button></a>
            </div>
        </div>
    </div>
</body>
</html>