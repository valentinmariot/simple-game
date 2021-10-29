<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu naïf</title>
</head>
<body>

  <container>
    
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
    </container>

</body>
</html>