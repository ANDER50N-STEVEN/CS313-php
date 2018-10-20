<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  
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
    if(isset($_POST['user'])) 
    {
      $userName = test_input($_POST['user']);
      
      $stmt = $db->prepare('SELECT id, username, password, display_name FROM project1.user WHERE user=:userName');
      $stmt->bindValue(':userName', $userName, PDO::PARAM_STR);
      $stmt->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
      echo "<p><span style='font-size:2em; font-weight:bold;'>User Select</span></p>";
      
      if(count($rows) <= 0)
      {
        echo "No Users Found";
      }
      else {
        foreach ($rows as $row)
        {
          //echo "<p><span style='font-weight:bold'>" . $row['book'] . " " .  $row['chapter'] . ":". $row['verse'] ."</span></p>";
          
          echo "<a href='results.php?id=" . $row['id']. "' >" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</a>";
          
          
        }      
      }
    } else {
      
      echo "Something Else!";
    }
  }
  
  

  
  ?>
</head>
<body>
 
  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="user">USERNAME</label>
  <?php
      
      $stmt = $db->prepare('SELECT display_name FROM project1.user WHERE display_name=:userName');
      $stmt->bindValue(':userName', $userName, PDO::PARAM_STR);
      $stmt->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
      echo "<p><span style='font-size:2em; font-weight:bold;'>User Select</span></p>";
  foreach ($rows as $row)
        {
          
          echo "<a href='signIn.php?id=" . $row['id']. "' >" . $row['display_name'] . "</a>" . "</br>";
          
          
        }
		?>
  <input type="text" id="user" name="user">
  
  <input type="submit" name="submit" value="Submit">
</form>
  
</body>
</html>