<?php 

  $pdo = new PDO('pgsql:host=localhost;dbname=Portfolio', 'postgres', '42253');
  $rec = $pdo->query('SELECT * FROM users');
  var_dump($rec->fetch());
  die();
 
?>