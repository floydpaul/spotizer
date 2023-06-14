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
        <div class="connexion  flex">
               <a class="bttn1" href="logout.php">SE DÉCONNECTER</a>  
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
                    <img src="images/utilisateurs/<?= $utilisateur['photo']; ?>" alt="profile" class="imguser">
                    <a href="modifier_profile.php"><img src="icones/modifier.svg" alt="modifier" class="icon1"></a>      
                </div>
            </div>    
            <div id="presentation">
                <h3>Présentation</h3>
                <div class="flex">
                    <p><?= $utilisateur['presentation']; ?></p><a href="modifier_profile.php"><img src="icones/modifier.svg" alt="modifier" class="icon1"></a>       
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
                    <a href="modifier_comment.php?id_comment=<?= $commentaire['id_commentaire'];?>"><img src="icones/modifier.svg" class="icon1"></a>
                     <a href="#"><img src="icones/poubelle.svg" class="icon1"></a> 
                </p><br>
                <?php
                }
                ?>
                          
                </div>
            </div>
        </div>
    </div>
</body>
</html>