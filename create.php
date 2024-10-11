<?php
// Include the database connection file
require_once 'db_connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the title and description from the form
    $title = $_POST['title'];
    $disc = $_POST['disc'];

    // Validate the input data
    if (empty($title) || empty($disc)) {
        echo "Please fill in both title and description.";
        exit;
    }

    // Get the database connection
    $conn = getDBConnection();

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL query (assuming 'status' and 'priority' are the additional fields with default values of 0)
    $sql = "INSERT INTO task (Tittle, Description,Start_Date, End_Date,User_Id ) VALUES (?, ?, '0', '0','0')";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error in SQL statement: " . $conn->error);
    }

    // Bind the parameters
    $stmt->bind_param("ss", $title, $disc);

    // Execute the query
    if ($stmt->execute()) {
        echo "Task added successfully!";
    } else {
        echo "Error adding task: " . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
