<?php
$fileName =basename($_FILES["image"]["name"]);
$saveTo='image/'.$fileName;
$temp_name=$_FILES['image']['tmp_name'];
move_uploaded_file($temp_name,$saveTo);

$host = 'localhost';
$username = "root";
$password = "password";
$database = "car_rental";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    echo "Failed";
} else {
    echo "Success";
    $query = "insert into cars(name,price,image) 
            values('" . $_POST['name'] . "','" . $_POST['price'] . "','".$fileName."')";
    if ($conn->query($query) == true) {
        echo "Data inserted";
    } else {
        echo "failed";
    }
    header("location:add_car.php");
}

?>

