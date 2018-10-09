<?php
session_start();

if (!isset($_SESSION["cart"])) {
	$_SESSION["cart"] = array();
}
$products = $_POST["checkbox"];
foreach ($products as $product) {
	array_push($_SESSION["cart"], $product);
}

?>


<!DOCTYPE html PUBLIC >
<html lang = "english">
  
  <head><title> Home Page </title>
    <meta charset = "utf-8">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>      
      <?php
      include('header.php')
      ?>

      <br />
      <?php
      var_dump($_SESSION['cart']);
      ?>

      <table>
          <tr>
              <th>Image</th>
              <th>Item</th>
              <th>Cost</th>
          </tr>
          <?php

          $products = $_SESSION['cart']
          foreach($products as $item){
              $temp = explode("|", $item);
              echo "<tr>
                        <td >$temp[2]</td>
                        <td>$temp[0]</td>
                        <td>$temp[1]</td>
                        </tr>";
                        $total += $temp[1];
          }
          ?>
      </table>
      <br />

      <br />
    <form action="browse.php">
        <input type="submit" value="Continue Shopping" />
    </form>

      <br />
    <form action="checkout.php">
    <input type="submit" value="Checkout" />
    </form>
<br />
<br />
<br />
<br />

      <?php
	  include('footer.php')
	  ?>
  </body>
</html>
