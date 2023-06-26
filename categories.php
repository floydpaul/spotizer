<?php

require_once('queries.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styleIndex.css">
 

    <title>Spotizer</title>
</head>
<body>
    <?php require_once('menu.php'); ?>
    <section>
        <div id="connexion">
            <?php include('session.php'); ?>
        </div>
        <div id="contener">
            <?php
            foreach($categories as $categorie){?>
                <div class="card">
                   <img src="images/styles/<?= $categorie['vignette']; ?>" class="imgindex">
                   <h3><a href="categorie.php?id_categorie=<?= $categorie['id_style']; ?>"><?= $categorie['nom']; ?></a></h3>
                </div>
            <?php
            }
            ?>        
        </div>
    </section>
</body>
</html>