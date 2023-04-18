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

function getPricings() {
    $db = dbConnect();
    $sql =
        "SELECT *
        FROM pricing
        LIMIT 3";

    $pricingStatement = $db->prepare($sql);
    $pricingStatement->execute();
    $pricings = $pricingStatement->fetchAll();

    return $pricings;
}

function updatePricing($name, $price, $sale, $bandwidth, $onlineSpace, $support, $domain, $hiddenFees, $nbMember, $id)
{

    $db = dbConnect();
    $sql =
        "UPDATE pricing
        SET name = :name, price = :price, sale = :sale, bandwidth = :bandwidth, onlineSpace = :onlineSpace, nbMember = :nbMember, support = :support, domain = :domain, hiddenFees = :hiddenFees
        WHERE id_pricing = :id";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':price', $price);
    $stmt->bindValue(':sale', $sale === null || $sale === false ? null : $sale);
    $stmt->bindValue(':bandwidth', $bandwidth);
    $stmt->bindValue(':onlineSpace', $onlineSpace);
    $stmt->bindValue(':support', $support ? 1 : 0);
    $stmt->bindValue(':domain', $domain);
    $stmt->bindValue(':hiddenFees', $hiddenFees ? 1 : 0);
    $stmt->bindValue(':nbMember', $nbMember);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
}

function addMember($id) {

    $db = dbConnect();
    $sql = 
        "UPDATE pricing
        SET nbMember = nbMember + 1
        WHERE id_pricing = :id";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();    
}
