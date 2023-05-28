<?php

$id_barang = $_GET['id_barang'];

include('connect.php');

$query = mysqli_query($conn, "DELETE FROM barang  WHERE id_barang= '$id_barang' ");

header("Location:barang.php");