<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    <link rel="stylesheet" href="style.css">
    <script src="sliderScript.js"></script>
    <script src="phoneMask.js"></script>
    <?php
        include('connect.php');
        session_start();
        if (!isset($_SESSION['uid'])){
            $_SESSION['uid'] = time();
        }
    ?>
</head>
<body>
    <?php
        include('input_checker.php');
        if(isset($_GET['thanks'])){
            echo '
                <header class="header">
                    <img class="header__logo" alt="logo" src="img/shop_logo.png">
                </header>
                <main class="main">';
            include ('thanks.html');
        }
        else{
            include('modal.php');
            echo '
                <header class="header">
                    <img class="header__logo" alt="logo" src="img/shop_logo.png">
                </header>
                <main class="main">';
            include('slider.html');
            include ('goods.php');
            include ('get_comments.php');
            include ('create_comments.php');
        }
    ?>
    </main>
    <footer class="footer">
        <p class="footer__text">
            © Malyshev 2021
        </p>
    </footer>
</body>