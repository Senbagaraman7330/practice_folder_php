<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loop</title>
</head>
<body>
    <?php
    $arr = [20,30,80,60,13,24,56];
    $i = 0;
    foreach ($arr as $val){
        echo $val . " The index value is {$i}"."<br>";
        $i++;
    }

    ?>
    
</body>
</html>