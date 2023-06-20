<?php 

if(!empty($_SESSION)){

	if(!isset($_GET['id_utilisateur']) OR ($_GET['id_utilisateur']==$_SESSION['id_utilisateur'])){
	?>
	<a class="a2" href="nouveaumorceau.php">Ajouter un morceau</a>
	<a class="bttn1" href="logout.php">SE DÉCONNECTER</a>
	<?php
	}
	else {
	?>
	<a class="a2" href="user_profile.php"> Mon profil</a>
	<a class="bttn1" href="logout.php">SE DÉCONNECTER</a>
	<?php
	}
}

else {
	?>
	<a class="a2" href="inscription.php">S'INSCRIRE</a>
	<a class="bttn1" href="connexion.php">SE CONNECTER</a>
	<?php
}
