<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing</title>
</head>
<body>
 <!-- HTML form code  -->
 <form action="<?PHP $_SERVER['PHP_SELF'] ?>" method="POST">
    <label for="Value">Enter the password </label><br>
    <input type="password" name="Value"><br>
    <button>Enter</button>
    </form>

    <!-- Hashing the password in PHP -->
     <?PHP 
     $password = "Raman@7330";
     $hash = password_hash($password,PASSWORD_DEFAULT);
      
   if($_SERVER["REQUEST_METHOD"] == "POST"){
       //  Check the hashing password
       if (password_verify($_POST['Value'],$hash)){
        echo "Your successfully login the page ";
    }
    
    // Error Display 
    else{
        echo "Incorrect Password";
    }
   }
     
     ?>

</body>
</html>