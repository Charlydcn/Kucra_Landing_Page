<?php

function dbConnect()
{
    try {

        $db = new PDO('mysql:host=localhost;dbname=forfaits;charset=utf8', 'root', '');

    } catch (PDOException $e) {

        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();

    }

    return $db;
}

$db = dbConnect();
$sql =
    "SELECT *
     FROM pricing
     LIMIT 3";

$pricingStatement = $db->prepare($sql);
$pricingStatement->execute();
$pricings = $pricingStatement->fetchAll();

function UpdatePricing($name, $price, $sale, $bandwidth, $onlineSpace, $support, $domain, $hiddenFees, $id)
{
    $db = dbConnect();
    $sql = 
    "UPDATE pricing
    SET name = :name, price = :price, sale = :sale, bandwidth = :bandwidth, online_space = :onlineSpace,
    support = :support, domain = :domain, hidden_fees = :hiddenFees
    WHERE id_pricing = :id";
    
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':price', $price);
    $stmt->bindValue(':sale', $sale);
    $stmt->bindValue(':bandwidth', $bandwidth);
    $stmt->bindValue(':onlineSpace', $onlineSpace);
    $stmt->bindValue(':support', $support);
    $stmt->bindValue(':domain', $domain);
    $stmt->bindValue(':hiddenFees', $hiddenFees);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
}

?>