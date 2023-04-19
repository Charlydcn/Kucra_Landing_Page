<?php

session_start();
require_once 'db-functions.php';


if (isset($_GET['action'])) {

    $id = (isset($_GET['id'])) ? $_GET['id'] : null;

    switch ($_GET['action']) {

        case "update":
            if (isset($_POST['submit'])) {
                $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_INT);
                $sale = filter_input(INPUT_POST, "sale", FILTER_VALIDATE_INT);
                $bandwidth = filter_input(INPUT_POST, "bandwidth", FILTER_VALIDATE_INT);
                $onlineSpace = filter_input(INPUT_POST, "onlineSpace", FILTER_VALIDATE_INT);
                $support = filter_input(INPUT_POST, "support", FILTER_VALIDATE_BOOLEAN);
                $domain = filter_input(INPUT_POST, "domain", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $hiddenFees = filter_input(INPUT_POST, "hiddenFees", FILTER_VALIDATE_BOOLEAN);
                $nbMember = filter_input(INPUT_POST, "nbMember", FILTER_VALIDATE_INT);
    
                // Si il y avait beaucoup de booléens, il aurait fallu faire un tableau de valeurs, et transformer chaque valeurs en bool(false) si null
                if ($support === null) {
                    $support = false;
                }
    
                if ($hiddenFees === null) {
                    $hiddenFees = false;
                }
    
                if ($price > 0 && $bandwidth > 0 && $onlineSpace > 0) {
    
                    if ($name && $price && $bandwidth && $onlineSpace && is_bool($support) && $domain && is_bool($hiddenFees)) {
    
                        updatePricing($name, $price, $sale, $bandwidth, $onlineSpace, $support, $domain, $hiddenFees, $nbMember, $id);
                    }
                }
    
            }
            
            header("Location:paneladmin.php");

        break;

        case "addMember":
            addMember($id);
            $_SESSION['message'] = "<p class='success_msg'>Thanks for joining us !</p>";

            header("Location:index.php#pricing");

        break;

        case "subMail":
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            
            if ($email) {

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                    if (checkEmailExists($email) < 1) { // Si l'adresse e-mail n'est pas déjà présente en BDD;

                        subMail($email);
                        $_SESSION['message'] = "<p class='success_msg'>Thanks for joining us !</p>";
                        
                    } else {

                        $_SESSION['message'] = "<p class='error_msg'>E-Mail already subscribed</p>";
                    }

                } else {

                    $_SESSION['message'] = "<p class='error_msg'>Incorrect E-Mail</p>";
                }
            }

            header("Location:index.php");
            
        break;
    }
}
