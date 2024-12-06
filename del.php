<?php
$servername = "localhost";
$username = "root";
$password = "2003";
$dbname = "hotel";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "DELETE FROM hotel WHERE id =" . $_GET['id'];
mysqli_query($conn, $sql);
header('location:display.php');
?>