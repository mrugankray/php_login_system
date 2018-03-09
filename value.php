<?php 
//@ob_start();
include('db.php');
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
$weight= $_GET["w"];
$lpg_leakage = $_GET["lpg"];
$query ="INSERT INTO `exp1` (
  weight,
  lpg_leakage,
  date_and_time
) VALUES (
  '".$weight."',
  '".$lpg_leakage."',
  '".date("Y-m-d H:i:s")."'
  )" ;
 $result2 = mysqli_query($con,$query);
 $row2 = mysqli_fetch_assoc($result2);
?>