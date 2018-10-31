<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sign Up</title>
			<?php
				require('dbConnect.php');
			?>
	</head>
		<body>
			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST')
				{
					$userName = htmlspecialchars($_POST['userName']);
					$pass = htmlspecialchars($_POST['pass']);
					$test = htmlspecialchars($_POST['test']);
					if ($pass == $test) {
						if(preg_match('(?=.{7,26})', $pass)){
							$passwordHash = password_hash($pass, PASSWORD_DEFAULT);
						
							$stmt = $db->prepare('INSERT INTO simple(username, password) 
									VALUES (:userName, :pass)');
							$stmt->bindValue(':userName', $userName, PDO::PARAM_STR);
							$stmt->bindValue(':pass', $passwordHash, PDO::PARAM_STR);
						
							$stmt->execute();
							$new_Page ="sign-in.php";
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
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			
		<label for="username"> Please Enter A Username</label></br>
		<input type="text" id="userName" name="userName"></br>

		<label for="pass">Please Enter A Password</label></br>
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
		</form></br> 
	</body>
</html>