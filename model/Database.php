<?php 
    class Database {
        private $pdo;
    
        public function __construct($host, $dbname, $username, $password) {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        }

        public function getProducts() {
            $sql = "SELECT * FROM `products`";
            $statement = $this->pdo->query($sql);

            $result = [];

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $result[] = $row;
            }

            return $result;
        }

        public function getProductById($id) {
            $sql = "SELECT * FROM `products` WHERE products.id = $id";
            $statement = $this->pdo->query($sql);

            $result = [];

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $result[] = $row;
            }

            return $result;
        }

        public function addProduct($product_name, $description, $price, $img) {
            $sql = "INSERT INTO `products` (`product_name`, `description`, `product_img`, `price`) VALUES (?, ?, ?, ?)";
            $statement = $this->pdo->prepare($sql);

            if($statement->execute([$product_name, $description, $price, $img])){
                //header("Location: dashboard.php?action=products");
            }
        }

        public function deleteProductById($id) {

            try{
                $this->pdo->beginTransaction();

                $delete_product_query = "DELETE FROM `products` WHERE `id` = $id";
                $this->pdo->exec($delete_product_query);

                $this->pdo->commit();

                header("Location: ?action=products");

            }catch(PDOException $e){
                $pdo->rollBack();
                echo "Error: " . $e->getMessage();
            }
            
        }

        public function editProductById($id, $product_name, $description, $price, $img){
            
            $this->pdo->beginTransaction();
            
            $products_query = "UPDATE `products` SET `product_name` = '$product_name', `description` ='$description', `product_img` = '$img', `price` = '$price' WHERE `id` = '$id'";
            $this->pdo->exec($products_query);

            $this->pdo->commit();

        }

        public function getRandomProducts() {
            $sql = "SELECT * FROM `products` JOIN `images` ON products.id = images.product_id ORDER BY RAND() LIMIT 3";
            $statement = $this->pdo->query($sql);

            $result = [];

            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $result[] = $row;
            }

            return $result;
        }

        public function getUserById($id){
            $sql = "SELECT * FROM `users` WHERE `id` = ?";
            $statement = $this->pdo->prepare($sql);
            $statement->execute([$id]);

            return $statement->fetch(PDO::FETCH_ASSOC);
        }
    }

?>
