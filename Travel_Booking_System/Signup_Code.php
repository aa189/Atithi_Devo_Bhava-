<?php
include "dbcon.php";

if($_POST["submit"])
{
    $id=$_POST["id"];    
    $pwd=$_POST["pwd"];    
    $uname=$_POST["uname"];    
    $phone=$_POST["phone"];    
    $email=$_POST["email"]; 
    
	$len=strlen($phone);
	if($len!=10)
	{
		header("location: Signup.php?msg=2");
	}
	else
	{
		mysql_query("insert into registration values('$id','$uname','$phone','$email')",$db);
		mysql_query("insert into login values('$id','$pwd','user')",$db);
		$a=mysql_affected_rows();
		mysql_close();
		if($a>=0)
			header("location: Signup.php?msg=1");
		else
			header("location: Signup.php?msg=0");
	}
}
?>