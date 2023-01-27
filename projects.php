<?php

// commencer par l'appel du controller
require("./controllers/projectController");

// Instanciation de notre project
$controller = new ProjectController;

$projects = $controller->readAll();

//Définition de la constante du titre de la page, que nous utilisons dans le head
define("PAGE_TITLE", "Projects")

?>
<?php include("assets/inc/headFront.php"); ?>
<?php include("assets/inc/headerFront.php"); ?>
    <main>
   <h1>liste des projects</h1>
<?php var_dump($project)

?>

    </main>
    <?php
include("assets/inc/footerFront.php");
?>