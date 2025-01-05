<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example.com</title>
</head>
<body>
    <!-- Form -->
    <form action="form_post.php" method="post">
        <!-- Username field -->
        <label for="username">Username</label><br>
        <input type="text" name="username"><br>
        <!-- Password field -->
         <label for="password">Password</label><br>
         <input type="password" name="password"><br>
         <button>submit</button>
    </form>
<pre>
<?php
        // get the value from the form
        $user = $_POST['username']; //username
        $pass = $_POST['password']; //password

        //print the value in the same page
      printf("Username is:{$user}\n");
      printf("Password is:{$pass}\n");
    ?>
</pre>
</body>
</html>