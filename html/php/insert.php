<html>
	<head>
		<title>
			Adding student data			
		</title>
	</head>

	<body>
	
	<!--ask the user for all the input -->
	<form method = "post" action= "insert.php" > 

	CWID: <br>
	<input type = "number" name = "cwid" > <br>
	First Name: <br>
	<input type = "text" name = "firstname" > <br>
	Last Name: <br>
	<input type = "text" name = "lastname" > <br>
	Address: <br>
	<input type = "text" name = "address" > <br> 
	City: <br>
	<input type = "text" name = "city" > <br>
	Zip: <br>
	<input type = "text" name = "zip" > <br>
	<input type = "submit" name = "add" > <br>

	</form> 	

		
	<?php

	require_once ('../config.php');

	$isValid = FALSE;
	/*VALIDATE ALL INPUTS*/

	//cwid
	if(isset($_POST["cwid"])&& $_POST['cwid'] != "")
	{
		//first name
		if(isset($_POST['firstname'])&& $_POST['firstname'] != "")
		{
			//last name
			if(isset($_POST['lastname']) && $_POST['lastname'] != "")
			{
				//address
				if(isset($_POST['address'])&& $_POST['address'] != "")
				{
					//city
					if(isset($_POST['city'])&& $_POST['city'] != "")
					{
						//zip
						if(isset($_POST['zip'])&& $_POST['zip'] != "")
						{

							$cwid = $_POST['cwid'];
							$fname = $_POST['firstname'];
							$lname = $_POST['lastname'];
							$address = $_POST['address'];
							$city = $_POST['city'];
							$zip = $_POST['zip'];

							echo $cwid ." " . $fname ." " ;


							$isValid = TRUE;
						}
					}
				}	

			}
		}		
	}

	//If not valid then do not go in.

		/*if the user chose insert then insert in the following 
		order												+---------+-------------+------+-----+---------+-------+
	| Field   | Type        | Null | Key | Default | Extra |
	+---------+-------------+------+-----+---------+-------+
	| cwid    | int(11)     | NO   | PRI | NULL    |       |
	| fname   | varchar(15) | NO   |     | NULL    |       |
	| lname   | varchar(15) | NO   |     | NULL    |       |
	| address | varchar(20) | YES  |     | NULL    |       |
	| city    | varchar(15) | YES  |     | NULL    |       |
	| zip     | int(11)     | YES  |     | NULL    |       |
	+---------+-------------+------+-----+---------+-------+
		*/
	
	//if validation passed
	if($isValid)
	{
		 $sql = 'INSERT INTO student (cwid, fname, lname, address, city, zip) VALUES ($cwid, $fname, $lname, $address, $city, $zip)';
		$response = @mysqli_query($sql,$connect);
		 if($result)
		 {
		 	echo "success<br>";
		 }
		 else
		 	echo "failed query<br>"; 

		echo "validated";
		$cwid = "";
		$fname = "";
		$lname = "";
		$address = "";
		$city = "";
		$zip = ""; 

		$isValid = false;
		// header('Location: ../ddlscript.php');
	}
	?>

	</body>

</html>