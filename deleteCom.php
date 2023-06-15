<?php 
session_start();
include('functions.php');
deleteCom();
header('Location: user_profile.php');
?>