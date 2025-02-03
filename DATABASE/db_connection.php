<?php
$servername = "localhost";
$username = "phpmyadmin"; 
$password = "Raman@7330";
$database = "practics";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Debug: Check if the table exists
$result = $conn->query("SHOW TABLES LIKE 'user_information'");
if ($result->num_rows == 0) {
    die("Table 'user_information' does not exist!");
}

// Insert data
// $sql = "INSERT INTO user_information (username, password, email, phone)
//         VALUES ('keerthana', 'keerthana@7330', 'keerthana@example.com', '8072577096')";

// // Debug: Check for errors
// if (mysqli_query($conn, $sql)) {
//     echo "Record inserted successfully!";
// } else {
//     echo "Error inserting record: " . mysqli_error($conn);
// }

// Close connection
// $conn->close();
?>