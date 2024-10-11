<?php
// Include the database connection file
require_once 'db_connection.php';

// Get the database connection
$conn = getDBConnection();

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL query to fetch data from the 'task' table
$sql = "SELECT TaskID, Title, Description, Start_Date, End_Date, User_Id FROM task";


$result = $conn->query($sql);

// Check if any records were found
if ($result->num_rows > 0) {
    // Start the HTML table
    echo "<table border='1'>";
    echo "<tr><th>Task ID</th><th>Title</th><th>Description</th><th>Start Date</th><th>End Date</th><th>User ID</th></tr>";

    // Loop through each row and print the data in table rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['TaskID'] . "</td>";
        echo "<td>" . $row['Title'] . "</td>";
        echo "<td>" . $row['Description'] . "</td>";
        echo "<td>" . $row['Start_Date'] . "</td>";
        echo "<td>" . $row['End_Date'] . "</td>";
        echo "<td>" . $row['User_Id'] . "</td>";
        echo "</tr>";
    }

    // Close the table
    echo "</table>";
} else {
    echo "No tasks found.";
}

// Close the connection
$conn->close();
?>
