<?php
	include "mysqlconnect.php";
	
	$id=$_GET["delt"];
	$sql="DELETE from product WHERE id='$id'";
	$result=$conn->query($sql);
	if($result)
		header('location:index.php');
?>