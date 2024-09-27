<section class="login">
  <h2>To Login</h2>
  <form class="login-form" id="login-form" action="<?php echo INCLUDE_PATH ?>ajax/login.php" method="post">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
  
    <label for="password">Password</label>
    <input type="password" name="password" id="password">

    <input type="submit" id="login" name="login" value="Login">
  </form>
</section>
