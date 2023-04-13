<?php
session_start();

$host = 'localhost';
$username = "root";
$password = "password";
$database = "car_rental";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    echo "Failed";
} else {
    if (!$conn) {
        echo "Failed";
    } else {
        $query = "SELECT * FROM users WHERE user_name='" . $_POST['user_name'] . "'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
            if (password_verify($_POST['password'], $data['password'])) {
                $_SESSION['user_id'] = $data['id'];

                // Check user role
                if ($data['user_type'] == 'admin') {
                    
                    header('Location: admin.php');
                    exit();
                } else {
                    
                    header('Location: index.php');
                    exit();
                }
            } else {
                echo 'Password incorrect';
            }
        } else {
            echo 'User not found';
        }
    }
}
?>
