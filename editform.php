<?php
	include "mysqlconnect.php";
	
	$id=$_GET["e_id"];
	$name=$_POST["nam"];
    $description=$_POST["ds"];
    $quantity=$_POST["qn"];
    $price=$_POST["pr"];
    $expiry_date=$_POST["ex"];
	
	$sql="UPDATE product SET name='$name', description='$description', quantity='$quantity',
	price='price',expiry_date='$expiry_date' where id='$id' ";
	
	$result=$conn->query($sql);
	if($result)
		header('location:index.php');
	
	
	

	
	
	
?>
