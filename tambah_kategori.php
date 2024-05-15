<?php
session_start();
include 'koneksi.php';
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
    <title>KedaiKenangan</title>
    <link rel="stylesheet" href="dashboard style.css">
    <link rel="icon" href="img/logo.png">
</head>

<body>

    <!--header-->

    <header style="background-color: #b6795b;">
        <div class="container">
            <h1><a href="dashboard.php">KedaiKenangan</a></h1>
            <ul>
                <li><a href="dashboard.php"><b>Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="kategori.php">Kategori</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--content-->

    <div class="section">
        <div class="container">
            <h3>Tambahkan Kategori</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
                    <input type="submit" name="submit" value="Submit" class="btn" style="background-color: #b6795b;">
                </form>
                <?php
                if(isset($_POST['submit'])){
                    $nama = ucwords($_POST['nama']);
                    $insert = mysqli_query($koneksi, "INSERT INTO tb_kategori VALUES (null, '".$nama."') ");
                    
                    if($insert){
                        echo '<script>alert(" Tambah katerori Berhasil")</script>';
                        echo '<script>window.location="kategori.php"</script>';
                    }else{
                        echo 'Gagal'.mysqli_error($koneksi);
                    }
                }
                ?>
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