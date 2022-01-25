<?php

$servername = "localhost";
$username = "username";
$password = "";
$dbname = "registrar";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}



if ($conn->query($sql) === TRUE) {
	echo "record inserted successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}




<!-- 

$conn=mysqli_connect($url,$username,$password,'registrar');
if(!$conn){
    die('could not connect My Sql:'.mysql_error());
}
?> -->
