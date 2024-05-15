<?php
session_start();
include'koneksi.php';
if ($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu KedaiKenangan</title>
    <link rel="stylesheet" href="dashboard style.css">
    <link rel="stylesheet" href="img/logo.jpg">
</head>

<body>

    <!--header-->

    <header style="background-color: #b6795b;">
        <div class="container">
            <h1><a href="dashboard.php">KedaiKenangan</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="kategori.php">Kategori</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="tampilan-menu.php">Pembeli</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>


    <!--content-->

    <div class="section">
        <div class="container">
            <h3>Data Menu</h3>
            <div class="box">
                <p><a href="tambah_menu.php" class="btn">Tambah Produk</a></p><br>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="40px">No</th>
                            <th>Kategori</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                    $no = 1;
                    $menu = mysqli_query($koneksi, "SELECT * FROM tb_menu LEFT JOIN tb_kategori USING (id_kategori) ORDER BY id_menu DESC");
                    if(mysqli_num_rows($menu) > 0){
                    while($row = mysqli_fetch_array($menu)){
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nama_kategori'] ?></td>
                            <td><?php echo $row['nama_menu'] ?></td>
                            <td>Rp.<?php echo number_format($row['harga']) ?></td>
                            <td><?php echo $row['deskripsi'] ?></td>
                            <td><a href="menu/<?php echo $row['menu_gambar'] ?>" target="_blank"><img
                                        src="menu/<?php echo $row['menu_gambar'] ?>" width=60px"></a></td>
                            <td><?php echo ($row['menu_status'] == 0)? 'Tidak aktif':'Aktif' ?></td>
                            <td>
                                <a href="hapus.php?idp=<?php echo $row['id_menu'] ?>"
                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } }else{ ?>
                        <tr>
                            <td colspan="8">Tidak Ada Data</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
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