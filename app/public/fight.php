<?php

    spl_autoload_register(function($className) {
        require '../classes/' . $className . '.php';
    });

    $pdo = new PDOFactory();
    $lorem = $pdo->getConnection();
    $ipsum = $lorem->query('SELECT * FROM `personnages`');
    $ipsum->setFetchMode(PDO::FETCH_CLASS |PDO::FETCH_PROPS_LATE, 'Perso');
    $persos = $ipsum->fetchAll();

    foreach ($persos as $perso) { ?>

        <div class="card text-white bg-primary mb-3 mx-3" style="max-width: 20rem;">
            <div class="card-header"><?php echo $perso->getNom(); ?></div>
            <div class="card-body">
                
                    <p>Points de vie :<?php echo $perso->getPointsDeVie(); ?> </p>
                    <p>Force : <?php echo $perso->getForce(); ?> </p>
                    <p>Défense : <?php echo $perso->getDefense(); ?> </p>

                <h4 class="card-title">Action :</h4>
                <button type="button" class="btn btn-secondary">Attaquer</button>
                <?php if ($perso->getType() == 'magicien') { ?>
                    <button type="button" class="btn btn-secondary">Endormir</button>
                <?php  }  ?>

            </div>
        </div>

<?php } ?>