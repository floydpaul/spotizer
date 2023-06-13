<?php 
session_start();
include('functions.php');
updateUser();
header('Location: user_profile.php');
?>