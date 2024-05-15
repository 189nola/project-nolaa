<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-KedaiKenangan</title>
    <link rel="stylesheet" href="dashboard style.css">
    <link rel="icon" href="img/logo.jpg">
</head>

<body id="bg-login">

    <div class="box-login">
        <h2 style="color: #b6895b;">Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Login" class="btn" style="background-color: #b6895b;">
        </form>
        <?php
        if (isset($_POST['submit'])) {

            session_start();
            include 'koneksi.php';

            $user = mysqli_real_escape_string($koneksi, $_POST['user']);
            $pass = mysqli_real_escape_string($koneksi, $_POST['pass']);

            $cek = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username = '" . $user . "' AND password = '" . MD5($pass) . "' ");
            if (mysqli_num_rows($cek) > 0) {
                $d = mysqli_fetch_object($cek);
                $_SESSION['status_login'] = true;
                $_SESSION['a_global'] = $d;
                $_SESSION['id'] = $d->admin_id;
                echo '<script>window.location="dashboard.php"</script>';
            } else {
                echo '<script>alert("Username atau Password Salah")</script>';
            }
        }

        ?>

    </div>

</body>

</html>