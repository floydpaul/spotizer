<?php
session_start();
include('bdd.php');

/* requête pour récupérer tous les morceaux */
$query = $db->prepare('SELECT * FROM morceau');
$query->execute();
$morceaux = $query->fetchAll();

/* requête pour récupérer toutes les catégories */
$query = $db->prepare('SELECT * FROM style');
$query->execute();
$categories = $query->fetchAll();


/* requête pour récupérer tous les informations d'un morceau selon son identifiant */
if(isset($_GET['id_morceau'])){
	
	$query = $db->prepare('SELECT * FROM morceau NATURAL  JOIN style NATURAL JOIN utilisateur WHERE id_morceau='.$_GET['id_morceau'].'');
	$query->execute();
	$morceau = $query->fetch();	
}

/* requête pour récupérer les informations d'une catégorie */
if(isset($_GET['id_categorie'])){
	
	$query = $db->prepare('SELECT * FROM style  NATURAL JOIN morceau NATURAL JOIN utilisateur WHERE id_style='.$_GET['id_categorie'].'');
	$query->execute();
	$morceaux = $query->fetchAll();	
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
		'id_utilisateur' => $_SESSION['id_utilisateur'],
		'id_morceau' => $_GET['id_morceau'],
		]);

	header('location:morceau.php?id_morceau='.$_GET['id_morceau'].'');
}
/*requête pour récupérer les informations d'un profil selon son identifiant*/ 
if (isset ($_GET['id_utilisateur'])) {
	$query = $db->prepare('SELECT * FROM utilisateur WHERE id_utilisateur ='.$_GET['id_utilisateur'].'');
	$query->execute();
	$utilisateur = $query->fetch();
}

else if (isset ($_SESSION['id_utilisateur'])) {
	$query = $db->prepare('SELECT * FROM utilisateur WHERE id_utilisateur ='.$_SESSION['id_utilisateur'].'');
	$query->execute();
	$utilisateur = $query->fetch();
}

/*requête pour récuperer les commentaires faits par un utilisateur*/
if (isset ($_GET['id_utilisateur'])) {
	$query = $db->prepare('SELECT * FROM commentaires LEFT JOIN morceau ON commentaires.id_morceau= morceau.id_morceau WHERE commentaires.id_utilisateur='.$_GET['id_utilisateur'].'');
	$query->execute();
	$comments = $query->fetchAll();
}

else if (isset ($_SESSION['id_utilisateur'])) {
	$query = $db->prepare('SELECT * FROM commentaires LEFT JOIN morceau ON commentaires.id_morceau= morceau.id_morceau WHERE commentaires.id_utilisateur='.$_SESSION['id_utilisateur'].'');
	$query->execute();
	$comments = $query->fetchAll();
}

/*requête pour récuperer un commentaire*/
if (isset ($_GET['id_comment'])) {
	$query = $db->prepare('SELECT * FROM commentaires   WHERE id_commentaire ='.$_GET['id_comment'].'');
	$query->execute();
	$comment = $query->fetch();
}
/*requête pour récupérer les informations d'un artiste selon son identifiant*/ 
	$query = $db->prepare('SELECT * FROM utilisateur WHERE artiste = true');
	$query->execute();
	$artistes = $query->fetchAll();
