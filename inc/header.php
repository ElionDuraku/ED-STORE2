<?php session_start(); ?>
<?php include("./model/Database.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="./images/s.jpg">
    <title>EDSTORE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="icon" href="images/favicon.png" type="image/x-icon">


    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> -->

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!--!-------------------------------- HEADER SECTION STARTS ----------------------------------------------------->



<!--!-------------------------------- NAVBAR SECTION STARTS ------------------->
<?php 
        $url = $_SERVER["PHP_SELF"];
        $currentPage = explode("/", $url);
    ?>
<?php if(end($currentPage) != "dashboard.php" && end($currentPage) != "dashboard.php"  && end($currentPage) != "register.php" && end($currentPage) != "login.php"): ?>
<header class="header">

    <a href="#" class="logo"> <i class="fas fa-cart-plus "></i> EDSTORE </a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <!-- <a href="features.html">features</a> -->

        <?php if($_SESSION["is_admin"] == 1): ?>
            <a href="dashboard.php">Dashboard</a>
        <?php endif; ?>
        <a href="hotdeal.php">hot deal</a>
        <a href="apple.php">apple</a>
        <a href="samsung.php">samsung</a>
        <a href="computers.php">computers</a>
        <a href="tv.php">TV</a>
        <a href="watches.php">Watches</a>
        <a href="contact.php">contact</a>
        <?php if(isset($_SESSION["logged_in"]) == true): ?>
            <a href="logout.php">Log Out</a>
        <?php endif; ?>
    </nav>
    
</header>
<?php endif; ?>