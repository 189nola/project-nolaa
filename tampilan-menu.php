<?php
    include'koneksi.php';
    $kontak = mysqli_query($koneksi, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id ");
    $a = mysqli_fetch_object($kontak);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilan menu KedaiKenangan</title>
    <link rel="stylesheet" href="dashboard style.css">
    <link rel="stylesheet" href="img/logo.jpg">
</head>

<body>

    <!--header-->

    <header>
        <div class="container">
            <h1><a href="index.php">KedaiKenangan</a></h1>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="login.php">Admin</a></li>
            </ul>
        </div>
    </header>


    <!-- new product -->
    <div class="section">
        <div class="container">
            <h3>Menu Terbaru</h3>
            <div class="box">
                <?php
            
            $produk = mysqli_query($koneksi, "SELECT * FROM tb_menu WHERE menu_status = 1 ORDER BY id_menu DESC LIMIT 8 ");
            if(mysqli_num_rows($produk) > 0 ){
                while($p = mysqli_fetch_array($produk)){
            
            ?>
                <a href="detail-menu.php?ip=<?php echo $p['id_menu'] ?>">
                    <div class="col-4">
                        <img src="menu/<?php echo $p['menu_gambar'] ?>" width="100%">
                        <p class="nama"><?php echo substr($p['nama_menu'], 0, 20) ?></p>
                        <p class="harga">Rp.<?php echo number_format($p['harga']) ?></p>
                    </div>
                </a>
                <?php }}else{ ?>
                <p>Menu Tidak Tersedia</p>
                <?php } ?>
            </div>
        </div>
    </div>

    <!--footer-->
    <div class="footer">
        <div class="container">
            <h4>Alamat</h4>
            <p><?php echo $a->admin_address ?></p>

            <h4>Email</h4>
            <p><?php echo $a->admin_email ?></p>

            <h4>Telepon</h4>
            <p><?php echo $a->admin_telp ?></p>


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