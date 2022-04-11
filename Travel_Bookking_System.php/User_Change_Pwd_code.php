<?php
 session_start();
	include "dbcon.php";	
		$id=$_SESSION["uid"];
		$opwd=$_POST["opwd"];
		$npwd=$_POST["npwd"];
		$cpwd=$_POST["cpwd"];
		
		$dbpwd="";
		$result=mysql_query("select pwd from login where loginid='$id'",$db);
		while($row=mysql_fetch_array($result))
		{
			$dbpwd=$row[0];
		}
		
		if($dbpwd==$opwd)
		{
			if($npwd==$cpwd)
			{
			mysql_query("update login set pwd='$npwd' where loginid='$id'",$db);
			$a=mysql_affected_rows();
			mysql_close();
			if($a==0)
			header("location: User_Change_Pwd.php?flag=0");
			else
			header("location: User_Change_Pwd.php?flag=1"); 
			}
			else
			{
				header("location: User_Change_Pwd.php?flag=3");
			}
		}
		else
		{
			header("location: User_Change_Pwd.php?flag=2");
		}
?>	