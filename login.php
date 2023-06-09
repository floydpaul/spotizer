<?php
	session_start();

	require_once('bdd.php');

	$query = $db ->prepare('SELECT * FROM utilisateur WHERE pseudo = :id AND mdp = :mdp');
	$query ->execute([
		'id' => $_POST['identifiant'],
		'mdp' =>$_POST['mdp']
	]);

	$user = $query->fetch();

	if(!empty($user)){

		$_SESSION['id_utilisateur']=$user['id_utilisateur'];
		$_SESSION['pseudo']= $user['pseudo'];
		$_SESSION['email']= $user['email'];
		$_SESSION['presentation']= $user['presentation'];
		$_SESSION['photo']=$user['photo'];
		$_SESSION['artiste']=$user['artiste'];
	}
	
	else {

		echo "Les identifiants ne sont pas valides.";
	}	

	header('Location: accueil.php');




 


?>



