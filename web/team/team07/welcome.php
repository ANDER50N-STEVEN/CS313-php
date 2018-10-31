<?php
	session_start();
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
				
						$query = "SELECT password, username, id
						FROM simple";
						
						$stmt = $db->prepare($query);
						$stmt->execute();
						$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

						foreach ($rows as $row)
						{
							if($row['display_name'] == $_SESSION['userName']){
							echo "Welcome " . $_SESSION['userName'];
							
							}
							else{
								echo "oops";
								// $new_Page ="sign-in.php";
							// header("Location: $new_Page");
							// die();
							}
						}
			?>
	
	</body>
</html>