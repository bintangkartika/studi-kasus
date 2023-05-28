<!DOCTYPE html>
<html>

<head>
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <?php
    include('connect.php');

    $id_barang = $_GET['id_barang'];

    $query_barang = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang = '$id_barang' ");

    while ($barang = mysqli_fetch_array($query_barang)) {
        $namabarang     = $barang['namabarang'];
        $idkategori       = $barang['idkategori'];
        $idsupplier       = $barang['idsupplier'];
        $warna             = $barang['warna'];
        $harga            = $barang['harga'];
        $gambar         = $barang['gambar'];
    }

    ?>

    <form action="edit_process.php?id_barang=<?php echo $id_barang; ?>" method="get">
        <table cellpadding="10" cellspacing="0" class="table table-striped">
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="barang" value="<?php echo $namabarang; ?>"></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><input type="number" name="idkategori" value="<?php echo $idkategori; ?>"></td>
            </tr>
            <tr>
                <td>Supplier</td>
                <td><input type="number" name="idsupplier" value="<?php echo $idsupplier; ?>"></td>
            </tr>
            <tr>
                <td>Warna</td>
                <td><input type="text" name="warna" value="<?php echo $warna; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $harga; ?>"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input type="text" name="gambar" value="<?php echo $gambar; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>

</body>

</html>