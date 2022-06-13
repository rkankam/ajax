<?php

// C'est ici que j'écris en PHP
// Je me connecte à la bdd "entreprise" :
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// Verifier si la connexion est établie
// var_dump($pdo);
// Je selectionne toutes les infos sur les employés
$r = $pdo->query('SELECT * FROM employes');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX BDD</title>
    <style>
        * {
            font-family: monospace;
        }
        table {
            border-collapse: collapse;
        }
        th {
            width: 90px;
        }
    </style>
</head>
<body>

    <select name="" id="selectEmploye">
        <?php
        while($employe = $r ->fetch(PDO::FETCH_ASSOC)) {
            echo  '<option value="' . $employe['id_employes'] . '">' . $employe['prenom'] . ' ' . $employe['nom'] . '</option>';
        }

        ?>
    </select>
    
<br>
<br>
<table border="1">
    <tr>
        <th>id_employes</th>
        <th>prenom</th>
        <th>nom</th>
        <th>sexe</th>
        <th>service</th>
        <th>date embauche</th>
        <th>salaire</th>
    </tr>
    <tr>
        <td id="id_employes"></td>
        <td id="prenom"></td>
        <td id="nom"></td>
        <td id="sexe"></td>
        <td id="service"></td>
        <td id="date_embauche"></td>
        <td id="salaire"></td>
    </tr>
</table>
<script src="js/app.js"></script>
</body>
</html>