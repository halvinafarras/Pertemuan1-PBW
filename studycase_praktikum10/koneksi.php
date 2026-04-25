<?php
$conn = new mysqli("localhost", "root", "root", "pemrograman_web_contoh");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>