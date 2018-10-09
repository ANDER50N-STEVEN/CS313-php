<?php
require('start_session.php');
require('saleitem.php');
?>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../stylesheet.css" />
    <title>Prove03</title>
    <style>
        div.w3-card {
            width: 300px;
            height: 400px;
        }
    </style>
</head>
<body>
    <?php
    require('../header.php');
    require('header.php');
    ?>
    <div class='w3-container '>
        <h1>CARS FOR SALE</h1>
        <?php
        foreach ($items_for_sale as $item) {
            echo $item->outputBrowse();
}
        ?>
    </div>
    <?php
    require('../footer.php');
    ?>
</body>
</html>