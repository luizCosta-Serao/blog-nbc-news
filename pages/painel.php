<?php
  if ($_SESSION['login'] && $_SESSION['permission'] === 1) {
?>
  <section class="painel">
    <aside class="menu-painel">
    <!--
      <a href="">Publicar Post</a>
    -->
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