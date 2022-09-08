<?php
include "mysqlconnect.php";
$name=$_POST["nam"];
$description=$_POST["ds"];
$quantity=$_POST["qn"];
$price=$_POST["pr"];
$expiry_date=$_POST["ex"];


$sql="INSERT INTO product(id,name,description,quantity,price,expiry_date)
VALUES(NULL,'$name','$description','$quantity','$price','$expiry_date')";
if($conn->query($sql)){
		header('location:index.php');
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>