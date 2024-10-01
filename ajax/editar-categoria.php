<?php
  include('../config.php');
  
  $name_category = $_POST['nome-categoria'];

  if ($name_category !== '') {
    $slug_category = Painel::generateSlug($name_category);
    $sql = MySql::connect()->prepare("UPDATE `categories` SET name = ?, slug = ?");
    $sql->execute(array($name_category, $slug_category));
  }
  
?>