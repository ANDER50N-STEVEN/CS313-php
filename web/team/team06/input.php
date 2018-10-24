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
  
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    
		$book = htmlspecialchars($_POST['book']);
		$chapter = htmlspecialchars($_POST['chapter']);
		$verse = htmlspecialchars($_POST['verse']);
		$content = htmlspecialchars($_POST['content']);
		$topicIds = $_POST['topicIds'];
		
		  
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
		
		$stmt = $db->prepare('INSERT INTO scriptures(book, chapter, verse, content) 
							VALUES (:book, :chapter, :verse, :content)');
		$stmt->bindValue(':book', $book, PDO::PARAM_STR);
		$stmt->bindValue(':chapter', $chapter, PDO::PARAM_INT);
		$stmt->bindValue(':verse', $verse, PDO::PARAM_INT);
		$stmt->bindValue(':content', $content, PDO::PARAM_STR);
		$stmt->execute();
		
		$newId = $db->lastInsertId('scriptures_id_seq');
		echo "why";
		foreach ($topicIds as $topicId)
		{
			echo "ScriptureId: $newId, topicId: $topicId";
			
			$stmt = $db->prepare('INSERT INTO scripture_to_topic(scripture_id, topic_id)
								VALUES(:newId, :topicId)');
			$stmt->bindValue(':newId', $newId, PDO::PARAM_INT);
			$stmt->bindValue(':topicId', $topicId, PDO::PARAM_INT);
			
			$stmt->execute();
		}
	echo "won't";
	
  }
  ?>
</head>
<body>

  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="book">Book</label>
  <input type="text" id="book" name="book">
  
  </br>
  
  <label for="chapter">Chapter</label>
  <input type="text" id="chapter" name="chapter">
  
  </br>
  
  <label for="verse">Verse</label>
  <input type="text" id="verse" name="verse">
  
  </br>
  
  <label for="content">Content</label>
  <input type="textarea" id="content" name="content">
 
  </br>
  
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
  
      $stmt = $db->prepare('SELECT id, name FROM topic');
      $stmt->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
        foreach ($rows as $row)
        {
          
		echo "<input type='checkbox' name='topicIds[]'" . "value='" . $row['id'] . "'>" . $row['name'] . "</br>";

        }  
  
  ?>
  <input type="submit" name="submit" value="Submit">
</form>
  
</body>
</html>