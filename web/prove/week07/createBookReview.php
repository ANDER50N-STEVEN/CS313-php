<?php
	session_start();
		if (isset($_SESSION['userName']))
{
	$userName = $_SESSION['userName'];
}
else{
	header("Location: New.php");
	die();
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="../stylesheet.css" />
			<title>CREATE PROFILE</title>
			<?php
				require('dbConnect.php');
			?>
	</head>
		<body>
			<?php
				require('../header.php');
				
				$title = htmlspecialchars($_GET['title']);
				$_SESSION['title'] = $title;
				
				$result = $db->prepare("SELECT id, author_id, summary FROM project1.library WHERE title = :title");
				$result->bindValue(':title', $title, PDO::PARAM_STR);
				$result->execute();
				$row = $result->fetch(PDO::FETCH_ASSOC);
					if($row['id'] == 0) {
						 $author_id = '';
						 $summary = '';
					}else{
						$author_id = $row['author_id'];
						$summary = $row['summary'];
					}
				if($author_id != ''){
					$result = $db->prepare('SELECT author_name FROM project1.author WHERE id = :id');
					$result->bindValue(':id', $author_id, PDO::PARAM_STR);
					$result->execute();
					$row = $result->fetch(PDO::FETCH_ASSOC);
					$author = $row['author_name'];
				}
						
				
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					$title = htmlspecialchars($_POST['title']);
					$author = htmlspecialchars($_POST['author']);
					$genreIds = $_POST['genreIds'];
					$rating = $_POST['rating'];
					$summary = htmlspecialchars($_POST['summary']);
					$review = htmlspecialchars($_POST['review']);
					$addGenre = htmlspecialchars($_POST['addGenre']);
					$user_id = $_SESSION['user_id'];
					
					if(!empty($addGenre)){
						echo $addGenre;
						$stmt = $db->prepare('INSERT INTO project1.genre(genre)
											VALUES(:addGenre)');
						$stmt->bindValue(':addGenre', $addGenre, PDO::PARAM_STR);
						$stmt->execute();
						$addGenreId = $db->lastInsertId('project1.genre_id_seq');
						array_push($genreIds, $addGenreId);	
					}
					
					$result = $db->prepare('SELECT id FROM project1.author WHERE author_name = :author');
					$result->bindValue(':author', $author, PDO::PARAM_STR);
					$result->execute();
					$row = $result->fetch(PDO::FETCH_ASSOC);
						if($row['id'] == 0) {
							echo $row['id'];
							$stmt = $db->prepare('INSERT INTO project1.author(author_name)
												VALUES (:author_name)');
							$stmt->bindValue(':author_name', $author, PDO::PARAM_STR);
							$stmt->execute();
							$author_id = $db->lastInsertId('project1.author_id_seq');
						}else
							$author_id = $row['id'];
					
					$result = $db->prepare("SELECT id FROM project1.library WHERE title = :title");
					$result->bindValue(':title', $title, PDO::PARAM_STR);
					$result->execute();
					$row = $result->fetch(PDO::FETCH_ASSOC);
						if($row['id'] == 0) {
							 $stmt = $db->prepare('INSERT INTO project1.library(title, author_id, summary)
												VALUES (:title, :author_id, :summary)');
							 $stmt->bindValue(':title', $title, PDO::PARAM_STR);
							 $stmt->bindValue(':author_id', $author_id, PDO::PARAM_INT);
							  $stmt->bindValue(':summary', $summary, PDO::PARAM_STR);
							 $stmt->execute();
							 $title_id = $db->lastInsertId('project1.library_id_seq');
						}else
							$title_id = $row['id'];
						
					foreach ($genreIds as $genreId){
						echo $genreId;
						$stmt = $db->prepare('INSERT INTO project1.books_genres(title_id, genre_id)
											VALUES(:newId, :genreId)');
						$stmt->bindValue(':newId', $newId, PDO::PARAM_INT);
						$stmt->bindValue(':genreId', $genreId, PDO::PARAM_INT);
						$stmt->execute();
					}
					
					$stmt = $db->prepare('INSERT INTO project1.rating(user_id, book_id, rating, review) 
							VALUES (:user_id, :book_id, :rating, :review)');
					$stmt->bindValue(':user_id',$user_id , PDO::PARAM_STR);
					$stmt->bindValue(':book_id', $title_id, PDO::PARAM_INT);
					$stmt->bindValue(':rating', $rating, PDO::PARAM_INT);
					$stmt->bindValue(':review', $review, PDO::PARAM_STR);
					$stmt->execute();
					$new_Page ="userPage.php";
					header("Location: $new_Page");
					die();
				}
			?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class='signin'>
			
			<h2> <?php echo $_SESSION['title']?></h2>
			<?php
			if($author != ''){
				echo"<p style='text-align: center' value=". $author .">" . $author . "</p>";
			}
			else{
			echo"	<label for='author'> Author</label></br>";
			echo "<input type='text' id='author' name='author' value =" . $author . "></br></br>";
			}
			?>
			

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
			<input type="text" id="addGenre" name="addGenre" style='width:100px'>
			</br></br>
			
			<input type='radio' name='rating' value='1'>1</input>
			<input type='radio' name='rating' value='2'>2</input>
			<input type='radio' name='rating' value='3'>3</input>
			<input type='radio' name='rating' value='4'>4</input>
			<input type='radio' name='rating' value='5'>5</input></br></br>
			<?php
				if($summary != ''){
					echo "<p name='summary' class='summary' value=" . $summary . ">" . $summary . "</p>";
				}
				else{
					echo "<label for='summary'>Summary(Optional)</label></br>";
					echo "<textarea rows='4' cols='50' id='review' name='review' ></textarea></br>";
				}
			?>
			
		
			
			<label for="review">Review</label></br>
			<textarea rows="4" cols="50" id="review" name="review" ></textarea></br>
					
			<input type="submit" name="submit" value="Submit" class='submit'>
			</form></br> 
			<?php
			require('../../footer.php');
			?>
	</body>
</html>