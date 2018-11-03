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
			<div class="signin">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			
			<label for="name">What is your full name</label></br>
			<input type="text" id="name" name="name"></br>
				
			<label for="username"> Please Enter A Username</label></br>
			<input type="text" id="userName" name="userName"></br>

			<label for="message">Please Enter A Password</label></br>
			<input type="password" id="pass" name="pass">
			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					echo "<span style='color:red'> * </span>";
				}
				echo "</br>";
			?>
			<label for="test">Please Re-enter your Password</label></br>
			<input type="password" id="test" name="test">
			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					echo "<span style='color:red'> * </span>";
				}
				echo "</br>";
			?>
			<input type="submit" name="submit" value="Submit">
			</form></br> </div>
				<?php
				require('../../footer.php');
			?>
	</body>
</html>