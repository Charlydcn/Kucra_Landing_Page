<?php require 'db-functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="css/paneladmin.css">
</head>
<body>

    <h2>Update Pricing</h2>
    
    <div id="price_update_cards">

        <?php foreach ($pricings as $pricing) { ?>

        <div class="price_update_card">

            <form action="traitement.php?action=addProduct" method="post" autocomplete="off" enctype="multipart/form-data"autocomplete="off">
                <label name="name">
                    <p>Name</p>
                    <input type="text">
                </label>

                <label name="price">
                    <p>Price</p>
                    <input type="number">
                </label>

                <label name="sale">
                    <p>Sale</p>
                    <input type="number">
                </label>

                <label name="bandwidth">
                    <p>Bandwidth</p>
                    <input type="number">
                </label>

                <label name="online_space">
                    <p>Online Space</p>
                    <input type="number">
                </label>

                <label name="support">
                    <p>Support</p>
                    <input type="checkbox">
                </label>

                <label name="domain">
                    <p>Domain</p>
                    <input type="text">
                </label>

                <label name="hidden_fees">
                    <p>Hidden Fees</p>
                    <input type="checkbox">
                </label>

                <label name="submit">
                    <input type="submit" placeholder="Update">
                </label>
            </form>

        </div>

        <?php } ?>

    </div>

</body>
</html>