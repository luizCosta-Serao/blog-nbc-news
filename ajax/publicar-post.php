<?php
  include('../config.php');
  
  $category_post = $_POST['categoria-post'];
  $cover_post = $_FILES['cover-post'];
  $title_post = $_POST['title-post'];
  $content_post = $_POST['content-post'];

  if (Painel::imagemValida($cover_post)) {
    $capa_post = Painel::uploadFile($cover_post);
    $sql = MySql::connect()->prepare("INSERT INTO `posts` VALUES (null, ?, ?, ?, ?)");
    $sql->execute(array($category_post, $capa_post, $title_post, $content_post));
  }
  
?>