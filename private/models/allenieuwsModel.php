<?php
function get_other_news() {
  $pdo = dbConnect();

  $query     = 'SELECT * FROM `posts` ORDER BY `id` DESC';
  $statement = $pdo->query( $query );

   return $statement;

}
 ?>
