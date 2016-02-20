<?php
session_start();

	require("config.php");

		
		$username = $_POST['username'];
		$password = $_POST['password'];


		$quary ="SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password' ";
	//var_dump($_POST);die();
	     $result=mysqli_query($conn,$quary);
		if($result->num_rows !=0)
		{
			//echo "true";
			foreach ($result as $key => $value) {
				$_SESSION['id']=$value['id'];
				$_SESSION['type']=$value['type'];
				$_SESSION['username']=$value['username'];
				$_SESSION['name']=$value['name'];
				$_SESSION['birthdate']=$value['birthdate'];
				
				header('Location: home.php');

			}
		}
		else
		{
			echo "Not valid user";
		}

	
?>