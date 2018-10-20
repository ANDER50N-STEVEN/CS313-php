<!DOCTYPE html>
<html lang="en">
<head>
  <title>Team 05</title>  
  
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
  
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if(isset($_POST['pass'])) 
    {
      $pass = test_input($_POST['pass']);
      $query = "SELECT password FROM project1.user";
	  $stmt = $db->prepare($query);
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      if($row[password] == $pass)
		 location.replace("https://www.w3schools.com")
      else
		  echo "<p>pass" . $pass . " : row " . $row . " </p>";
    }
  }
  ?>
  </head>
<body>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="message">Please Enter Your Password</label>
  <input type="text" id="pass" name="pass">
  <input type="submit" name="submit" value="Submit">
</form>
  
</body>
</html>