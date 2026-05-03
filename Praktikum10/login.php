<!DOCTYPE html>
<html>
<head>
    <title>Login - CRUD Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <h3 class="text-center mb-4">Login Sistem</h3>
                        <?php if (isset($_GET['message'])): ?>
                            <div class="alert alert-info text-sm"><?= htmlspecialchars($_GET['message']) ?></div>
                        <?php endif; ?>
                        <form method="post" action="proses_login.php">
                            <div class="mb-3">
                                <label>Nama Pengguna</label>
                                <input type="text" name="username" class="form-control" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label>Kata Sandi</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>