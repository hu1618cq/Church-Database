<?php
	session_start();
?>

<!DOCTYPE html>
<html lang = "en-US">
<head>
<title>Church</title>
<meta charset = "UTF-8"/>
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">Home</a></li>
				
			</ul>
			<div class="nav-login">
				<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-mail"> 
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">Login</button>
						</form>
						<a href="signup.php">Sign up</a>
			</div>
		</div>
	</nav>
</header>