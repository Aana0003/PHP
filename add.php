<?php
$servername = "localhost";
$username = "root";
$password = "2003";
$dbname = "hotel";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "INSERT INTO hotel VALUES (" . $_GET['id'] . ",'" . $_GET['name'] . "','" . $_GET['phone'] . "',
'" . $_GET['checkin'] . "','" . $_GET['checkout'] . "')";
mysqli_query($conn, $sql);
header('location:display.php');
?>