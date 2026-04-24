<?php
include 'koneksi.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = trim($_POST['nama']);
    $nim = trim($_POST['nim']);
    $jurusan = trim($_POST['jurusan']);
    $email = trim($_POST['email']);
    $umur = (int)$_POST['umur'];

    if($nama && $nim && $jurusan && $email && $umur > 0) {

        $stmt = $conn->prepare("INSERT INTO mahasiswa 
        (nama, nim, jurusan, email, umur) VALUES (?, ?, ?, ?, ?)");

        $stmt->bind_param("ssssi", $nama, $nim, $jurusan, $email, $umur);

        if($stmt->execute()) {
            header("Location: index.php?msg=Data berhasil ditambah");
        } else {
            header("Location: index.php?msg=Gagal tambah data");
        }

    } else {
        header("Location: index.php?msg=Input tidak valid");
    }
}
?>