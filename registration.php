<!DOCTYPE html>
<html>
	<head>
		<title>registration</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="javascript.js"></script>
	</head>
	<body>
		<div class="regmain">
			<div class="menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="">Contact Us</a></li>
					<li><a href="">About Us</a></li>
					
					<li><a href="registration.php">Sign Up!</a></li>
				</ul>
			</div>
			
			<div class="regform">
				
					<form action="regsubmit.php" method="post">
						<label>Full Name </label>
						<input type="text" name="name" id="name" placeholder="type name" onblur="fname()"><br>
						<label>Username </label>
						<input type="text" name="username" id="username" placeholder="type Username" onblur="funame()"><br>
						<label>Password </label>
						<input type="Password" name="password" id="pass" placeholder="type password" onblur="fpass()"><br>
						<label>Retype Password</label>
						<input type="password" name="repassword" id="repassword" placeholder="retype password" onblur="retypepass()"><br>
						<label>Birth Date</label>
						<input type="date" name="bdate"><br>
						<label>Email </label>
						<input type="email" name="email" id="email" placeholder="********@****.com" onblur="vemail()"><br>
						<label>Sex</label><br>
						<select id="drop" name="sex">
							<option value="male">Male</option>
							<option value="female">Female</option>

						</select><br><br>
						
						
						<input id="logbtn" type="submit" name="submit" value="Register">
						
					</form>
					
				</div>
				
			

			
		</div>

	</body>
</html>