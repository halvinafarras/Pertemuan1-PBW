<?php

define("PAJAK", 0.10);

$barang = [
    "Keyboard" => 150000,
    "Mouse" => 50000,
    "Monitor" => 2000000
];

$namaBarang = "Mouse";
$harga = $barang[$namaBarang];
$jumlah = 2;

$total = $harga * $jumlah;
$pajak = $total * PAJAK;
$totalBayar = $total + $pajak;

?>

<!DOCTYPE html>
<html>
<head>
<title>Perhitungan Total Pembelian</title>

<style>

body{
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg,#ffd6e7,#ffeaf3);
}

.box{
    width:420px;
    margin:80px auto;
    padding:25px;
    background:white;
    border-radius:15px;
    border:3px solid #ff8fb1;
    box-shadow:0 6px 15px rgba(0,0,0,0.15);
}

h2{
    text-align:center;
    color:#ff4f8b;
}

hr{
    border:1px solid #ffc0d6;
}

.text{
    line-height:1.8;
    font-size:16px;
}

.total{
    color:#ff2f7a;
    font-weight:bold;
    font-size:18px;
}

.watermark{
    position: absolute;
    bottom: 10px;
    right: 15px;
    font-size: 12px;
    color: gray;
    opacity: 0.6;
}

</style>

</head>

<body>

<div class="box">

<h2>Perhitungan Total Pembelian</h2>
<hr>

<div class="text">

Nama Barang : <?php echo $namaBarang; ?> <br>
Harga Satuan : Rp <?php echo $harga; ?> <br>
Jumlah Beli : <?php echo $jumlah; ?> <br>
Total Harga : Rp <?php echo $total; ?> <br>
Pajak (10%) : Rp <?php echo $pajak; ?> <br><br>

<span class="total">
Total Bayar : Rp <?php echo $totalBayar; ?>
</span>

</div>

</div>

<div class="watermark">@2026 halvina farras savitri</div>

</body>
</html>