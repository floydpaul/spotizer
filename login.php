<?php
	session_start();

	require_once('bdd.php');
<<<<<<< HEAD
	$hash=password_hash($_POST['mdp'], PASSWORD_DEFAULT);
	$query = $db ->prepare('SELECT * FROM utilisateur WHERE pseudo = :id AND mdp = :mdp');
	$query ->execute([
		'id' => $_POST['identifiant'],
		'mdp'=> $_POST['mdp']]);


=======

	$query = $db ->prepare('SELECT * FROM utilisateur WHERE pseudo = :id ');
	$query ->execute([
		'id' => $_POST['identifiant'],
	]);
>>>>>>> 4e3added37e0d7149728e23da3c6eb9828c54f8b

	$user = $query->fetch();
	$isPassCorrect = password_verify($_POST['mdp'], $user['mdp']);
	if ($isPassCorrect == true) {
		if(!empty($user)){
	
			$_SESSION['id_utilisateur']=$user['id_utilisateur'];
			$_SESSION['pseudo']= $user['pseudo'];
			$_SESSION['email']= $user['email'];
			$_SESSION['presentation']= $user['presentation'];
			$_SESSION['photo']=$user['photo'];
			$_SESSION['artiste']=$user['artiste'];
			$_SESSION['date_inscription']=$user['date_inscription'];
		}
		
		else {
	
			echo "Les identifiants ne sont pas valides.";
		}	
	
		 header('Location: accueil.php');
	} else {
		echo "Entrez un mot de passe valide";
	}
	
	




 


?>



