<?php
session_start();
include "dbcon.php";

if($_POST["submit"])
{
    $id=$_POST["id"];    
    $pwd=$_POST["pwd"]; 
    $flag=false;
	$role="";
    $result=mysql_query("select role from login where loginid='$id' and pwd='$pwd'",$db);
    while($row = mysql_fetch_Array($result))
    { 
       $flag=true;
	   $role=$row[0];
    }
    mysql_close();
                    
    if($flag==true)
	{
		$_SESSION["uid"]=$id;
		if($role=="admin")
			header("location: Admin_Tour.php");
		else if($role=="user")	
			header("location: User_Home.php");
	}	
    else 
        header("location: Login.php?msg=0");
}
?>