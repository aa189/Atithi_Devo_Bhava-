<?php
include "dbcon.php";

if($_POST["submit"])
{    
    $tid=$_POST["tid"];        
    $tname=$_POST["tname"]; 
	$duration=$_POST["duration"];
	$fare=$_POST["fare"];
	$cate=$_POST["cate"];
	$des=$_POST["des"];	

	mysql_query("insert into tour_tb values('$tid','$tname','$duration','$fare','$cate','$des')",$db);
	$a=mysql_affected_rows();
	mysql_close();
	if($a>=0)
	{
		move_uploaded_file($_FILES["f1"]["tmp_name"],"Tour_Pic/".$tid.".jpg");
		header("location: Admin_Tour.php?msg=1");
	}
	else
		header("location: Admin_Tour.php?msg=0");		
}
?>