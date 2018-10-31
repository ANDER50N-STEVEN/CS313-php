<?php
	session_start();
	if (isset($_SESSION['userName']))
{
	$userName = $_SESSION['userName'];
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