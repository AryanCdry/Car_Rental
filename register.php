<?php
$host='localhost';
$username="root";
$password="password";
$database="car_rental";

$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
    echo "Failed";
}else{
    $query="insert into users(user_name,email,password) 
values('".$_POST['user_name']."','".$_POST['email']."','".password_hash($_POST['password'],PASSWORD_DEFAULT)."')";
    if ($conn->query($query)==true) {
        echo "user registered";
    }else{
        echo "failed";
    }

}?><br>
<html>
    <body>
        <a href="login.html">Go to login page</a>
    </body>
</html>