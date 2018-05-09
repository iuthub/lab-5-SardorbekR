<?php

if(isset($_POST["reset"])){
    $_COOKIE["counter"]=-1;
   } 
    $counter= (isset($_COOKIE["counter"]))? $_COOKIE["counter"] : 0;
	$counter++;
	setcookie("counter", $counter, time()+400);
	echo "Visit Count: $counter" . "<br>";
    $animal = array('Eagle', 'lion', 'cat', 'dog', 'snake');
    setcookie("animal_value", $animal_value, time()+600);
    $animal_value= (isset($_COOKIE["animal_value"]))? $_COOKIE["animal_value"]: $animal[array_rand($animal)];    
    echo "Animal: $animal_value";
    
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />	
	<title>poweranimal</title>
</head>
<body>
	<form action="" method="post">
        <input type="submit" name="reset" value="start over">
	</form>
</body>
</html>