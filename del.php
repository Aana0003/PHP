<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "DELETE FROM hotel WHERE room=" . $_GET['sid'];
mysqli_query($conn, $sql);
header('location:list.php');
?>