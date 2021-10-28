<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu naïf</title>
</head>
<body>
    
<form>
  <fieldset>
    <legend>Entrez le nom de votre personnage</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>

    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Sélectionner sa classe</label>
      <select class="form-select" id="exampleSelect1">
        <option>Guerrier</option>
        <option>Mage</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Confirmer</button>
  </fieldset>
</form>



</body>
</html>