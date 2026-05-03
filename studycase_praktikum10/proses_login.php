<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, nama FROM pengguna WHERE nama = ? AND katasandi = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['status_login'] = true;
        $_SESSION['nama_user'] = $user['nama'];
        header("Location: index.php");
    } else {
        header("Location: login.php?msg=Login Gagal!");
    }
}
?>