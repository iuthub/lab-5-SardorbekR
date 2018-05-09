<!DOCTYPE html>
<html>
<head>
	<title>Logged in</title>
</head>
<body>
	<?php
	$login=$_POST['Login'];
	$password=$_POST['Password'];
	if($login=="admin" && $password=="74"){?>
		
		<img src="img.jpg" style="height: 45%; width: 55%;"> 
		<?php 
	}else{
		echo "Wrong login or password";
	}?><form action="index.php" ><br>
		<input type="submit" name="Logout" value="Log out" style="height: 25pt; width: 75pt;">
</form></body>
</html>