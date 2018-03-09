<?php
@ob_start();
//session_start();
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
//$result2=mysql_query("SELECT * FROM `exp1` ORDER BY `id` INSC",$link);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="index_stylescript.css" type="text/css"/>
</head>
<body>
<?php
     include("auth.php");
	 include("db.php");
?> 
<header>
		<div class="container">
			<div id="Branding">
				<h1>IOT Squad</h1>
			</div>
			<nav>
				<ul>
				
				</ul>
			</nav>
		</div>
</header>
<div class="container">
	<aside id="signup">
		<div class="dark">
			<p>Welcome <?php echo $_SESSION['username']; ?></p>
			<p><a href="logout.php">Logout</a></p>
		</div>
		<div class="table">
		</div>
	</aside>
</div>
<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">  
			<tr>
				<th colspan="7"><h3><b>User Profile</b></h3></th>
			</tr>
            <tr>    
                <th>Id</th>    
                <th>Username</th>    
                <th>email</th> 
				<th>registered_date</th> 
				<th>weight</th> 
				<th>lpg_leakage</th>
				<th>date_and_time</th>
            </tr> 
			<?php
			include("db.php");
			/*$weight= $_GET["w"];
			$lpg_leakage = $_GET["lpg"];
			$querytwo="INSERT INTO `exp1` (
			weight,
			lpg_leakage,
			date_and_time
			) VALUES (
			'".$weight."',
			'".$lpg_leakage."',
			'".date("Y-m-d H:i:s")."'
			)where username = '".$_SESSION['username']."'" ;
			$resulttwo = mysqli_query($con,$querytwo);*/
			if(isset($_SESSION['username']))
			{
			$query ="SELECT * from exp1 where username = '".$_SESSION['username']."'";    
			$result = mysqli_query($con,$query);
			/*$weight= $_GET["w"];
			$lpg_leakage = $_GET["lpg"];
			$querytwo="INSERT INTO `exp1` (
			weight,
			lpg_leakage,
			date_and_time
			) VALUES (
			'".$weight."',
			'".$lpg_leakage."',
			'".date("Y-m-d H:i:s")."'
			)" ;*/
			//$resulttwo = mysqli_query($con,$querytwo);
			//include("value.php");
			}
			//if($resulttwo['username']==$_SESSION['username'])
				/*<td>'.$rowtwo['weight'].'</td>
						<td>'.$rowtwo['lpg_leakage'].'</td>
						<td>'.$rowtwo['date_and_time'].'</td>*/
			while($row = mysqli_fetch_assoc($result))
			{
				
					echo
					'<tr>
					<td>'.$row['id'].'</td>
						<td>'.$row['username'].'</td>
						<td>'.$row['email'].'</td>
						<td>'.$row['registered_date'].'</td>
						<td>'.$row['weight'].'</td>
						<td>'.$row['lpg_leakage'].'</td>
						<td>'.$row['date_and_time'].'</td>
					</tr>';
				
			}			
			?>
 </table> 
<div id="z"><footer class="secondary">IOT Squad,Copyright&copy;2017</footer></div>
</body>
</html>