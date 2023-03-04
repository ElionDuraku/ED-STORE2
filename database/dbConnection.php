<?php 
    $host = "localhost";
    $user = "root";
    $dbname = "ed-store";
    $password = "";

    $dsn = "mysql:host=" . $host . ";dbname=" . $dbname;

    $pdo = new PDO($dsn, $user, $password);
?>
