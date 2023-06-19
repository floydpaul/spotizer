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
    
      <?php include('menu.php');?>
    
    <div class="contener">
        <div class="connexion background2 flex">
                <a class="a2" href="nouveaumorceau.php">Nouveau morceau</a>
                <a class="bttn1" href="logout.php">SE DÉCONNECTER</a>  
        <div class="pd-50 color1">
            <div class="flex">
                <div>
                    <h1><?= $utilisateur['pseudo'];?></h1>
                    <div class="inscription flex">
                        <h3><?= $utilisateur['date_inscription'];?></h3>
                    </div>
                </div>   
                <div>
                    <img src="images/utilisateurs/<?= $utilisateur['photo']; ?>" alt="profile" class="imguser">
                      
                </div>
            </div>    
            <div id="presentation">
                <h3>Présentation</h3>
                <div class="flex">
                    <p><?= $utilisateur['presentation']; ?></p>       
                </div>
            </div>
            <div id="commentaires">
                <h3>Commentaires</h3>
                <div class="comments">
                <?php
               
                foreach($comments as $commentaire){?>
                    <p><?= $commentaire['contenu']; ?> 
                    <?= $commentaire['date_publication']; ?>
                    <b><a href="morceau.php?id_morceau=<?= $commentaire['id_morceau']; ?>"><?= $commentaire['titre']; ?></a></b>
                    </p>
                <?php
                }
                ?>
                </div>
                 
                    <?php 
                        if(!empty($_SESSION)){?>
                        <a href="modifier_profile.php" class="modifier" >Modifier les informations</a>
                        <?php
                        }
                    ?>
                
            </div>
        </div>
    </div>
</body>
</html>