<?php
  if ($_SESSION['login'] && $_SESSION['permission'] === 1) {
?>
  <section class="painel">
    <aside class="menu-painel">
      <a href="<?php echo INCLUDE_PATH; ?>painel/publicar-post">Publicar Post</a>
      <a href="<?php echo INCLUDE_PATH; ?>painel/cadastrar-categoria">Cadastrar Categoria</a>
    </aside>
    <div class="painel-content">
      <h2 class="painel-title">Post Article</h2>
      <form id="cadastrar-categoria-form" method="post" enctype="multipart/form-data">
        <div>
          <label for="nome-categoria">Name Category</label>
          <input type="text" name="nome-categoria" id="nome-categoria">
        </div>

        <input type="submit" name="register-category" id="register-category" value="Register Category">
      </form>
    </div>
  </section>

<?php
  } else {
    header('Location: '.INCLUDE_PATH);
  }
?>