<?php
session_start();



require_once('queries.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styleMorceau.css">

    <title>Spotizer</title>
</head>
<body class="flex">
    <div class="background3">
        <img class="height" src="icones/logo_spotizer.svg">
        <nav>
            <div class="element"><img class="icon" src="icones/accueil.svg" alt=""><a class="a2" href="accueil.php">Accueil</a></div>
            <div class="element"><img class="icon" src="icones/categories.svg" alt=""><a class="a2">Categories</a></div>
            <div class="element"><img class="icon" src="icones/artiste.svg" alt=""><a class="a2">Artistes</a></div>
            <div class="element"><img class="icon" src="icones/playlist.svg" alt=""><a class="a2">Playlists</a></div>   
        </nav>
    </div>
    <div class="contener">
        <div class="connexion background2 flex">
                 <?php 
            
                if(!empty($_SESSION)){?>
                    <a class="bttn1" href="logout.php">SE DÉCONNECTER</a>
                <?php
                }
                else {?>
                    <a class="a2" href="inscription.php">S'INSCRIRE</a>
                    <a class="bttn1" href="connexion.php">SE CONNECTER</a>
                <?php
                }
            
            ?>
        </div>
        <div class="pd-50 color1">
            <div class="flex">
                <img  src="images/jaquettes/<?= $morceau['jaquette']; ?>" class="card-img-top img-thumbnail" alt="" >
                <div class="description">
                    <h1><?= $morceau['pseudo'] ?></h1>
                    <h2><?= $morceau['titre'] ?></h2>
                </div>
            </div>
            <div class="" style="display: flex;">
                <p><?= $morceau['description'] ?></p>
            </div>
            <div class="">
                <h3>Commentaires</h3>
                <?php
                foreach($commentaires as $commentaire){?>
                    <p><?= $commentaire['contenu']; ?> 
                    <b><?= $commentaire['pseudo']; ?></b> 
                    <?= $commentaire['date_publication']; ?>
                </p>
                <?php
                }
                ?>
                
               
                <form action="queries.php?id_morceau=<?= $morceau['id_morceau']; ?>" method="POST">
                    <textarea class="color1" name="contenu" rows="5" cols="50"></textarea><br>
                    <input type="submit" class="submit" value="Ajouter un commentaire">
                </form>
              
            </div>
        </div>
    </div>
</body>
</html>