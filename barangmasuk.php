<?php 
// Connect to database
$conn = new mysqli("localhost", "root", "", "gudang");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
error_reporting (E_ALL ^ E_NOTICE);
// Get data from form
$tanggal = $_POST["nama_barang"];
$deskripsi = $_POST["deskripsi"];
$stok = $_POST["stok"];

// Insert data into database
$sql = "INSERT INTO masuk (keterangan, stok) VALUES ('$nama_barang', '$deskripsi', '$stok')";

if ($conn->query($sql) === TRUE) {
    header ('location:index.php');
} else {
    echo "Error: " . $conn->error;
}

// Close database connection
$conn->close();
 ?>