<?php include("./inc/header.php") ?>

<?php include("./controller/registerController.php") ?>

<form action="" method="POST" class="login-form" style="width: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <h3>Register</h3>
    <input type="text" name="name" placeholder="your name" class="box" style="padding: 10px; margin: 5px; width: 400px;">
    <input type="email" name="email" placeholder="your email" class="box" style="padding: 10px; margin: 5px; width: 400px;">
    <input type="password" name="password" placeholder="your password" class="box" style="padding: 10px; margin: 5px; width: 400px;">
    <input type="password" name="confirm-password" placeholder="rewrite your password" class="box" style="padding: 10px; margin: 5px; width: 400px;">
    <a href="login.php">Already have an account</a>
    <button type="submit" name="signup-btn" class="btn">Register Now</button>
</form> 
