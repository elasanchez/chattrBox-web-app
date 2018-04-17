
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

	$server = "localhost";
	$username = "root";
	$password = "sanchez08";

	//create connection
	$connect =  @mysqli_connect($server, $username, $password, 'university');

	//check connection
	if(!$connect)
	die("connection failed:" . mysqli_connect_error());

	echo "Connected successfully <br>";

		

	?>

</body>
</html>


