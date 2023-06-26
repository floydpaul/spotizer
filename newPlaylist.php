<?php 
include('functions.php');
$id=newPlaylist();
header('Location:creationplaylist.php?id_playlist='.$id);
?>