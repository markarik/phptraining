<!DOCTYPE html>
<html>
<head>
	<title>User registratio system using PHP and MySQL </title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	
		<div class="header">
		<h2>Register</h2>
		</div>


<form method="post" action="register.php">
	
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username">
	</div>
	
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	
	<div class="input-group">
		<button type="submit" name="login" class="btn">Login</button>
	</div>
	<p>

		Not yet a member? <a href="register.php">Sign up </a>

	</p>

</form>
	

</body>
</html>