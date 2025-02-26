<?php 
// Connect to database
include 'config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
error_reporting (E_ALL ^ E_NOTICE);

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM stock WHERE id_barang = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil diupdate'); window.location.href='index.php';</script>";
        
    } else {
        echo "Gagal menghapus data.";
    }

    $stmt->close();
}
 ?>