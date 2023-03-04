<?php include("./inc/header.php") ?>
<!--!-------------------------------- NAVBAR SECTION ENDS ------------------->



 <!-- search & login &darkmode  icon section starts -->
    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-moon" id="theme-toggler"></div>
    </div>
 <!-- search & login icon section ends -->

    
<!--  search section starts -->
     <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form> 
<!-- search section ends -->


</header>


<!--!-------------------------------- HEADER SECTION ENDS ----------------------------------------------------->



<!--!-------------------------------- BANNER SECTION STARTS --------------------------------------------------->

<section class="home" id="home">

    <div class="content">
        <h3>ED <span>STORE</span> HOME</h3>
        <p>Welcome to our online store, here you can find different types of technological products such as
            : mobile, computers, laptops, smart TV, smart watches etc...Welcome to our online store, here you can find different types of technological products such as
            : mobile, computers, laptops, smart TV, smart watches etc ..</p>
        <!-- <a href="#" class="btn">shop now</a> -->
        

    </div>

</section>

<!--!-------------------------------- BANNER SECTION ENDS ----------------------------------------------------->



<!--!-------------------------------- OUR PRODUCTS SECTION STARTS --------------------------------------------->

<section class="features" id="features">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/apple/applemobile.png" alt="">
            <h3>Mobile</h3>
            <p>we have the latest models of apple & samsung brands at very affordable prices</p>
            <!-- <a href="#" class="btn">read more</a> -->
        </div>

        <div class="box">
            <img src="images/apple/appleOthers/16-inch-macbook-pro-2022.png" alt="">
            <h3>Computers/Laptops</h3>
            <p>we have different models of laptops / pc at very affordable prices</p>
            <!-- <a href="#" class="btn">read more</a> -->
        </div>

        <div class="box">
            <img src="images/apple/appleOthers/airpods.jpg" alt="">
            <h3>Others</h3>
            <p>we also have different models of watches, tv, speaker, cpu and many more.</p>
            <!-- <a href="#" class="btn">read more</a> -->
        </div>

    </div>

</section>

<!--!-------------------------------- OUR PRODUCTS SECTION ENDS -------------------------------------------------->

<?php 
    $db = new Database("localhost", "ed-store", "root", "");
    $products = $db->getProducts();
?>

<!--!-------------------------------- HOTDEALS SECTION STARTS ----------------------------------------------------->

 <section class="products" id="hotdeals">

    <h1 class="heading"> hot <span>deal</span> </h1>

    <div class="swiper product-slider">
        <div class="swiper-wrapper">
            <?php foreach($products as $product): ?>
                <div class="swiper-slide box">
                    <img src="./images/<?= $product['product_img'] ?>">
                    <h3><?= $product['product_name'] ?></h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="view.php?id=<?= $product["id"] ?>" class="btn">Show More</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> 

<!--!-------------------------------- HOTDEALS SECTION ENDS ----------------------------------------------------->

<section class="products" id="hotdeals">

    <!-- <h1 class="heading"> hot <span>deal</span> </h1> -->

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

        </div>

    </div>

</section> 




<!--!-------------------------------- FOOTER SECTION STARTS ------------------------------------------------------------>

<section class="footer" id="footer">
    

    <div class="box-container">

        <div class="box">
            <h3> EDSTORE <i class="fas fa-cart-plus"></i> </h3>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <!-- <a href="#" class="fab fa-twitter"></a> -->
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-github"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> eliondurku11@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Prishtine, Kosovo</a>
        </div>

        <div class="box">
            <h3>more contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +383 (49) 246-606 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +383 (49) 246-606 </a>
        </div>
    

        <!-- <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> contact </a>
        </div> -->
        <!-- <div class="box">
            <h3>contact on email</h3>
            <form id="fr1">
                <form method="post" action="mailto:email.com?subject=subject&message=message"></form>
                <input type="text" id="tb1" />
                <input type="text" id="tb2" />
                <input type="button" id="bt1" value="click" />
            </form>
        </div> -->

    </div>

    <div class="credit"> created by <span> <b>ED </b><i class="fa fa-laptop"></i> </span> | all rights reserved </div>

</section>

<!--!-------------------------------- FOOTER SECTION ENDS ---------------------------------------------->



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script defer src="js/script.js"></script>

</body>
</html>