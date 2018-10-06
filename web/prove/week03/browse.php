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
	  
<form action="purchaseReview.php" method="POST">
     <h3 id = "fantasy" class = "fantasy"> FANTASY </h3>
      <table>
        <tr>
          <th class="fantasy">
            <img src = "http://ecx.images-amazon.com/images/I/51Nq%2Bl67AEL._AA160_.jpg" ><br />
            <input id="LoTR" 
                   type="checkbox" name="checkbox[]" 
                   value="11.87" 
                   onclick="purchaseReview.php; calc(this.value, 'Total', 'LoTR');">
            <b name="The Lord of the Rings">The Lord of the Rings</b>
            <br /> Price: $11.87</th>
          <th class="fantasy">
            <img src = "http://ecx.images-amazon.com/images/I/5164%2Bq5eGfL._AA160_.jpg " ><br />
            <input id="EoTW" 
                   type="checkbox" name="checkbox[]" 
                   value="7.99" 
                   onclick="purchaseReview.php; calc(this.value, 'Total', 'EoTW');">
            <b>The Eye of the World</b>
            <br /> Price:$7.99 </th>
        <th class="fantasy">
          <img src = "http://ecx.images-amazon.com/images/I/51bjoG8C%2B4L._AA160_.jpg " ><br /> 
          <input id="WoK" 
                 type="checkbox" name="checkbox[]" 
                 value="8.99" 
                 onclick="purchaseReview.php; calc(this.value, 'Total', 'WoK');">
          <b>The Way of Kings</b>
          <br /> Price: $8.99 </th>
        <th class="fantasy">
          <img src = "http://ecx.images-amazon.com/images/I/51jIQA2jq9L._AA160_.jpg " ><br />
          <input id="CT" 
                 type="checkbox" name="checkbox[]" 
                 value="8.89" 
                 onclick="purchaseReview.php; calc(this.value, 'Total', 'CT');">
          <b>The Crown Tower</b>
          <br /> Price: $8.89 </th><tr>
        <th class="fantasy">
          <img src = "http://ecx.images-amazon.com/images/I/51BmlSQXY5L._AA160_.jpg " ><br />
          <input id="BtS" 
                 type="checkbox" name="checkbox[]"
                 value="7.99" 
                 onclick="purchaseReview.php; calc(this.value, 'Total', 'BtS');">
          <b>Belgarath the Sorcerer</b>
          <br /> Price: $7.99</th></a>
        <th class="fantasy">
          <img src = "http://ecx.images-amazon.com/images/I/51HGCx5Rh6L._AA160_.jpg " ><br /> 
          <input id="NotW" 
                 type="checkbox" name="checkbox[]" 
                 value="7.99" 
                 onclick="purchaseReview.php; calc(this.value, 'Total', 'NotW');">
          <b>The Name of the Wind</b>
          <br /> Price: $7.99</th>
        <th class="fantasy">
          <img src = " http://ecx.images-amazon.com/images/I/51rBfVFsqYL._AA160_.jpg" ><br />
          <input id="WFR" 
                 type="checkbox" name="checkbox[]" 
                 value="6.91" 
                 onclick="purchaseReview.php; calc(this.value, 'Total', 'WFR');">
          <b>Wizards First Rule</b>
          <br /> Price: $6.91</th>
        <th class="fantasy">
          <img src = " http://ecx.images-amazon.com/images/I/51f1-OdVfuL._AA160_.jpg" ><br /> 
          <input id="GotM" 
                 type="checkbox" name="checkbox[]" 
                 value="5.44"
                 onclick="purchaseReview.php; calc(this.value, 'Total', 'GotM');">
          <b>Gardens of the Moon</b>
          <br /> Price: $5.44</th></tr></table>
           
      <h3 id = "scifi" class = "scifi"> Science Fiction </h3>
      <table>
        <tr>
          <th class="scifi">
              <img src = " http://ecx.images-amazon.com/images/I/51qrFCx28OL._AA160_.jpg" ><br /> 
              <input id="EG"
                     type="checkbox" name="checkbox[]"
                     value="6.00"
                     onclick="purchaseReview.php; calc(this.value, 'Total', 'EG');">
              <b>Ender's Game</b>
              <br /> Price: $6.00</th>
          <th>
              <img src = " http://ecx.images-amazon.com/images/I/41JANPSHNcL._AA160_.jpg" ><br /> 
              <input id="Dune"
                     type="checkbox" name="checkbox[]" 
                     value="6.29" 
                     onclick="purchaseReview.php; calc(this.value, 'Total', 'Dune');">
              <b>Dune</b><br /> Price:$6.29 </th>
          <th>
              <img src = "http://ecx.images-amazon.com/images/I/51265KLNG9L._AA160_.jpg " ><br /> 
              <input id="Halo"
                     type="checkbox" name="checkbox[]" 
                     value="7.03" 
                     onclick="purchaseReview.php; calc(this.value, 'Total', 'Halo');">
              <b>Halo: The Fall of Reach</b>
              <br /> Price: $7.03 </th>
          <th>
              <img src = "http://ecx.images-amazon.com/images/I/41toGX5Ub1L._AA160_.jpg " ><br /> 
             <input id="Found"
                    type="checkbox" name="checkbox[]"
                    value="6.00"
                    onclick="purchaseReview.php; calc(this.value, 'Total', 'Found');">
             <b>Foundation</b>
             <br /> Price: $6.00 </th></tr></table>

    <h3 id = "fiction" class = "fiction"> Fiction </h3>
    <table>
      <tr>
        <th>
            <img src = "http://ecx.images-amazon.com/images/I/51vrdM-S%2B5L._AA160_.jpg " ><br /> 
            <input id="tKaM"
                   type="checkbox" name="checkbox[]" 
                   value="4.94" 
                   onclick="purchaseReview.php; calc(this.value, 'Total', 'tKaM');">
            <b>To Kill a Mockingbird</b>
            <br /> Price: $4.94</th>
        <th>
            <img src = "http://ecx.images-amazon.com/images/I/51C0kk5lE7L._AA160_.jpg " ><br /> 
            <input id="GE"
                   type="checkbox" name="checkbox[]" 
                   value="2.87" 
                   onclick="purchaseReview.php; calc(this.value, 'Total', 'GE');">
            <b>Great Expectations</b>
            <br /> Price:$2.87 </th>
        <th>
            <img src = "http://ecx.images-amazon.com/images/I/51tmGgkv3iL._AA160_.jpg " ><br /> 
            <input id="GG"
                   type="checkbox" name="checkbox[]" 
                   value="9.00" 
                   onclick="purchaseReview.php; calc(this.value, 'Total', 'GG');">
            <b>The Great Gatsby</b>
            <br /> Price: $9.00 </th>
        <th>
            <img src = "http://ecx.images-amazon.com/images/I/31twj9hz1kL._AA160_.jpg " ><br /> 
            <input id="1984"
                   type="checkbox" name="checkbox[]" 
                   value="6.00" 
                   onclick="purchaseReview.php; calc(this.value, 'Total', '1984');">
            <b>1984</b>
            <br /> Price: $6.00 </th></tr>
      </tr>
</table>

    <h3 id = "romance" class = "romance"> Romance </h3>
    <table>
      <tr>
        <th> 
            <img src = "http://ecx.images-amazon.com/images/I/41XuMk0AniL._AA160_.jpg " ><br />
            <input id="Twi"
                   type="checkbox" name="checkbox[]"
                   value="8.97" 
                   onclick="purchaseReview.php; calc(this.value, 'Total', 'Twi');">
            <b>Twilight</b>
            <br /> Price: $8.97</th>
        <th>
            <img src = "http://ecx.images-amazon.com/images/I/51N-Hpq0NNL._AA160_.jpg" ><br />
            <input id="PaP"
                   type="checkbox" name="checkbox[]" 
                   value="2.57"
                   onclick="purchaseReview.php; calc(this.value, 'Total', 'PaP');">
            <b>Pride and Prejudice</b>
            <br /> Price:$2.57 </th>
        <th>
            <img src = "http://ecx.images-amazon.com/images/I/51dezgvr%2B7L._AA160_.jpg " ><br /> 
            <input id="FioS"
                   type="checkbox" name="checkbox[]" 
                   value="6.50" 
                   onclick="purchaseReview.php; calc(this.value, 'Total', 'FioS');">
            <b>The Fault in Our Stars</b>
            <br /> Price: $6.50 </th>
        <th>
            <img src = "http://ecx.images-amazon.com/images/I/51H6SoGnI8L._AA160_.jpg " ><br /> 
            <input id="RaJ" 
                   type="checkbox" name="checkbox[]" 
                   value="3.74" 
                   onclick="purchaseReview.php; calc(this.value, 'Total', 'RaJ');">
            <b>Romeo and Juliet</b>
            <br /> Price: $3.74 </th></tr></table>

    <h3 id = "ya" class = "ya"> Young Adult </h3>
    <table>
      <tr>
        <th>
            <img src = "http://ecx.images-amazon.com/images/I/51UGQ9RBJiL._AA160_.jpg " ><br />
            <input id="Red"
                   type="checkbox" name="checkbox[]"
                   value="6.00" 
                   onclick="purchaseReview.php; calc(this.value, 'Total', 'Red');">
            <b>Redwall</b>
            <br /> Price: $6.00</th>
        <th>
            <img src = "http://ecx.images-amazon.com/images/I/51oSZOESQ6L._AA160_.jpg" ><br /> 
            <input id="HP"
                   type="checkbox" name="checkbox[]"
                   value="6.92" 
                   onclick="purchaseReview.php; calc(this.value, 'Total', 'Red');">
            <b>Harry Potter and the Sorcerer's Stone</b>
            <br /> Price:$6.92 </th>
          <th>
            <img src = "http://ecx.images-amazon.com/images/I/511VauBZ5GL._AA160_.jpg " ><br /> 
            <input id="Ani" 
                   type="checkbox" name="checkbox[]" 
                   value="5.71"
                   onclick="purchaseReview.php; calc(this.value, 'Total', 'Ani');">
            <b>Animorphs #1: The Invasion</b>
            <br /> Price: $5.71 </th>
          <th>
            <img src = "http://ecx.images-amazon.com/images/I/41jG4xQjjsL._AA160_.jpg " ><br />
            <input id="HG"
                   type="checkbox" name="checkbox[]" 
                   value="6.21"
                   onclick="purchaseReview.php; calc(this.value, 'Total', 'HG');">
            <b>The Hunger Games</b><br /> Price: $6.21 </th></tr></table>
    <hr />
<br /><br /><br /><br />

      <?php
	  include('footer.php')
	  ?>
  </body>
</html>
