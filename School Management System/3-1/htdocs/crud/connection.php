<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "peopledb";

		//create a connection object

		$conn = mysqli_connect($servername, $username, $password, $database);
	
		if (!$conn) {
			die("Sorry! Failed to connect!".mysqli_connect_error());
		}

		else
		{
			echo "Congratulations! Connection is successful";
		}

		$sql = "INSERT INTO `people` (`$faname`, `$laname`, `$mname`, `$address`,'$contact','$comment') VALUES ('$faname', '$lname', '$mname', '$address','$contact','$comment')";

		$result = mysqli_query($conn, $sql);

		if($result)
		{
			echo"The record is created successfully!";
		}
		else
		{
			echo"The record is not created successfully because of this error--->".mysqli_error($conn);
		}

?>


