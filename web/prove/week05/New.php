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
	<form method="post" action="<?php echo htmlspecialchars("userPage.php");?>">
	<label for="username"> Please Enter Your Username</label>
	<input type="text" id="userName" name="userName">
	<input type="submit" name="submit" value="Submit">
	<label for="message">Please Enter Your Password</label>
	<?php echo "SELECT password, username, id, display_name FROM project1.user WHERE id = ". $_SESSION['id']; ?>
	<input type="text" id="pass" name="pass">
	<input type="submit" name="submit" value="Submit">
</form>
   <?php
    require('../../footer.php');
    ?>
</body>
</html>