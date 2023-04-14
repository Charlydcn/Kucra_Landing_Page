<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=forfaits;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$sql =
    "SELECT *
     FROM pricing
     LIMIT 3";

$pricingStatement = $db->prepare($sql);
$pricingStatement->execute();
$pricings = $pricingStatement->fetchAll();

function UpdatePricing($name, $price, $sale, $bandwidth, $onlineSpace, $support, $domain, $hiddenFees, $id)
{
    $sql = 
    "UPDATE pricing
    SET name = :name, price = :price, sale = :sale, bandwidth = :bandwidth, online_space = :onlineSpace,
    support = :support, domain = :domain, hidden_fees = :hiddenFees
    WHERE id = :id";    
}

?>