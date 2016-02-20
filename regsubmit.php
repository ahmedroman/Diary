<?php

require("config.php");

if(isset($_POST['submit'])) {	
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$birthdate=$_POST['bdate'];
	$email= $_POST['email'];
	$sex=$_POST["sex"];
	
		
		$sql="INSERT INTO user( name, username, password,birthdate,email,type,sex) VALUES('$name','$username','$password','$birthdate','$email','client','$sex')";
		// $result = mysqli_query($conn,);
		// echo $result;

	// echo mysql_errno($conn) . ": " . mysql_error($conn) . "\n";


    


	if (!mysqli_query($conn,$sql))
  {
  echo("Error description: " . mysqli_error($conn));
  }
  header('Location: registration.php');
}
?>