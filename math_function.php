<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- input tag -->
     <form action="math_function.php" method="post">
     <label for="valuex">valuex</label><br>
     <input type="text" name="valuex">
     <button>Click to change</button>
     </form>


<!-- PHP math function -->
    <pre>
        <?php
         $x = $_POST['valuex'];

           //  absolute
           $absss = abs($x);

           // round
           $roun = round($x);

           // floor
           $floo = floor($x);

           // ceil
           $ce = ceil($x);

           
           printf("The give vlaue is converted into absolute: {$absss}\n");
           printf("The give vlaue is converted into round: {$roun} \n");
           printf("The give vlaue is converted into floor: {$floo} \n");
           printf("The give vlaue is converted into ceil: {$ce} \n");
        ?>
    </pre>
</body>
</html>