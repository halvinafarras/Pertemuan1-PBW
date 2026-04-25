<?php
include 'koneksi.php';

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM buku WHERE id=?");
$stmt->bind_param("i", $id);

if($stmt->execute()){
    header("Location: index.php?msg=Data berhasil dihapus");
} else {
    header("Location: index.php?msg=Gagal hapus data");
}
?>