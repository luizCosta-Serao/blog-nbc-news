<?php
  $sql = MySql::connect()->prepare("SELECT * FROM `posts` ORDER BY id DESC LIMIT 1");
  $sql->execute();
  $main_post = $sql->fetch();
?>
<section class="main-post">
  <div class="main-post-img">
    <img src="<?php echo INCLUDE_PATH; ?>uploads/<?php echo $main_post['cover']; ?>" alt="">
  </div>
  <div class="main-post-content">
    <span>Trending</span>
    <h1><?php echo $main_post['title']; ?></h1>
    <p><?php echo $main_post['content']; ?></p>
  </div>
</section>

<?php
  $sql = MySql::connect()->prepare("SELECT * FROM `posts` ORDER BY id DESC LIMIT 2");
  $sql->execute();
  $breaking_news = $sql->fetchAll();
?>
<section class="breaking-news">
  <div class="breaking-news-container">
    <a href="">Breaking News</a>
    <p><?php echo $breaking_news[1]['title'] ?></p>
  </div>
</section>

<section class="main-container">
  <div class="container-posts">
    <div class="posts-categories">
      <?php
        $sql = MySql::connect()->prepare("SELECT * FROM `categories`");
        $sql->execute();
        $categories = $sql->fetchAll();
        foreach ($categories as $key => $value) {
          
      ?>
        <p><?php echo $value['name'] ?></p>
      <?php } ?>
    </div>
    <ul class="posts">
      <?php
        $sql = MySql::connect()->prepare("SELECT * FROM `posts` ORDER BY id DESC LIMIT 6");
        $sql->execute();
        $posts = $sql->fetchAll();
        foreach ($posts as $key => $value) {
          if ($value['id'] === $main_post['id'] || $value['id'] === $breaking_news[1]['id']) {
            continue;
          }
      ?>
        <li class="single-post">
          <div class="single-post-img">
            <img src="<?php echo INCLUDE_PATH; ?>uploads/<?php echo $value['cover']; ?>" alt="">
          </div>
          <div class="single-post-content">
            <span><?php echo $value['category'] ?></span>
            <h2><?php echo $value['title']; ?></h2>
            <p><?php echo substr($value['content'],0, 200).'...'; ?></p>
          </div>
        </li>
      <?php } ?>
    </ul>
    <a class="view-more" href="">View More</a>
  </div>
  <div class="location-news">
    <h2>Location News</h2>
    <form method="post" action="">
      <h3>Get Location specific News</h3>
      <input type="text" name="location" id="location" placeholder="Enter your location">
      <input type="submit" name="submit-location" id="submit-location" value="Submit">
    </form>
  </div>
</section>