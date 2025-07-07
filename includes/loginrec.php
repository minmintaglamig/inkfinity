<?php
	include_once 'dbh.php';
	session_start();

	$username = $_POST['txtusername'];
	$password = $_POST['txtpassword'];

	$stmt = $conn->prepare("SELECT * FROM tblusers WHERE username = ?");
	$stmt->bind_param("s", $username);
	$stmt->execute();
	$result = $stmt->get_result();

	if ($result->num_rows > 0) {
		$user = $result->fetch_assoc();
        
		if ($password == $user['password']) {
			$_SESSION['username'] = $user['username'];
			header("Location: /inkfinity/save.php");
			exit();
		} else {
			echo "Invalid password.";
		}
	} else {
        echo "No user found with that username.";
	}
	$stmt->close();
?>
