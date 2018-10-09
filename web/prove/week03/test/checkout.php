<?php
require('saleitem.php');
require('start_session.php');
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../stylesheet.css" />
    <title>Checkout - Prove 03</title>
</head>
<body>
    <?php
    require('../header.php');
    ?>
    <div class='w3-container'>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $addr1 = $addr2 = $state = $city = $zip = $error = "";
            if (isset($_POST['name'])) {
                $name = htmlspecialchars($_POST['name']);
            } else {
                $error .= 'name is missing!<br />';
            }
            if (isset($_POST['addr1'])) {
                $addr1 = htmlspecialchars($_POST['addr1']);
            } else {
                $error .= 'addr1 is missing!<br />';
            }
            if (isset($_POST['addr2'])) {
                $addr2 = htmlspecialchars($_POST['addr2']);
            } else {
                $error .= 'addr2 is missing!<br />';
            }
            if (isset($_POST['state'])) {
                $state = htmlspecialchars($_POST['state']);
            } else {
                $error .= 'state is missing!<br />';
            }
            if (isset($_POST['city'])) {
                $city = htmlspecialchars($_POST['city']);
            } else {
                $error .= 'city is missing!<br />';
            }
            if (isset($_POST['zip'])) {
                $zip = htmlspecialchars($_POST['zip']);
            } else {
                $error .= 'zip is missing!<br />';
            }
            if (empty($error)) {
                echo '<p>Thank you for your purchase!</p>';
                echo "<p>Shipped to:</p><p>$name<br />$addr1<br />$addr2<br />$city, $state<br />$zip</p>";
                echo "<p>Your total was: \${$_SESSION['total_cost']}</p>";
                echo '<p>Items purchased:</p>';
                $cartitems = $_SESSION['cartitems'];
                foreach ($cartitems as $item) {
                    echo $item->outputbrowse();
                }
                session_unset();
            } else {
                echo "<p>$error</p>";
            }
        } else {
        ?>
        <h1>CHECKOUT</h1>
        <form action='checkout.php' method='post'>
            <table id='tbl_checkout'>
                <tr>
                    <td>
                        <label>Name:</label>
                    </td>
                    <td>
                        <input type='text' name='name' />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Address 1:</label>
                    </td>
                    <td>
                        <input type='text' name='addr1' />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Address 2:</label>
                    </td>
                    <td>
                        <input type='text' name='addr2' />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>State:</label>
                    </td>
                    <td>
                        <input type='text' name='state' />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>City:</label>
                    </td>
                    <td>
                        <input type='text' name='city' />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Zip Code:</label>
                    </td>
                    <td>
                        <input type='text' name='zip' />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Total Cost:</label>
                    </td>
                    <td>
                        $<?php echo $_SESSION['total_cost']; ?>
                    </td>
                </tr>
            </table>
            <input type='submit' value='Submit Order' class='w3-button w3-green' />
            <a href='cart.php' class='w3-button w3-green'>Return to cart</a>
        </form>
        <?php
}
        ?>
    </div>
    <?php
    require('../footer.php');
    ?>
</body>
</html>