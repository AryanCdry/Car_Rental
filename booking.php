
<!DOCTYPE html>
<html>
<head>
	<title>Car Rental System - Booking Details</title>
	
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
		table {
			margin: auto;
			border-collapse: collapse;
			max-width: 90%;
			margin-top: 20px;
			margin-bottom: 20px;
		}
		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		tr:hover {
			background-color: #f5f5f5;
		}
		tr:first-child {
			background-color: #ddd;
		}
		a {
			display: inline-block;
			padding: 5px 10px;
			background-color: #333;
			color: #fff;
			text-align: center;
			text-decoration: none;
			border-radius: 5px;
		}
		a:hover {
			background-color: #555;
		}
	</style>
</head>
<body>
	<h1>Your Bookings</h1>

	<?php
	session_start();
		 $host = 'localhost';
		 $username = "root";
		 $password = "password";
		 $database = "car_rental";// Connect to the database
		 $conn = mysqli_connect("localhost", "root", "password", "car_rental");

		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}	
		$user_id = $_SESSION['user_id'];

		$sql = "SELECT * FROM bookings WHERE user_id='$user_id'";
$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {

			echo "<table >";
			echo "<table border='1'>";
			echo "<tr><th>User Id</th><th>Car</th><th>Pickup Location</th><th>Drop Location</th><th>Start Date</th><th>End Date</th><th>Price</th><th>status</th><th>Cancel Booking</th></tr>";
			while($row = mysqli_fetch_assoc($result)) {
				$car_id = $row['car_id'];
				$sql2 = "SELECT name FROM cars WHERE id='$car_id'";
				$result2 = mysqli_query($conn, $sql2);
				$row2 = mysqli_fetch_assoc($result2);
				$car_name = $row2['name'];

				echo "<tr>";
				echo "<td>$user_id</td>";
				echo "<td>$car_name</td>";
				echo "<td>{$row['pickup_location']}</td>";
				echo "<td>{$row['drop_location']}</td>";
				echo "<td>{$row['start_date']}</td>";
				echo "<td>{$row['end_date']}</td>";
				echo "<td>{$row['price']}</td>";
				echo "<td>{$row['status']}</td>";
				echo "<td><a href='delete_booking.php?id={$row['id']}'>Cancel</a></td>";
				echo "</tr>";
			}
			echo "</table>";

		} else {

			echo "<p>You have no bookings.</p>";

		}

			?>

</body>
</html>



