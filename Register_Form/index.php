<?PHP 
include('Database_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>
<form action="/practice_folder_php/Register_Form/index.php" method="post">
        <!-- Username field -->
        <label for="username">Username</label><br>
        <input type="text" name="username"><br>
        <!-- Password field -->
         <label for="password">Password</label><br>
         <input type="password" name="password"><br>
         <!-- Email field  -->
         <label for="email">Email</label><br>
         <input type="email" name="email"><br>
         <!-- Phone field  -->
         <label for="phone">Phone</label><br>
         <input type="text" name="phone"><br>
         <button>submit</button>
    </form>

    
    <?PHP 

    
    ?>

</body>
</html>