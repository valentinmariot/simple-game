<?php

// include '../classes/PDOFactory.php';

spl_autoload_register(function($className) {
    require '../classes/' . $className . '.php';
});
// $query = new PDOFactory(self::$pdo->query("SELECT * FROM `personnages`"));
$pdo = new PDOFactory();
$lorem = $pdo->getConnection();
$ipsum = $lorem->query('SELECT * FROM `personnages`');
$ipsum->setFetchMode(PDO::FETCH_CLASS |PDO::FETCH_PROPS_LATE, 'Perso');
$data = $ipsum->fetchAll();

?>
<?php


// echo 'hello';
// $data = [
//     'type' => '',
//     'nom' => '',
//     'pointsDeVie' => '',
//     'attaque' => '',
//     'defence' => '',
//     'temps' => '',
// ];

// $data['nom'] = strtolower($_GET['nom']);
// $data['type'] = strtolower($_GET['type']);

// if ($data['type'] == 'magicien') {
//     $magicien = new Magicien($data);
//     echo '<pre>', var_dump($data), '</pre>';
    echo '<pre>', var_dump($data), '</pre>';
//     echo '<pre>', var_dump($magicien), '</pre>';
// } elseif ($data['type'] == 'guerrier') {
//     $guerrier = new Guerrier($data);
//     return $guerrier;
// } else {
//     header('Location: ./index.php?msg=error');
// }

// header('Location: ./index.php?fight');
