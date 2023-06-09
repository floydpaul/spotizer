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
        <div>
        	<img src="images/styles/<?= $morceaux[0]['vignette']; ?>" class="categorie">
        </div>
        <div>
        	<?php
        		foreach($morceaux as $morceau){?>
        			<img src="images/jaquettes/<?= $morceau['jaquette']; ?>">

        		<?php
        		}
        	?>
        </div>
    </div>
</body>
</html>