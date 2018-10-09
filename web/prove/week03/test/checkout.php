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

foreach($products as $product){
    array_push($_SESSION['cart'], $product);
}

?>


<!DOCTYPE html PUBLIC >
<html lang="english">

<head>
    <title> Home Page </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
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
    <div class=" checkout">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
          <input id="fn" name="fn" size="40" placeholder="First Name"><br />
          <input id="ln" name="ln" size="40" placeholder="Last Name">
        
        <div class="address">
          <input id="add1" name="add1" size="40" 
                 placeholder="Address">
            <br />
          <input id="add2" name="add2" size="40" 
                 placeholder="Address Cont. (optional)">
            <br />
          <input id="Zip" name="Zip" size="10" placeholder="Zip code">
          <input id="City" name="City" size="40" placeholder="City">
            <br />
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
         
            </div>
        
          </form>
    <br />
    <form action="browse.php">
        <input type="submit" value="Continue Shopping" />
    </form>

    <br />
    <form action="confirmation.php">
        <input type="submit" value="Checkout" />
    </form>
        
        </div>
    <br />
    <br />
    <br />
    <br />

    <?php
    include('footer.php')
    ?>
</body>
</html>
