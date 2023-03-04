<?php include("./inc/Product.php") ?>
<?php 
    include("./model/Product.php");

    $products = [];
    
    $products[] = $db->getProducts();
    
?>