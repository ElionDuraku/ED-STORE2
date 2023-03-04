<?php include("./controller/viewController.php"); ?>
<div class="product-page" style="margin-top: 200px">
    <?php foreach($product as $p): ?>
        <div>
            <div class="product-info-content" style="display: flex; justify-content: center; align-items: center">
                <div class="main-image">
                    <img src="./images/<?= $p["product_img"] ?>" alt="">
                </div>
                <div class="product-info" style="font-size: 23px">
                    <div class="product-title">
                        <h3><?= $p["product_name"] ?></h3>
                    </div>
                    <div class="price">
                       <p>$ <?= $p["price"] ?></p>
                    </div>
                    <div class="description">
                        <h4>Description</h4>
                        <p><?= $p["description"] ?></p>
                    </div>
                    <div class="btns">
                        <form action="" method="POST">
                            <button class="add-to-cart" name="add_to_cart">Add To Cart <i class="fa fa-shopping-cart"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    <?php endforeach; ?>
</div>