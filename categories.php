<?php

require_once('queries.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styleAccueil.css">
    <link rel="stylesheet" type="text/css" href="styles/styleCategorie.css">

    <title>Spotizer</title>
</head>
<body class="flex">
    <div class="background3">
        <img class="height" src="icones/logo_spotizer.svg">
        <?php include('menu.php'); ?>
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
        <div class="flex cards">
        <?php

        foreach($categories as $categorie){?>
            <div class="card">
            	<img src="images/styles/<?= $categorie['vignette']; ?>" class="imgindex">
               <h3><a href="categorie.php?id_categorie=<?= $categorie['id_style']; ?>"><?= $categorie['nom']; ?></h3>
            </div>

        <?php
        }
        ?>        
        
        </div>
    </div>
</body>
</html>