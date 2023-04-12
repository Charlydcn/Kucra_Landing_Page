<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=forfaits;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$starterQuery =
    "SELECT *
     FROM pricing
     LIMIT 3";

$starterStatement = $db->prepare($starterQuery);
$starterStatement->execute();
$pricings = $starterStatement->fetchAll();


var_dump($starterValues);
