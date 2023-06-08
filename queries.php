<?php

<<<<<<< HEAD
=======
/* requête pour récupérer tous les morceaux */
>>>>>>> c9bfb2b2902764823bba8f52142b8c7ea0db1397
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
$query = $db->prepare('SELECT * FROM commentaires NATURAL JOIN utilisateur WHERE id_morceau='.$_GET['id_morceau'].'');
$query->execute();
$commentaires = $query->fetchAll();
