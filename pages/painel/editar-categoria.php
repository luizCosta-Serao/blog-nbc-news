<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = MySql::connect()->prepare("SELECT * FROM `categories` WHERE id = ?");
    $sql->execute(array($id));
    $category = $sql->fetch();
  }
  if ($_SESSION['login'] && $_SESSION['permission'] === 1) {
?>
  <section class="painel">
    <aside class="menu-painel">
      <a href="<?php echo INCLUDE_PATH; ?>painel/publicar-post">Publicar Post</a>
      <a href="<?php echo INCLUDE_PATH; ?>painel/gerenciar-posts">Gerenciar Posts</a>
      <a href="<?php echo INCLUDE_PATH; ?>painel/cadastrar-categoria">Cadastrar Categoria</a>
      <a href="<?php echo INCLUDE_PATH; ?>painel/gerenciar-categorias">Gerenciar Categorias</a>
    </aside>
    <div class="painel-content">
      <h2 class="painel-title">Edit Category</h2>
      <form id="update-categoria-form" method="post" enctype="multipart/form-data">
        <div>
          <label for="nome-categoria">Name Category</label>
          <input type="text" name="nome-categoria" id="nome-categoria" value="<?php echo $category['name']; ?>">
        </div>

        <input type="submit" name="update-category" id="update-category" value="Update Category">
      </form>
    </div>
  </section>

<?php
  } else {
    header('Location: '.INCLUDE_PATH);
  }
?>