<?php

include '../classes/PDOFactory.php';

// $query = new PDOFactory(self::$pdo->query("SELECT * FROM `personnages`"));
$pdo = new PDOFactory();
$lorem = $pdo->getConnection();
$ipsum = $lorem->query('SELECT * FROM `personnages`');
$ipsum->setFetchMode(PDO::FETCH_CLASS |PDO::FETCH_PROPS_LATE, 'Perso');
$persos = $ipsum->fetchAll();

var_dump($persos);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <title>Document</title>
    </head>
    <body>
        <div>
            <?php
                include '../views/gestion.php';
            ?>   
        </div>     
    </body>
</html>