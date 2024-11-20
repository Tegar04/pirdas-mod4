<?php
$servername = "localhost";  // Biasanya localhost untuk server lokal
$username = "root";         // Username default untuk MySQL di XAMPP adalah 'root'
$password = "";             // Password default untuk MySQL di XAMPP adalah kosong
$dbname = "modul4";         // Nama database yang Anda buat

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
