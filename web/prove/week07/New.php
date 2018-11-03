<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="../stylesheet.css" />
			<title>SIGN IN</title>
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
							if(password_verify( $pass, $row['password']) && $row['display_name'] == $userName){
							$_SESSION['name'] = $row['username'];
							$_SESSION['user_id'] = $row['id'];
							$_SESSION['display_name'] = $row['display_name'];
							$new_Page ="userPage.php";
							header("Location: $new_Page");
							die();
							}
						}
						echo "<p>incorrect password, please try again.</p>";	
					}
				}
			?>
		
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class='signin'>
		<img src="book.png" alt="Logo" height="120" width="120"></br>
		<label for="username"> SIGN INTO uREVIEW</label></br>
		<input type="text" id="userName" name="userName" placeholder="User Name"></br>

		<label for="message">Please Enter Your Password</label></br>
		<input type="password" id="pass" name="pass" placeholder="Password"></br>
		<input type="submit" name="submit" value="Submit">
		</form></br> 
		<form action="createProfile.php" class='signin'>
		<input type="submit" value="Create Profile" />
		</form>
		
		

		<?php
			require('../../footer.php');
		?>
	</body>
</html>