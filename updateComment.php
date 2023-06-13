<?php 
session_start();
include('functions.php');
updateComment();
header('Location: user_profile.php');
?>