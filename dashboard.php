<?php
session_start();
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
    <title>Dashboard KedaiKenangan</title>
    <link rel="stylesheet" href="dashboard style.css">
    <link rel="" href="img/logo.jpg">
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

    <div class="section" style="color: #b6795b;">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Hai, <br>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Halaman Admin </h4>

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