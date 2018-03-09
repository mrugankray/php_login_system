<?php
@ob_start();
//session_start();
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IOT SQUAD|Registered</title>
	<link rel="stylesheet" href="index_stylescript.css" type="text/css"/>
</head>
<body>
	<header>
		<div class="container">
			<div id="Branding">
				<h1>IOT Squad</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="index.php">Home</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</nav>
		</div>
</header>

<div class="container">
	<aside id="registered">
		<div class="dark">
			<p>Welcome</p>
			<p>Registered successfully<br/><a href="login.php" target="_blank">Click here to login</a></p>
		</div>
	</aside>
</div>
<div id="z"><footer class="registered">IOT Squad,Copyright&copy;2017</footer></div>
</body>
</html>