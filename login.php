<?php include("./controller/loginController.php"); ?>
 
 <!-- login form section starts -->
     <form action="" method="POST" class="login-form" style="width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
         <h3>Login now</h3>
         <input type="email" name="email" placeholder="your email" class="box" style="padding: 10px; margin: 5px; width: 400px;">
         <input type="password" name="password" placeholder="your password" class="box" style="padding: 10px; margin: 5px; width: 400px;">
         <p>don't have an account <a href="register.php">create now</a></p>
         <input type="submit" value="login now" name="login-btn" class="btn" style="padding: 10px; margin: 5px; width: 400px; background-color: black; color: white;">
     </form> 
 <!-- login form section ends -->