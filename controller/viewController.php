<?php include("./inc/header.php"); ?>
<?php 
    $db = new Database("localhost", "ed-store", "root", "");
    $product = null;

    if(isset($_GET["id"]) && !empty($_GET["id"])){
        $id = $_GET["id"];
        $product = $db->getProductById($id);
    }

?>