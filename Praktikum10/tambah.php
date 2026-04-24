<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tambah Data</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
<h2 class="text-center mb-4">Tambah Data Mahasiswa</h2>

<form action="proses_tambah.php" method="POST" class="card p-4 shadow">

<div class="mb-3">
<label class="form-label">Nama</label>
<input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">NIM</label>
<input type="text" name="nim" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Jurusan</label>
<input type="text" name="jurusan" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Umur</label>
<input type="number" name="umur" class="form-control" required>
</div>

<div class="d-flex justify-content-between">
<button class="btn btn-success">Simpan</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>
</div>

</form>
</div>

</body>
</html>