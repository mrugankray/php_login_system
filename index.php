<?php
@ob_start();
//session_start();
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Affordable safety gadget to keep you safe">
	<meta name="author" content="IOT Squad">
	<title>IOT SQUAD|Welcome</title>
	<link rel="stylesheet" href="index_stylescript.css" type="text/css"/>
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$date_and_time = date("Y-m-d H:i:s");
        $query = "INSERT into `exp1` (username, password, email, registered_date) VALUES ('$username', '".md5($password)."', '$email', '$date_and_time')";
        $result = mysqli_query($con,$query);
        if($result){
            header("Location: registered.php");
        }
    }else{
?>
	<header>
		<div class="container">
			<div id="Branding">
				<h1>IOT Squad</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="login.php" target="_blank">Login</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section id="showcase">
		<div class="container">
		<h1>Affordable safety gadget to protect you</h1>
		<p>Your safety our priority</p>
		</div>
	</section>
	<section id="register">
		<div class="container">
			<h1>Please Register</h1>
			<form action="" method="post">
				<input type="text" placeholder="Enter UserId" name="username" maxlength="40"><br/>
				<input type="password" placeholder="Enter Password" name="password" maxlength="40"><br/>
				<input type="email" placeholder="Enter Email....." name="email" maxlength="40"><br/>
				<button type="submit" class="button_1">Submit</button>
			</form>
		</div>
	</section>
	<section id="images">
		<div class="container">
			<div class="img">
				<img src="cisco.jpg" alt="cisco logo">
				<h1>Cisco IOT Hackathon</h1>
				<p>Organised by Cisco</p>
			</div>
			<div class="img">
				<img src="logo.jpg" alt="Our logo">
				<h1>IOT Squad</h1>
				<p>Group of innovators</p>
			</div>
			<div class="img">
				<img src="trident.png" alt="trident logo">
				<h1>Trident  Academy of Technology</h1>
				<p>Organised by Trident</p>
			</div>
		</div>
	</section>
	
	<footer>IOT Squad,Copyright&copy;2017</footer>
<?php } ?>
</body>
</html>