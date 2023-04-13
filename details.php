
<!DOCTYPE html>
<html>
<head>
	<title>Car Rental System - Booking</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
		h1 {
			text-align: center;
			margin-top: 0;
			color: #333;
		}
		form {
			max-width: 500px;
			margin: auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px #ccc;
		}
		label {
			display: block;
			margin-bottom: 5px;
			color: #666;
			font-weight: bold;
		}
		input[type="text"], input[type="date"] {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		input[type="submit"] {
			display: block;
			margin-top: 20px;
			padding: 10px;
			background-color: #333;
			color: #fff;
			text-align: center;
			text-decoration: none;
			border-radius: 5px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #555;
		}
	</style>	
</head>
<body>
	<h1>Car Rental System - Booking</h1>

	<form action="detail.php" method="post">
    <input type="hidden" name="car_id" value="<?php echo $_GET['id']; ?>">
    <label for="pickup_location">Pickup Location:</label>
    <input type="text" name="pickup_location" id="pickup_location" required>
    
    <label for="drop_location">Drop Location:</label>
    <input type="text" name="drop_location" id="drop_location" required>
    
    <label for="start_date">Start Date:</label>
    <input type="date" name="start_date" id="start_date" required>
    
    <label for="end_date">End Date:</label>
    <input type="date" name="end_date" id="end_date" required>

    <input type="submit" value="Book">
</form>

</body>
</html>