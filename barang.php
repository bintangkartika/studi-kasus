<!DOCTYPE html>
<html lang="en">

<head>
    <title>ATHENA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700" />
    <link rel="stylesheet" href="fonts/icomoon/style.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="site-wrap">
        <!-- HEADER START  -->
        <header class="site-navbar" role="banner">
            <div class="site-navbar-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                            <form action="" class="site-block-top-search">
                                <span class="icon icon-search2"></span>
                                <input type="text" class="form-control border-0" placeholder="Search" />
                            </form>
                        </div>

                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <div class="site-logo">
                                <a href="index.html" class="js-logo-clone">ATHENA</a>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                            <div class="site-top-icons">
                                <ul>
                                    <li>
                                        <a href="#"><span class="icon icon-heart-o"></span></a>
                                    </li>
                                    <li>
                                        <a href="cart.html" class="site-cart">
                                            <span class="icon icon-shopping_cart"></span>
                                        </a>
                                    </li>
                                    <li class="d-inline-block d-md-none ml-md-0">
                                        <a href="#" class="site-menu-toggle js-menu-toggle"><span
                                                class="icon-menu"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="site-navigation text-right text-md-center" role="navigation">
                <div class="container">
                    <ul class="site-menu js-clone-nav d-none d-md-block">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="barang.php">Manajemen Barang</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- HEADER END  -->
        <!--TABEL START-->
        <div class="d-grid gap-2 d-md-block m-4">
            <a href="create.php" class="btn btn-primary" type="button">+ Tambah</a>
        </div>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Suplier</th>
                    <th scope="col">Warna</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php
            include('connect.php');

            $data_barang = mysqli_query($conn, "SELECT * FROM barang");

            while ($barang = mysqli_fetch_array($data_barang)) {
            ?>
            <tbody>
                <tr>
                    <td class="text-center"><?php echo $barang["id_barang"] ?></td>
                    <td><?php echo $barang["namabarang"] ?></td>
                    <td><?php echo $barang["idkategori"] ?></td>
                    <td><?php echo $barang["idsupplier"] ?></td>
                    <td><?php echo $barang["warna"] ?></td>
                    <td><?php echo $barang["harga"] ?></td>
                    <td><img src="<?php echo $barang['gambar'] . 'width="100px" height="100px"' ?>" /> </td>
                    <td>
                        <a href="edit.php?id_barang=<?php echo $barang['id_barang'] ?>" class="btn btn-warning">Edit</a>
                        <a href="delete_process.php?id_barang=<?php echo $barang['id_barang'] ?>" class="btn btn-danger"
                            onclick="confirm('Apakah yakin barang mau dihapus?')">Delete</a>
                    </td>
                </tr>
                <?php
            }
                ?>
            </tbody>
        </table>
        <!--TABEL END-->
        <!-- FOOTER START  -->
        <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
            <div class="row px-xl-5 pt-5">
                <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                    <a href="" class="text-decoration-none">
                        <h1 class="mb-4 display-5 font-weight-semi-bold">
                            <span class="text-primary font-weight-bold px-3 mr-1"></span>ATHENA
                        </h1>
                    </a>
                    <p class="mb-2">
                        <i class="fa fa-envelope text-primary mr-3"></i>We offer a wide
                        selection of stylish and comfortable footwear for all occasions.
                        Browse our collection today and find your new favorite shoes!
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt text-primary mr-3"></i>Bali,
                        Indonesia
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-envelope text-primary mr-3"></i>athena@email.com
                    </p>
                    <p class="mb-0">
                        <i class="fa fa-phone-alt text-primary mr-3"></i>081234567890
                    </p>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-dark mb-4">Menus</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-dark mb-2" href="index.php"><i
                                        class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-dark mb-2" href="about.php"><i
                                        class="fa fa-angle-right mr-2"></i>About</a>
                                <a class="text-dark mb-2" href="barang.php"><i
                                        class="fa fa-angle-right mr-2"></i>Manajemen Barang</a>
                                <a class="text-dark" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact
                                    Us</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 py-4" placeholder="Your Name"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                        required="required" />
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">
                                        Subscribe Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
<script type="text/javascript">
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>