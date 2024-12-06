<?php
$servername = "localhost";
$username = "root";
$password = "2003";
$dbname = "hotel";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$id = $_GET['id'];
$sql = "SELECT * FROM hotel WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    $update_sql = "UPDATE hotel SET name = '$name', phone = '$phone', checkin = '$checkin', checkout = '$checkout' WHERE id = $id";
    mysqli_query($conn, $update_sql);

    header('Location: display.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Hotel Record</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<br/><br/><br/><br/>

<form method="POST">
    Name:<br/><input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"><br/><br/>

    Phone no.:<br/><input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>"><br/><br/>

    Check in:<br/><input type="datetime-local" id="checkin" name="checkin" value="<?php echo $row['checkin']; ?>"><br/><br/>
    
    Check out:<br/><input type="datetime-local" id="checkout" name="checkout" value="<?php echo $row['checkout']; ?>"><br/><br/>

    <input type="submit" value="Update">
</form>

</body>
</html>
