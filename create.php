<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <title>Create</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form id="form-barang" action="process.php" method="post">
                    <table cellpadding="10" cellspacing="0" class="table table=striped">
                        <tr>
                            <td>Nama Barang</td>
                            <td><input type="text" id="input-namabarang" name="namabarang" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><input type="number" id=" input-idkategori" name="idkategori" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Supplier</td>
                            <td><input type="number" id=" input-idsupplier" name="idsupplier" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Warna</td>
                            <td><input type="text" id="input-warna" name="warna" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input type="text" id="input-harga" name="harga" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td><input type="text" id="input-gambar" name="gambar" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td><button id="save" type="submit" name="submit" class="btn btn-primary"> Save
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>