<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = MySql::connect()->prepare("DELETE FROM `categories` WHERE id = ?");
    $sql->execute(array($id));
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
    <div class="painel-gerenciar">
      <h1>Gerenciar Categories</h1>
      <?php
        $sql = MySql::connect()->prepare("SELECT * FROM `categories`");
        $sql->execute();
        $categories = $sql->fetchAll();
        foreach ($categories as $key => $value) {
      ?>
        <div class="single-category">
          <h3><?php echo $value['name']; ?></h3>
          <div class="actions">
            <a class="btn-excluir" href="<?php echo INCLUDE_PATH; ?>painel/gerenciar-categorias?id=<?php echo $value['id']; ?>">Excluir</a>
            <a class="btn-editar" href="<?php echo INCLUDE_PATH; ?>painel/editar-categoria?id=<?php echo $value['id']; ?>">Editar</a>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>

<?php
  } else {
    header('Location: '.INCLUDE_PATH);
  }
?>