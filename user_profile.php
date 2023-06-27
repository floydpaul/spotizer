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
     <link rel="stylesheet" type="text/css" href="styles/styleProfil.css">
    <title>Spotizer</title>
</head>
<body>
  <?php require_once('menu.php'); ?>
    <section>
        <div id="connexion">
            <?php include('session.php'); ?>
        </div>
        <div id="contener">
            <div class="flex">
                <img src="images/utilisateurs/<?= $utilisateur['photo']; ?>" alt="profile" class="imguser">
                
                <div>
                    <h1><?= $utilisateur['pseudo'];?></h1>
                    <h3>Inscrite le <?= date('d-m-Y',strtotime($utilisateur['date_inscription']));?></h3>
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
                        if(isset($_SESSION['id_utilisateur'])){
                            if(isset($_GET['id_utilisateur'])){
                                if($_SESSION['id_utilisateur']==$_GET['id_utilisateur']){?>
                                    <a href="modifier_profile.php" class="modifier" >Modifier les informations</a>
                                    <?php
                                }
                            }
                            else {?>
                                 <a href="modifier_profile.php" class="bttn" >Modifier les informations</a>
                            <?php
                            }
                        }
                    ?>
            </div>
        </div>
    </section>


<script type="text/javascript" src="scripts/Accueil.js"></script>
</body>
</html>