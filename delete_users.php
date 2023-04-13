<?php
$host = 'localhost';
            $username = "root";
            $password = "password";
            $database = "car_rental";
			$conn = mysqli_connect("localhost", "root", "password", "car_rental");
if(!$conn){
    echo "Failed";
}else{
    echo"Success";
    $user_id = $_GET['id'];
    $query="delete from users where id='$user_id'";
    if ($conn->query($query)==true){
        echo "Data deleted";
    }else{
        echo "failed";
    }
}
header("location:users.php");