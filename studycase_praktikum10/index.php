<?php
include 'koneksi.php';
$result = $conn->query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Data Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="text-center mb-4">📚 Data Buku</h2>

<a href="tambah.php" class="btn btn-success mb-3">+ Tambah Buku</a>

<table class="table table-bordered table-striped">
<thead class="table-dark">
<tr>
<th>ID</th><th>Judul</th><th>Penulis</th><th>Tahun</th><th>Harga</th><th>Stok</th><th>Aksi</th>
</tr>
</thead>

<tbody>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= htmlspecialchars($row['judul']) ?></td>
<td><?= htmlspecialchars($row['penulis']) ?></td>
<td><?= $row['tahun_terbit'] ?></td>
<td><?= $row['harga'] ?></td>
<td><?= $row['stok'] ?></td>
<td>
<a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
<a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
</td>
</tr>
<?php endwhile; ?>
</tbody>

</table>

</div>
</body>
</html>