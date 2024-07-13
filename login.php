<!DOCTYPE html>
<html>

<head>
	<title>FORM</title>
	<link rel="stylesheet" href="form.css">
	<from action="login.php" method="post">
		</form>
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>

	<?php
	if (isset($_REQUEST['submit'])) {
		$servername = "localhost";
		$email = "root";
		$password = "";
		$dbname = "pro";

		// Create connection
		$conn = new mysqli($servername, $email, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			echo "Connection failed: " . $conn->connect_error;
		}
		// echo "Connected successfully" . "\n";
		// $sql = "CREATE TABLE login (email VARCHAR(56) ,
		//   password VARCHAR(30) NOT NULL
		//   )";
		// if ($conn->query($sql)) {
		// 	echo "Table login created successfully";
		// } else {
		// 	echo "Error creating table: " . $conn->error;
		// }

		if (!isset($_REQUEST['email'])) {
			echo 'email is required';
		} else if (!isset($_REQUEST['pass'])) {
			 echo 'pass is required';
		} else {

			$email = $_REQUEST['email'];
			$pass = $_REQUEST['pass'];
			$sql = "INSERT INTO login(email,password) VALUES ('$email','$pass')";
			if ($conn->query($sql)) {
				echo 'login successfull';
			} else {
				echo 'anything is wrong';
			}
		}
		
		$conn->close();
	}
	
	?>

	<!-- <div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="login">
			<form>
				<label for="chk" aria-hidden="true">Login</label>
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="pass" placeholder="Password" required>
				<input type="submit" value="Login" name="submit">
			</form>
		</div>
	</div> -->


</body>

</html>