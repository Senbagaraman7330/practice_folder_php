<!-- start the session  -->
<?PHP
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>

    <!-- HTML form for bio -->
    <form action="session.php" method="post">
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
         <button name="submit" style="padding: 6px; margin:4px;">Click to Submit</button><br>
</form>


    <pre>
        <?PHP 
         // Now we are store the value in session 
         if(isset($_POST['submit'])){

            //Check the value is empty or not
            if(!empty($_POST['username']) & !empty($_POST['password']) & !empty($_POST['email']) & !empty($_POST['age'])  ){

                 // Delegate the value to the variable
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['age'] = $_POST['age'];

                // Display the assigned value
                echo "Your name is {$_SESSION['username']} <br>";
                echo "Your password is {$_SESSION['password']} <br>";
                echo "Your age is {$_SESSION['age']} <br>";
                echo "Your email is {$_SESSION['email']} <br>";
         
            }
            else{
                echo "You not enter one or more value. Kindly watch out and enter";
                }
            }
         



        ?>
    </pre>
</body>
</html>