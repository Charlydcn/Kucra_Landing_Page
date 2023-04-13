<?php

session_start();
require 'db-functions.php';


if (isset($_GET['action'])) {

    $id = (isset($_GET['id'])) ? $_GET['id'] : null;    

    switch($_GET['action']) {

        case "updatePricing":

            $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT);
            $sale = filter_input(INPUT_POST, "sale", FILTER_VALIDATE_FLOAT);
            $bandwidth = filter_input(INPUT_POST, "bandwidth", FILTER_VALIDATE_FLOAT);
            $onlineSpace = filter_input(INPUT_POST, "online_space", FILTER_VALIDATE_FLOAT);
            $support = filter_input(INPUT_POST, "support", FILTER_VALIDATE_BOOLEAN);
            $domain = filter_input(INPUT_POST, "domain", FILTER_VALIDATE_FLOAT);
            $hiddenFees = filter_input(INPUT_POST, "hiddenFees", FILTER_VALIDATE_BOOLEAN);

            if ($price > 0 && $bandwidth > 0 && $onlineSpace > 0) {
                
                if($name && $price && $sale && $bandwidth && $onlineSpace && $support && $domain && $hiddenFees) {
                    UpdatePricing($name, $price, $sale, $bandwidth, $onlineSpace, $support, $domain, $hiddenFees, $id);             
                }               

            }

            header("Location:paneladmin.php");
            break;



    }
}



?>