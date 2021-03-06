<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Social Hub - Social Networking Site</title>
	 <link rel="stylesheet" href="external/style.css" />
	 <script type = "text/javascript" src="external/JSScript.js"></script>
</head>

<body>

	<div class="wrapper">
	<?php
		session_start();
		$_SESSION = array();
		$_SESSION['productList'] = array();

		session_destroy();
	?>
		<header>
			<canvas id="myCanvas" width="100" height="100" style="border:1px solid #d3d3d3;">
			Your browser does not support HTML5 canvas.
			</canvas>
			<h1>Social Networking Site</h1>
			<nav> 
				<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="signup.html">Signup</a></li>
				<li><a href="login.html">Login</a></li>
				<li><a href="account.html">Account</a></li>
				</ul>
			</nav>
		</header>	
		
		<section>
		<form name="loginForm" action="login.php" onsubmit ="return Loginvalidate()" method="post" >
			<fieldset name="userInput">
				<center>
				<section>
				
				<p>
					<label>Username:</label>
					<br>
					<input type="text" name="userName">
					<br>
					<label>Password:</label>
					<br>
					<input type="password" name="password">
					<br>
					<br>
					<input type="submit" value="Login">
					<br>
					<br>
					<strong>Don't have an account?</strong>
					<br>
					<a href="signup.html">
					   Create new User!
					 </a>
				</p>
				</center>
			</fieldset>
		</form>
		</section>

		<footer>
			&copy; 2016 <a href="AboutUs.html"> Team VTAY</a>. All rights reserved.
		</footer>
	
	</div>

</body>
</html>