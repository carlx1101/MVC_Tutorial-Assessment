<?php 

include 'includes/class-autoloader.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connect PDO</title>
</head>
<body>

    <?php
    $testObj = new UsersView();
    $testObj->showUser("Daniel");

    $testObj2 = new UsersContr();
    $testObj2->createUser("Daniel","Daniel","Daniel");
    ?>
    
    
</body>
</html>