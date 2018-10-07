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
<br />
<br />
<br />

      <?php
	  include('footer.php')
	  ?>
  </body>
</html>
