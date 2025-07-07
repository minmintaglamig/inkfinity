<?php
	include_once 'dbh.php';

		$username = $_POST['txtusername'];
		$email = $_POST['txtemail'];
		$password = $_POST['txtpassword'];

		$stmt = $conn->prepare("INSERT INTO tblusers (username, email, password) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $username, $email, $password);

		if ($stmt->execute()) {
			header("Location: /inkfinity/login.php");
			exit;
		} else {
			echo "Error: " . $stmt->error;
		}

		$stmt->close();
?>
