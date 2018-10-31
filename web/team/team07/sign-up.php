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
						$passwordHash = password_hash($pass, PASSWORD_DEFAULT);
					
						$stmt = $db->prepare('INSERT INTO simple(username, password) 
								VALUES (:userName, :pass)');
						$stmt->bindValue(':userName', $userName, PDO::PARAM_STR);
						$stmt->bindValue(':pass', $passwordHash, PDO::PARAM_STR);
					
						$stmt->execute();
						$new_Page ="sign-in.php";
						header("Location: $new_Page");
						die();
					
					} else  {
						echo "<span style='color:red'> Passwords do not Match </span><br />";
						echo "<script>function myFunction() {document.getElementById('invalid').style.visibility = 'visible;}</script>";
					}
			
				}
			?>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			
		<label for="username"> Please Enter A Username</label></br>
		<input type="text" id="userName" name="userName"></br>

		<label for="pass">Please Enter A Password</label></br>
		<input type="password" id="pass" name="pass">
		<span hidden class="invalid" style='color:red'> * </span><br /></br>
		<label for="test">Please Re-enter your Password</label></br>
		<input type="password" id="test" name="test">
		<span hidden class="invalid" style='color:red'> * </span><br />

		</br>
		<input type="submit" name="submit" value="Submit">
		</form></br> 
	</body>
</html>