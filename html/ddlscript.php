
<html>
	<head>
		<title>
			 UDWA 
		</title>

			<h2>UNIVERSITY DATABASE WEB APPLICATION</h2> 
	</head>

	<body>



		<?php 
		//in this class define the structure of the database,
		//in other words Data Definition Language of DB university


		//reset the variable every time the page refreshes
		$decision = ""; 

		/*Determine which button was selected*/
		if(isset($_POST["Insert"]))
		{
			$decision = $_POST['Insert'];
		}
		else if(isset($_POST["Delete"]))
		{
			$decision = $_POST['Delete'];
		}
		else if(isset($_POST["Print"]))
		{
			$decision = $_POST['Print'];
		}

		echo $decision. "<br";
		$query = 'Use university';
		// $ret = mysqli_query($connect, $query);


	
		//Switch to another php
		if($decision == "Insert")
		{
			header('Location: /php/insert.php');
		}
		else if($decision == "Delete")
		{
			header('Location: /php/delete.php');
		}
		else if ($decision == "Print")
		{
			header('Location: /php/print.php');
		}
		// else  GOING BACK DOESNT WORKK FOR ME




		// if(!$ret)
		// 	echo "Successfully queried <br>";
		// else
		// 	echo "Error has occured. <br>" . $connect->error;
		// echo "<br> The returned query is:  ";
		// echo $ret;

?>
		<!--create buttons as a menu for the user.-->
		<form action="ddlscript.php" method="post">
		  <input type="submit" name = "Insert" value="Insert">

		  <input type="submit" name = "Delete" value="Delete">

		  <input type="submit" name = "Print" value="Print">

		</form>



	</body>

	<?php	$connect->close(); ?>	
</html>






