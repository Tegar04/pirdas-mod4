<?php
// Include file konfigurasi database
include 'db_config.php';

// Ambil data sensor dari database
$sql = "SELECT * FROM sensor_data ORDER BY waktu DESC";  // Mengambil data dan urutkan berdasarkan waktu terbaru
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sensor</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Data Sensor MPU6050 dan LDR</h1>
    
    <?php
    // Cek apakah ada data dalam database
    if ($result->num_rows > 0) {
        // Tampilkan data dalam tabel
        echo "<table>";
        echo "<tr><th>ID</th><th>Angka Sumbu</th><th>Posisi</th><th>LDR Value</th><th>Kondisi Cahaya</th><th>Waktu</th></tr>";
        
        // Menampilkan setiap baris data dalam tabel
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['angka_sumbu'] . "</td>";
            echo "<td>" . $row['posisi'] . "</td>";
            echo "<td>" . $row['ldr_value'] . "</td>";
            echo "<td>" . $row['kondisi'] . "</td>";
            echo "<td>" . $row['waktu'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Tidak ada data yang tersedia.</p>";
    }
    ?>
</body>
</html>
