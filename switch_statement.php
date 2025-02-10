<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch statement</title>
</head>
<body>
    <!-- form of this page -->
    <form action="switch_statement.php" method="post">
    <label for="Value">age</label><br>
    <input type="text" name="Value"><br>
    </form>

    <!-- php code -->
    <?php
    $val = $_POST['Value'];
    switch ($val){
        case 18:
            echo "you eligible to enter this site";
            break;
         case ($val < 18) :
            echo "you are not eligible to enter this site";
            break;
        default:
            echo "{$val} is not responsive answer";
        
    }
    ?>
</body>
</html>