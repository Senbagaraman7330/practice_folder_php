<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <pre>
    <?PHP

$servername = "localhost";
$username = "phpmyadmin"; 
$password = "Raman@7330";
$database = "practics";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";

    
    ?>
    </pre>
</body>
</html>