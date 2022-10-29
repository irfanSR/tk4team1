<?php
include "session_admin.php";
include "../class/config.php";
include "../class/barang.php";
include "../class/bagian.php";
include "../class/pegawai.php";
include "../class/pemesanan.php";
include "../class/pengambilan.php";


// BarangTotalCount
$BarangCount = new barang($database);
$BarangList = new barang($database);
$BarangList->BarangCount();
$DaftarBarang = $BarangList->BarangCount();

// Bagian Total count
$BagianList = new bagian($database);
$BagianList->BagianCount();
$DaftarBagian = $BagianList->BagianCount();

// Pegawai Total count
$PegawaiList = new pegawai($database);
$PegawaiList->PegawaiCount();
$DaftarPegawai = $PegawaiList->PegawaiCount();

// Pemesanan Total count
$PemesananList = new pemesanan($database);
$PemesananList->PemesananCount();
$DaftarPemesanan = $PemesananList->PemesananCount();

// Pengambilan Total count
$PengambilanList = new pengambilan($database);
$PengambilanList->PengambilanCount();
$DaftarPengambilan = $PengambilanList->PengambilanCount();

// Produksi Total count
// $ProduksiList = new produksi($database);
// $ProduksiList->ProduksiCount();
// $DaftarProduksi = $ProduksiList->ProduksiCount();

?>
<!-- phpend -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thesisku</title>

    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">

    <!--[endif]-->

    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: true,
                theme: "light1", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "PHP Column Chart from Database"
                },
                data: [{
                    type: "column", //change type to bar, line, area, pie, etc  
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>
</head>

<body>

    <?php
    include "navbar.php";
    ?>
    <!--strat-->
    <div class="accordion horizontal">
        <ul>
            <li>
                <input type="radio" id="vert-1" name="vert-accordion" checked="checked" />
                <label for="vert-1">Bullwhip&nbsp;Effect</label>
                <div class="content">
                    <div class="col-md-7">
                        <img src="gambar/The-Bullwhip-Affect.jpg" />
                    </div>
                    <div class="col-md-5 .col-md-offset-7">
                        <p align="justify">
                            Untuk mencapai efesiensi supply chain dibutuhkan tiga aspek kunci dari supply chain management yaitu
                            mengatur aliran fisik material, mengatur aliran informasi, dan mengatur struktur organisasi dari
                            kegiatan supply chain. Hambatan yang mungkin dialami dalam supply chain management yaitu semakin
                            banyaknya variasi produk, menurunnya daur hidup produk, peningkatan permintaan konsumen, fragmentation
                            of supply chain ownership, era globalisasi ( Chopra dan Meindl, 2001).
                        </p>
                        <p align="justify"><b>BULLWHIP EFFECT</b> adalah fenomena permintaan yang sebenarnya cukup stabil
                            pada tingkat konsumen akhirnya akan berubah menjadi fluktuatif di bagian hulu
                            supply chain, makin ke hulu maka peningkatan itu akan semakin besar
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" id="vert-2" name="vert-accordion" />
                <label for="vert-2">Demand&nbsp;</label>
                <div class="content">
                    <div class="col-md-8">
                        <img src="gambar/102215_1735_SupplyChain2.png" />
                    </div>
                    <div class="col-md-4 .col-md-offset-8">
                        <p align="justify">Permintaan biasanya diupdate sesuai dengan permintaan pemesan. Dimana variabilitas permintaan yang dipesan dari pemesan lebih tinggi dibandingkan variabilitas permintaan pemesan akhir
                        </p>
                    </div>

                </div>
            </li>
            <li>
                <input type="radio" id="vert-3" name="vert-accordion" />
                <label for="vert-3">Order&nbsp;</label>
                <div class="content">
                    <div class="col-md-6">
                        <img src="gambar/bullwhip-effect1.png" />
                    </div>
                    <div class="col-md-6 .col-md-offset-3">
                        <p align="justify">Terjadinya penumpukan beberapa pesanan dengan
                            jumlah kecil yang kemudian setelah beberapa waktu
                            akan diberikan pada produksi. Pola penumpukan ini akan
                            mengakibatkan meningkatnya variabilitas pada produksi.
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" id="vert-4" name="vert-accordion" />
                <label for="vert-4">Lead&nbsp;Time</label>
                <div class="content">
                    <div class="col-md-6">
                        <img src="gambar/Bullwhip-Effect-graph.jpg" />
                    </div>
                    <div class="col-md-6 .col-md-offset-3">
                        <p>Lamanya waktu tiba pesanan yang diterima oleh pemesan.
                            Dengan keadaan lead time yang lebih panjang akan meningkatkan variabilitas
                            yang terjadi di suatu supply chain.
                        </p>
                        <p> Lead Time Berarti waktu produksi yang dijanjikan, sehingga pemesan dapat mengambil barang.
                        </p>
                    </div>


                </div>
            </li>
    </div>
    </li>
    </ul>
    </div>
    <div>





    </div>

    <!-- ROW 1 -->
    
    <div class="container">
        <!-- Total Pemesanan -->
        <div class="row">
            <div class="col-md-4 bg-primary">

                <div class="card text-dark bg-light mb-3" style="max-width: 45rem;">
                    <div class="card-header text-center"><h2>Total Pemesanan</h2></div>
                    <div class="card-body">
                    <h3 class="text-center">
                    <?php
                    foreach ($DaftarPemesanan as $key => $value);
                    echo $value['totpemesanan'];
                    ?>
                </h3>
                    </div>
                </div>
            </div>

            <!-- Total Pengambilan -->
            <div class="col-md-4 bg-success">
            <div class="card text-dark bg-light mb-3" style="max-width: 45rem;">
                    <div class="card-header text-center"><h2>Total Pengambilan</h2></div>
                    <div class="card-body">
                    <h3 class="text-center">
                    <?php

                    foreach ($DaftarPengambilan as $key => $value);
                    echo $value['totpengambilan'];
                    ?>
                    </h3>
                        </div>
                    </div>
                    </div>

            <!-- Total Produksi -->
            <div class="col-md-4 bg-info">
            <div class="card text-dark bg-light mb-3" style="max-width: 45rem;">
                    <div class="card-header text-center"><h2>Total Produksi</h2></div>
                    <div class="card-body">
                    <h3 class="text-center">
                    <?php

                    echo '(tempatproduksi)'
                    // foreach ($DaftarPegawai as $key => $value);
                    // echo $value['totpegawai'];

                    ?>
                    </h3>
                        </div>
                    </div>
        </div>

        <!-- Row2  -->
        <div style="margin:0px;" class="row">
            <div class="col-md-4 bg-primary">

                <div class="card text-dark bg-light mb-3" style="max-width: 45rem;">
                    <div class="card-header text-center"><h2>Total Barang</h2></div>
                    <div class="card-body">
                    <h3 class="text-center">
                    <?php
                    foreach ($DaftarBarang as $key => $value);
                    echo $value['totbrg'];
                    ?>
                </h3>
                    </div>
                </div>
            </div>

            <!-- Total Bagian -->
            <div class="col-md-4 bg-success">
            <div class="card text-dark bg-light mb-3" style="max-width: 45rem;">
                    <div class="card-header text-center"><h2>Total Bagian</h2></div>
                    <div class="card-body">
                    <h3 class="text-center">
                    <?php

                    foreach ($DaftarBagian as $key => $value);
                    echo $value['totbagian'];
                    ?>
                    </h3>
                        </div>
                    </div>
                    </div>

            <!-- Total Pegawai -->
            <div class="col-md-4 bg-info">
            <div class="card text-dark bg-light mb-3" style="max-width: 45rem;">
                    <div class="card-header text-center"><h2>Total Pegawai</h2></div>
                    <div class="card-body">
                    <h3 class="text-center">
                    <?php

                    foreach ($DaftarPegawai as $key => $value);
                    echo $value['totpegawai'];

                    ?>
                    </h3>
                        </div>
                    </div>
        </div>
    
    </div>
        <!-- cnt end -->
    </div>

    <!-- Row 2 -->

    
    <!--end utama-->

    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>