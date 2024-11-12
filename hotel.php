<html>
    <head>
    <style>
        body 
        {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }
        form 
        {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] 
        {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] 
        {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #3B28CC;
            color: #ffffff;
            cursor: pointer;
        }
    </style>
    </head>
    <body>
        <br><br>
        <form name="frm1" Action="add.php" method="GET"> 
            Enter Room no. : <br><br><input type="text" id="room" name="room">
            <br><br>
            Enter Name : <br><br><input type="text" id="txtname" name="txtname">
            <br><br>
            Enter Phone no. : <br><br><input type="text" id="txtphone" name="txtphone">
            <br><br>
            Enter Check in : <br><br><input type="datetime-local" id="checkin" name="checkin">
            <br><br>
            Enter Check out : <br><br><input type="datetime-local" id="checkout" name="checkout">
            <br><br>
            <input type="submit">
        </form>
    </body>
</html>