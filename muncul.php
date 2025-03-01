<?php

// Connect to database
$conn = new mysqli("localhost", "root", "", "gudang");

error_reporting (E_ALL ^ E_NOTICE);
// Get data from form
$nama_barang = $_POST["nama_barang"];
$deskripsi = $_POST["deskripsi"];
$stok = $_POST["stok"];

// Insert data into database

$sql = "SELECT * FROM stock"; // Pilih semua data dari tabel 'data_pengguna'
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $i=1;
    while ($row = $result->fetch_assoc()) {
        echo "<th>" . $i ."</th>";
        echo "<td> " . $row["nama_barang"] . "</td>";
        echo "<td> " . $row["deskripsi"] . "</td>";
        
        echo "<br>";
        $i+=1; 
    }
} else {
    echo "Tidak ada data ditemukan";
}



// Close database connection
$conn->close();

?>


