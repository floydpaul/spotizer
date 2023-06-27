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
      <link rel="stylesheet" type="text/css" href="styles/stylePlaylists.css">

    <title>Spotizer</title>
</head>
<body>
  <?php require_once('menu.php'); ?>
    <section>
        <div id="connexion">
            <?php include('session.php'); ?>
        </div>
        <div id="contener">
            <h1>Playlists</h1>
          
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
                            <td><img src="images/covers/<?= $playlist['cover']; ?>"></td>
                            <td><a href="playlist.php?id_playlist=<?= $playlist['id_playlist']; ?>" class="gras"><?= $playlist['nom']; ?></a></td>
                            <td><?= $playlist['pseudo']; ?></td>
                            <td><a href="deleteplaylist.php?id_playlist=<?= $playlist['id_playlist']; ?>"><img src="icones/poubelle.svg" class="icone"></td>
                        </tr>
                    <?php
                    }
                ?>
                </tbody>
                </table>
               
        </div>        
   </section>    
</body>
</html>