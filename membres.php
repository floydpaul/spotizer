<?php 
include('queries.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styleIndex.css">
    <title>Document</title>
</head>
<body class="flex">
      
        <?php include('menu.php'); ?>
    
    </div>
    <section>
        <div id="connexion">
            <?php include('session.php'); ?>
        </div>
            
        </div>
        <div id="slider">
            <div id="precedent"></div>
            <div id="suivant"></div>
            <div class="flex cards">
                <div id="contener">
                    <?php

                    foreach($artistes as $artiste){?>
                        <div class="card">
                            <img class="imgindex" src="images/utilisateurs/<?= $artiste['photo']; ?>" alt="">
                            <h3><a href="user_profile.php?id_utilisateur=<?= $artiste['id_utilisateur'];?>"><?= $artiste['pseudo'] ?></a></h3>
                        </div>

                    <?php
                    }
                    ?>        
                                    
                      
                </div>
            </div>
        </div>    
    </section>
    <script type="text/javascript" src="scripts/Accueil.js"></script>
    
</body>
</html>