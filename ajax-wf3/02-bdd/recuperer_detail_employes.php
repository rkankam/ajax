<?php

$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// je fais une requete sql pour recuperer toutes les infos de l'employé dont l'ID est présent dans l'URL
$r = $pdo->query("SELECT * FROM employes WHERE id_employes = '$_GET[monIdEmploye]' ");
// Je convertis ces infos sous forme d'array
$employe = $r->fetch(PDO::FETCH_ASSOC);
// J'affiche ces infos sous forme d'objet JSON
echo json_encode($employe);

?>