<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>/css/style.css">
  <title>NBC News</title>
</head>
<body>
<!-- Últimos Posts, Categorias e Destaques vao ficar na home -->
  <header class="header">
    <div class="header-logo">
      <a href=""><img src="<?php echo INCLUDE_PATH; ?>/assets/logo.jpg" alt="Logo"></a>
    </div>
    <button class="header-btn-menu"><img src="<?php echo INCLUDE_PATH; ?>/assets/menu.svg" alt=""></button>
    <nav class="header-menu">
      <ul>
        <li><a href="">Corona Updates</a></li>
        <li><a href="">Politics</a></li>
        <li><a href="">Business</a></li>
        <li><a href="">Sports</a></li>
        <li><a href="">World</a></li>
        <li><a href="">Travel</a></li>
        <li><a href="">Podcasts</a></li>
      </ul>
      <div class="header-actions">
        <a href=""><img src="<?php echo INCLUDE_PATH; ?>/assets/login.svg" alt=""></a>
        <a href=""><img src="<?php echo INCLUDE_PATH; ?>/assets/search.svg" alt=""></a>
      </div>
    </nav>
  </header>

  <script src="<?php echo INCLUDE_PATH; ?>/js/jquery.min.js"></script>
  <script type="module" src="<?php echo INCLUDE_PATH; ?>/js/script.js"></script>
</body>
</html>