<?php
// Database connection details
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

    // SQL query to check login based on plain text password
    $stmt = $conn->prepare("SELECT email, psw FROM sign_up WHERE email = ? AND psw = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // User found, login successful
        header("Location: index.html");
    exit();
        // You might want to redirect the user to a dashboard or another page here
    } else {
        // User not found or incorrect password
        echo "Error: Incorrect login credentials";
        // You might want to redirect the user back to the login form here
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
