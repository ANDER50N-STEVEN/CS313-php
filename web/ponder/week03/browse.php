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

      <div id="checkout">
        <span style='color:blue'> Pay with a debit or credit card</span><br /><br />
        
        <div class="CC" style="text-align: center">
          <input id="cc1" name="cc1" size="40" placeholder="Credit Card Number"
                 oninput="checkCC(this.value, 'invalidCC')">
          <span class="invalidCC" style='color:red'>Invalid CC number</span><br />
          <input type="radio" name="card" value="Visa">
          <img src="../img/visa.gif">
          <input type="radio" name="card" value="MasterCard">
          <img src="../img/MasterCard.gif">
          <input type="radio" name="card" value="Discover">
          <img src="../img/discover.png">
          <input type="radio" name="card" value="American Express">
          <img src="../img/Amer-Expr.png"></div>
        <div class="Expiration" style="text-align: center"> 
          <input id="date" name="expire" size="40" 
                 placeholder="Expiration - mm/yyyy"
                 oninput="checkDate(this.value, 'invalidD')">
          <span class="invalidD" style='color:red'>Invalid date </span>
        </div>    
        
        <div class="name">
          <input id="fn" name="fn" size="40" placeholder="First Name">
          <input id="ln" name="ln" size="40" placeholder="Last Name"></div>
        
        <div class="address">
          <input id="add1" name="add1" size="40" 
                 placeholder="Address">
          <input id="add2" name="add2" size="40" 
                 placeholder="Address Cont. (optional)">
          <input id="Zip" name="Zip" size="10" placeholder="Zip code">
          <input id="City" name="City" size="40" placeholder="City">
          <select name="State" id="State">
            <option value="Alabama ">Alabama </option>
            <option value="Alaska ">Alaska </option>
            <option value="Arizona ">Arizona </option>
            <option value="Arkansas ">Arkansas </option>
            <option value="California ">California </option>
            <option value="Colorado ">Colorado </option>
            <option value="Connecticut ">Connecticut </option>
            <option value="Delaware ">Delaware </option>
            <option value="Florida ">Florida </option>
            <option value="Georgia ">Georgia </option>
            <option value="Hawaii ">Hawaii </option>
            <option value="Idaho ">Idaho </option>
            <option value="Illinois Indiana ">Illinois Indiana </option>
            <option value="Iowa ">Iowa </option>
            <option value="Kansas ">Kansas </option>
            <option value="Kentucky ">Kentucky </option>
            <option value="Louisiana ">Louisiana </option>
            <option value="Maine ">Maine </option>
            <option value="Maryland ">Maryland </option>
            <option value="Massachusetts ">Massachusetts </option>
            <option value="Michigan ">Michigan </option>
            <option value="Minnesota ">Minnesota </option>
            <option value="Mississippi ">Mississippi </option>
            <option value="Missouri ">Missouri </option>
            <option value="Montana Nebraska ">Montana Nebraska </option>
            <option value="Nevada ">Nevada </option>
            <option value="New Hampshire ">New Hampshire </option>
            <option value="New Jersey ">New Jersey </option>
            <option value="New Mexico ">New Mexico </option>
            <option value="New York ">New York </option>
            <option value="North Carolina ">North Carolina </option>
            <option value="North Dakota ">North Dakota </option>
            <option value="Ohio ">Ohio </option>
            <option value="Oklahoma ">Oklahoma </option>
            <option value="Oregon ">Oregon </option>
            <option value="Pennsylvania Rhode Island ">Pennsylvania Rhode Island </option>
            <option value="South Carolina ">South Carolina </option>
            <option value="South Dakota ">South Dakota </option>
            <option value="Tennessee ">Tennessee </option>
            <option value="Texas ">Texas </option>
            <option value="Utah ">Utah </option>
            <option value="Vermont ">Vermont </option>
            <option value="Virginia ">Virginia </option>
            <option value="Washington ">Washington </option>
            <option value="West Virginia ">West Virginia </option>
            <option value="Wisconsin ">Wisconsin </option>
            <option value="Wyoming">Wyoming</option>
          </select>
          
          <input id="phone" name="phone" size="40" placeholder="ex. 555-555-5555"
                 oninput="checkNumber(this.value, 'invalidN')">
          <span class="invalidN" style='color:red'>Invalid Number</span><br />
          <span> Total: $</span><span id="Total2"><b>0.00</b></span><br />
          <input onclick="purchaseReview.php" type="submit" value="Purchase">
          <input type="reset" value="RESET">
        </div>
    </form>
    <br /><br /><br /><br /><br />

      <?php
	  include('footer.php')
	  ?>
  </body>
</html>
