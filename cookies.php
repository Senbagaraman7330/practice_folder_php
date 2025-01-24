<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <pre>
        <!-- PHP codes  -->
        <?PHP 

        // set the cookie value
        setcookie("Name","Raman", time()  +(86400 * 2), "/"); // 86400 sec = 1 day
        
        // Check cookie value
        if(isset($_COOKIE['Name'])){
               echo "You name is {$_COOKIE['Name']}";
        }
        else {
            echo "i don' t know your name";
        }
        
        ?>
    </pre>
</body>
</html>