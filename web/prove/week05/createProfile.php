<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="../stylesheet.css" />
			<title>User Select</title>
			<?php
				require('dbConnect.php');
				
			?>
	</head>
		<body>
			<?php
				require('../header.php');
				if($_SERVER['REQUEST_METHOD'] == 'POST')
				{
					echo "enter if";
					$name = htmlspecialchars($_POST['name']);
					$userName = htmlspecialchars($_POST['userName']);
					$pass = htmlspecialchars($_POST['pass']);
					
					$stmt = $db->prepare('INSERT INTO project1.user(username, password, display_name) 
							VALUES (:name, :pass, :userName)');
					$stmt->bindValue(':name', $name, PDO::PARAM_STR);
					$stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
					$stmt->bindValue(':userName', $userName, PDO::PARAM_STR);
					$stmt->execute();
					$new_Page ="New.php";
					header("Location: $new_Page");
					die();
					
				}
			?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			
			<label for="name">What is your full name</label></br>
		<input type="text" id="name" name="name"></br>
			
		<label for="username"> Please Enter A Username</label></br>
		<input type="text" id="userName" name="userName"></br>

		<label for="message">Please Enter A Password</label></br>
		<input type="text" id="pass" name="pass"></br>
		<input type="submit" name="submit" value="Submit">
		</form></br> 
			<?php
			require('../../footer.php');
		?>
	</body>
</html>