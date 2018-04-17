<html>
	<head>
		<title>
			Printing data			
		</title>
	</head>

	<body>
		
	<?php

		require_once ('../config.php');
		
		$query = "SELECT * FROM student";

		//send the query to the DB
		$response = @mysqli_query($connect, $query);

		if($response)
		{
			echo '<table align = "left"
				cellspacing = "5" cellpadding="8">
				
			<tr><td align="left"><b>CWID</b>
			<td align="left"><b>First Name</b>
			<td align="left"><b>Last Name</b>
			<td align="left"><b>Address</b>
			<td align="left"><b>City
			<td align="left"><b>Zip</b></tr>';

			while($row = mysqli_fetch_array($response))
			{
				echo '<tr> <td align = "left">' .
				 $row[cwid] . '</td><td align = "left">' .
				 $row[fname] . '</td><td align = "left">' .
				 $row[lname] . '</td><td align = "left">' .
				 $row[address] . '</td><td align = "left">' .
				 $row[city] . '</td><td align = "left">' .
				 $row[zip] . '</td><td align = "left">' ;

				echo '</tr>';
			}

			echo "</table>";
		}
		else
		{
			echo "Couldn't issue database query";
			echo mysqli_error($connect); //issue error
		}

		mysql_close($connect);
	?>

	</body>

</html>