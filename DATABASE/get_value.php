<?php 
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
include('db_connection.php');

// // Check if the connection is established
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// SQL query to fetch all users from user_information
$sql = "SELECT * FROM user_information";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if query execution failed
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Check if data exists
if (mysqli_num_rows($result) > 0) {
    // Fetch and display all rows
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Username: " . htmlspecialchars($row['username']) . "<br>";
    }
} else {
    echo "No users found in the database.";
}

// Close the database connection
mysqli_close($conn);
?>

