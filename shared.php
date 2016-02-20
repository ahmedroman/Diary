<?php
require("config.php");
session_start();
if ($_SESSION["id"]=="") {
 	header('Location: index.php');
 } 
$sql="SELECT * FROM `ddiary` WHERE `dshare`='1' ORDER BY `ddate` desc";
$result=mysqli_query($conn,$sql);
//var_dump($result);die();
//$myres=mysqli_fetch_array($result,MYSQLI_NUM_ROW);
//var_dump($myres);die();
	
		?>
<html>
	<head>
		<title> SHARED NOTES</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
			<script type="text/javascript" src="javascript.js"></script>
			<script type="text/javascript" src="jquery.js"></script>
			<script type="text/javascript" src="jquery.dataTables.min.js"></script>

 
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
		<div class="sharemain">
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
	                    <input type="submit" value="Upload Image" name="submit">
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
			
            <div class="datatable">

				<table id="example">
					<thead>
						<tr>
							<th></th>
						</tr>
					</thead>
					<tbody>

						<?php

							foreach ($result as $key => $value) {
							 $id=$value["id"];
							 $did=$value["did"];
							 $sql="SELECT `name` FROM `user` WHERE `id`='$id'";
							$nameresult=mysqli_query($conn,$sql);
							foreach ($nameresult as $key => $name) {
								$username=$name['name'];
							}
							 // $username=$_SESSION['username'];
						?>

						<tr>
							<td>
								<div class="shnote">
									<label><a href="profile.php?id=<?php echo $id ?>"> <?php echo $username;?></a> </label><br>
									<label><?php echo $value['dname']; ?></label><br>
									<p><?php echo $value['dnote']; ?></p><br>
									<form action="comsubmit.php" method="post">
										<textarea name="comm" row="50" col="20"></textarea>
										<input type="hidden" name="did" value="<?php echo $did; ?>">
										<input type="submit" name="csubmit" value="comment">
									</form>
									<label>Comments</label><br>
									<?php 
										$sqls="SELECT * FROM `comments` WHERE `did`='$did' ";
										$results=mysqli_query($conn,$sqls);


										foreach ($results as $key => $value) {
										 $id=$value["id"];
										 $comm=$value["comment"];
										 $usernames=$value["username"];

										// $sql="SELECT `name` FROM `user` WHERE `id`='$id'";

										?>
										<label><a href="profile.php?id=<?php echo $id ?>"><?php echo $usernames;?></a></label>
										<p><?php echo $comm; ?></p>

										<?php 
											}
										?>

								</div>
							</td>
						</tr>
						<?php
							}

						?>

					</tbody>
				</table>
			</div>
			
		
			

	
		</div>

     <!-- datatable js -->
     <script>
	     $(document).ready(function() {
	    $('#example').dataTable();
			} );
     </script>

	</body>
</html>