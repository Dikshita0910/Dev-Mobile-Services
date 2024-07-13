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
		$username = "root";
		$password = "";
		$dbname = "pro";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			echo "Connection failed: " . $conn->connect_error;
		}
		// echo "Connected successfully" . "\n";
		// $sql="CREATE TABLE project(username VARCHAR(56) ,
		//   password VARCHAR(30) NOT NULL,
		//   email VARCHAR(50)
		//   )";
		//  if ($conn->query($sql)) {
		//    echo "Table project created successfully";
		// } else {
		//    echo "Error creating table: " . $conn->error;
		//   }

		if (!isset($_REQUEST['uname'])) {
			echo 'uname is required';
		} else if (!isset($_REQUEST['pass'])) {
			echo 'pass is required';
		} else if (!isset($_REQUEST['email'])) {
			echo 'email is required';
		} else {
			$pass = $_REQUEST['pass'];
			$uname = $_REQUEST['uname'];
			$email = $_REQUEST['email'];
			$sql = "INSERT INTO project(username, password,email) VALUES ('$uname' , '$pass', '$email')";
			if ($conn->query($sql)) {
				echo 'register successfull';
			} else {
				echo 'anything is wrong';
			}
		}
		$conn->close();
	}
	?>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form method="post" action="form.php">
				<label for="chk" aria-hidden="true">Registration</label>
				<input type="text" name="uname" placeholder="User name" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="password" name="pass" placeholder="Password" required>
				<input type="submit" value="Register" name="submit">
			</form>
		</div>

		

		<div class="login">
		<form method="post" action="index.html">
				<form>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pass" placeholder="Password" required="">
					<input type="submit" value="Login" name="submit">
				</form>
			</div>

		
	</div>
</body>

</html>

