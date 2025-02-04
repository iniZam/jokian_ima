<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    
    // ambil data dari formulir
    $id = $_POST['id'];
    $pilihan = $_POST['pilihan'];
    $stok = $_POST['stok'];
    $ket = $_POST['keterangan'];
    
    $result = $conn->query("SELECT * FROM stock WHERE id_barang=$id");
    $data = $result->fetch_assoc();
    $database = $data['stok'];
    if($pilihan=='masuk'){
        $total=$stok+$database;
        // buat query update
        $sql = "UPDATE stock SET stok='$total' WHERE id_barang=$id" ;
        $query = mysqli_query($conn, $sql);
        
        if ($conn->query($sql) === TRUE) {
            $barang_masuk="INSERT INTO masuk (id_barang, keterangan) VALUES ('$id', '$ket')";
            $queryy = mysqli_query($conn, $barang_masuk);
            header('Location: index.php');
        }
    }
    else if($pilihan=='keluar'){
        $total=$database-$stok;
        // buat query update
        $sql = "UPDATE stock SET stok='$total' WHERE id_barang=$id" ;
        $query = mysqli_query($conn, $sql);
        $barang_keluar="INSERT INTO keluar (id_barang, keterangan) VALUES ('$id', '$ket')";
        $queryy = mysqli_query($conn, $barang_keluar);
        header('Location: index.php');
    }

    // apakah query update berhasil?


} else {
    die("Akses dilarang...");
}

?>