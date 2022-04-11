<?php
include "dbcon.php";

if($_POST["submit"])
{
    $id=$_POST["id"];   
    $uname=$_POST["uname"];    
    $phone=$_POST["phone"];    
    $email=$_POST["email"];     

		mysql_query("update registration set uname='$uname',phone='$phone',email='$email' where loginid='$id'",$db);
		$a=mysql_affected_rows();
		mysql_close();
		if($a>=0)
			header("location: User_Profile.php?msg=1");
		else
			header("location: User_Profile.php?msg=0");
}
?>