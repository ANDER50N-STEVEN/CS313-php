<?php
session_start();

$products = explode("|", $_POST['checkbox']);
$total = 0;

if (empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();
    $_SESSION['book'] = array();
    $_SESSION['cost'] = array();
    $_SESSION['img'] = array();
}
array_push($_SESSION['cart'], $products);
array_push($_SESSION['book'], $products[0]);
array_push($_SESSION['cost'], $products[1]);
array_push($_SESSION['img'], $products[2]);
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
          foreach($_SESSION['cart'] as $item){
              echo "<tr>
                        <td class = 'img'>$_SESSION['img']</td>
                        <td>$_SESSION['book']</td>
                        <td>$_SESSION['cost']</td>
                        </tr>";
                        $total += $item[1];
          }
          ?>
      </table>
      <br />
<br />
<br />
<br />
<br />

      <?php
	  include('footer.php')
	  ?>
  </body>
</html>
