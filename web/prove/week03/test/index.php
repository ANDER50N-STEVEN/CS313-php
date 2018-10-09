<?php
require('start_session.php');
require('saleitem.php');
?>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <title>Prove03</title>
    <style>
        div.w3-card {
            width: 300px;
            height: 300px;
        }
    </style>
</head>
<body>
    <?php
    require('../../header.php');
    ?>
    <div class='w3-container '>
        <h1>CARS FOR SALE</h1>
        <?php
        foreach ($items_for_sale as $item) {
            echo $item->outputBrowse();
}
        ?>
    </div>
</body>
</html>