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
                    $destination = ('spotizer/images/utilisateurs/' . $_FILES['photo']['name']);
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
                        $query = $db->prepare('INSERT INTO  utilisateur(pseudo,email,mdp,presentation,photo,artiste) VALUES(:pseudo,:email,:mdp,:presentation,:photo,:artiste)'); 
                    
                                /*on lance la commande (query)*/
                        $query->execute([
                            'pseudo'=>$pseudo,
                            'email'=>$email,
                            'mdp'=>$mdp,
                            'presentation'=>$presentation,
                            'photo'=>$destination,
                            'artiste'=>true,
                            ]);
            }
            else {
                // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
                if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0){
                    $destination = ('spotizer/images/utilisateurs/' . $_FILES['photo']['name']);
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
                        $query = $db->prepare('INSERT INTO utilisateur(pseudo,email,mdp,presentation,photo,artiste) VALUES(:pseudo,:email,:mdp,:presentation,:photo,:artiste)'); 
                    
                                /*on lance la commande (query)*/
                        $query->execute([
                            'pseudo'=>$pseudo,
                            'email'=>$email,
                            'mdp'=>$mdp,
                            'presentation'=>$presentation,
                            'photo'=>$destination,
                            'artiste'=>false,
                            ]);
                    };
        
    }
    
    
 
?>

<?php 
function modifier_profile()
{
    include('bdd.php');
$query = $db ->prepare('UPDATE utilsateur SET pseudo =:pseudo, presentation =:presentation, photo =:photo WHERE id_utilisateur =:id_utilisateur');
$query ->execute([
        'pseudo'=> $_POST['pseudo'],
        'presentation'=> $_POST['presentation'],
        'id_utilisateur'=> $_GET['id_utilasteur'],
]) ;    

}
?>