
	<!DOCTYPE html>
	<html>
	<head>
		<title>Car Rental System</title>
		<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
		h1, h2 {
			text-align: center;
			margin-top: 0;
			color: #333;
		}
		img {
			display: block;
			margin: auto;
			border: 1px solid #ccc;
			padding: 5px;
			background-color: #fff;
		}
		h3 {
			margin: 0;
			font-size: 1.2em;
		}
		p {
			margin: 0;
			color: #666;
		}
		a {
			display: block;
			margin-top: 10px;
			padding: 5px 10px;
			background-color: #333;
			color: #fff;
			text-align: center;
			text-decoration: none;
			border-radius: 5px;
		}
		form {
			text-align: right;
			margin-top: 20px;
		}
	</style>

	</head>
	<body>

		<center><h1>Car Rental System</h1></center>
		<h2>Avilables Cars</h2>
		<?php
		session_start();
			$host='localhost';
			$username="root";
			$password="password";
			$database="car_rental";
			$conn = mysqli_connect("localhost", "root", "password", "car_rental");

			if (!$conn) {
				die("Connection failed: " );
			}
			$sql = "SELECT id, name, price, image FROM cars";
			$result = mysqli_query($conn, $sql);
			
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<div style="float: left; margin-right: 20px;">';
				echo '<img src="image/'.$row["image"].'" width="200" height="150">';
				echo '<h3>'.$row["name"].'</h3>';
				echo '<p>Price per day: $'.$row["price"].'</p>';
				echo '<a href="details.php?id='.$row["id"].'">Select</a>';
				echo '</div>';
			}	
		?>
	<a href="booking.php" > Your bookings</a>	
<a href="logout.php">Logout</a>
	</body>
	</html>
