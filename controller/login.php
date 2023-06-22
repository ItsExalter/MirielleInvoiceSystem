<?php
    require 'dbconnect.php';
    $error = "";
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['userName'] = $row['username'];
            header('Location: ./dashboard.php');
        } else {
            $error = "Invalid username or password";
        }
        
    }
	// close connection 
	$conn->close();
?>