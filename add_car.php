<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel - Bookings</title>
    <style>
		h1 {
			color: #444;
			font-size: 28px;
			margin-bottom: 20px;
		}
        form {
		background-color: #f7f7f7;
		padding: 20px;
		border-radius: 5px;
		box-shadow: 0 2px 5px rgba(0,0,0,0.2);
		max-width: 500px;
		margin: auto;
	}

	label {
		display: inline-block;
		margin-bottom: 10px;
		font-weight: bold;
	}

	input[type=text], input[type=file] {
		padding: 10px;
		border-radius: 5px;
		border: none;
		margin-bottom: 20px;
		width: 100%;
		box-sizing: border-box;
		background-color: #f2f2f2;
	}

	button[type=submit] {
		background-color: #4CAF50;
		color: white;
		padding: 10px 20px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
	}

	button[type=submit]:hover {
		background-color: #45a049;
	}

	a {
		display: block;
		margin-top: 20px;
		text-align: center;
	}
</style>
</head>
<body>
	<h1>Admin Panel - Add car</h1>
	<form  method="post" action="image.php/" enctype="multipart/form-data">
    <label>Car Name</label>
    <input type = "name" name="name" required><br>
    <label>Price</label>
    <input type ="" name="price" required><br>
    <label>Image:</label>
    <input type ="file" name="image" required><br>
    <button type="submit" name="upload">Add</button>
</form>
<a href="admin.php">Go Back</a>
</body>
</html>