<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KedaiKenangan</title>
    <link rel="stylesheet" href="img/logo.jpg">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,500;0,700;1,700&display=swap"
        rel="stylesheet" />

    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- my style -->
    <link rel="stylesheet" href="style.css" />
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>KedaiKenangan</title>
        <nav class="navbar">
            <a href="#" class="navbar-logo">Kedai<span>Kenangan</span>.</a>

            <div class="navbar-nav">
                <a href="index.php">Home</a>
                <a href="about.php">About us</a>
                <a href="kontak.php">Kontak</a>
                <a href="tampilan-menu.php">Menu</a>
            </div>

            <div class="navbar-extra">
                <a href="#" id="search"><i data-feather="search"></i></a>
                <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
                <a href="login.php" id="user"><i data-feather="user"></i></a>
            </div>
        </nav>
        <!-- NAVBAR END -->

        <!-- Hero section START -->
        <section class="hero" id="home">
            <main class="content">
                <h1>Mulai Hari Dengan <span>Secangkir Kopi</span></h1>
                <P>Sudahkah anda menikmati kopi hari ini?</P>

                <a href="tampilan-menu.php" class="cta">Beli sekarang</a>
            </main>
        </section>
        <!-- Hero section END -->


        <!-- feather icon -->
        <script>
        feather.replace();
        </script>

        <!-- My javascript -->
        <script src="script.js"></script>

        <!-- footer -->
        <footer>
            <div class="container">
                <p>&copy; <?php echo date("Y"); ?> KedaiKenangan. Hak Cipta Dilindungi</p>
            </div>
        </footer>
        </body>

    </html>