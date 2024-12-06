<!DOCTYPE html>
<html>
	<head>
		<title>Hotel Records</title>
		<link rel="stylesheet" href="style.css">
	</head>
    <body>
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "2003";
		$dbname = "hotel";
		$conn = mysqli_connect($servername, $username, $password,$dbname);
		$rs=mysqli_query($conn,"select * from hotel");
		echo "<div align=center>";
		echo "<table border=1> <br/><br/><br/>
		<tr>
		<th>Customer ID</th> 
		<th>NAME</th> 
		<th>PHONE NO.</th>
		<th>CHECK IN</th>
		<th>CHECK OUT</th>
  		<th>DELETE</th>
		<th>UPDATE</th> 
		</tr>";
		while($row=mysqli_fetch_array($rs))
		{ 
			echo "<tr>";
			echo "<td align=center>".$row['id']."</td>";
			echo "<td align=center>".$row['name']."</td>";
			echo "<td align=center>".$row['phone']."</td>";
			echo "<td align=center>".$row['checkin']."</td>";
			echo "<td align=center>".$row['checkout']."</td>";
			echo "<td><a href='del.php?id=".$row['id']."'>Delete</a></td>";
			echo "<td><a href='upd.php?id=".$row['id']."'>Update</a></td>";
			echo "</tr>";
		}
		echo "</table>";
		?>
		<br/>
		<a href="form.php">ADD FORM</a>
    </body>
</html>