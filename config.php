<?php 


$dsn = 'mysql:host=localhost;dbname=livre';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
  } catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
    exit();
  }


?>
