<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="styles/styleConnexion.css">    
    <title>Connexion</title>
</head>
<body>
<?php session_start();
 include('bdd.php');

	$query = $db ->prepare('SELECT * FROM utilisateur WHERE pseudo = :id AND mdp = :mdp');
	$query ->execute([
		'id' => $_POST['identifiant'],
		'mdp' =>$_POST['mdp']
	]);
	$user = $query->fetchall();

	
	
	if (empty($user)) {
		die('Erreur de connexion');
	}
	
	
	if ( empty($_POST['identifiant']) || empty($_POST['mdp']) || !isset($_POST['identifiant']) || !isset($_POST['mdp'])  ) {
		die('Combinaison pseudo/mot de passe invalide.');
	}
	
	$pseudo = strip_tags($_POST['identifiant']);
	$mdp = strip_tags($_POST['mdp']);
	$_SESSION['id_utilisateur']= $user[0]['id_utilisateur'];
	$_SESSION['identifiant']= $user[0]['pseudo'];
	$_SESSION['email']= $user[0]['email'];
	header('Location: accueil.php');



 


?>



</body>
</html>
