<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<title>SIGN IN</title>
			<?php
				require('dbConnect.php');
			?>
	</head>
		<body>
			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST')
				{
					if(isset($_POST['pass']))
					{
						$userName = htmlspecialchars($_POST['userName']);
						$pass = htmlspecialchars($_POST['pass']);
						$passwordHash = password_hash($pass, PASSWORD_DEFAULT);
						$query = "SELECT password, username, id
						FROM simple";
						
						$stmt = $db->prepare($query);
						$stmt->execute();
						$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

						foreach ($rows as $row)
						{
							echo "entering if";
							if(password_verify( $passwordHash, $row['password']) && $row['username'] == $userName){
							$_SESSION['userName'] = $row['username'];
							$_SESSION['user_id'] = $row['id'];
							$new_Page ="welcome.php";
							header("Location: $new_Page");
							die();
							}
						}
						echo $pass;
						echo $passwordHash;
						echo "<p>incorrect password, please try again.</p>";	
					}
				}
			?>
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="username"> Please Enter Your Username</label></br>
		<input type="text" id="userName" name="userName"></br>

		<label for="message">Please Enter Your Password</label></br>
		<input type="text" id="pass" name="pass"></br>
		<input type="submit" name="submit" value="Submit">
		</form></br> 
		<form action="sign-up.php">
		<input type="submit" value="Sign Up" />
		</form>
	</body>
</html>