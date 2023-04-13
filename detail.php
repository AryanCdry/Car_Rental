<?php
session_start();
		
            $host = 'localhost';
            $username = "root";
            $password = "password";
            $database = "car_rental";
			$conn = mysqli_connect("localhost", "root", "password", "car_rental");

			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			if($conn);
			echo "success";
			$car_id = $_POST['car_id'];
			$start_date = $_POST['start_date'];
    		$end_date = $_POST['end_date'];
			$user_id = $_SESSION['user_id'];
				$sql = "SELECT price FROM cars WHERE id = '".$_POST['car_id']."'  ";
				$result = mysqli_query($conn, $sql);
				if ( ($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					$price = $row["price"];
				} else {
					die("Error: Car not found");
				}
				
			
				$total_price = $price * (strtotime($end_date) - strtotime($start_date)) / (60 * 60 * 24);
				
			
				$sql = "INSERT INTO bookings (car_id, user_id, pickup_location, drop_location, start_date, end_date, price, status) VALUES ('".$_POST['car_id']."',$user_id,'".$_POST['pickup_location']."','".$_POST['drop_location']."','".$_POST['start_date']."','".$_POST['end_date']."', '$total_price', 'pending')";
				echo $sql;
				if (mysqli_query($conn, $sql)) {
					echo "Booking successful";
				} else {
					echo "Error: " . mysqli_error($conn);
				}
			;
			header('location:booking.php');
	?>
	
