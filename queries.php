<?php
include('bdd.php');
/* requête pour récupérer tous les morceaux */
$query = $db->prepare('SELECT * FROM morceau NATURAL JOIN utilisateur');
$query->execute();
$morceaux = $query->fetchAll();

/* requête pour récupérer tous les informations d'un morceau selon son identifiant */
if(isset($_GET['id_morceau'])){
	
	$query = $db->prepare('SELECT * FROM morceau NATURAL JOIN utilisateur WHERE id_morceau='.$_GET['id_morceau'].'');
	$query->execute();
	$morceau = $query->fetch();	
}

/*requête pour récupérer tous les commentaires d'un morceau*/
if(isset($_GET['id_morceau'])){

	$query = $db->prepare('SELECT * FROM commentaires NATURAL JOIN utilisateur WHERE id_morceau='.$_GET['id_morceau'].'');
	$query->execute();
	$commentaires = $query->fetchAll();

}


/*requête pour insérer un commentaire concernant un morceau*/
if(isset($_POST['contenu'])){

	$query = $db->prepare('INSERT INTO commentaires(date_publication, contenu, id_utilisateur, id_morceau) VALUES (:date_publication, :contenu, :id_utilisateur,:id_morceau)');
	$query->execute([
		'date_publication' => date("Ymd"),
		'contenu' => $_POST['contenu'],
		'id_utilisateur' => 1,
		'id_morceau' => $_GET['id_morceau'],
		]);

	header('location:morceau.php?id_morceau='.$_GET['id_morceau'].'');
}
/*requête pour récupérer les informations d'un profil selon son identifiant*/ 
if (isset ($_GET['id_utilisateur'])) {
	$query = $db->prepare('SELECT * FROM utilsateur WHERE id_utilisateur ='.$_GET['id_utilisateur'].'');
	$query->execute();
	$utilisateur = $query->fetchAll();
}
/*requête pour récuperer les commentaires faits par un utilisateur*/
if (isset ($_GET['id_utilisateur'])) {
	$query = $db->prepare('SELECT * FROM commentaires NATURAL JOIN morceau WHERE id_utilisateur ='.$_GET['id_utilisateur'].'');
	$query->execute();
	$comments = $query->fetchAll();
}