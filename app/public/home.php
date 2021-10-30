<?php if (isset($_GET['msg']) == 'error') { ?>

  <div class="alert mx-auto alert-danger col-sm-6">
    <strong>Une erreur est survenue. Veuillez sélectionner la bonne classe !</strong>
  </div>
  
<?php } ?>

<div class="row">
  <form class="col-sm-6 mx-auto border-danger" method="GET" action="./create.php">
    <fieldset>
      <legend>Entrez le nom de votre personnage</legend>

      <div class="form-group col-sm-6">
        <label for="exampleInputPassword1" class="form-label mt-4">Nom du personnage</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
      </div>

      <div class="form-group col-sm-6">
        <label for="type" class="form-label mt-4">Sélectionner sa classe</label>
        <select class="form-select" name="type" id="type">
          <option name="guerrier" id="guerrier">Guerrier</option>
          <option name="magicien" id="magicien">Magicien</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary mt-3">Créer</button>
    </fieldset>
  </form>
</div>
<a href="?fight"></a>
<!-- Message si la base de données est vide -->
<?php if ($persos < 2) { ?>
  <div class="row mt-4">
    <div class="col-9 mx-auto">
      <h4>Veuillez créer deux personnages pour commencer le jeu ! </h3>
    </div>
  </div>
  <!-- Sinon affichage des personnages -->
  <?php
  } else { ?>
    <div class="row mx-5">
      <table class="table table-hover ">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Classe</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($persos as $perso) { ?>
            <tr>
              <th scope="row"><?php echo $perso['nom'] ?></th>
              <td><?php echo $perso['type'] ?></td>
              <td><a href="?fight&id=<?php echo $perso['id'] ?>" class="btn btn-outline-success">Jouer</a></td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>

<?php } ?>