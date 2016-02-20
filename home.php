<?php 
session_start();
if ($_SESSION["id"]=="") {
 	header('Location: index.php');
 } 
// echo $_SESSION['username'];
 ?>
 <html>
 <head>
 	<title>HOME</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<script type="text/javascript" src="javascript.js"></script>
 
	 <script>
	 function profile(){
	 	  var div = document.getElementById('profile');
	 	  var siv = document.getElementById('show');

	 	   if (siv.style.display !== 'none') {
		        siv.style.display = 'none';
		        div.style.display = 'block';
		    }
		    else {
		        siv.style.display = 'block';
		        div.style.display = 'none';
		    }
		   

	 	}
	 </script>

 </head>
 <body>
 	<div class="hmain">
 		<div class="menu">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="shared.php">Shared Notes</a></li>
				<li><a href="javascript:profile()">Profile</a></li>
			</ul>
		</div>
		<div class="hcontent">
			<div class="show" id="show">
				<form action="show.php" method="post">
					<label id="ita"> Previous Note</label><br><br>
					<label>Select Date</label><br>
					<input type="date" name="sdate"><br><br>
					<input type="submit" name="ssubmit" value="Show" onclick="formsubmit">
				</form>
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
			<div class="note">
				<form action="notesubmit.php" method="post">
					<label>Note Name</label>
					<input type="text" name="dname">
					<textarea name="dnote" row="55" cols="55"></textarea><br>
					<label>Date</label><br>
					<input type="date" name="ddate"><br>
					<input id="scheck" name="scheck" type="checkbox" value="1">
					<label>Share</label><br>
					<input type="submit" name="dsubmit" value="Save">
				</form>
			</div>

		</div>



 	</div>
 
 </body>
 </html>