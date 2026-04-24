<?php
include 'koneksi.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = (int)$_POST['id'];
    $nama = trim($_POST['nama']);
    $nim = trim($_POST['nim']);
    $jurusan = trim($_POST['jurusan']);
    $email = trim($_POST['email']);
    $umur = (int)$_POST['umur'];

    if($id > 0 && $nama && $nim && $jurusan && $email && $umur > 0) {

        $stmt = $conn->prepare("UPDATE mahasiswa 
        SET nama=?, nim=?, jurusan=?, email=?, umur=? 
        WHERE id=?");

        $stmt->bind_param("ssssii", $nama, $nim, $jurusan, $email, $umur, $id);

        if($stmt->execute()) {
            header("Location: index.php?msg=Data berhasil diupdate");
        } else {
            header("Location: index.php?msg=Gagal update");
        }

    } else {
        header("Location: index.php?msg=Input tidak valid");
    }
}
?>