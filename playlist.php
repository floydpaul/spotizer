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
             <?php if(!empty($playlists)){?>
            <div class="flex">

                <img src="images/covers/<?= $playlist['cover']; ?>" class="categorie">
                <h1><?= $playlist['nom']; ?></h1>
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

                    foreach($playlists as $playlist){?>
                        <tr>
                            <td><img src="images/jaquettes/<?= $playlist['jaquette']; ?>" class="morceau"></td>
                            <td><a href="/spotizer/morceau.php?id_morceau=<?= $playlist['id_morceau']; ?>" class="gras"><?= $playlist['titre']; ?></a></td>
                            <td><?= $playlist['auteur']; ?></td>
                            <td><audio controls src="mp3/<?= $playlist['fichier']; ?>"></audio></td>
                        </tr>
                    <?php
                    }
                ?>
                </tbody>
                </table>
                <?php
                }
                ?>
   </section>    
</body>
</html>