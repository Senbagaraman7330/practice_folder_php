<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <!-- HTML code for form  -->

      <!-- we use PHP server PHP_SELF is give current path of the file . Use htmlspecialchar for security purpose -->
    <form action="<?PHP $_SERVER['PHP_SELF'] ?>" method="POST">
    <label for="Value">Give valuse </label><br>
    <input type="text" name="Value"><br>
    <button>Enter</button>
    </form>

    <!-- PHP Program Codes -->

    <!-- Alternate way to check the sumit button. In PHP -->
    <?PHP 
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' & !empty($_POST['Value']) ){
        echo "Given value is {$_POST['Value']}";
    }
    if (empty($_POST['Value'])){
        echo "you haven't enter the value kindly check it out";
    }
    
    
    ?>

</body>
</html>