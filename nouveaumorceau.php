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
    <title>Nouveau morceau</title>
</head>
<body>
<header class="background2"><img class="height1" src="icones/logo_spotizer.svg">
</header>
 
    <main>
        <div class="flex-center-col background3">
            <div class="color1 background4 width1" style="margin-top: -35px;">
                <div class="container text-center">
                    <h1>Ajoutez un morceau</h1>
                </div>
                <form name="inscription" method="post" enctype="multipart/form-data" action="newSong.php">
                    <div class="container text-center">
                        <label for="titre" class="form-label">Titre</label><br>
                        <input type="mail" name="titre" class="form-control"><br>
                    </div>
                    <div class="container text-center">
                        <label for="auteur" class="form-label">Auteur</label><br>
                        <input type="text" name="auteur" class="form-control"><br>  
                    </div>
                    <div class=" text-center">
                        <label for="jaquette" class="form-label">Jaquette</label><br>
                        <input type="file" name="jaquette">
                    </div>
                    <div class=" text-center">
                        <label for="fichier" class="form-label">Son</label><br>
                        <input type="file" name="fichier">
                    </div>
                     <div class="container text-center">
                        <label for="description" class="form-label">Description</label>
                        <textarea  rows="5" cols="40" id="description" name="description"></textarea><br>
                    </div>
                    <div class="container text-center">
                    <select name="Categorie" size="" multiple >
                    <?php
                foreach($categories as $categorie){?>
                    <option value="<?=$categorie['id_style']?>"><?=$categorie['nom']?></option>
                </p>
                <?php
            }
            ?>
                    </select>
                    </div>
                    <div  class="d-grid gap-2 col-6 mx-auto">
                        <input type="submit" class="submit" value="Ajouter un morceau">
                    </div>

                </form>
                
            </div>
        </div>
    </main>
</body>
</html>