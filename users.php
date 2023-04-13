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
	<h1>Admin Panel - Users</h1>
   
	<?php
		 
		 $host = 'localhost';
		 $username = "root";
		 $password = "password";
		 $database = "car_rental";
		 $conn = mysqli_connect("localhost", "root", "password", "car_rental");


		 
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}	
		
		$sql = "SELECT * FROM users ";
		$result = mysqli_query($conn, $sql);

		
		if (mysqli_num_rows($result) > 0) {

			
			echo "<table >";
			echo "<table border='1'>";
			echo "<tr><th>User ID</th><th>Name</th><th>Email</th><th>Password</th><th>Delete</th>";
			while($row = mysqli_fetch_assoc($result)) {
				
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>{$row['user_name']}</td>";
				echo "<td>{$row['email']}</td>";
				echo "<td>{$row['password']}</td>";
				echo "<td><a href='delete_users.php?id={$row['id']}'>Delete</a></td>";
				echo "</tr>";
			}
			echo "</table>";
		}else{
			echo "There are no users.";
		}
	?><br>
    <a href="admin.php">Go Back</a>
</body>
</html>