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
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nom</th>
                            <th>Créée par</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
            	<?php
            		foreach($playlists as $playlist){?>
                        <tr>
                			<td><img src="images/covers/<?= $playlist['cover']; ?>" class="morceau"></td>
                            <td><a href="/spotizer/playlist.php?id_playlist=<?= $playlist['id_playlist']; ?>" class="gras"><?= $playlist['nom']; ?></a></td>
                            <td><?= $playlist['pseudo']; ?></td>
                            <td><a href="deleteplaylist.php?id_playlist=<?= $playlist['id_playlist']; ?>">X</td>
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