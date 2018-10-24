<!DOCTYPE html>
<html lang="en">
<head>
  <title>Team 06</title>
  
   <?php
  
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  
  ?>
</head>
<body>

  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="book">Book</label>
  <input type="text" id="book" name="book">
  <input type="submit" name="submit" value="Submit">
  
  <label for="chapter">Chapter</label>
  <input type="text" id="chapter" name="chapter">
  <input type="submit" name="submit" value="Submit">
  
  <label for="verse">Verse</label>
  <input type="text" id="verse" name="verse">
  <input type="submit" name="submit" value="Submit">
  
  <label for="content">Content</label>
  <input type="textarea" id="content" name="content">
  <input type="submit" name="submit" value="Submit">
  
  <?php
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
  
      $stmt = $db->prepare('SELECT name FROM topic');
      $stmt->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
        // foreach ($rows as $row)
        // {
          
          // echo "<input type='checkbox' name='topic' value=" . "$row['name']" . ">" . $row['name'];

        // }      
  
  
  ?>
</form>
  
</body>
</html>