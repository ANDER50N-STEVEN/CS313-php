<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" type="text/css" href="../stylesheet.css" />
  <title>User Select</title>
  
  <?php
  require('dbConnect.php');
	?>
	
</head>
<body>
 <?php
    require('../header.php');
    ?>
  
  <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <?php
      
	  $query = "SELECT display_name, id FROM project1.user";
	  $stmt = $db->prepare($query);
	  $stmt->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
      echo "<p><span style='font-size:2em; font-weight:bold;'>User Select</span></p>";
  foreach ($rows as $row)
        {
          echo "<a href='signIn.php?id=" . $row['id']. "' >" . $row['display_name'] . "</a>" . "</br>";
        }
		?>
</form>
   <?php
    require('../../footer.php');
    ?>
</body>
</html>