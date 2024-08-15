<?php
$serverName = "localhost:3310";
$username = "root";
$password = "";
$dbName = "sekolah";

// Membuat koneksi
$conn = new mysqli($serverName, $username, $password, $dbName);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>