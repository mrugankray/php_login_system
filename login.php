<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Affordable safety gadget to keep you safe">
	<meta name="author" content="IOT Squad">
	<title>IOT SQUAD|Login</title>
	<link rel="stylesheet" href="index_stylescript.css" type="text/css"/>
</head>
<body>
<?php
	require('db.php');
	//session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `exp1` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: secondary.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
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
					<li class="current"><a href="login.php">Login</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section id="main">
		<div class="container">
			<aside id="signup">
			<div class="dark">
				<form action="" method="post" class="quote">
				<label>Username</label><br/>
				</b><input type="text" placeholder="Username....." name="username" maxlength="40"><br/>
				<label>Password</label><br/>
				</b><input type="password" placeholder="Enter password" name="password" maxlength="40"><br/>
				<button type="submit" class="button_1">Submit</button>
			</form>
			</div>
			</aside>
		</div>
	</section>
	<div id="z"><footer class="log">IOT Squad,Copyright&copy;2017</footer></div>
<?php } ?>
</body>
</html>