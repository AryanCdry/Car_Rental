<?php
$host = 'localhost';
            $username = "root";
            $password = "password";
            $database = "car_rental";
			$conn = mysqli_connect("localhost", "root", "password", "car_rental");
if(!$conn){
    echo "Failed";
}else{

    $booking_id = $_GET['id'];
    $query="delete from bookings where id='$booking_id'";
    if ($conn->query($query)==true){
        echo "Booking has been canceled.";
    }else{
        echo "failed";
    }
}?>
