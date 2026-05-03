<?php 
session_start();
if (!isset($_SESSION['login_Un5lk4'])) {
    header("Location: login.php?message=" . urlencode("Silakan login terlebih dahulu."));
    exit;
}
include 'koneksi.php';

$limit = 5;
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$GET['page'] : 1;
$start = ($page - 1) * $limit;
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$like = "%$search%";

$stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE nim LIKE ? LIMIT ?, ?");
$stmt->bind_param("sii", $like, $start, $limit);
$stmt->execute();
$result = $stmt->get_result();

$countStmt = $conn->prepare("SELECT COUNT(*) as total FROM mahasiswa WHERE nim LIKE ?");
$countStmt->bind_param("s", $like);
$countStmt->execute();
$total = $countStmt->get_result()->fetch_assoc()['total'];
$pages = ceil($total / $limit);
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>body { background: #f8f9fa; }</style>
</head>
<body>
<nav class="navbar navbar-dark bg-primary shadow">
    <div class="container">
        <span class="navbar-brand mb-0 h1">📚 Data Mahasiswa</span>
        <div class="d-flex align-items-center text-white">
            <span class="me-3">Halo, <?= htmlspecialchars($_SESSION['nama']) ?></span>
            <a href="logout.php" class="btn btn-danger btn-sm">Keluar</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="card shadow p-4">
        <div class="d-flex justify-content-between mb-3">
            <form method="GET" class="d-flex">
                <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" class="form-control me-2" placeholder="Cari NIM...">
                <button class="btn btn-outline-primary">Cari</button>
            </form>
            <a href="tambah.php" class="btn btn-success">+ Tambah Data</a>
        </div>
        <table class="table table-hover">
            <thead class="table-primary">
                <tr><th>Nama</th><th>NIM</th><th>Jurusan</th><th>Email</th><th>Umur</th><th>Aksi</th></tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['nim']) ?></td>
                    <td><?= htmlspecialchars($row['jurusan']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= $row['umur'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>