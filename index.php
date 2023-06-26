<?php
require_once('queries.php');
?>

<!DOCTYPE html>
<html lang="fr">
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

                    foreach($morceaux as $morceau){?>
                        <div class="card">
                            <img class="imgindex" src="images/jaquettes/<?= $morceau['jaquette']; ?>" alt="">
                            <h2><?= $morceau['auteur']; ?></h2>
                            <h3><a href="morceau.php?id_morceau=<?= $morceau['id_morceau']; ?>"><?= $morceau['titre']; ?></a></h3>
                        </div>
                        <div class="card">
                            <img class="imgindex" src="images/jaquettes/<?= $morceau['jaquette']; ?>" alt="">
                            <h2><?= $morceau['auteur']; ?></h2>
                            <h3><a href="morceau.php?id_morceau=<?= $morceau['id_morceau']; ?>"><?= $morceau['titre']; ?></a></h3>
                        </div>
                    <?php
                    }
                    ?>        
            </div>
    </section>


<script type="text/javascript" src="scripts/Accueil.js"></script>
</body>
</html>