<?php
session_start();

// Proteksi Halaman: Cek apakah user sudah login
if (!isset($_SESSION['login_Un5lk4'])) {
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-primary mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Praktikum 11</span>
            <a href="logout.php" class="btn btn-danger btn-sm">Keluar</a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h2 class="card-title">Selamat Datang, <?= htmlspecialchars($_SESSION['nama']) ?>!</h2>
                        <p class="text-muted">ID Pengguna Anda adalah: <?= htmlspecialchars($_SESSION['id']) ?></p>
                        <hr>
                        <p>Ini adalah halaman utama praktikum 11.</p>
                        <div class="alert alert-success">
                            Status: Login Berhasil
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>