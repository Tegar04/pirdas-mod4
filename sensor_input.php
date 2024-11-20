<?php
// Mengimpor file konfigurasi koneksi database
include('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka_sumbu = $_POST['angka_sumbu'];
    $posisi = $_POST['posisi'];
    $ldr_value = $_POST['ldr_value'];
    $kondisi = $_POST['kondisi'];

    // Menyimpan data ke database
    $sql = "INSERT INTO sensor_data (angka_sumbu, posisi, ldr_value, kondisi) VALUES ('$angka_sumbu', '$posisi', '$ldr_value', '$kondisi')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
