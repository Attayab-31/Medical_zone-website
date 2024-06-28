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
    $name = $conn->real_escape_string($_POST['data']['Enquiry']['name']);
    $phoneNo = $conn->real_escape_string($_POST['data']['Enquiry']['phone_no']);
    $emailId = $conn->real_escape_string($_POST['data']['Enquiry']['email_id']);
    $message = $conn->real_escape_string($_POST['data']['Enquiry']['message']);

    // SQL query to insert data into the contact_us table using prepared statement
    $stmt = $conn->prepare("INSERT INTO contact_us (name, phone_no, email_id, message) VALUES (?, ?, ?, ?)");

    // Check if the statement is prepared successfully
    if ($stmt) {
        $stmt->bind_param("ssss", $name, $phoneNo, $emailId, $message);

        // Execute the query
        if ($stmt->execute()) {
            // Provide a response to the user
            echo json_encode(["status" => "success", "message" => "Record inserted successfully"]);
        } else {
            // Provide an error response to the user
            echo json_encode(["status" => "error", "message" => "Error: " . $stmt->error]);
        }

        // Close the statement
        $stmt->close();
    } else {
        // Provide an error response if the statement preparation fails
        echo json_encode(["status" => "error", "message" => "Statement preparation failed"]);
    }
} else {
    // Provide an error response if the form is not submitted using POST
    echo json_encode(["status" => "error", "message" => "Form not submitted"]);
}

// Close the connection
$conn->close();
?>
