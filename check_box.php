<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Box</title>
</head>
<body>
    <!-- HTML check box form code  -->
    <form action="check_box.php" method="post">
        <input type="checkbox" name="ram" value="Ram">
        Ram <br>
        <input type="checkbox" name="vel" value="Vel">
        Vel <br>
        <input type="checkbox" name="keerthana"  value="Keerthana">
        Keerthana <br>
        <button name="confirm">Confirm</button>
    </form>

<?PHP
    // check button is checked or not 
    if (isset($_POST['confirm'])){
                      
           
         // Display the selected value
         if (isset($_POST['ram'])){
            echo " You have selected {$_POST['ram']} " . "<br>";
         }
        
         if (isset($_POST['vel'])){
            echo " You have selected {$_POST['vel']}"  . "<br>";
         }

         if (isset($_POST['keerthana'])){
            echo " You have selected {$_POST['keerthana']}"  . "<br>";
         }

        //  Without select the value 
       if (empty($_POST['keerthana'])  & empty($_POST['ram']) & empty($_POST['vel']) ){
        echo "Kindly select the Box";
       }
        
    }
     ?>
</body>
</html>