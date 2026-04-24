<?php
include 'koneksi.php';

if(isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = (int)$_GET['id'];

    $stmt = $conn->prepare("DELETE FROM mahasiswa WHERE id=?");
    $stmt->bind_param("i", $id);

    if($stmt->execute()) {
        header("Location: index.php?msg=Data berhasil dihapus");
    } else {
        header("Location: index.php?msg=Gagal hapus");
    }

} else {
    header("Location: index.php?msg=ID tidak valid");
}
?>