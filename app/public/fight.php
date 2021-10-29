

<!-- <!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../public/css/bootstrap.min.css">
        <title>Document</title>
    </head>

    <body> -->
        <?php while($data['id'] = $value->fetch()) { ?>
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header"><?php echo $data['nom'] ?></div>
                <div class="card-body">
                    <h4 class="card-title">Action :</h4>
                    <button type="button" class="btn btn-secondary">Attaquer</button>
                    <?php /*if ($data['type'] == 'magicien') {*/ ?>
                        <!-- <button type="button" class="btn btn-secondary">Endormir</button> -->
                    <?php /* } */ ?>

        <?php } ?>
                </div>
            </div>
            
    <!-- </body>
</html> -->