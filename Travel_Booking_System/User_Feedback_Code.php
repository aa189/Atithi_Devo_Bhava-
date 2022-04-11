<?php
include "dbcon.php";

if($_POST["submit"])
{
    $fid=$_POST["fid"];    
    $loginid=$_POST["loginid"];    
    $fdate=$_POST["fdate"];    
    $feedback=$_POST["feedback"]; 
    
		mysql_query("insert into feedback_tb values('$fid','$loginid','$fdate','$feedback')",$db);
		$a=mysql_affected_rows();
		mysql_close();
		if($a>=0)
			header("location: User_Feedback.php?msg=1");
		else
			header("location: User_Feedback.php?msg=0");
}
?>