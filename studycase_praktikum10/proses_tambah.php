<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun = $_POST['tahun'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$stmt = $conn->prepare("INSERT INTO buku 
(judul, penulis, tahun_terbit, harga, stok) 
VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param("ssidi", $judul, $penulis, $tahun, $harga, $stok);

$stmt->execute();

header("Location: index.php");
?>