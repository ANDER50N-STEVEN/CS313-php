<!DOCTYPE html>
<html lang="en">
<head>
  <title>Team 05</title>
</head>
<body>
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
  
  SELECT * FROM scriptures;
  
  $id;
	$book;
	$chapter;
	$verse;
	$content;
  echo "<p><span style='font-size:2em; font-weight:bold;'>Scripture Resources</span></p>";
  echo "<p><span style='font-weight:bold'>".$book. " " .  $chapter . ":". $verse ."</span>\"".$content."\"</p>";
  ?>
</body>
</html>