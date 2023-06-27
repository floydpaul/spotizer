<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="styles/styleConnexion.css">    
    <title>Connexion</title>
</head>
<body>
    <a href="index.php"><img id="logo" src="icones/logo_spotizer.svg"></a>
    <main>
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
    </main>
    
</body>
</html>