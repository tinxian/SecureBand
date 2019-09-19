<?php
?>
<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body id="site">
    <div class="content">
      </div>
    </div>
    <div class="container">
      <?php foreach ($other_news as $news): ?>
      <div class="<?php echo $news['css']?>" >
        <img src="img/<?php echo $news['img']?>" alt="">
        <h3><?php echo $news['titel']?></h3>
        <p><?php echo $news['omschrijving']?></p>
      </div>
    <?php endforeach?>
    </div>
    </div>
  </body>
</html>
