<!DOCTYPE html>
<html>
    <head>
		<title>Form</title>
		<link rel="stylesheet" href="style.css">
	</head>
    <body>
    <br/><br/><br/><br/>
        <form name="frm1" Action="add.php" method="GET"> 
            Room no. : <br/><input type="text" id="id" name="id">
            <br/><br/>
            Name : <br/><input type="text" id="name" name="name">
            <br/><br/>
            Phone no. : <br/><input type="text" id="phone" name="phone">
            <br/><br/>
            Check in : <br/><input type="datetime-local" id="checkin" name="checkin">
            <br/><br/>
            Check out : <br/><input type="datetime-local" id="checkout" name="checkout">
            <br/><br/>
            <input type="submit">
        </form>
    </body>
</html>