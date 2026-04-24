<?php
include 'koneksi.php';

if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID tidak valid");
}

$id = (int)$_GET['id'];

$stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();

if(!$data) {
    die("Data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Data</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
<h2 class="text-center mb-4">Edit Data Mahasiswa</h2>

<form action="proses_edit.php" method="POST" class="card p-4 shadow">

<input type="hidden" name="id" value="<?= $data['id'] ?>">

<div class="mb-3">
<label class="form-label">Nama</label>
<input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($data['nama']) ?>" required>
</div>

<div class="mb-3">
<label class="form-label">NIM</label>
<input type="text" name="nim" class="form-control" value="<?= htmlspecialchars($data['nim']) ?>" required>
</div>

<div class="mb-3">
<label class="form-label">Jurusan</label>
<input type="text" name="jurusan" class="form-control" value="<?= htmlspecialchars($data['jurusan']) ?>" required>
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" name="email" class="form-control" value="<?= htmlspecialchars($data['email']) ?>" required>
</div>

<div class="mb-3">
<label class="form-label">Umur</label>
<input type="number" name="umur" class="form-control" value="<?= $data['umur'] ?>" required>
</div>

<div class="d-flex justify-content-between">
<button class="btn btn-warning">Update</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>
</div>

</form>
</div>

</body>
</html>