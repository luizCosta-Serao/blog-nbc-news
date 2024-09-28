<?php
  if ($_SESSION['login'] && $_SESSION['permission'] === 1) {
?>
  <section class="painel">
    <aside class="menu-painel">
      <a href="<?php echo INCLUDE_PATH; ?>painel/publicar-post">Publicar Post</a>
      <?php echo $_GET['url']; ?>
    </aside>
    <div class="painel-content">
      conteudo
    </div>
  </section>
<?php
  } else {
    header('Location: '.INCLUDE_PATH);
  }
?>