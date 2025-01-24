<?php
$servername = "localhost";
$uname = "root";
$pass = "";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $uname, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $design = $_POST['design'];
    $message = $_POST['message'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO test (name, email, design, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $design, $message);

    if ($stmt->execute()) {
        echo "Record inserted successfully";
        // Redirect to a thank-you page
        header("Location: thank-you.php");
        exit();
    } else {
        // Log error to a file
        error_log("Error: " . $stmt->error);
        echo "Something went wrong. Please try again later.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
