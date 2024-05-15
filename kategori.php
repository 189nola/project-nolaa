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
    <title>kategori KedaiKenangan</title>
    <link rel="stylesheet" href="dashboard style.css">
    <link rel="icon" href="img/logo.png">
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
            <h3>Data Kategori</h3>
            <div class="box">
                <p><a href="tambah_kategori.php" class="btn" style="background-color: #b6795b;">Tambahkan Kategori</a>
                </p>
                <br>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="40px">No</th>
                            <th>Kategori</th>
                            <!-- <th>harga</th> -->
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                    $no = 1;
                    $kategori = mysqli_query($koneksi, "SELECT * FROM tb_kategori ORDER BY id_kategori DESC");
                    if(mysqli_num_rows($kategori) > 0 ) {
                    while($row = mysqli_fetch_array($kategori)){
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nama_kategori'] ?></td>
                            <td>
                                <!-- <a href="edit-menu.php?id=<?php echo $row['id_kategori'] ?>">Edit</a> || -->
                                <a href="hapus.php?idk=<?php echo $row['id_kategori'] ?>"
                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } }else{ ?>
                        <tr>
                            <td colspan="4">Tdak Ada Data</td>
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