<?php
  include('../config.php');
  
  // inputs
  $category_post = $_POST['categoria-post'];
  $cover_post = $_FILES['cover-post'];
  $title_post = $_POST['title-post'];
  $content_post = $_POST['content-post'];
  $id_post = $_POST['id-post'];

  if (Painel::imagemValida($cover_post)) {
    // Excluir imagem antiga
    $sql = MySql::connect()->prepare("SELECT * FROM `posts` WHERE id = ?");
    $sql->execute(array($id_post));
    $post = $sql->fetch();
    unlink(BASE_DIR.'/uploads/'.$post['cover']);

    // Atualizar post
    $capa_post = Painel::uploadFile($cover_post);
    $sql = MySql::connect()->prepare("UPDATE `posts` SET category = ?, cover = ?, title = ?, content = ? WHERE id = ?");
    $sql->execute(array($category_post, $capa_post, $title_post, $content_post, $id_post));
  } else {
    $sql = MySql::connect()->prepare("SELECT * FROM `posts` WHERE id = ?");
    $sql->execute(array($id_post));
    $post = $sql->fetch();
    // Atualizar post sem modificação da imagem
    $sql = MySql::connect()->prepare("UPDATE `posts` SET category = ?, title = ?, content = ? WHERE id = ?");
    $sql->execute(array($category_post, $title_post, $content_post, $id_post));
  }
  
?>