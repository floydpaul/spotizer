<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="styles/styleConnexion.css">    
    <title>Connexion</title>
</head>
<body>
    <header class="background2"><img class="height1" src="icones/logo_spotizer.svg"></header>
    <main>
        <div class="h-100 flex-center-col background3">
            <div class=" background1 color4 width1 connexion">
                <div class="container text-center"><h1>J'ai un compte Spotizer</h1></div>
                
                <form name="connexion" method="post" action="login.php">
                 
                    <div class="container text-center">
                        <label class="form-label" for="identifiant">Pseudo</label><br>
                        <input type="text" class="form-control" name="identifiant"><br>
                    </div>
                    <div class="container text-center">
                        <label class="form-label" for="mdp">Mot de passe</label><br>
                        <input type="password" class="form-control" name="mdp"><br>
                    </div>
                    <div class="container">
                        <input type="submit" value="SE CONNECTER" class="submit">
                    </div>  
                    
                </form>
               
                <div class="container text-center"><p>Vous n'avez pas de compte ? <a class="a1" href="inscription.php">INSCRIVEZ-VOUS</a></p></div>
            </div>
        </div>
    </main>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>