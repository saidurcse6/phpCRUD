<?php
	include "mysqlconnect.php";
	$sql="SELECT * FROM product";
	
	$result=$conn->query($sql);
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
		<h1>Product Recodr list</h1>
		<table  border='1' cellpadding='27' cellspacing='8'>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Quantity</th>
                <th>Price</th>
				<th>Expiry_date</th>

				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php 
			while($row = $result->fetch_assoc()){
				$id= $row["id"];
				
				
				echo "<tr>";
					echo "<td>". $row["name"] ."</td>";
					echo "<td>". $row["description"]. "</td>";
					echo "<td>". $row["quantity"]. "</td>";
					echo "<td>". $row["price"]. "</td>";
                    echo "<td>". $row["expiry_date"]. "</td>";
					echo "<td><a href='edit.php?edit=$id'> Edit </a></td>";
					echo "<td> <a href='delete.php?delt=$id'> Delete </a> </td>";
				echo "</tr>";
				}
			?>
		
		</table>
		<a href="formInsert.php">Would you like to add any more?</a>
		
		<br><br>

	</center>
</body>
</html>

