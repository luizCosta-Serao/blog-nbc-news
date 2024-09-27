<?php
  include('../config.php');
  
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = MySql::connect()->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
  $sql->execute(array($email, $password));
  if ($sql->rowCount() === 1) {
    $data_user = $sql->fetch();
    $_SESSION['login'] = true;
    $_SESSION['username'] = $data_user['username'];
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
  } else {
    echo '<p>Email or password incorrect, try again</p>';
  }
?>