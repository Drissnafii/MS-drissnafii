<?php
$host = 'localhost';
$db = 'drissdb';
$user = 'root';
$passw = '';


  $dsn = "mysql:host=" .  $host. 
  ";dbname=" . $db;
  $pdo = new PDO($dsn, $user, $passw);
  echo "Connected...";
?>