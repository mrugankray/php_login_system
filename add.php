<?php
   	include("db.php");
   	
   	$link=Connection();

	$lpg_leakage=$_POST["lpg_leakage"];
	$weight=$_POST["weight"];

	$query = "INSERT INTO `exp1` (`weight`, `lpg_leakage`) 
		VALUES ('".$weight."','".$lpg_leakage."')"; 
   	
   	mysql_query($query,$link);
	mysql_close($link);

   	header("Location: secondary.php");
?>
