<?php

include 'koneksi.php';

$kontak = mysqli_query($koneksi, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id  ");
$a = mysqli_fetch_object($kontak);

$produk = mysqli_query($koneksi, "SELECT * FROM tb_menu WHERE id_menu = '" . $_GET['ip'] . "' ");
$p = mysqli_fetch_object($produk);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail menu KedaiKenangan</title>
    <link rel="stylesheet" href="dashboard style.css">
    <link rel="icon" href="img/logo.png">
</head>

<body>

    <!--header-->

    <header>
        <div class="container">
            <h1><a href="index.php">KedaiKenangan</a></h1>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tampilan-menu.php">Produk</a></li>
                <li><a href="login.php">Admin</a></li>
            </ul>
        </div>
    </header>


    <!-- produk detail -->
    <div class="section">
        <div class="container">
            <h3>Detail Menu</h3>
            <div class="box">

                <div class="col-2">
                    <img src="menu/<?php echo $p->menu_gambar ?>" width="100%">
                </div>
                <div class="col-2">

                    <h3>
                        <?php echo $p->nama_menu ?>
                    </h3>
                    <h4>Rp.
                        <?php echo number_format($p->harga) ?>
                    </h4>
                    <p>
                        Deskripsi : <br>
                        <?php echo $p->deskripsi ?>


                    </p>

                </div>

            </div>
        </div>
    </div>

    <!--footer-->
    <div class="footer">
        <div class="container">
            <h4>Alamat</h4>
            <p>
                <?php echo $a->admin_address ?>
            </p>

            <h4>Email</h4>
            <p>
                <?php echo $a->admin_email ?>
            </p>

            <h4>Telepon</h4>
            <p>
                <?php echo $a->admin_telp ?>
            </p>


        </div>
    </div>
    <!--footer-->

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> KedaiKenangan. Hak Cipta Dilindungi</p>
        </div>
    </footer>


</body>

</html>