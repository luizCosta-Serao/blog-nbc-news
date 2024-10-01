<?php
  if ($_SESSION['login'] && $_SESSION['permission'] === 1) {
?>
  <section class="painel">
    <aside class="menu-painel">
      <a href="<?php echo INCLUDE_PATH; ?>painel/publicar-post">Publicar Post</a>
      <a href="<?php echo INCLUDE_PATH; ?>painel/gerenciar-posts">Gerenciar Posts</a>
      <a href="<?php echo INCLUDE_PATH; ?>painel/cadastrar-categoria">Cadastrar Categoria</a>
    </aside>
    <div class="painel-content">
      <h2 class="painel-title">Post Article</h2>
      <form id="publicar-post-form" method="post" enctype="multipart/form-data">
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
          <input type="text" name="title-post" id="title-post">
        </div>

        <div>
          <label for="content-post">Content Post</label>
          <textarea class="tinymce" name="content-post" id="content-post"></textarea>
        </div>

        <input type="submit" name="post-article" id="post-article" value="Post">
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