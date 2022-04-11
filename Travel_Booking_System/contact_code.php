<?php
include "dbcon.php";

if($_POST["submit"])
{    
    $uname=$_POST["uname"];        
    $email=$_POST["email"]; 
	$subject=$_POST["subject"];
	$msg=$_POST["msg"];

	mysql_query("insert into contact_tb values('$uname','$email','$subject','$msg')",$db);
	$a=mysql_affected_rows();
	mysql_close();
	if($a>=0)
		header("location: contact.php?msg=1");
	else
		header("location: contact.php?msg=0");		
}
?>