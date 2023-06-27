<?php 

if(!empty($_SESSION)){

	if(!isset($_GET['id_utilisateur']) OR ($_GET['id_utilisateur']==$_SESSION['id_utilisateur'])){
	?>
	<a href="nouveaumorceau.php">Ajouter un morceau</a>
	<a href="nouvelleplaylist.php">Créer playlist</a>
	<a href="user_profile.php"> Mon profil</a>
	<a class="bttn" href="logout.php">SE DÉCONNECTER</a>
	<?php
	}
	else {
	?>
	<a href="user_profile.php"> Mon profil</a>
	<a class="bttn" href="logout.php">SE DÉCONNECTER</a>
	<?php
	}
}

else {
	?>
	<a href="inscription.php">S'INSCRIRE</a>
	<a class="bttn" href="connexion.php">SE CONNECTER</a>
	<?php
}
