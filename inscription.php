<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="styles/styleInscription.css">
    <title>Inscription</title>
</head>
<body>
     <header class="background2"><img class="height1" src="icones/logo_spotizer.svg"></header>
    <main>
        <div class="flex-center-col background3">
            <div class="color1 background4 width1" style="margin-top: -35px;">
                <div class="container text-center">
                    <h1>Inscrivez vous gratuitement pour lancer la lecture</h1>
                </div>
                <form name="inscription" method="post" enctype="multipart/form-data" action="ajouterUser.php">
                    <div class="container text-center">
                        <label for="email" class="form-label">Adresse email</label><br>
                        <input type="mail" name="email" class="form-control"><br>
                    </div>
                    <div class="container text-center">
                        <label for="identifiant" class="form-label">Pseudo</label><br>
                        <input type="text" name="identifiant" class="form-control"><br>  
                    </div>
                    <div class="container text-center">
                        <label for="mdp" class="form-label">Mot de passe</label><br>
                        <input type="password" name="mdp" class="form-control"><br>
                    </div>
                    <div class="container text-center">
                        <label for="cmdp" class="form-label">Comfirmer mot de passe</label><br>
                        <input type="password" name="cmdp" class="form-control"><br>
                    </div>
                    <div class=" text-center">
                        <input type="file" name="photo">
                    </div>
                    <div class="flex">
                        <input type="radio" name="statut" value="artiste" class="form-control" style="width: 50px; margin-left:175px; margin-top: 0px">
                        <label for="artiste" style="margin-top: 0px;">Artiste</label>
                    </div>
                     <div class="container text-center">
                        <label for="presentation" class="form-label">Veuillez vous présenter</label>
                        <textarea  rows="5" cols="40" id="presentation" name="presentation"></textarea><br>
                    </div>
                    <div  class="d-grid gap-2 col-6 mx-auto">
                        <input type="submit" class="submit" value="S'inscrire">
                    </div>

                </form>
                <div class="container text-center">
                    <p>Vous avez déjà un compte? <a class="a2" href="connexion.php">CONNECTEZ-VOUS</a></p>
                </div>
                
            </div>
        </div>
    </main>
</body>
</html>