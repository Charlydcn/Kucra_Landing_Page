<?php

session_start();
require_once 'db-functions.php';

?>
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

        <?php

        $pricings = getPricings();

        foreach ($pricings as $pricing) {

        ?>

            <div class="price_update_card">
                <form action="functions.php?action=update&id=<?= $pricing['id_pricing'] ?>" method="POST" autocomplete="off">
                    <label>
                        <p>Name</p>
                        <input type="text" name="name" value=<?= $pricing['name'] ?> required>
                    </label>

                    <label>
                        <p>Price</p>
                        <input type="number" name="price" value=<?= $pricing['price'] ?> required>
                    </label>

                    <label>
                        <p>Sale</p>
                        <input type="number" name="sale" value=<?= $pricing['sale'] ?> required>
                    </label>

                    <label>
                        <p>Bandwidth</p>
                        <input type="number" name="bandwidth" value=<?= $pricing['bandwidth'] ?> required>
                    </label>

                    <label>
                        <p>Online Space</p>
                        <input type="number" name="onlineSpace" value=<?= $pricing['onlineSpace'] ?> required>
                    </label>

                    <label>
                        <p>Support</p>
                        <input type="checkbox" name="support" <?php if ($pricing['support'] == 1) { echo "checked"; } ?>>
                    </label>

                    <label>
                        <p>Domain</p>
                        <input type="text" name="domain" value=<?= $pricing['domain'] ?> required>
                    </label>

                    <label>
                        <p>Hidden Fees</p>
                        <input type="checkbox" name="hiddenFees" <?php if ($pricing['hiddenFees'] == 1) { echo "checked"; } ?>>
                    </label>

                    <input type="submit" name="submit" value="Update">
                </form>

            </div>

        <?php }


        ?>

    </div>

</body>

</html>