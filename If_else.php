<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form of this page -->
    <form action="If_else.php" method="post">
    <label for="Value">age</label><br>
    <input type="text" name="Value"><br>
    </form>

    <!-- PHP code  -->
    <?php
    // Variable 
    $val = $_POST['Value'];

    // if statement...........
    if($val >= 18){
        printf("your eligible for enter this site");
    }
    // elseif statement................
    elseif($val < 18&$val >12){
        printf("your not eligible for enter this site fully  . But you will access some session of this site");
    }
    //else statement..............
    else{
        printf("you don't have required age for site to enter ");
    }
    ?>
</body>
</html>