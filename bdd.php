<?php 

try {
$db = new PDO(
'mysql:host=localhost;dbname=spotizer;charset=utf8',
'root',
''
);
}
catch (Exception $e) {
exit('<strong>Erreur :</strong> ' . $e->getMessage());
}

