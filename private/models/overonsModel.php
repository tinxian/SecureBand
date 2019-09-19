<?php
function get_overons() {
  $pdo = dbConnect();

  $query     = 'SELECT * FROM `overons`';
  $statement = $pdo->query( $query );

   return $statement;

}

 ?>
