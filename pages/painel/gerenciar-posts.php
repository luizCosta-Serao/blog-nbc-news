<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = MySql::connect()->prepare("DELETE FROM `posts` WHERE id = ?");
    $sql->execute(array($id));
  }
  if ($_SESSION['login'] && $_SESSION['permission'] === 1) {
?>
  <section class="painel">
    <aside class="menu-painel">
      <a href="<?php echo INCLUDE_PATH; ?>painel/publicar-post">Publicar Post</a>
      <a href="<?php echo INCLUDE_PATH; ?>painel/gerenciar-posts">Gerenciar Posts</a>
      <a href="<?php echo INCLUDE_PATH; ?>painel/cadastrar-categoria">Cadastrar Categoria</a>
    </aside>
    <div class="painel-gerenciar">
      <h1>Gerenciar Posts</h1>
      <?php
        $sql = MySql::connect()->prepare("SELECT * FROM `posts`");
        $sql->execute();
        $posts = $sql->fetchAll();
        foreach ($posts as $key => $value) {
      ?>
        <div class="single-post">
          <h3><?php echo $value['title']; ?></h3>
          <span><?php echo $value['category']; ?></span>
          <img src="<?php echo INCLUDE_PATH; ?>uploads/<?php echo $value['cover'] ?>" alt="capa">
          <p><?php echo substr($value['content'], 0, 40); ?></p>
          <div class="actions">
            <a class="btn-excluir" href="<?php echo INCLUDE_PATH; ?>painel/gerenciar-posts?id=<?php echo $value['id']; ?>">Excluir</a>
            <a class="btn-editar" href="<?php echo INCLUDE_PATH; ?>painel/editar-post?id=<?php echo $value['id']; ?>">Editar</a>
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