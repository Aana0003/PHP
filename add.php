<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "INSERT INTO hotel VALUES (" . $_GET['room'] . ",'" . $_GET['txtname'] . "','" . $_GET['txtphone'] . "',
'" . $_GET['checkin'] . "','" . $_GET['checkout'] . "')";
mysqli_query($conn, $sql);
header('location:list.php');
?>