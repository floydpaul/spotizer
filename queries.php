<?php

$query = $db->prepare('SELECT * FROM morceau NATURAL JOIN utilisateur');
$query->execute();
$morceaux = $query->fetchAll();