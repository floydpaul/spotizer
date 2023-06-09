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
        <nav>
            <div class="element"><img class="icon" src="icones/accueil.svg" alt=""><a class="a2" href="index.html">Accueil</a></div>
            <div class="element"><img class="icon" src="icones/categories.svg" alt=""><a class="a2">Categories</a></div>
            <div class="element"><img class="icon" src="icones/artiste.svg" alt=""><a class="a2">Artistes</a></div>
            <div class="element"><img class="icon" src="icones/playlist.svg" alt=""><a class="a2">Playlists</a></div>   
        </nav>
    </div>
    <div class="contener">
        <div class="connexion background2 flex">
            <?php if (isset($_SESSION['identifiant'])) {
                echo '<a class="bttn1" href="logout.php">SE DÉCONNECTER</a>';
            }?>
            
        </div>
        <div class="pd-50 color1">
            <div class="flex">
                <div>
                    <h1><?= $utilisateur['pseudo'];?></h1>
                    <div class="inscription flex">
                        <h3><?= $utilisateur['date_inscription'] ?></h3>
                        <h3><?php if ($utilisateur['artiste']==true) {
                            echo 'artsite'
                        } else {
                            echo 'utilisateur'
                        }
                         ?></h3>
                    </div>
                </div>   
                <div>
                    <img src="images/utilisateurs/<?= $utilisateur['photo']; ?>" alt="jean" class="imguser">
                    <a href="#"><img src="icones/modifier.svg" alt="modifier" class="icon1"></a>      
                </div>
            </div>    
            <div id="presentation">
                <h3>Présentation</h3>
                <div class="flex">
                    <p><?= $utilisateur['presentation']; ?></p><a href="#"><img src="icones/modifier.svg" alt="modifier" class="icon1"></a>       
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