<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "medical_zone";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted using POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data using $_POST
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['psw']);
    $passwordRepeat = $conn->real_escape_string($_POST['psw_repeat']);

    // SQL query to insert data into the sign_up table using prepared statement
    $stmt = $conn->prepare("INSERT INTO Sign_Up (Email, New_Password, Confirm_Password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $password, $passwordRepeat);

    // Execute the query
    if ($stmt->execute()) {
        // Provide feedback to the user
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
