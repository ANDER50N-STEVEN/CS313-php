<?php
	session_start();
	if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else{
	header("Location: sign-in.php");
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
			<?php
				require('dbConnect.php');
			?>
	</head>
		<body>
			<?php
				
	
				echo "Welcome " . $_SESSION['userName'];
							
			?>
	
	</body>
</html>