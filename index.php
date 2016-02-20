<?php ?>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="main">
		
		<div class="menu">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Contact Us</a></li>
				<li><a href="">About Us</a></li>
				
				<li><a href="registration.php">Sign Up!</a></li>
			</ul>
		</div>
		
		
			<div class="login">
				<form action="loginsubmit.php" method="post">
					<label>Username </label><br>
					<input type="text" name="username" placeholder="type Username"><br><br>
					<label>Password </label><br>
					<input type="password" name="password" placeholder="type password"><br><br>
					<input id="logbtn" type="submit" name="submit" value="log In!">
					
				</form>
			</div>
		</div>
	

</body>
</html>