<!DOCTYPE html>
<html>
<head>
    <title>Login - Sistem Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="height: 100vh;">
    <div class="container col-md-4">
        <div class="card shadow p-4">
            <h3 class="text-center mb-4">Login</h3>
            <?php if (isset($_GET['msg'])): ?>
                <div class="alert alert-danger text-center"><?= htmlspecialchars($_GET['msg']) ?></div>
            <?php endif; ?>
            <form method="POST" action="proses_login.php">
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>