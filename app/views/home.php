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
      <div class="row">
        <form class="col-sm-6 mx-auto border-danger" action="GET">
          <fieldset>
            <legend>Entrez le nom de votre personnage</legend>

            <div class="form-group col-sm-6">
              <label for="exampleInputPassword1" class="form-label mt-4">Nom du personnage</label>
              <input type="text" class="form-control" id="nom" placeholder="Nom">
            </div>

            <div class="form-group col-sm-6">
              <label for="type" class="form-label mt-4">Sélectionner sa classe</label>
              <select class="form-select" id="type">
                <option>Guerrier</option>
                <option>Mage</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Créer</button>
          </fieldset>
        </form>
      </div>
    </container>


</body>
</html>