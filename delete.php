<?php
session_start();

include("config/connection.php");

	$delete_id=$_GET['del'];
	$sql="delete from question where S.No ='$delete_id'";
	$rs = mysqli_query($con,$sql);
	if($rs)
	{
	
	 $_SESSION["msg"] = "Delete Successfull";
	header("location:adminhome.php"); 
	}
?>