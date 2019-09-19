<?php
function get_featured_news() {
  $pdo = dbConnect();

  $query     = 'SELECT * FROM `posts` ORDER BY `id` LIMIT 0,2';
  $statement = $pdo->query( $query );

   return $statement;

}

function get_other_news() {
  $pdo = dbConnect();

  $query     = 'SELECT * FROM `posts` ORDER BY `id` LIMIT 2,3';
  $statement = $pdo->query( $query );

   return $statement;

}
