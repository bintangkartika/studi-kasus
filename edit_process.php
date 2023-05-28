<?php

$id_barang = $_GET['id_barang'];

$namabarang = $_POST['namabarang'];
$idkategori = $_POST['idkategori'];
$idsupplier = $_POST['idsupplier'];
$warna = $_POST['warna'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];


include('connect.php');

$result = mysqli_query($conn, "UPDATE barang SET namabarang = '$namabarang', idkategori = '$idkategori', idsupplier = '$idsupplier', wawna = '$warna', harga = '$harga', gambar = '$gambar' WHERE id_barang = '$id_barang' ");

header("Location:barang.php");

?>