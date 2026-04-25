<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tambah Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
<h2 class="text-center mb-4">Tambah Buku</h2>

<form action="proses_tambah.php" method="POST" class="card p-4 shadow">

<div class="mb-3">
<label>Judul</label>
<input type="text" name="judul" class="form-control" required>
</div>

<div class="mb-3">
<label>Penulis</label>
<input type="text" name="penulis" class="form-control" required>
</div>

<div class="mb-3">
<label>Tahun</label>
<input type="number" name="tahun" class="form-control" required>
</div>

<div class="mb-3">
<label>Harga</label>
<input type="number" name="harga" class="form-control" required>
</div>

<div class="mb-3">
<label>Stok</label>
<input type="number" name="stok" class="form-control" required>
</div>

<button class="btn btn-success">Simpan</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>

</form>
</div>

</body>
</html>