<?php 

if(!empty($_SESSION)){?>
	<a href="user_profile.php">Mon profil</a>
	<a class="bttn" href="logout.php">SE DÉCONNECTER</a>
	<?php
}

else {?>
	<a href="inscription.php">S'INSCRIRE</a>
	<a class="bttn" href="connexion.php">SE CONNECTER</a>
	<?php
}
