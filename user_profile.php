<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styleProfile.css">

    <title>Spotizer</title>
</head>
<body class="flex">
    <div class="background3">
        <img class="height" src="icones/logo_spotizer.svg">
        <nav>
            <div class="element"><img class="icon" src="icones/accueil.svg" alt=""><a class="a2" href="index.html">Accueil</a></div>
            <div class="element"><img class="icon" src="icones/categories.svg" alt=""><a class="a2">Categories</a></div>
            <div class="element"><img class="icon" src="icones/artiste.svg" alt=""><a class="a2">Artistes</a></div>
            <div class="element"><img class="icon" src="icones/playlist.svg" alt=""><a class="a2">Playlists</a></div>   
        </nav>
    </div>
    <div class="contener">
        <div class="connexion background2 flex">
            <?php if (isset($_SESSION['identifiant'])) {
                echo '<a class="bttn1" href="logout.php">SE DÉCONNECTER</a>';
            }?>
            
        </div>
        <div class="pd-50 color1">
            <div class="flex">
                <div>
                    <h1>Jean Dupont</h1>
                    <div class="inscription flex">
                        <h3>Inscrit depuis le 19/01/2021</h3>
                        <h3>Utilisateur</h3>
                    </div>
                </div>   
                <div>
                    <img src="images/Jean.jpg" alt="jean" class="imguser">
                    <a href="#"><img src="icones/modifier.svg" alt="modifier" class="icon1"></a>      
                </div>
            </div>    
            <div id="presentation">
                <h3>Présentation</h3>
                <div class="flex">
                    <p>J'aime la musique rock et partager ma passion avec d'autres mélomanes.</p><a href="#"><img src="icones/modifier.svg" alt="modifier" class="icon1"></a>       
                </div>
            </div>
            <div id="commentaires">
                <h3>Commentaires</h3>
                <div class="flex comments">
                     <p>"C'est un super morceau" publié le 13/05/2022 pour le titre <B>Smells like teen spirit</B></p>
                     <a href="#"><img src="icones/modifier.svg" class="icon1"></a>
                     <a href="#"><img src="icones/poubelle.svg" class="icon1"></a>     
                </div>
               <div class="flex comments">
                     <p>"Le meilleur morceau de l'album" publié le 16/05/2022 pour le titre <B>Hello</B></p>
                     <a href="#"><img src="icones/modifier.svg" class="icon1"></a>
                     <a href="#"><img src="icones/poubelle.svg" class="icon1"></a>     
                </div>
                <div class="flex comments">
                     <p>"J'adore !" publié le 05/06/2022 pour le tire <B>Mon invitation</B></p>
                     <a href="#"><img src="icones/modifier.svg" class="icon1"></a>
                     <a href="#"><img src="icones/poubelle.svg" class="icon1"></a>     
                </div>
            </div>
        </div>
    </div>
</body>
</html>