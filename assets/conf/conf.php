<?php
//constat de connexion à la base de données
define("DB_HOST","localhost");
//nom base de donnée
define("DB_NAME", "portfolio");
//nom user
define("DB_USER", "root");
//password du bdd
define("DB_PASSWORD","");


$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
?>