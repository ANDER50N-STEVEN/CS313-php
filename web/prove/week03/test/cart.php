<?php
require('saleitem.php');
require('start_session.php');
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <title>Cart - Prove 03</title>
</head>
<body>
    <?php
    require('header.php');
    ?>
    <div class='w3-container'>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['additemid'])) {
            if (isset($_GET['quantity'])) {
                $quantity = htmlspecialchars($_GET['quantity']);
            } else {
                $quantity = 1;
            }
            $new_item_id = htmlspecialchars($_GET['additemid']);
            foreach($items_for_sale as $item) {
                if ($item->item_id == $new_item_id) {
                    $new_item = clone $item;
                    $new_item->quantity = $quantity;
                }
            }
            if (isset($new_item)) {
                $_SESSION['cartitems']["$new_item_id"] = $new_item;
                $add_info = "Added item #$new_item_id to cart";
            } else {
                $add_error = "Item #$new_item_id not found in db";
            }
        }
        ?>
        <h1>CART</h1>
        <?php
        if (isset($add_info)) {
            echo "<p class='info'>$add_info</p>";
        } elseif (isset($add_error)) {
            echo "<p class='error'>$add_error</p>";
        }
        if (isset($_SESSION['cartitems'])) {
            $cartitems = $_SESSION['cartitems'];
            $total_cost = 0;
            foreach ($cartitems as $item) {
                $total_cost += ($item->price * $item->quantity);
            }
            $_SESSION['total_cost'] = $total_cost;
            //echo '<ul>';
            foreach ($cartitems as $item) {
                echo $item->outputbrowse();
            }
            //echo '</ul>';
            echo "<p>TOTAL COST: \$$total_cost</p>";
        } else {
            echo '<p>No items in cart</p>';
}
        ?>
    </div>
</body>
</html>