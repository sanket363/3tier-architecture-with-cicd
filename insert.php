<?php
// Define MySQL database connection variables
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "todo_list";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get task and category values from form
  $task = $_POST["task"];
  $category = $_POST["category"];

  // Prepare and bind statement to insert task into database
  $stmt = $conn->prepare("INSERT INTO tasks (name, category) VALUES (?, ?)");
  $stmt->bind_param("ss", $task, $category);

  // Execute statement
  $stmt->execute();

  // Close statement
  $stmt->close();
}

// Close connection
$conn->close();
?>
