<?php 
 function ajouterUser() {
    if(isset ($_POST['email']) && isset ($_POST['identifiant']) && $_POST['mdp'] == $_POST['cmdp']){
        $email = strip_tags($_POST['email']);
        $pseudo = strip_tags($_POST['identifiant']);
        $mdp= strip_tags($_POST['mdp']);
        $photo= $_FILES['photo'];
        $presentation = strip_tags($_POST['presentation']);
        var_dump($_FILES);
    }

    else {
        die('Les mots de passes concordent pas!! Entrez des mots de passe identiques');
    }
    include('bdd.php');
            if ($_POST['statut']=='artiste') {
                // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
                if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0){
                    $destination = ('images/utilisateurs/' . $_FILES['photo']['name']);
                    // Testons si le fichier n'est pas trop gros
                    if ($_FILES['photo']['size'] <= 1000000)
                    {
            
                            // Testons si l'extension est autorisée
                            $fileInfo = pathinfo($_FILES['photo']['name']);
                            $extension = $fileInfo['extension'];
                            $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                            $tmpName = $_FILES['photo']['tmp_name'];
                            if (in_array($extension, $allowedExtensions))
                            {
                                    // On peut valider le fichier et le stocker définitivement
                                move_uploaded_file($tmpName, $destination);
                            }
                    }
                };
                    //On prépare la commande sql d'insertion
                        $query = $db->prepare('INSERT INTO  utilisateur(pseudo,email,mdp,presentation,photo,artiste,date_inscription) VALUES(:pseudo,:email,:mdp,:presentation,:photo,:artiste,:date_inscription)'); 
                    
                                /*on lance la commande (query)*/
                        $query->execute([
                            'pseudo'=>$pseudo,
                            'email'=>$email,
                            'mdp'=>$mdp,
                            'presentation'=>$presentation,
                            'photo'=>$_FILES['photo']['name'],
                            'artiste'=>true,
                            'date_inscription'=>date("Ymd"),
                            ]);
            }
            else {
                // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
                if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0){
                    $destination = ('images/utilisateurs/' . $_FILES['photo']['name']);
                    // Testons si le fichier n'est pas trop gros
                    if ($_FILES['photo']['size'] <= 1000000)
                    {
            
                            // Testons si l'extension est autorisée
                            $fileInfo = pathinfo($_FILES['photo']['name']);
                            $extension = $fileInfo['extension'];
                            $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png','jfif'];
                            $tmpName = $_FILES['photo']['tmp_name'];
                            if (in_array($extension, $allowedExtensions))
                            {
                                    // On peut valider le fichier et le stocker définitivement
                                move_uploaded_file($tmpName, $destination);
                            }
                    }
                };
                    //On prépare la commande sql d'insertion
                        $query = $db->prepare('INSERT INTO utilisateur(pseudo,email,mdp,presentation,photo,artiste,date_inscription) VALUES(:pseudo,:email,:mdp,:presentation,:photo,:artiste,:date_inscription)'); 
                    
                                /*on lance la commande (query)*/
                        $query->execute([
                            'pseudo'=>$pseudo,
                            'email'=>$email,
                            'mdp'=>$mdp,
                            'presentation'=>$presentation,
                            'photo'=>$_FILES['photo']['name'],
                            'artiste'=>false,
                            'date_inscription'=> date("Ymd")
                            ]);
                    };
        
    }
    
    
 
?>


<?php 
function updateUser(){
    if (isset($_FILES['photo']) && isset($_POST['presentation'])) {
        include('bdd.php');
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0){
            $destination = ('images/utilisateurs/' . $_FILES['photo']['name']);
            // Testons si le fichier n'est pas trop gros
            if ($_FILES['photo']['size'] <= 1000000)
            {
    
                    // Testons si l'extension est autorisée
                    $fileInfo = pathinfo($_FILES['photo']['name']);
                    $extension = $fileInfo['extension'];
                    $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                    $tmpName = $_FILES['photo']['tmp_name'];
                    if (in_array($extension, $allowedExtensions))
                    {
                            // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($tmpName, $destination);
                    }
            }
        };
        $query = $db ->prepare('UPDATE utilisateur SET presentation=:presentation, photo =:photo WHERE id_utilisateur =:id_utilisateur');
        $query ->execute([
            'presentation'=> strip_tags($_POST['presentation']),
            'photo'=> $_FILES['photo']['name'],
            'id_utilisateur'=> $_SESSION['id_utilisateur'],
    ]) ;
    } 
    if (isset($_FILES['photo']) && !isset($_POST['presentation'])) {
        include('bdd.php');
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0){
            $destination = ('images/utilisateurs/' . $_FILES['photo']['name']);
            // Testons si le fichier n'est pas trop gros
            if ($_FILES['photo']['size'] <= 1000000)
            {
    
                    // Testons si l'extension est autorisée
                    $fileInfo = pathinfo($_FILES['photo']['name']);
                    $extension = $fileInfo['extension'];
                    $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                    $tmpName = $_FILES['photo']['tmp_name'];
                    if (in_array($extension, $allowedExtensions))
                    {
                            // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($tmpName, $destination);
                    }
            }
        };
        $query = $db ->prepare('UPDATE utilisateur SET photo =:photo WHERE id_utilisateur =:id_utilisateur');
        $query ->execute([
            'photo'=> $_FILES['photo']['name'],
            'id_utilisateur'=> $_SESSION['id_utilisateur'],
            ]) ;
        }
    if (!isset($_FILES['photo']) && isset($_POST['presentation'])) {
        include('bdd.php');
        $query = $db ->prepare('UPDATE utilisateur SET presentation=:presentation WHERE id_utilisateur =:id_utilisateur');
        $query ->execute([
            'presentation'=> strip_tags($_POST['presentation']),
            'id_utilisateur'=> $_SESSION['id_utilisateur'],
    ]) ;
    }     

}
?>

<?php
function updateComment(){
    include('bdd.php');
    $query = $db ->prepare('UPDATE commentaires SET date_publication=:date_publication, contenu=:contenu WHERE id_commentaire =:id_commentaire');
        $query ->execute([
            'date_publication'=>date("Ymd"),
            'contenu'=> strip_tags($_POST['contenu']),
            'id_commentaire' =>$_GET['id_comment'],
        ]);
}


