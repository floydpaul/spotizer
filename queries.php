<?php

$query = $db->prepare('SELECT * FROM morceau NATURAL JOIN artiste');
$query->execute();
$morceaux = $query->fetchAll();