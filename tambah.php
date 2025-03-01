<?php

// Connect to database
$conn = new mysqli("localhost", "root", "", "gudang");

error_reporting (E_ALL ^ E_NOTICE);
// Get data from form
$nama_barang = $_POST["nama_barang"];
$deskripsi = $_POST["deskripsi"];
$stok = $_POST["stok"];

// Insert data into database
$sql = "INSERT INTO stock (nama_barang, deskripsi, stok) VALUES ('$nama_barang', '$deskripsi', '$stok')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {

}

// Close database connection
$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulir Data</title>
</head>
<body>
    <h1>Formulir Data</h1>
    <form action="tambah.php" method="post">
        <label for="nama_barang">nama_barang:</label>
        <input type="text" id="nama_barang" name="nama_barang" required><br>

        <label for="deskripsi">deskripsi:</label>
        <input type="text" id="deskripsi" name="deskripsi" required><br>

        <label for="stok">stok:</label>
        <textarea id="stok" name="stok" required></textarea><br>

        <br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
