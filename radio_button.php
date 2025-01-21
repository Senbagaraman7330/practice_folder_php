<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button</title>
</head>
<body>
    <!-- HTML radio button form  -->
    <form action="radio_button.php" method="post">
        <input type="radio" name="name" value="Ram">
        Ram <br>
        <input type="radio" name="name" value="Vel">
        Vel <br>
        <input type="radio" name="name"  value="Keerthana">
        Keerthana <br>
        <button name="confirm">Confirm</button>
    </form>

   <!-- PHP codes -->
    <?PHP

    // check button is checked or not 
    if (isset($_POST['confirm'])){
                      
        $name = null;
        
        // check the variabe
         if (isset($_POST['name'])){
            $name = $_POST['name'];
         }

         // Display the selected value
         if ($name == "Ram"){
            echo " You have selected {$name}";
         }
         elseif ($name == "Vel"){
            echo " You have selected {$name}";
         }
         elseif ($name == "Keerthana"){
            echo " You have selected {$name}";
         }
         else {
              echo "Kindly select the value";
         }
        
    }
    ?>
</body>
</html>