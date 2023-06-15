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
                <a class="a2" href="nouveaumorceau.php">Nouveau morceau</a>
                <a class="bttn1" href="logout.php">SE DÉCONNECTER</a>  
        <div class="connexion  flex">
               <a class="bttn1" href="logout.php">SE DÉCONNECTER</a>  
        </div>
        <div class="pd-50 color1">
            <div class="flex">
                <div>
                    <h1><?=$_SESSION['pseudo']?></h1>
                    <div class="inscription flex">
                        <h3>Inscrit depuis le <p><?=$_SESSION['date_inscription'];?></p></h3>
                        <h3><?php if ($_SESSION['artiste']==true) {
                            echo 'artsite';
                        } else {
                            echo 'Utilisateur';
                        }
                         ?></h3>
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
                <div class="flex comments">
                <?php
                foreach($comments as $commentaire){?>
                    <p><?= $commentaire['contenu']; ?> 
                    <?= $commentaire['date_publication']; ?>
                    <b><?= $commentaire['titre']; ?></b>
<!-- <<<<<<< HEAD
                    </p>
=======
                    <a href="modifier_comment.php?id_comment=<?= $commentaire['id_commentaire'];?>"><img src="icones/modifier.svg" class="icon1"></a>
                     <a href="#"><img src="icones/poubelle.svg" class="icon1"></a> 
                </p><br>
>>>>>>> fe02df082e5d58937bfd8b9911e479dadccae9bf -->
                <?php
                }
                ?>
                </div>
                <a href="modifier_profile.php" class="modifier" >Modifier les informations</a>
            </div>
        </div>
    </div>
</body>
</html>