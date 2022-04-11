<?php
include "dbcon.php";

if($_POST["submit"])
{
    $bid=$_POST["bid"];   
	$bdate=$_POST["bdate"];
	$tdate=$_POST["tdate"]; 
    $tname=$_POST["tname"];          
    $loginid=$_POST["loginid"]; 
	$noa=$_POST["noa"]; 
	$noc=$_POST["noc"]; 
	$src=$_POST["src"]; 
    
	mysql_query("insert into booking_tb values('$bid','$bdate','$tdate','$tname','$loginid','$noa','$noc','$src')",$db);
	$a=mysql_affected_rows();
	mysql_close();
	if($a>=1)
		header("location: User_Booking_Success.php?msg=1");
	else
		header("location: User_Booking_Success.php?msg=0");
}
?>