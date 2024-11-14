<?php

include('config.php'); 

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password']; // The password should match confirmpassword

    // Prepare and execute the query to check for the username
    $stmt = $conn->prepare("SELECT * FROM manage_employee WHERE Username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user with the provided username exists
    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();

        // Verify the password 
        if ($password === $user['password']) { // Check against confirmpassword
            // Successful login: Start a session and redirect to UserAccountPage.php
            session_start();
            $_SESSION['username'] = $username;
            header("Location: Staff_dashboard.php");
            exit();
        } else {
            // Invalid password
            echo "Invalid password.";
        }
    } else {
        // Invalid username
        echo "Invalid username.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
