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
        $db = new PDO(
'mysql:host=localhost;dbname=spotizer;charset=utf8',
'root',
''
);
$query = $db ->prepare('SELECT * FROM utilisateur WHERE pseudo = :id');
$query ->execute([
	'id' => $_POST['identifiant'],
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


?>
<?php
$isPassCorrect = password_verify($mdp, $user[0]['mdp']);

if ($isPassCorrect == true) {
	$_SESSION['id_user']= $user[0]['id_user'];
	$_SESSION['identifiant']= $user[0]['pseudo'];
	$_SESSION['mail']= $user[0]['mail'];
	$_SESSION['statut'] = $user[0]['statut'];
	header('Location: acceuil.php');
}
else {
	die('Entrez les bons identifiants de connexion');
}


?>
</body>
</html>
