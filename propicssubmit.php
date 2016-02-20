<?php
session_start();
require("config.php");

$id=$_SESSION['id'];
//var_dump($_POST);die();
if (isset($_POST["submit"])) {
	$flag = true;
	//var_dump($_POST);die();



if ($_FILES['fileToUpload']['size']>2000000) {
			$file_error = "maximum file size allowed is 2000000 bytes.";
			$flag = false;
		}
		

		$allowed =  array('gif','png' ,'jpg','JPG', 'PNG', 'GIF');
		$filename = $_FILES['fileToUpload']['name'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		if(!in_array($ext,$allowed) ) {
		    $file_error = "this file type is not supported.";
		    $flag = false;
		}
		

		if ($flag == true) {
			
			# code...
			$file_path = "propic/".$id.".jpg";
			
			move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "./propic/".$id.".jpg");

			


			$sql = "UPDATE `user` SET `img`='$file_path' WHERE `id`='$id' ";

			if ($conn->query($sql) === TRUE) {

			   header('Location: home.php');
			    

			} else {
			    echo "Error occured.";
			}


		
		}
	}	
	

?>