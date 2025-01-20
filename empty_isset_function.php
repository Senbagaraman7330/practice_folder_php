<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empty and Isset</title>
</head>
<body>
    <!-- HTML codes -->
<form action="empty_isset_function.php" method="POST">
    <label for="Value">Give valuse </label><br>
    <input type="text" name="Value"><br>
    <button>Enter</button>
    </form>

    <!-- PHP codes -->
    <?php
//    variable 
    $val = $_POST['Value'];

    // checking the variable value 
    if (isset($val)){
        echo "The give value is {$val}";
    }
    elseif(empty($val)){
        echo "you haven't been given any values in this terrain";
    }
    else{
        echo "Error";
    }

    // delegate the value to the variable
    switch ($val){

        // First case 
            case "":
            $val = null;
            break;

        // Second case
            case 0:
                $val = null;
                break;
    }
    
    ?>
</body>
</html>