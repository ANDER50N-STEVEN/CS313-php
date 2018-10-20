<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" type="text/css" href="../stylesheet.css" />
  <title>User Page</title>
   <?php
  
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  
    try
    {
      $dbUrl = getenv('DATABASE_URL');

      $dbOpts = parse_url($dbUrl);

      $dbHost = $dbOpts["host"];
      $dbPort = $dbOpts["port"];
      $dbUser = $dbOpts["user"];
      $dbPassword = $dbOpts["pass"];
      $dbName = ltrim($dbOpts["path"],'/');

      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $ex)
    {
      echo 'Error!: ' . $ex->getMessage();
      die();
    }  
  ?>
</head>
<body>
 <?php
    require('../header.php');
    ?>
  <div class='ratings' style="text-align: center">
			<table style="width:80%">
			<tr>
				<th style="width:200px">Title</th>
				<th style="width:50px">Rating</th> 
				<th>Comments</th>
			  </tr>
	<?php
      $query = "SELECT tbl_a.title, tbl_b.rating, tbl_b.review
				FROM  project1.library tbl_a    
				JOIN project1.rating tbl_b   
				ON tbl_a.id = tbl_b.book_id
				WHERE user_id = 1";
	  $stmt = $db->prepare($query);
      $stmt->execute();
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{  
	echo "<tr>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['rating'] . "</td>";
    echo "<td>" . $row['review'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<p> Hello  " . $_SESSION['user_id'] . "</p>";
?>
  
   <?php
    require('../../footer.php');
    ?>
</body>
</html>