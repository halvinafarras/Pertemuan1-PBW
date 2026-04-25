<?php
include 'koneksi.php';

$search = $_GET['search'] ?? '';

if($search){
    $like = "%$search%";
    $stmt = $conn->prepare("SELECT * FROM buku WHERE judul LIKE ? OR penulis LIKE ?");
    $stmt->bind_param("ss", $like, $like);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $result = $conn->query("SELECT * FROM buku");
}
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

<?php if(isset($_GET['msg'])): ?>
<div class="alert alert-success">
<?= htmlspecialchars($_GET['msg']) ?>
</div>
<?php endif; ?>

<form method="GET" class="mb-3 d-flex">
    <input type="text" name="search" class="form-control me-2" 
    placeholder="Cari judul / penulis..." 
    value="<?= htmlspecialchars($search) ?>">
    
    <button class="btn btn-primary">Cari</button>
    <a href="index.php" class="btn btn-secondary ms-2">Reset</a>
</form>

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
<a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
</td>
</tr>
<?php endwhile; ?>
</tbody>

</table>

</div>
</body>
</html>