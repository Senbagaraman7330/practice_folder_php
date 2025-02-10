<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
</head>
<body>
    <form action="while_loop.php" method="POST">
    <label for="Value">Give valuse </label><br>
    <input type="text" name="Value"><br>
    <button>Enter</button>
    </form>

    <?php
    // Initialize the loop condition
    $run = true;

    // Process only when form is submitted
    while ($run) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the submitted value
            $val = isset($_POST['Value']) ? trim($_POST['Value']) : '';

            // Check if a value is provided
            if (!empty($val)) {
                echo "You have given a value. The given value is: " . htmlspecialchars($val);
            } else {
                echo "You haven't given a value. Please try again.";
            }

            // Break the loop after processing the input
            $run = false;
        } else {
            // If no form submission, terminate the loop
            $run = false;
        }
    }
   
    ?>
</body>
</html>