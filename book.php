<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel - Bookings</title>
    <style>
		table {
			border-collapse: collapse;
			margin: 20px 0;
			font-size: 1em;
			min-width: 400px;
			border-radius: 5px 5px 0 0;
			overflow: hidden;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
		}
		
		table th,
		table td {
			padding: 12px 15px;
		}
		
		table th {
			background-color: #4267B2;
			color: #fff;
			text-align: left;
			font-weight: 600;
			font-size: 1.1em;
		}
		
		table td {
			border-bottom: 1px solid #ddd;
		}
		
		table tr:nth-of-type(even) {
			background-color: #f3f3f3;
		}
		
		table tr:last-of-type {
			border-bottom: 2px solid #4267B2;
		}
		
		a {
			display: inline-block;
			margin: 10px;
			padding: 10px 20px;
			background-color: #4267B2;
			color: #fff;
			border-radius: 5px;
			text-decoration: none;
		}
		
		a:hover {
			background-color: #fff;
			color: #4267B2;
			border: 1px solid #4267B2;
		}
	</style>
</head>
<body>

<h1>Admin Panel - Bookings</h1>
	<?php
		 
		 $host = 'localhost';
		 $username = "root";
		 $password = "password";
		 $database = "car_rental";// Connect to the database
		 $conn = mysqli_connect("localhost", "root", "password", "car_rental");

		 
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}	
		
		$sql = "SELECT * FROM bookings ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {


			echo "<table >";
			echo "<table border='1'>";
			echo "<tr><th>User</th><th>Car</th><th>Pickup Location</th><th>Drop Location</th><th>Start Date</th><th>End Date</th><th>Price</th><th>Action</th><th>Delete</th></tr>";
			while($row = mysqli_fetch_assoc($result)) {

				$car_id = $row['car_id'];
				$sql2 = "SELECT name FROM cars WHERE id='$car_id'";
				$result2 = mysqli_query($conn, $sql2);
				$row2 = mysqli_fetch_assoc($result2);
				$car_name = $row2['name'];

				echo "<tr>";
				echo "<td>{$row['user_id']}</td>";
				echo "<td>$car_name</td>";
				echo "<td>{$row['pickup_location']}</td>";
				echo "<td>{$row['drop_location']}</td>";
				echo "<td>{$row['start_date']}</td>";
				echo "<td>{$row['end_date']}</td>";
				echo "<td>{$row['price']}</td>";
				echo "<td>{$row['status']}</td>";
				echo "<td><a href='delete_booking.php?id={$row['id']}'>Delete</a></td>";
				echo "</tr>";
			}
			echo "</table>";
		}else {

			
			echo "<p>There are no bookings.</p>";

		}
	?>
    <a href="admin.php">Go Back</a>
</body>
</html>