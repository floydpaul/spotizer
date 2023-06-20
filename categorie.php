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
    
      
        <?php include('menu.php'); ?>
    
    
    <div class="contener">
        <div class="connexion flex">
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
        <section>
            <div class="flex">
            	<img src="images/styles/<?= $morceaux[0]['vignette']; ?>" class="categorie">
                <h1><?= $morceaux[0]['nom']; ?></h1>
            </div>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Titre</th>
                            <th>Artiste</th>
                        </tr>
                    </thead>
                    <tbody>
            	<?php

            		foreach($morceaux as $morceau){?>
                        <tr>
                			<td><img src="images/jaquettes/<?= $morceau['jaquette']; ?>" class="morceau"></td>
                            <td><a href="/spotizer/morceau.php?id_morceau=<?= $morceau['id_morceau']; ?>" class="gras"><?= $morceau['titre']; ?></a></td>
                            <td><?= $morceau['auteur']; ?></td>
                        </tr>
            		<?php
            		}
            	?>
                </tbody>
                </table>
        </section>    
    </div>
</body>
</html>