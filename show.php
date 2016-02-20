<?php 

	require("config.php");
	session_start();
	$sdate = $_POST['sdate'];
	$id=$_SESSION['id'];
	$quary ="SELECT * FROM `ddiary` WHERE `id`='$id' AND `ddate`='$sdate' ";
	$result=mysqli_query($conn,$quary);
	foreach ($result as $key => $value) {
		$did=$value['did'];
		$dname=$value['dname'];
		$dnote=$value['dnote'];
	}

?>
<html>
<head>
	<title>SHOW NOTE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
	 function sprofile(){
	 	  var div = document.getElementById('sprofile');
	 	  

	 	   if (div.style.display !== 'none') {
		        
		        div.style.display = 'none';
		    }
		    else {
		        div.style.display = 'block';
		        
		    }
		   

	 	}
	 </script>
</head>
<body>
	<div class="smain">
		<div class="smenu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="">Contact Us</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="javascript:sprofile()">Profile</a></li>
			</ul>

		</div>
		<div class="sprofile" id="sprofile">
			<form>
				<label id="spro">PROFILE</label><br>
				<label>NAME:</label>
				<label><?php echo $_SESSION['name'];?></label><br>
				<label>USERNAME:</label>
				<label><?php echo $_SESSION['username'];?></label><br>
				<label>BIRTHDATE:</label>
				<label><?php echo $_SESSION['birthdate'];?></label><br><br>
				<a href="logout.php">Logout</a>

			</form>
		</div>
		<div class="nshow">
			<form>
				<label>Note Name</label><br><br>
				<label id="nname"><?php echo $dname;?></label><br><br>
				<label>Note</label><br><br>
				<p><?php echo $dnote; ?></p>
			</form>


		</div>

	</div>

</body>
</html>