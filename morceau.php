<?php

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
  <?php include('menu.php'); ?>
    <div class="contener">
        <div class="connexion flex">

            <?php 
            
            if(!empty($_SESSION)){?>
                <a class="a2" href="user_profile.php">Mon profil</a>
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
        <div class="pd-50 pd-left-100">
            <div class="color1">
                <div class="flex">
                    <img  src="images/jaquettes/<?= $morceau['jaquette']; ?>" class="card-img-top img-thumbnail" alt="" >
                    <div class="pd-left-50">                   
                        <h1><?= $morceau['titre']; ?></h1>
                        <h2 class="titre"><?= $morceau['auteur']; ?></h2>
                        <h3><a href="categorie.php?id_categorie=<?= $morceau['id_style']; ?>"><?= $morceau['nom']; ?></a></h3>
                        <h4>Ajouté par <a href="user_profile.php?id_utilisateur=<?= $morceau['id_utilisateur']; ?>"><?=$morceau['pseudo']; ?></a></h4>
                        <audio controls src="mp3/<?= $morceau['fichier']; ?>"></audio>
                    </div>    
                </div>
            </div>
            <div>
                <h3>Présentation</h3>
                <p><?= $morceau['description'] ?></p>

            </div>
            <div class="">
                <h3>Commentaires</h3>
                <?php
                foreach($commentaires as $commentaire){?>
                    <p><?= $commentaire['contenu']; ?> 
                    <b><a href="user_profile.php?id_utilisateur=<?= $commentaire['id_utilisateur']; ?>"><?= $commentaire['pseudo']; ?></a></b> 
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
</div>
</body>
</html>