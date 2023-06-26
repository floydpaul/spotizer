<?php

require_once('queries.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styleIndex.css">
    <link rel="stylesheet" type="text/css" href="styles/styleCategorie.css">

    <title>Spotizer</title>
</head>
<body>
  <?php require_once('menu.php'); ?>
    <section>
        <div id="connexion">
            <?php include('session.php'); ?>
        </div>
        <div id="contener">
            <?php if(!empty($morceaux)){?>
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
                            <td class="center"><a href="/spotizer/morceau.php?id_morceau=<?= $morceau['id_morceau']; ?>" class="gras"><?= $morceau['titre']; ?></a></td>
                            <td class="center"><?= $morceau['auteur']; ?></td>
                        </tr>
            		<?php
            		}
            	?>
                </tbody>
            </table>
                <?php
                } 
                else {
                    echo "<h2>Désolé, il n'y a pas encore de morceaux publiés dans ce style.</h2>"; 
                }
                ?>
        </div>        
   </section>    
</body>
</html>