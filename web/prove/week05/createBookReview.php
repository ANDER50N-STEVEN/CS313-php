<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="../stylesheet.css" />
			<title>CREATE PROFILE</title>
			<?php
				require('dbConnect.php');
				$create = false;
			?>
	</head>
		<body>
			<?php
				require('../header.php');
				if($_SERVER['REQUEST_METHOD'] == 'GET')
				{
					$title = htmlspecialchars($_GET['title']);
			
					$stmt = $db->prepare('SELECT title
											From project1.library');
					$stmt->execute();
					$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
					foreach($rows as $row){
						if($row['title'] == $title)
							$create = true;
					}				
				}
			?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			
			<label for="name">Title</label></br>
			<input type="text" id="name" name="name" value="<?php $title?>"></br>
			
			<label for="username"> Author</label></br>
			<input type="text" id="userName" name="userName"></br>

			<label for="message">Genre</label></br>
			<?php
			  $stmt = $db->prepare('SELECT id, genre FROM project1.genre');
			  $stmt->execute();
			  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);      
			  
			  foreach ($rows as $row){
				  echo "<input type='checkbox' name='genreIds[]'" . "value='" . $row['id'] . "'>" . $row['genre'] . "</br>";
				  } 
			?>
			<input type = 'checkbox' >
			<input type="text" id="addGenre" name="addGenre">
			</br>
			<input type='radio' name='rating' value='1'>1</input>
			<input type='radio' name='rating' value='2'>2</input>
			<input type='radio' name='rating' value='3'>3</input>
			<input type='radio' name='rating' value='4'>4</input>
			<input type='radio' name='rating' value='5'>5</input></br>
			
			<label for="name">Review</label></br>
			<textarea rows="4" cols="50" id="name" name="name" value="<?php $title?>"></textarea></br>
					
			<input type="submit" name="submit" value="Submit">
			</form></br> 
			<?php
			require('../../footer.php');
			?>
	</body>
</html>