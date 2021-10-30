<?php

    include '../classes/PDOFactory.php';

    spl_autoload_register(function($className) {
            require '../classes/' . $className . '.php';
        });

    $pdo = new PDOFactory();
    $lorem = $pdo->getConnection();
    echo 'hello';
    $ipsum->setFetchMode(PDO::FETCH_CLASS |PDO::FETCH_PROPS_LATE, 'Perso');

    $data = [
        'type' => '',
        'nom' => '',
        'pointsDeVie' => '',
        'attaque' => '',
        'defence' => '',
        'temps' => '',
    ];

    $data['nom'] = strtolower($_GET['nom']);
    $data['type'] = strtolower($_GET['type']);

    if ($data['type'] == 'magicien') {
        $magicien = new Magicien($data);
        return $magicien;
    } elseif ($data['type'] == 'guerrier') {
        $guerrier = new Guerrier($data);
        return $guerrier;
    } else {
        header('Location: ./index.php?msg=error');
    }
    header('Location: ./index.php?fight'); 

    // foreach ($persos as $perso) {
    //     echo $perso->getForce();
    // } 
?>