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
    <link rel="stylesheet" type="text/css" href="styles/styleInscription.css">
    <title>Nouvelle playlist</title>
</head>
<body>
<header class="background2"><img class="height1" src="icones/logo_spotizer.svg">
</header>
 
    <main>
        <div class="flex-center-col background3">
            <div class="color1 background4 width1 formulaire" style="margin-top: -35px;">
                <div class="container text-center">
                    <h1>Créer une playlist</h1>
                </div>
                <form name="playlist" method="post" enctype="multipart/form-data" action="newPlaylist.php">
                    <div class="container text-center">
                        <label for="nom" class="form-label">Nom</label><br>
                        <input type="text" name="nom" class="form-control"><br>
                    </div>
                    <div class=" text-center">
                        <label for="cover" class="form-label">Cover</label><br>
                        <input type="file" name="cover">
                    </div>
                    <div  class="d-grid gap-2 col-6 mx-auto">
                        <input type="submit" class="submit" value="Créer playlist">
                    </div>

                </form>
                
            </div>
        </div>
    </main>
</body>
</html>