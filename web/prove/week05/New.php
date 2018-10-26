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
					if(isset($_POST['pass']))
					{
						$userName = htmlspecialchars($_POST['userName']);
						$pass = htmlspecialchars($_POST['pass']);
						$query = "SELECT password, username, id, display_name 
						FROM project1.user";
						
						$stmt = $db->prepare($query);
						$stmt->execute();
						$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

						foreach ($rows as $row)
						{
							if($row['password'] == $pass && $row['display_name'] == $userName){
							$_SESSION['name'] = $row['username'];
							$_SESSION['user_id'] = $row['id'];
							$_SESSION['display_name'] = $row['display_name'];
							echo '<script>window.location.href = "userPage.php";</script>';
							}
						}
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
		<form method="post" action="creatProfile.php">
		<input type="submit" name="submit" value="Create Profile">
		</form>
		
		

		<?php
			require('../../footer.php');
		?>
	</body>
</html>