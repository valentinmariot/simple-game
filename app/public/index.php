<?php

include '../classes/PDOFactory.php';

$pdo = new PDOFactory();
$lorem = $pdo->getConnection();
$ipsum = $lorem->query('SELECT * FROM `personnages`');
$ipsum->setFetchMode(PDO::FETCH_CLASS |PDO::FETCH_PROPS_LATE, 'Perso');
$persos = $ipsum->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <title>Jeu naïf</title>
    </head>
    <body>
        <container>
            <?php
                include 'gestion.php';
            ?>   
        </container>   
    </body>
</html> 