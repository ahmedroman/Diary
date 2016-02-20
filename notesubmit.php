<?php
	session_start();
	require("config.php");

	if(isset($_POST['dsubmit'])) {	
	$dname = $_POST['dname'];
	$dnote = $_POST['dnote'];
	$ddate = $_POST['ddate'];
	$id=$_SESSION['id'];
	$check=$_POST["scheck"];
	if ($check==1) {
		$check=1;
	}
	else{
		$check=0;
	}

	
		
		$sql="INSERT INTO ddiary( id,dname, dnote, ddate,dshare) VALUES('$id','$dname','$dnote','$ddate','$check')";
		// $result = mysqli_query($conn,);
		// echo $result;

	// echo mysql_errno($conn) . ": " . mysql_error($conn) . "\n";


    


	if (!mysqli_query($conn,$sql))
  {
  echo("Error description: " . mysqli_error($conn));
  }
  header('Location: home.php');
}

?>