<?php
session_start();

$products = $_POST['checkbox'];

if (empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $products);
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
