<?php 
	session_start();
	require("config.php");

//var_dump($_SESSION);

//var_dump($_POST);die();

	if(isset($_POST['csubmit'])) {	
	$comm = $_POST['comm'];
	$did =$_POST['did'];
	
	$id=$_SESSION['id'];
	$username=$_SESSION['username'];

	echo $comm.$did.$id.$username;
		
		$sql="INSERT INTO `comments`( `did`, `id`, `username`, `comment`) VALUES('$did','$id','$username','$comm')";
		// if(mysqli_query($conn,$sql)){
		// 	echo "Success";
		// }
		 
//die();
	// echo mysql_errno($conn) . ": " . mysql_error($conn) . "\n";


    // die();


	if (!mysqli_query($conn,$sql))
  {
  echo("Error description: " . mysqli_error($conn));
  }
  header('Location: shared.php');
}

?>