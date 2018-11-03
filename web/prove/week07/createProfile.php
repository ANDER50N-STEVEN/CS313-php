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
				
			?>
	</head>
		<body>
			<?php
				require('../header.php');
				if($_SERVER['REQUEST_METHOD'] == 'POST')
				{
					$name = htmlspecialchars($_POST['name']);
					$userName = htmlspecialchars($_POST['userName']);
					$pass = htmlspecialchars($_POST['pass']);
					$test = htmlspecialchars($_POST['test']);
					$rgx = '/^\S*(?=\S{7,})(?=\S*[a-z])(?=\S*[\d])\S*$/';
					
					if ($pass == $test) {
						if(preg_match($rgx, $pass)){
							$passwordHash = password_hash($pass, PASSWORD_DEFAULT);
						
							$stmt = $db->prepare('INSERT INTO project1.user(username, password, display_name) 
							VALUES (:name, :pass, :userName)');
								
						
							$stmt->bindValue(':name', $name, PDO::PARAM_STR);
							$stmt->bindValue(':pass', $passwordHash, PDO::PARAM_STR);
							$stmt->bindValue(':userName', $userName, PDO::PARAM_STR);
							$stmt->execute();
							$new_Page ="New.php";
							header("Location: $new_Page");
							die();
					
						}else
							echo $pass;
							echo "<span style='color:red'> Passwords must be 7 to 15 characters and contain a number, capital, and non-capital letter </span><br />";	
						
					} else  {
						echo "<span style='color:red'> Passwords do not Match </span><br />";
					}
				
				}
			?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="signin">
			
			<label for="name">Create Profile</label></br>
			<input type="text" id="name" name="name" placeholder='Full Name'>
			<hr style="height:5px; visibility:hidden;" />
				
			<label for="username"></label>
			<input type="text" id="userName" name="userName" placeholder='User Name'>
			<hr style="height:5px; visibility:hidden;" />

			<label for="message"></label>
			<input type="password" id="pass" name="pass" placeholder='Password'>
			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					echo "<span style='color:red'> * </span>";
				}
				echo "</br>";
			?>
			<hr style="height:5px; visibility:hidden;" />
			
			<label for="test"></label>
			<input type="password" id="test" name="test" placeholder='Re-Enter Password'>
			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					echo "<span style='color:red'> * </span>";
				}
				echo "</br>";
			?>
			<hr style="height:5px; visibility:hidden;" />
			
			<input type="submit" name="submit" value="Submit">
			</form></br>
				<?php
				require('../../footer.php');
			?>
	</body>
</html>