<?php
include 'koneksi.php';

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM buku WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Buku</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">

<h2 class="text-center mb-4">Edit Buku</h2>

<form action="proses_edit.php" method="POST" class="card p-4 shadow">

<input type="hidden" name="id" value="<?= $data['id'] ?>">

<div class="mb-3">
<label>Judul</label>
<input type="text" name="judul" class="form-control" value="<?= htmlspecialchars($data['judul']) ?>" required>
</div>

<div class="mb-3">
<label>Penulis</label>
<input type="text" name="penulis" class="form-control" value="<?= htmlspecialchars($data['penulis']) ?>" required>
</div>

<div class="mb-3">
<label>Tahun</label>
<input type="number" name="tahun" class="form-control" value="<?= $data['tahun_terbit'] ?>" required>
</div>

<div class="mb-3">
<label>Harga</label>
<input type="number" name="harga" class="form-control" value="<?= $data['harga'] ?>" required>
</div>

<div class="mb-3">
<label>Stok</label>
<input type="number" name="stok" class="form-control" value="<?= $data['stok'] ?>" required>
</div>

<button class="btn btn-warning">Update</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>

</form>
</div>
</body>
</html>