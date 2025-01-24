<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize Vaildate</title>
</head>
<body>
<form action="sanitize_vaildate.php" method="post">
        <!-- Username field -->
        <label for="username">Username</label><br>
        <input type="text" name="username"><br>
        <!-- Password field -->
         <label for="password">Password</label><br>
         <input type="password" name="password"><br>
        <!-- Password field -->
         <label for="email">Email</label><br>
         <input type="text" name="email"><br>
         <!-- Age field  -->
         <label for="age">Age</label><br>
         <input type="text" name="age"><br>
         <!-- submit button  -->
         <button name="sanitize">Sanitize</button>
         <button name="vaildate">Vaildate</button><br>

         <?PHP 
           // sanitize the get value 
         if (isset($_POST['sanitize'])){
            $use = filter_input(INPUT_POST, "username" ,FILTER_SANITIZE_SPECIAL_CHARS);
            $age = filter_input(INPUT_POST, "age" ,FILTER_SANITIZE_NUMBER_INT);
            $email = filter_input(INPUT_POST, "email" ,FILTER_SANITIZE_EMAIL);
            $password = filter_input(INPUT_POST, "password" ,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
           
            // Display the value
            echo "your Name is  {$use} <br>";
            echo "Your Age is {$age} <br>";
            echo "Your Email is {$email} <br>";
            echo "Your Password is {$password} <br>";
         }
         
         // vaildate the get value 
         if (isset($_POST['vaildate'])){
            $use = filter_input(INPUT_POST, "username" ,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $age = filter_input(INPUT_POST, "age" ,FILTER_VALIDATE_INT);
            $email = filter_input(INPUT_POST, "email" ,FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, "password" ,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
           

            // Display the value
            echo "your name is  {$use} <br>";
            echo "Your age is {$age} <br>";
            echo "Your email is {$email} <br>";    
            echo "Your password is {$password} <br>";
            
         }
         
         ?>
    </form>
</body>
</html>