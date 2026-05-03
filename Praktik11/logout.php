<?php
session_start();

// Menghapus semua data session
session_unset();
session_destroy();

// Mengarahkan kembali ke halaman login dengan pesan sukses
header("Location: login.php?message=" . urlencode("Anda telah berhasil keluar sistem."));
exit;
?>