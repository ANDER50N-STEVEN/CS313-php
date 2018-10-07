<?php
session_start();


?>

<!DOCTYPE html PUBLIC >
<html lang = "english">
  
  <head><title> Store </title>
    <meta charset = "utf-8">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>      
      <?php
      include('header.php')
      ?>
	  
<form action="cart.php" method="POST">
     <h3 id = "fantasy" class = "fantasy"> FANTASY </h3>
      <table>
        <tr>
          <th class="fantasy">
            <img src = "http://ecx.images-amazon.com/images/I/51Nq%2Bl67AEL._AA160_.jpg" ><br />
            <input id="LoTR" 
                   type="checkbox" name="checkbox"
                   value="The-Lord-of-The-Rings|11.87|http://ecx.images-amazon.com/images/I/51Nq%2Bl67AEL._AA160_.jpg">
            <b>The Lord of the Rings</b>
            <br /> Price: $11.87</th>
          <th class="fantasy">
            <img src = "http://ecx.images-amazon.com/images/I/5164%2Bq5eGfL._AA160_.jpg " ><br />
            <input id="EoTW" 
                   type="checkbox" name="checkbox" 
                   value="The-Eye-of-the-World|7.99|http://ecx.images-amazon.com/images/I/5164%2Bq5eGfL._AA160_.jpg " >
            <b>The Eye of the World</b>
            <br /> Price:$7.99 </th>
        <th class="fantasy">
          <img src = "http://ecx.images-amazon.com/images/I/51bjoG8C%2B4L._AA160_.jpg " ><br /> 
          <input id="WoK" 
                 type="checkbox" name="checkbox" 
                 value="The-Way-of-Kings|8.99|http://ecx.images-amazon.com/images/I/51bjoG8C%2B4L._AA160_.jpg" >
          <b>The Way of Kings</b>
          <br /> Price: $8.99 </th>
        <th class="fantasy">
          <img src = "http://ecx.images-amazon.com/images/I/51jIQA2jq9L._AA160_.jpg " ><br />
          <input id="CT" 
                 type="checkbox" name="checkbox" 
                 value="The-Crown-Tower|8.89|http://ecx.images-amazon.com/images/I/51jIQA2jq9L._AA160_.jpg" >
          <b>The Crown Tower</b>
          <br /> Price: $8.89 </th><tr>
        <th class="fantasy">
          <img src = "http://ecx.images-amazon.com/images/I/51BmlSQXY5L._AA160_.jpg " ><br />
            <input id="BtS"
                type="checkbox" name="checkbox"
                value="Belgarath the Sorcerer|7.99|http://ecx.images-amazon.com/images/I/51BmlSQXY5L._AA160_.jpg" >
          <b>Belgarath the Sorcerer</b>
          <br /> Price: $7.99</th></a>
        <th class="fantasy">
          <img src = "http://ecx.images-amazon.com/images/I/51HGCx5Rh6L._AA160_.jpg " ><br /> 
          <input id="NotW" 
                 type="checkbox" name="checkbox" 
                 value="The-Name-of-the-Wind|7.99|http://ecx.images-amazon.com/images/I/51HGCx5Rh6L._AA160_.jpg " >
          <b>The Name of the Wind</b>
          <br /> Price: $7.99</th>
        <th class="fantasy">
          <img src = " http://ecx.images-amazon.com/images/I/51rBfVFsqYL._AA160_.jpg" ><br />
          <input id="WFR" 
                 type="checkbox" name="checkbox" 
                 value="Wizards-First-Rule|6.91|http://ecx.images-amazon.com/images/I/51rBfVFsqYL._AA160_.jpg" >
          <b>Wizards First Rule</b>
          <br /> Price: $6.91</th>
        <th class="fantasy">
          <img src = " http://ecx.images-amazon.com/images/I/51f1-OdVfuL._AA160_.jpg" ><br /> 
          <input id="GotM" 
                 type="checkbox" name="checkbox" 
                 value="Gardens-of-the-Moon|5.44|http://ecx.images-amazon.com/images/I/51f1-OdVfuL._AA160_.jpg">
          <b>Gardens of the Moon</b>
          <br /> Price: $5.44</th></tr></table> 

     
    <hr />
<br />
        <input class ="checkout" type="submit" name="submit" value="Checkout">
    </form>
    <br /><br /><br /><br />

      <?php
	  include('footer.php')
	  ?>
  </body>
</html>
