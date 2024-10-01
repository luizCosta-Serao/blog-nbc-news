<?php
  $id = $_GET['id'];
  if ($_SESSION['login'] && $_SESSION['permission'] === 1) {
?>
  <section class="painel">
    <aside class="menu-painel">
      <a href="<?php echo INCLUDE_PATH; ?>painel/publicar-post">Publicar Post</a>
      <a href="<?php echo INCLUDE_PATH; ?>painel/gerenciar-posts">Gerenciar Posts</a>
      <a href="<?php echo INCLUDE_PATH; ?>painel/cadastrar-categoria">Cadastrar Categoria</a>
    </aside>
    <div class="painel-content">
      <h2 class="painel-title">Edit Post</h2>
      <form id="editar-post-form" method="post" enctype="multipart/form-data">
        <?php
          $sql = MySql::connect()->prepare("SELECT * FROM `posts` WHERE id = ?");
          $sql->execute(array($id));
          $post_single = $sql->fetch();
        ?>
        <div>
          <label for="categoria-post">Category</label>
          <select name="categoria-post" id="categoria-post">
            <option value="sports">Sports</option>
            <option value="politics">Politics</option>
          </select>
        </div>

        <div>
          <label for="cover-post">Cover Post</label>
          <input type="file" name="cover-post" id="cover-post">
        </div>

        <div>
          <label for="title-post">Title Post</label>
          <input type="text" name="title-post" id="title-post" value="<?php echo $post_single['title']; ?>">
        </div>

        <div>
          <label for="content-post">Content Post</label>
          <textarea class="tinymce" name="content-post" id="content-post"><?php echo $post_single['content']; ?></textarea>
        </div>

        <input type="hidden" name="id-post" value="<?php echo $post_single['id'] ?>">

        <input type="submit" name="edit-post" id="edit-post" value="Post">
      </form>
    </div>
  </section>

  <script src="https://cdn.tiny.cloud/1/cvnfahyqwz8cs4s7qw7xq9acww5e6d0q91mxr3tejosprng4/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '.tinymce',
      setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
      }
    });
  </script>
<?php
  } else {
    header('Location: '.INCLUDE_PATH);
  }
?>