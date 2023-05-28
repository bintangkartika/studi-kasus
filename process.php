<?php

	$namabarang = $_POST['namabarang'];
	$idkategori= $_POST['idkategori'];
	$idsupplier = $_POST['idsupplier'];
	$warna = $_POST['warna'];
	$harga = $_POST['harga'];
	$gambar = $_POST['gambar'];

	include('connect.php');

	$result = mysqli_query($conn, "INSERT INTO `barang` (`namabarang`, `idkategori`, `idsupplier`, `warna`,  `harga`, `gambar`) VALUES ('$namabarang', '$idkategori', '$idsupplier', '$warna', '$harga', '$gambar'); ");

	header("Location:barang.php");
