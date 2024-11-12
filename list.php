<html>
	<head>
		<title>Hotel Management</title>
		<style>
			body
			{
				font-family: Arial, sans-serif;
				background-color: #ffffff;
			}
			table 
			{
				width: 80%;
				border-collapse: collapse;
				margin: 20px auto;
			}
			th, td 
			{
				padding: 10px;
				border: 1px solid #ccc;
				text-align: center;
			}
			th 
			{
				background-color: #afdedc;
			}
			a 
			{
				text-decoration: none;
				color: #3B28CC;
			}
		</style>
	</head>
    <body>
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "hotel";
		$conn = mysqli_connect($servername, $username, $password,$dbname);
		$rs=mysqli_query($conn,"select * from hotel");
		echo "<div align=center>";
		echo "<table border=1> <br><br><br>
		<tr>
		<td bgcolor=#afdedc>ROOM NO.</td> 
		<td bgcolor=#afdedc>NAME</td> 
		<td bgcolor=#afdedc>PHONE NO.</td>
		<td bgcolor=#afdedc>CHECK IN</td>
		<td bgcolor=#afdedc>CHECK OUT</td>
  		<td bgcolor=#afdedc>DELETE</td> 
		</tr>";
		while($row=mysqli_fetch_array($rs))
		{ 
			echo "<tr>";
			echo "<td align=center>".$row['room']."</td>";
			echo "<td align=center>".$row['name']."</td>";
			echo "<td align=center>".$row['phone']."</td>";
			echo "<td align=center>".$row['checkin']."</td>";
			echo "<td align=center>".$row['checkout']."</td>";
			echo "<td><a href='del.php?sid=".$row['room']."'>Delete</a></td>";
			echo "</tr>";
		}
		echo "</table>";
		?>
		<br>
		<a href="hotel.php">ADD FORM</a>
    </body>
</html>