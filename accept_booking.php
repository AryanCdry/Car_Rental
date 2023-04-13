<?php
		 $host = 'localhost';
		 $username = "root";
		 $password = "password";
		 $database = "car_rental";// Connect to the database
		 $conn = mysqli_connect("localhost", "root", "password", "car_rental");


if (!$conn) {
    die("Connection failed: ");
}


$booking_id = $_GET['id'];

$sql = "UPDATE bookings SET status='accepted' WHERE id='$booking_id'";
if (mysqli_query($conn, $sql)) {
	header("location:book.php");
    echo "accepted";
    exit;
} else {

    echo "Error updating record: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

?>
