<?php
session_start();

$products = $_POST['checkbox'];
$total = 0;

if (empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();
    $_SESSION['book'] = array();
    $_SESSION['cost'] = array();
    $_SESSION['img'] = array();
}
    $_SESSION['cart'] = $products;

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
                        <td >$item[2]</td>
                        <td>$item[0]</td>
                        <td>$item[1]</td>
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
