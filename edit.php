<?php
	include "mysqlconnect.php";
	$id=$_GET["edit"];
	$sql="SELECT * FROM product where id='$id'";
	$result=$conn->query($sql);
	$row= $result->fetch_assoc();
	
	$nam=$row["name"];
	$ds=$row["description"];
	$qn=$row["quantity"];
	$pr=$row["price"];
    $ex=$row["expiry_date"];
		
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<center>
<body>
<form action="editform.php?e_id= <?php echo $id;?>" method="POST">
    <h1>Edit your desired filed</h1>
<br><br><br>
Name: <input type="text" name="nam"  value="<?php echo $nam;?>"><br><br>
Description: <input type="text" name="ds"  value="<?php echo $ds;?>"><br><br>
Quantity:<input type="int" name="qn"  value="<?php echo $qn;?>"><br><br>
Price: <input type="double" name="pr"  value="<?php echo $pr;?>"><br><br>
Expiry_date: <input type="date" name="ex"  value="<?php echo $ex;?>"><br><br>
<input type="submit" value="Sbmit">
</form>
</center>
</body>
</html>