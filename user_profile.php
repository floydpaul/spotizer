<?php 
include('queries.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styleProfile.css">

    <title>Spotizer</title>
</head>

<body class="flex">
    <div class="background3">
        <img class="height" src="icones/logo_spotizer.svg">
      <?php include('menu.php');?>
    </div>
    <div class="contener">
        <div class="connexion background2 flex">
            <?php if (isset($_SESSION['identifiant'])) {?>
               <a class="bttn1" href="logout.php">SE DÉCONNECTER</a>
            <?php }?>
            
        </div>
        <div class="pd-50 color1">
            <div class="flex">
                <div>
                    <h1><?= $_SESSION['pseudo'];?></h1>
                    <div class="inscription flex">
                        <h3><?= $_SESSION['date_inscription'];?></h3>
                        <h3><?php if ($_SESSION['artiste']==true) {
                            echo 'artsite';
                        } else {
                            echo 'utilisateur';
                        }
                         ?></h3>
                    </div>
                </div>   
                <div>
                    <img src="images/utilisateurs/<?= $_SESSION['photo']; ?>" alt="profile" class="imguser">
                    <a href="modifierprofile.php"><img src="icones/modifier.svg" alt="modifier" class="icon1"></a>      
                </div>
            </div>    
            <div id="presentation">
                <h3>Présentation</h3>
                <div class="flex">
                    <p><?= $_SESSION['presentation']; ?></p><a href="modifierprofile.php"><img src="icones/modifier.svg" alt="modifier" class="icon1"></a>       
                </div>
            </div>
            <div id="commentaires">
                <h3>Commentaires</h3>
                <div class="flex comments">
                <?php
                foreach($comments as $commentaire){?>
                    <p><?= $commentaire['contenu']; ?> 
                    <?= $commentaire['date_publication']; ?>
                    <b><?= $commentaire['titre']; ?></b> 
                </p>
                <?php
                }
                ?>
                     <a href="#"><img src="icones/modifier.svg" class="icon1"></a>
                     <a href="#"><img src="icones/poubelle.svg" class="icon1"></a>     
                </div>
            </div>
        </div>
    </div>
</body>
</html>