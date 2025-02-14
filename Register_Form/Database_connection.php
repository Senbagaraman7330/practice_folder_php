<?PHP 
// include('index.php');
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Database information 
$servername_DB = 'localhost';
$username_DB= 'phpmyadmin';
$password_DB = 'Raman@7330';
$database_DB = 'practics';

// Get the field values and assign to variable 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['username'] , $_POST['password'] , $_POST['email'], $_POST['phone'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
    }
    else{
        echo "some values are missing";
    }
}

// Create connection to database 
$conn = new mysqli($servername_DB, $username_DB, $password_DB, $database_DB);

$check_sql = "SELECT * FROM register WHERE email = '$email' OR username = '$username'";
$check_result = mysqli_query($conn, $check_sql);

if (mysqli_num_rows($check_result) > 0) {
    echo "User already exists!";
} else {
    // Insert new user
    $sql = "INSERT INTO register (username, password, email, phone) 
            VALUES ('$username', '$password', '$email', '$phone')";
             if (mysqli_query($conn,$sql)){
                echo "The new record inserted successfully ".$conn->insert_id;
             }
             else {
                echo "The new record is not inserted successfully";
             }

    if (mysqli_error($conn)) {
        echo "Not Register successfully";
    } 
}

// close the database connection 
$conn ->close();

?>