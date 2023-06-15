<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styleInscription.css">
    <title>Document</title>
</head>
<body>
    <header class="background2"><img class="height1" src="icones/logo_spotizer.svg"></header>
    <main>
        <div class="flex-center-col background3">
            <div class="color1 background4 width1" style="margin-top: -35px;">
                <div class="container text-center">
                    <h1>Modifier le profil</h1>
                </div>
                <form name="modifier" method="post" enctype="multipart/form-data" action="updateUser.php">

                    <div class=" text-center">
                        <label>Changer la photo</label>
                        <input type="file" name="photo">
                    </div>
                    <div class="container text-center">
                        <label for="presentation" class="form-label">Modifier presentation</label>
                        <textarea  rows="5" cols="40" id="presentation" name="presentation"></textarea><br>
                    </div>
                    <div  class="d-grid gap-2 col-6 mx-auto">
                        <input type="submit" class="submit" value="Modifier">
                    </div>

                </form>
            </div>    
        </div>        
</body>
</html>