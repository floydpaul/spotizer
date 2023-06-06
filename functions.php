<?php 
 function ajouterUser() {
    if(isset ($_POST[email]) && isset ($_POST[identifiant]) && $_POST[mdp] == $_POST[cmdp]){
        $email = strip_tags($_POST['email']);
        $pseudo = strip_tags($_POST['identifiant']);
        $mdp= password_hash(strip_tags($_POST['mdp']), PASSWORD_DEFAULT) ; 
    }
    else {
        die('Les mots de passes concordent pas!! Entrez des mots de passe identiques');
    }
    $db = new PDO(
        'mysql:host=localhost;dbname=spotizer;charset=utf8',
        'root',
        ''
        );
         //On prépare la commande sql d'insertion
              $query = $db->prepare('INSERT INTO utilisateur(pseudo,email,mdp,statut) VALUES(:pseudo,:email,:mdp,:statut)'); 
         
                    /*on lance la commande (query)*/
              $query->execute([
                'pseudo'=>$pseudo,
                'email'=>$email,
                'mdp'=>$mdp,
                'statut'=>'Utilsateur',
                
                  ]);
        };
    
 
?>