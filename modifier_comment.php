<?php
include('queries.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styleMorceau.css">
    <title>Document</title>
</head>
<body>
        <header class="background2"><img class="height1" src="icones/logo_spotizer.svg"></header>
        <main>
            <div class="flex-center-col background3">
                <div class="color1 background4 width1" style="margin-top: -35px;">
                    <div class="container text-center">
                        <h1>Modifier le commentaire</h1>
                    </div>
                    <form action="updateComment.php?id_comment=<?=$comment['id_commentaire'];?>" method="POST">
                        <textarea class="color1" name="contenu" rows="5" cols="50" placeholder="<?=$comment['contenu'];?>"></textarea><br>
                        <input type="submit" class="submit" value="Modifier le commentaire">
                    </form>
                </div>
            </div> 
        </main> 
</body>
</html>