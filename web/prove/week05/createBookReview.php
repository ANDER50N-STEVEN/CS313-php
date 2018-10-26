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
				echo $create;
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
				echo $create;
			?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			
			<label for="title">Title</label></br>
			<input type="text" id="title" name="title" value="<?php echo $title?>"></br></br>
			
			<label for="author"> Author</label></br>
			<input type="text" id="author" name="author"></br></br>

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
			</br></br>
			<input type='radio' name='rating' value='1'>1</input>
			<input type='radio' name='rating' value='2'>2</input>
			<input type='radio' name='rating' value='3'>3</input>
			<input type='radio' name='rating' value='4'>4</input>
			<input type='radio' name='rating' value='5'>5</input></br></br>
			
			<label for="review">Review</label></br>
			<textarea rows="4" cols="50" id="review" name="review" ></textarea></br>
					
			<input type="submit" name="submit" value="Submit">
			</form></br> 
			<?php
			require('../../footer.php');
			?>
	</body>
</html>