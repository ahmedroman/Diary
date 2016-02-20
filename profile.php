<?php
session_start();
require("config.php");

$id=$_GET['id'];
// echo $id;
$sqls="SELECT * FROM `user` WHERE `id`='$id' ";
$result=mysqli_query($conn,$sqls);
foreach ($result as $key => $value) {
	$name=$value['name'];
	$uname=$value['username'];
	$birthdate=$value['birthdate'];
	$email=$value['email'];

}

?>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javascript.js"></script>
 
	 <script>
	 function profile(){
	 	  var div = document.getElementById('profile');
	 	  //var siv = document.getElementById('show');

	 	   if (div.style.display == 'none') {
		        //siv.style.display = 'none';
		        div.style.display = 'block';
		    }
		    else {
		        //siv.style.display = 'block';
		        div.style.display = 'none';
		    }
		   

	 	}
	 </script>
</head>
<body>
	<div class="pmain">
		<div class="menu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="shared.php">Shared Notes</a></li>
				<li><a href="javascript:profile()">Profile</a></li>
			</ul>
		</div>
		<div class="profile" id="profile">
				 <div class="pshow">
					<label id="pro">PROFILE</label><br>
					<div class="propic"><img src="propic/<?php echo $_SESSION["id"]."."."jpg"; ?>" height="200px" width="200px"></div>
					<form action="propicsubmit.php" method="post" enctype="multipart/form-data">
						<input type="file" name="fileToUpload" id="fileToUpload">
	                    <input type="submit" name="submit" value="Upload Image">
                    </form>
					<label>NAME:</label>
					<label><?php echo $_SESSION['name'];?></label><br>
					<label>USERNAME:</label>
					<label><?php echo $_SESSION['username'];?></label><br>
					<label>BIRTHDATE:</label>
					<label><?php echo $_SESSION['birthdate'];?></label><br><br>
					<a href="logout.php">Logout</a>

				</div>
			</div>

		<div class="proinfo">
			<div class="props">

			<label id="pros">PROFILE</label><br>
					<div class="propic"><img src="propic/<?php echo $id."."."jpg"; ?>" height="200px" width="200px"></div>
					
					<label id="pid">NAME:</label>
					<label id="piid"><?php echo $name ; ?></label><br>
					<label id="pid">USERNAME:</label>
					<label id="piid"><?php echo $uname;?></label><br>
					<label id="pid">BIRTHDATE:</label>
					<label id="piid"><?php echo $birthdate;?></label><br>
					<label id="pid">EMAIL:</label>
					<label id="piid"><?php echo $email;?></label><br>

			</div>


		</div>

	</div>

</body>
</html>