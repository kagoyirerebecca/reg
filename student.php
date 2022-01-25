<?php

		
		$conn = mysqli_connect("localhost", "root", "", "registrar");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$First_Name = $_REQUEST['First_Name'];
		$Last_Name = $_REQUEST['Last_Name'];
		$Id=$_REQUEST['Id'];
		$Password = $_REQUEST['Password'];
		$Department = $_REQUEST['Department'];
        $Faculty = $_REQUEST['Faculty'];
		
		
		$sql = "INSERT INTO student VALUES ('$First_Name',
			'$Last_Name','$Id','$Password','$Department','$Faculty')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo ("\n$First_Name\n $Last_Name\n "
				. "$Id\n $Password\n $Department\n$Faculty");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		
		mysqli_close($conn);
		?>
	